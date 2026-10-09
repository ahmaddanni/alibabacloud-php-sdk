<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'OpenAPIExplorer',
        'version' => '2024-11-30',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'ApiMcpServerValidateHcl' => [
            'path' => '/terraform/validate',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateApiMcpServer' => [
            'path' => '/apimcpserver',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'language' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'EN_US',
                                    'ZH_CN',
                                ],
                            ],
                            'apis' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'product' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'apiVersion' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'selectors' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'additionalApiDescriptions' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'product' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'apiVersion' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'apiName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'apiOverrideJson' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'executeCliCommand' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'enableOutputSchema' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'constParameters' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'value' => [
                                                        'type' => 'any',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'prompts' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'description' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'content' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'arguments' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'name' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'description' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'required' => [
                                                        'type' => 'boolean',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'systemTools' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'oauthClientId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'instructions' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'enableAssumeRole' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'assumeRoleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'assumeRoleExtraPolicy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'publicAccess' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'on',
                                    'off',
                                    'follow',
                                ],
                            ],
                            'enableCustomVpcWhitelist' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'terraformTools' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'code' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'description' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'async' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'destroyPolicy' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'NEVER',
                                                'ALWAYS',
                                                'ON_FAILURE',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'vpcWhitelists' => [
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
        'DeleteApiMcpServer' => [
            'path' => '/apimcpserver',
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
            'parameters' => [
                [
                    'name' => 'clientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GenerateCLICommand' => [
            'path' => '/api/cli/makeCode',
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
            'parameters' => [
                [
                    'name' => 'product',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'apiVersion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'api',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'apiParams',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'deprecated' => true,
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                ],
                [
                    'name' => 'jsonApiParams',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetApiDefinition' => [
            'path' => '/api/definition',
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
            'parameters' => [
                [
                    'name' => 'product',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'apiVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'api',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetApiMcpServer' => [
            'path' => '/apimcpserver',
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
            'parameters' => [
                [
                    'name' => 'id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetApiMcpServerUserConfig' => [
            'path' => '/userconfig/get',
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
            'parameters' => [],
        ],
        'GetErrorCodeSolutions' => [
            'path' => '/getErrorCodeSolutions',
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
                    'name' => 'errorCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'errorMessage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'product',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'acceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetOwnRequestLog' => [
            'path' => '/getOwnRequestLog',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'logRequestId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetProductEndpoints' => [
            'path' => '/product/endpoints',
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
            'parameters' => [
                [
                    'name' => 'product',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetRequestLog' => [
            'path' => '/getRequestLog',
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
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'logRequestId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListApiDefinitions' => [
            'path' => '/api/definitions',
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
            'parameters' => [
                [
                    'name' => 'product',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'apiVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListApiMcpServerSystemTools' => [
            'path' => '/mcpSystemTools',
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
            'parameters' => [
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'skip',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListApiMcpServers' => [
            'path' => '/apimcpservers',
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
            'parameters' => [
                [
                    'name' => 'id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
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
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'skip',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                    ],
                ],
                [
                    'name' => 'description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'language',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'EN_US',
                            'ZH_CN',
                        ],
                    ],
                ],
                [
                    'name' => 'createTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'updateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'sourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateApiMcpServer' => [
            'path' => '/apimcpserver',
            'methods' => [
                'patch',
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
            'parameters' => [
                [
                    'name' => 'clientToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'id',
                    'in' => 'query',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'apis' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'product' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'apiVersion' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'selectors' => [
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
                            'additionalApiDescriptions' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'product' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'apiVersion' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'apiName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'apiOverrideJson' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'executeCliCommand' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'enableOutputSchema' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'constParameters' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'value' => [
                                                        'type' => 'any',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'prompts' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'description' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'content' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'arguments' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'name' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'description' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'required' => [
                                                        'type' => 'boolean',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'language' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'EN_US',
                                    'ZH_CN',
                                ],
                            ],
                            'systemTools' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'oauthClientId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'instructions' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'enableAssumeRole' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'assumeRoleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'assumeRoleExtraPolicy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'publicAccess' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'on',
                                    'off',
                                    'follow',
                                ],
                            ],
                            'enableCustomVpcWhitelist' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'terraformTools' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'code' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'description' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'async' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'destroyPolicy' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'NEVER',
                                                'ALWAYS',
                                                'ON_FAILURE',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'vpcWhitelists' => [
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
        'UpdateApiMcpServerUserConfig' => [
            'path' => '/userconfig/update',
            'methods' => [
                'patch',
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
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'enablePublicAccess' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'vpcWhitelists' => [
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
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'regionName' => '华东1（杭州）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'openapi-mcp.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'openapi-mcp.cn-hangzhou.aliyuncs.com',
            'vpc' => '',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'regionName' => '新加坡',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'openapi-mcp.ap-southeast-1.aliyuncs.com',
            'endpoint' => 'openapi-mcp.ap-southeast-1.aliyuncs.com',
            'vpc' => '',
        ],
        [
            'regionId' => 'public',
            'regionName' => '公网',
            'areaId' => 'other',
            'areaName' => '其它',
            'public' => 'openapiexplorer.aliyuncs.com',
            'endpoint' => 'openapiexplorer.aliyuncs.com',
            'vpc' => '',
        ],
    ],
];