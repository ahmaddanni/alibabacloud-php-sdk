<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'GEMP',
        'version' => '2021-04-13',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateIntegrationConfig' => [
            'path' => '/integrationConfig/create',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'monitorSourceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DisableIntegrationConfig' => [
            'path' => '/integrationConfig/disable',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'integrationConfigId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EnableIntegrationConfig' => [
            'path' => '/integrationConfig/enable',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'integrationConfigId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetIntegrationConfig' => [
            'path' => '/integrationConfig/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'integrationConfigId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListIntegrationConfigs' => [
            'path' => '/integrationConfig/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'monitorSourceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListIntegrationConfigTimelines' => [
            'path' => '/integrationConfig/timeline',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'integrationConfigId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ConfirmIntegrationConfig' => [
            'path' => '/integrationConfig/confirm',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'integrationConfigId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteIntegrationConfig' => [
            'path' => '/integrationConfig/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'integrationConfigId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateIntegrationConfig' => [
            'path' => '/integrationConfig/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'integrationConfigId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'accessKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RefreshIntegrationConfigKey' => [
            'path' => '/integrationConfig/refreshKey',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'integrationConfigId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetUserGuideStatus' => [
            'path' => '/user/guide/status',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateUserGuideStatus' => [
            'path' => '/user/update/guide/status',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'guideAction' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateUser' => [
            'path' => '/user/create',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ramId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'username' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'roleIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteUser' => [
            'path' => '/user/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'userId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetUser' => [
            'path' => '/user/getUser',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'userId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListUsers' => [
            'path' => '/user/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'username' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ramId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'scene' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'synergyChannel' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateUser' => [
            'path' => '/user/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ramId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'username' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'roleIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListUserSerivceGroups' => [
            'path' => '/user/preview/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'userId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListServiceGroupMonitorSourceTemplates' => [
            'path' => '/services/group/listServiceGroupMonitorSourceTemplates',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'requestId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDataReportForServiceGroup' => [
            'path' => '/statistics/listDataReportForServiceGroup',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'serviceGroupName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CheckWebhook' => [
            'path' => '/services/check/webhook',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'webhook' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'webhookType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EnableServiceGroupWebhook' => [
            'path' => '/services/group/enableWebhook',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateServiceGroup' => [
            'path' => '/services/group/insert',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'userIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                            ],
                            'enableWebhook' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'webhookType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'serviceGroupDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'webhookLink' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'monitorSourceTemplates' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'templateId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'monitorSourceId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'monitorSourceName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'templateContent' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteServiceGroup' => [
            'path' => '/services/group/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteServiceGroupUser' => [
            'path' => '/services/group/deleteServiceGroupUser',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'oldUserId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'newUserId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'removeUser' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetServiceGroup' => [
            'path' => '/services/group/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListServiceGroups' => [
            'path' => '/services/group/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'queryName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'queryType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'isScheduled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'orderByScheduleStatus' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'userId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'serviceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateServiceGroup' => [
            'path' => '/services/group/modify',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'enableWebhook' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'webhookType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'webhookLink' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'serviceGroupName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'serviceGroupDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'userIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                            ],
                            'monitorSourceTemplates' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'templateId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'monitorSourceId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'monitorSourceName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'templateContent' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DisableServiceGroupWebhook' => [
            'path' => '/services/group/disableWebhook',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetServiceGroupSpecialPersonScheduling' => [
            'path' => '/services/group/scheduling/getUserScheduling',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'userId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetServiceGroupSchedulingPreview' => [
            'path' => '/services/group/scheduling/preview',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'schedulingWay' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'fastScheduling' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'singleDuration' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'dutyPlan' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'singleDurationUnit' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'schedulingUsers' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'schedulingUserId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'schedulingOrder' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'fineScheduling' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'period' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'periodUnit' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'shiftType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'schedulingFineShifts' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'schedulingStartTime' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingEndTime' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingOrder' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'shiftName' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetServiceGroupPersonScheduling' => [
            'path' => '/services/group/scheduling/user/getScheduling',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'userId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateServiceGroupScheduling' => [
            'path' => '/services/group/scheduling/save',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'schedulingWay' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'fastScheduling' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'singleDuration' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'dutyPlan' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'singleDurationUnit' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'schedulingUsers' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'schedulingUserId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'schedulingOrder' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'schedulingObjectType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingUserIdList' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'fineScheduling' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'period' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'periodUnit' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'shiftType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'schedulingFineShifts' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'schedulingStartTime' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingEndTime' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingOrder' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'skipOneDay' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'cycleOrder' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'shiftName' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingUserId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'schedulingObjectType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingUserIdList' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'schedulingTemplateFineShifts' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'schedulingStartTime' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingEndTime' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingOrder' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'schedulingUserId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'schedulingUserName' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'skipOneDay' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'schedulingObjectType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingUserIdList' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetServiceGroupScheduling' => [
            'path' => '/services/group/scheduling/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateServiceGroupSpecialDayScheduling' => [
            'path' => '/services/group/scheduling/updateSpecialDayScheduling',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'schedulingDate' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'schedulingSpecialDays' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'schedulingStartTime' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'schedulingEndTime' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'schedulingUserId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                        'schedulingOrder' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'schedulingObjectType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'schedulingUserIdList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateServiceGroupScheduling' => [
            'path' => '/services/group/scheduling/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'schedulingWay' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'fastScheduling' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'singleDuration' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'dutyPlan' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'singleDurationUnit' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'schedulingUsers' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'schedulingUserId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'schedulingOrder' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'schedulingObjectType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingUserIdList' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'id' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'fineScheduling' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'period' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'periodUnit' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'shiftType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'schedulingFineShifts' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'schedulingStartTime' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingEndTime' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingOrder' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'shiftName' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'skipOneDay' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'schedulingUserId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'cycleOrder' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'schedulingObjectType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingUserIdList' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'schedulingTemplateFineShifts' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'schedulingStartTime' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingEndTime' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingOrder' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                                'schedulingUserId' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                                'shiftName' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'skipOneDay' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'schedulingObjectType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'schedulingUserIdList' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                    'id' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateService' => [
            'path' => '/services/save',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'escalationPlanId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'serviceGroupIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteService' => [
            'path' => '/services/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetService' => [
            'path' => '/services/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListServices' => [
            'path' => '/services/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateService' => [
            'path' => '/services/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'escalationPlanId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'serviceGroupIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateRouteRule' => [
            'path' => '/routeRule/save',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ruleName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'enableStatus' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'relatedServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'routeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'incidentLevel' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'assignObjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'assignObjectType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'effection' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'timeWindow' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'matchCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'timeWindowUnit' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'routeChildRules' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'monitorSourceId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                        'conditions' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'key' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'value' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'operationSymbol' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'childConditionRelation' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'problemLevel' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'notifyChannels' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'childRuleRelation' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'problemLevelGroup' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'childRuleRelation' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'matchCount' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'timeWindow' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'timeWindowUnit' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'enableUpgrade' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'upgradeTimeWindow' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'upgradeTimeWindowUnit' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'coverageProblemLevels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'problemEffectionServices' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'convergenceFields' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'convergenceType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteRouteRule' => [
            'path' => '/routeRule/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'routeRuleId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DisableRouteRule' => [
            'path' => '/routeRule/disable',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'routeRuleId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EnableRouteRule' => [
            'path' => '/routeRule/enable',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'routeRuleId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetRouteRule' => [
            'path' => '/routeRule/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'routeRuleId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListRouteRules' => [
            'path' => '/routeRule/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ruleName' => [
                                'type' => 'string',
                                'format' => 'byte',
                                'required' => false,
                            ],
                            'serviceName' => [
                                'type' => 'string',
                                'format' => 'byte',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'routeType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'notFilterRouteRuleDeleted' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateRouteRule' => [
            'path' => '/routeRule/edit',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ruleName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'relatedServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'routeRuleId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'routeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'incidentLevel' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'assignObjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'assignObjectType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'effection' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'timeWindow' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'timeWindowUnit' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'matchCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'routeChildRules' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'childRouteRuleId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                        'conditions' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'key' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'value' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'operationSymbol' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'monitorSourceId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                        'isValidChildRule' => [
                                            'type' => 'boolean',
                                            'required' => true,
                                        ],
                                        'childConditionRelation' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'problemLevel' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'notifyChannels' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'childRuleRelation' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'problemLevelGroup' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'childRuleRelation' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'matchCount' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'timeWindow' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'timeWindowUnit' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'enableUpgrade' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'upgradeTimeWindow' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'upgradeTimeWindowUnit' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'coverageProblemLevels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'problemEffectionServices' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'convergenceFields' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'convergenceType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'VerifyRouteRule' => [
            'path' => '/routeRule/verify',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'routeRuleId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'testSourceEvents' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'monitorSourceId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'monitorSourceName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'eventTime' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'eventJson' => [
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
        ],
        'CreateSubscription' => [
            'path' => '/notify/subscription/create',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'subscriptionTitle' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'scope' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'notifyObjectType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'expiredType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'period' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'scopeObjectList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'scopeObjectId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'notifyObjectList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'notifyObjectId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'notifyStrategyList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'instanceType' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                        'strategies' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'conditions' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'object',
                                                            'required' => false,
                                                            'properties' => [
                                                                'effection' => [
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                ],
                                                                'problemNotifyType' => [
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                ],
                                                                'level' => [
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                ],
                                                                'action' => [
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'channels' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'periodChannel' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'workday' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'nonWorkday' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteSubscription' => [
            'path' => '/notify/subscription/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'subscriptionId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EnableSubscription' => [
            'path' => '/notify/subscription/enable',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'subscriptionId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateSubscription' => [
            'path' => '/notify/subscription/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'subscriptionId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'subscriptionTitle' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'scope' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'notifyObjectType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'expiredType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'period' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'scopeObjectList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'id' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'scopeObjectId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'notifyObjectList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'id' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'notifyObjectId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'notifyStrategyList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'instanceType' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                        'strategies' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'id' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'channels' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'conditions' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'object',
                                                            'required' => false,
                                                            'properties' => [
                                                                'level' => [
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                ],
                                                                'effection' => [
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                ],
                                                                'problemNotifyType' => [
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                ],
                                                                'action' => [
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                    'periodChannel' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'workday' => [
                                                                'type' => 'string',
                                                                'required' => false,
                                                            ],
                                                            'nonWorkday' => [
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
                            ],
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetSubscription' => [
            'path' => '/notify/subscription/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'subscriptionId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'notFilterScopeObjectDeleted' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DisableSubscription' => [
            'path' => '/notify/subscription/doDisable',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'subscriptionId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListSubscriptions' => [
            'path' => '/notify/subscription/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'subscriptionTitle' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'scope' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'scopeObject' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'notifyObjectType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'notifyObject' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'notFilterScopeObjectDeleted' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateIncidentSubtotal' => [
            'path' => '/incident/save/subtotal',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'incidentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListIncidentSubtotals' => [
            'path' => '/incident/list/subtotal',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'incidentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetIncidentListByIdList' => [
            'path' => '/incident/getIncidentListByIdList',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'incidentIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteIncident' => [
            'path' => '/incident/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'incidentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateIncident' => [
            'path' => '/incident/manualSave',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'incidentLevel' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'relatedServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'effect' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'incidentTitle' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'assignUserId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'incidentDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'channels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeliverIncident' => [
            'path' => '/incident/deliver',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'incidentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'assignUserId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetIncident' => [
            'path' => '/incident/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'incidentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetIncidentStatistics' => [
            'path' => '/incident/count',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FinishIncident' => [
            'path' => '/incident/finish',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'incidentIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'incidentFinishReason' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'incidentFinishReasonDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'incidentFinishSolution' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'incidentFinishSolutionDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateIncident' => [
            'path' => '/incident/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'incidentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'incidentLevel' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'effect' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'incidentTitle' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RespondIncident' => [
            'path' => '/incident/response',
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
                    'name' => 'Body',
                    'in' => 'body',
                    'style' => 'flat',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'incidentIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListIncidents' => [
            'path' => '/incident/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'incidentLevel' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'effect' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'relationServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'incidentStatus' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'me' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'createStartTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'createEndTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ruleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListIncidentDetailTimelines' => [
            'path' => '/incident/detail/timeline',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'incidentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'idSort' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListIncidentTimelines' => [
            'path' => '/incident/timeline',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetIncidentSubtotalCount' => [
            'path' => '/incident/subtotal/count',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'incidentIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetSimilarIncidentStatistics' => [
            'path' => '/incident/similarIncident/statistics',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'incidentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'incidentTitle' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'createTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'relatedServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'events' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTrendForSourceEvent' => [
            'path' => '/events/querySourceEventTrend',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'requestId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'instanceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'instanceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'timeUnit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListSourceEventsForMonitorSource' => [
            'path' => '/events/queryLastestEvents',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'monitorSourceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListSourceEvents' => [
            'path' => '/events/listOriginalEvent',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'instanceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'instanceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'startRowKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'stopRowKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAlerts' => [
            'path' => '/alerts/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'alertLevel' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'relatedServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'alertName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'alertSourceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ruleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'monitorSourceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetEvent' => [
            'path' => '/events/getLastTimeEvent',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'monitorSourceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GeneratePictureUploadSign' => [
            'path' => '/rich/oss/generatePostPolicy',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'instanceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'instanceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'files' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'fileName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'fileType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'fileSize' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListProblemDetailOperations' => [
            'path' => '/problem/detail/operations',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'createTimeSort' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateProblemImprovement' => [
            'path' => '/problem/improvement/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'problemReason' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'recentActivity' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'injectionMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'recoveryMode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'discoverSource' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'userReport' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'monitorSourceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'relationChanges' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dutyUserId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'replayDutyUserId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'dutyDepartmentName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dutyDepartmentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'remark' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'customProblemReason' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListSubscriptionServiceGroups' => [
            'path' => '/problem/serviceGroup/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateProblem' => [
            'path' => '/problem/upgrade',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'problemStatus' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'problemLevel' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'progressSummary' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'relatedServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'mainHandlerId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'preliminaryReason' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'discoverTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'recoveryTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'affectServiceIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'serviceGroupIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'incidentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'problemNotifyType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'progressSummaryRichTextId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateProblemMeasure' => [
            'path' => '/problem/improvement/measure/save',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'type' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'content' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'checkStandard' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'checkUserId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'planFinishTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'directorId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'stalkerId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateProblemSubtotal' => [
            'path' => '/problem/save/subtotal',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateProblemTimeline' => [
            'path' => '/problem/process/timeline/create',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'keyNode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'content' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'time' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateProblemTimelines' => [
            'path' => '/problem/process/timeline/batchCreate',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'timelineNodes' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AddProblemServiceGroup' => [
            'path' => '/problem/addServiceGroup',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'serviceGroupIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateProblem' => [
            'path' => '/problem/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'problemName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'level' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'relatedServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'progressSummary' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'preliminaryReason' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'mainHandlerId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'feedback' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceGroupIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'progressSummaryRichTextId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateProblemNotice' => [
            'path' => '/problem/notify',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemNotifyType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateProblemTimeline' => [
            'path' => '/problem/process/timeline/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemTimelineId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'keyNode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'content' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'time' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GenerateProblemPictureUploadSign' => [
            'path' => '/problem/process/oss/generatePostPolicy',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'fileName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fileType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fileSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListProblemOperations' => [
            'path' => '/problem/operations',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListProblems' => [
            'path' => '/problem/listProblems',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'queryType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'problemStatus' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'problemLevel' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'affectServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'serviceGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'mainHandlerId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'repeaterId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'discoveryStartTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'discoveryEndTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'restoreEndTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'restoreStartTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListProblemSubtotals' => [
            'path' => '/problem/list/subtotal',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CancelProblem' => [
            'path' => '/problem/cancel',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'cancelReasonDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'cancelReason' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'problemNotifyType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FinishProblem' => [
            'path' => '/problem/finish',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RecoverProblem' => [
            'path' => '/problem/recovery',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'recoveryTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'problemNotifyType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ReplayProblem' => [
            'path' => '/problem/replay',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'replayDutyUserId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RevokeProblemRecovery' => [
            'path' => '/problem/revoke',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'problemNotifyType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GenerateProblemPictureLink' => [
            'path' => '/problem/process/oss/getPresignedLink',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'keys' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'problemId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateProblemEffectionService' => [
            'path' => '/problem/process/effectionService/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'level' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'picUrl' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'effectionServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteProblemEffectionService' => [
            'path' => '/problem/process/effectionService/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'effectionServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateProblemMeasure' => [
            'path' => '/problem/improvement/measure/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'type' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'content' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'checkStandard' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'checkUserId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'directorId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'stalkerId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'planFinishTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'measureId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteProblem' => [
            'path' => '/problem/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetProblem' => [
            'path' => '/problem/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetProblemImprovement' => [
            'path' => '/problem/improvement/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteProblemMeasure' => [
            'path' => '/problem/improvement/measure/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'measureId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'problemId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteProblemTimeline' => [
            'path' => '/problem/process/timeline/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemTimelineId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListProblemTimeLines' => [
            'path' => '/problem/detail/timeLines',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetProblemEffectionService' => [
            'path' => '/problem/process/effectionService/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'effectionServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetProblemPreview' => [
            'path' => '/problem/preview',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'problemNotifyType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'problemLevel' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'effectServiceIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'relatedServiceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'incidentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'serviceGroupIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveProblemServiceGroup' => [
            'path' => '/problem/removeServiceGroup',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'serviceGroupIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateProblemEffectionService' => [
            'path' => '/problem/process/effectionService/create',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'serviceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'level' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pictureUrl' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetResourceStatistics' => [
            'path' => '/config/resource/count',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListConfigs' => [
            'path' => '/config/all',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDictionaries' => [
            'path' => '/dict/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListMonitorSources' => [
            'path' => '/monitorSource/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateTenantApplication' => [
            'path' => '/mobileApp/create',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'channel' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTenantApplication' => [
            'path' => '/mobileApp/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PushMonitor' => [
            'path' => '/api/monitor/push/{apiKey}',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
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
                    'name' => 'apiKey',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListEscalationPlanServices' => [
            'path' => '/escalationPlan/services',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateEscalationPlan' => [
            'path' => '/escalationPlan/create',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'escalationPlanName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'escalationPlanDescription' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'escalationPlanScopeObjects' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'scopeObjectId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                        'scope' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'escalationPlanRules' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'escalationPlanConditions' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'level' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'effection' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'escalationPlanStrategies' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'noticeTime' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'noticeObjects' => [
                                                        'type' => 'array',
                                                        'required' => true,
                                                        'items' => [
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'noticeChannels' => [
                                                        'type' => 'array',
                                                        'required' => true,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => true,
                                                        ],
                                                    ],
                                                    'enableWebhook' => [
                                                        'type' => 'boolean',
                                                        'required' => true,
                                                    ],
                                                    'serviceGroupIds' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'escalationPlanType' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'noticeRoleList' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'escalationPlanType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'isGlobal' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteEscalationPlan' => [
            'path' => '/escalationPlan/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'escalationPlanId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DisableEscalationPlan' => [
            'path' => '/escalationPlan/disable',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'escalationPlanId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EnableEscalationPlan' => [
            'path' => '/escalationPlan/enable',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'escalationPlanId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetEscalationPlan' => [
            'path' => '/escalationPlan/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'escalationPlanId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListEscalationPlans' => [
            'path' => '/escalationPlan/list',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'escalationPlanName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'isGlobal' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateEscalationPlan' => [
            'path' => '/escalationPlan/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'escalationPlanId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'escalationPlanName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'escalationPlanDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'escalationPlanScopeObjects' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'id' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                        'scopeObjectId' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                        'scope' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'escalationPlanRules' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'id' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                        ],
                                        'escalationPlanType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'escalationPlanConditions' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'level' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'effection' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'escalationPlanStrategies' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'noticeTime' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                    'noticeObjects' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'noticeChannels' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'serviceGroupIds' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                    'enableWebhook' => [
                                                        'type' => 'boolean',
                                                        'required' => false,
                                                    ],
                                                    'escalationPlanType' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'noticeRoleList' => [
                                                        'type' => 'array',
                                                        'required' => false,
                                                        'items' => [
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'required' => false,
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'isGlobal' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateRichText' => [
            'path' => '/rich/create',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'instanceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'instanceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'richText' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetRichText' => [
            'path' => '/rich/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'richTextId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'instanceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'instanceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateRichText' => [
            'path' => '/rich/update',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'richTextId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'instanceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'instanceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'richText' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListIncidentDetailEscalationPlans' => [
            'path' => '/incident/detail/escalation',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'incidentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetHomePageGuidance' => [
            'path' => '/guidance/detail',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListChartDataForServiceGroup' => [
            'path' => '/statistics/chartDataForServiceGroup/',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDataReportForUser' => [
            'path' => '/statistics/listDataReportForUser',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'pageNumber' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListChartDataForUser' => [
            'path' => '/statistics/chartDataForUser/',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'startTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GeneratePictureLink' => [
            'path' => '/rich/oss/getPictureLink',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'keys' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'problemId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveIntegrationConfig' => [
            'path' => '/integrationConfig/remove',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'integrationConfigId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListByMonitorSourceId' => [
            'path' => '/routeRule/listByMonitorSourceId',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'monitorSourceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListRouteRulesByService' => [
            'path' => '/routeRule/listByService',
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
            'parameters' => [],
        ],
        'GetTenantStatus' => [
            'path' => '/tenant/getTenantStatus',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'tenantRamId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BillingStatistics' => [
            'path' => '/charging/details',
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
            'parameters' => [],
        ],
        'DeleteServiceGroupScheduling' => [
            'path' => '/services/group/scheduling/delete',
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
            'parameters' => [],
        ],
        'ListEscalationPlansByNoticeObject' => [
            'path' => '/escalationPlan/listByNoticeObject',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'noticeObjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'noticeObjectType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UnbindUser' => [
            'path' => '/user/unbind',
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
            'parameters' => [],
        ],
        'ListRouteRulesByAssignWhoId' => [
            'path' => '/routeRule/listByAssignWhoId',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'assignWhoId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'assignWhoType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListServiceGroupsByUserId' => [
            'path' => '/services/group/listByUserId',
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
            'parameters' => [],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'gemp.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'gemp.cn-shanghai.aliyuncs.com',
        ],
    ],
];