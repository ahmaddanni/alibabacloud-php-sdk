<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'dataphin-public',
        'version' => '2023-06-30',
    ],
    'components' => [
        'schemas' => [
            'PrivilegeTransferResultEntrie' => [
                'type' => 'object',
                'properties' => [
                    'Privilege' => [
                        'type' => 'string',
                    ],
                    'PrivilegeDisplayName' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'ErrMsg' => [
                        'type' => 'string',
                    ],
                    'IsLeaf' => [
                        'type' => 'boolean',
                    ],
                    'Children' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PrivilegeTransferResultEntrie',
                        ],
                    ],
                    'Test' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CheckProjectHasDependency' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetProject' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetProjectByName' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AddProjectMember' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AddCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'UserId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'RoleList' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
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
        'GetProjectWhiteLists' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListProjectMembers' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListProjects' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TagList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Env' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveProjectMember' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RemoveCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserIdList' => [
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
        'ReplaceProjectWhiteLists' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ReplaceCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'WhiteLists' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Description' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Ip' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Port' => [
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
        'UpdateProjectMember' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'UserId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'RoleList' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
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
        'UpdateTenantComputeEngine' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Version' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ClusterUrlList' => [
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
            ],
        ],
        'GetDataSourceDependencies' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateDataSource' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ProdDataSourceCreate' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Type' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'CheckActivity' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'ConfigItemList' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => true,
                                            'properties' => [
                                                'Key' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'Value' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'DevDataSourceCreate' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ProdDataSourceId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'DataSourceCreate' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Type' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'Name' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'Description' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'CheckActivity' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'ConfigItemList' => [
                                                'type' => 'array',
                                                'required' => true,
                                                'items' => [
                                                    'type' => 'object',
                                                    'required' => true,
                                                    'properties' => [
                                                        'Key' => [
                                                            'type' => 'string',
                                                            'required' => true,
                                                        ],
                                                        'Value' => [
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
                ],
            ],
        ],
        'DeleteDataSource' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeleteCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Mode' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'DEV',
                                    'DEV_PROD',
                                ],
                            ],
                            'ProdDataSourceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDataSourceBasicInfo' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDataSourceConfig' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'ConfigItemList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Value' => [
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
        'ListDataSourceWithConfig' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'TypeList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'ScopeList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'OwnerList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Tag' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CheckDataSourceConnectivity' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CheckCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [],
                            ],
                            'ConfigItemList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Value' => [
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
        'CheckDataSourceConnectivityById' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CheckComputeSourceConnectivity' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CheckCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ConfigList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Key' => [
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
        'CheckComputeSourceConnectivityById' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListComputeSources' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'BindProject' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateComputeSource' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ConfigList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Key' => [
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
        'GetComputeSource' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteComputeSource' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateComputeSource' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ConfigList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Key' => [
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
        'GetSparkLocalClientInfo' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EnvEnum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'TransferOwnershipForAllObject' => [
            'path' => '',
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PrivilegeTransferRecord',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'OldOwner' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'NewOwner' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'TransferComment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RetryTransferOwnership' => [
            'path' => '',
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PrivilegeTransferRecord',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'NewOwner' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'TransferComment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTransferInfo' => [
            'path' => '',
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProposalId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AddTenantMembers' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AddCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'UserList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'RoleList' => [
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
            ],
        ],
        'AddTenantMembersBySourceUser' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AddCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'SourceUserList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'SourceId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'DisplayName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'AccountName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'MobilePhone' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Mail' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'DingNumber' => [
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
        'CreateUserGroup' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
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
                            'Active' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'AdminUserIdList' => [
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
        'AddUserGroupMember' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AddCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'UserGroupId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserIdList' => [
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
        'DeleteUserGroup' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateUserGroup' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'AdminUserIdList' => [
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
        'UpdateUserGroupSwitch' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Active',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateTenantMember' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'MemberList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'UserId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'MobilePhone' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Mail' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'DingNumber' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'RoleList' => [
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
            ],
        ],
        'ListResourcePermissionOperationLog' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'TabType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SearchText' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListResourcePermissions' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'TabType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SearchText' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetProjectProduceUser' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetUsers' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserIdList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'ListAddableUsers' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'SearchText' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTenantMembers' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'SearchText' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserGroupIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'RoleList' => [
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
        'GetUserGroup' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAddableRoles' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListUserGroups' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Active' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'AdminIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'FilterMine' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetMyTenants' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FeatureCodeList',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
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
        'GetMyRoles' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListUserGroupMembers' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetUserBySourceId' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GrantResourcePermission' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'GrantCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ResourceType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [],
                            ],
                            'OperateList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Reason' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ResourceList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ResourceId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'EffectiveEnd' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserIdList' => [
                                'type' => 'array',
                                'required' => true,
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
        'RevokeResourcePermission' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RevokeCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ResourceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ResourceList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ResourceId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'OperateList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Reason' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CheckResourcePermission' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CheckCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'UserId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ResourceList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ResourceId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'Operate' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveTenantMember' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RemoveCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'SourceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveUserGroupMember' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RemoveCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'UserGroupId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'UserIdList' => [
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
            ],
        ],
        'DeleteRowPermission' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeleteRowPermissionCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'RowPermissionId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAccountByRowPermissionId' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'GetAccountByRowPermissionIdQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'RowPermissionId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'RuleIds' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListRowPermission' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageRowPermissionQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageNum' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListRowPermissionByUserId' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListRowPermissionByUserIdQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Operator' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PageNum' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateRowPermission' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateRowPermissionCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'RowPermissionId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'RowPermissionName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'RowPermissionDesc' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MappingColumns' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'ColumnName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ColumnType' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'STRING',
                                                'NUMBER',
                                            ],
                                        ],
                                        'ColumnDesc' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'Rules' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'RuleName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ScopeType' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'ALL_COLUMN',
                                                'SELECT_COLUMN',
                                            ],
                                        ],
                                        'IsDelete' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                            'enum' => [
                                                '0',
                                                '1',
                                            ],
                                        ],
                                        'Status' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'enum' => [
                                                '0',
                                                '1',
                                            ],
                                        ],
                                        'Expressions' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'MappingColumnName' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => true,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => true,
                                                        ],
                                                    ],
                                                    'Type' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'enum' => [
                                                            'EXPRESSION',
                                                            'RELATION',
                                                        ],
                                                    ],
                                                    'SubConditions' => [
                                                        'type' => 'array',
                                                        'required' => true,
                                                        'items' => [
                                                            'type' => 'any',
                                                            'required' => true,
                                                        ],
                                                    ],
                                                    'Operator' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'enum' => [
                                                            'EQUAL',
                                                            'NOT_EQUAL',
                                                            'IN',
                                                            'NOT_IN',
                                                            'LIKE',
                                                            'NOT_LIKE',
                                                            'GT',
                                                            'LT',
                                                            'GE',
                                                            'LE',
                                                            'OR',
                                                            'AND',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'UserMappingList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'AccountType' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'Accounts' => [
                                                        'type' => 'array',
                                                        'required' => true,
                                                        'items' => [
                                                            'type' => 'object',
                                                            'required' => true,
                                                            'properties' => [
                                                                'AccountId' => [
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
                            'Tables' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'MappingColumnName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ResourceId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ColumnName' => [
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
        'CreateRowPermission' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateRowPermissionCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'RowPermissionName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'RowPermissionDesc' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MappingColumns' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'ColumnName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ColumnType' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'STRING',
                                                'NUMBER',
                                            ],
                                        ],
                                        'ColumnDesc' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'Rules' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'RuleName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ScopeType' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'ALL_COLUMN',
                                                'SELECT_COLUMN',
                                            ],
                                        ],
                                        'IsDelete' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                            'enum' => [
                                                '0',
                                                '1',
                                            ],
                                        ],
                                        'Status' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'enum' => [
                                                '0',
                                                '1',
                                            ],
                                        ],
                                        'Expressions' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'MappingColumnName' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'Values' => [
                                                        'type' => 'array',
                                                        'required' => true,
                                                        'items' => [
                                                            'type' => 'string',
                                                            'required' => true,
                                                        ],
                                                    ],
                                                    'Type' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'enum' => [
                                                            'EXPRESSION',
                                                            'RELATION',
                                                        ],
                                                    ],
                                                    'SubConditions' => [
                                                        'type' => 'array',
                                                        'required' => true,
                                                        'items' => [
                                                            'type' => 'any',
                                                            'required' => true,
                                                        ],
                                                    ],
                                                    'Operator' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'enum' => [
                                                            'EQUAL',
                                                            'NOT_EQUAL',
                                                            'IN',
                                                            'NOT_IN',
                                                            'LIKE',
                                                            'NOT_LIKE',
                                                            'GT',
                                                            'LT',
                                                            'GE',
                                                            'LE',
                                                            'OR',
                                                            'AND',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'UserMappingList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'AccountType' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'Accounts' => [
                                                        'type' => 'array',
                                                        'required' => true,
                                                        'enum' => [
                                                            'PERSONAL',
                                                            'PRODUCE',
                                                            'USER_GROUP',
                                                        ],
                                                        'items' => [
                                                            'type' => 'object',
                                                            'required' => true,
                                                            'properties' => [
                                                                'AccountId' => [
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
                            'Tables' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'MappingColumnName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ResourceId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'ColumnName' => [
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
        'CreateDirectory' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Directory' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDirectory' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateFileName' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateFileDirectory' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Directory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDirectoryTree' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Category',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListFiles' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Recursive' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'Directory' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetBizEntityInfoByVersion' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetBizEntityInfo' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateBizUnit' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'BizUnitId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DisplayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Icon' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'BizUnitAccountList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'UserId' => [
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
        'ListBizUnits' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetBizUnitInfo' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteBizUnit' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateBizUnit' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DisplayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Icon' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'BizUnitAccountList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'UserId' => [
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
        'UpdateBizEntity' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DataDomainId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'BizUnitId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'BizObject' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'DisplayName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OwnerUserId' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'ParentId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'RefBizEntityIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'BizProcess' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'DisplayName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OwnerUserId' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'RefBizEntityIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                    'BizEventEntityIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                    'PreBizProcessIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
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
        'OnlineBizEntity' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OnlineCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'BizUnitId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'OfflineBizEntity' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OfflineCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'BizUnitId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListBizEntities' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'FilterCriteria' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'BizUnitIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                    'BizUnitNameList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                    'DataDomainIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                    'DataDomainNameList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                    'SubTypeList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                    'OwnerUserIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                    'HasTableRef' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'StatusList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
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
        'CreateBizEntity' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'BizObject' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'DisplayName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OwnerUserId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'ParentId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'RefBizEntityIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'BizProcess' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'DisplayName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'OwnerUserId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Type' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'RefBizEntityIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                    'BizEventEntityIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                    'PreBizProcessIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'Type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DataDomainId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'BizUnitId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDataDomain' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'BizUnitId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'DataDomainId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DisplayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Abbreviation' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ParentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDataDomains' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'BizUnitIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                            ],
                            'ParentIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                            ],
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDataDomainInfo' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteDataDomain' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BizUnitId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateDataDomain' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'BizUnitId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DisplayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Abbreviation' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ParentId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteBizEntity' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'BizUnitId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateAdHocFile' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Directory' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Content' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAdHocFile' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateAdHocFile' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'FileId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Content' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAdHocFile' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopAdHocTask' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAdHocTaskResult' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SubTaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ExecuteAdHocTask' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExecuteCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ParamList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'OperatorType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'DataSourceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'DataSourceCatalog' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DataSourceSchema' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAdHocTaskLog' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SubTaskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdatePipelineByAsync' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Context',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ScheduleConfig' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PipelineConfig' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Steps' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'PluginConfig' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'StepType' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'StepName' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'IsDistribute' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Hops' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Target' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'SendTo' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'Source' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NodeInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'NodeName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'NodeId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'PipelineId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'FileId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'Directory' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'PipelineType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Submit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PipelineJson' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Settings' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'OfflinePipelineByAsync' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Context',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'OfflineCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Delete' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NodeId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PipelineId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'FileId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetPipelineById' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Context',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'QueryId',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'NodeId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PipelineId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'FileId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'OfflinePipeline' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Context',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'OfflineCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Delete' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NodeId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PipelineId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'FileId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreatePipeline' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Context',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ScheduleConfig' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PipelineConfig' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Steps' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'PluginConfig' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'StepType' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'StepName' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'IsDistribute' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Hops' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Target' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'SendTo' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'Source' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NodeInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'NodeName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'NodeId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'PipelineId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'FileId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'Directory' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'PipelineType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Submit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PipelineJson' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Settings' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetPipelineAsyncResult' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Context',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'AsyncId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreatePipelineByAsync' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Context',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ScheduleConfig' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PipelineConfig' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Steps' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'PluginConfig' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'StepType' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'StepName' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'IsDistribute' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Hops' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Target' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'SendTo' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'Source' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NodeInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'NodeName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'NodeId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'PipelineId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'FileId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'Directory' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'PipelineType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Submit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PipelineJson' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Settings' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdatePipeline' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Context',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ScheduleConfig' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PipelineConfig' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Steps' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'PluginConfig' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'StepType' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'StepName' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'IsDistribute' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'Key' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Hops' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'Target' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'SendTo' => [
                                                    'type' => 'boolean',
                                                    'required' => false,
                                                ],
                                                'Source' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'NodeInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'NodeName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'NodeId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'PipelineId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'FileId' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'Directory' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'PipelineType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Submit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'PipelineJson' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Settings' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreatePipelineNode' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreatePipelineNodeCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'PipelineName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PipelineType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'OFFLINE_PIPELINE',
                                    'REAL_TIME_PIPELINE',
                                ],
                            ],
                            'NodeType' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'NORMAL',
                                    'MANUAL',
                                    'REAL_TIME',
                                ],
                            ],
                            'FileInfo' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'FileName' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Directory' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Description' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateBatchTaskUdfLineages' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'FileId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'LineageGroupList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'InputLineageList' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'Name' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'Env' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'FullTable' => [
                                                        'type' => 'boolean',
                                                        'required' => true,
                                                    ],
                                                    'ColumnList' => [
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
                                        'OutputLineageList' => [
                                            'type' => 'array',
                                            'required' => true,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => true,
                                                'properties' => [
                                                    'Name' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'Env' => [
                                                        'type' => 'string',
                                                        'required' => true,
                                                    ],
                                                    'FullTable' => [
                                                        'type' => 'boolean',
                                                        'required' => true,
                                                    ],
                                                    'ColumnList' => [
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
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateBatchTask' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FileId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'NodeOutputNameList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'NodeDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Engine' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SchedulePeriod' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CronExpression' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CustomScheduleConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'SchedulePeriod' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Interval' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                    ],
                                    'IntervalUnit' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'EndTime' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'Code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ParamList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'Priority' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'NodeStatus' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'TaskType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'UpStreamList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'NodeType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'SourceNodeId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'SourceNodeOutputName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'SourceTableName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'PeriodDiff' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                        'FieldList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'DependPeriod' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'PeriodType' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'PeriodOffset' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                        'DependStrategy' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'SourceNodeEnabled' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'DataSourceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DataSourceCatalog' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DataSourceSchema' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PythonModuleList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'SparkClientInfo' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'SparkClientVersion' => [
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
        'SubmitBatchTask' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SubmitCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'FileId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'NodeOutputNameList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'NodeDescription' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Engine' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SchedulePeriod' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CronExpression' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CustomScheduleConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'SchedulePeriod' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Interval' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                    ],
                                    'IntervalUnit' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'StartTime' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'EndTime' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                ],
                            ],
                            'Code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ParamList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'Priority' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'NodeStatus' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'UpStreamList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'NodeType' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'SourceNodeId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'SourceNodeOutputName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'SourceTableName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'PeriodDiff' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                        'FieldList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'SourceNodeEnabled' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'DependStrategy' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'DependPeriod' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'PeriodType' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'PeriodOffset' => [
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'PythonModuleList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'SparkClientInfo' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'SparkClientVersion' => [
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
        'ParseBatchTaskDependency' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ParseCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'IncludeAllInputTables' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'NeedQueryLineages' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'OperatorType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'DataSourceId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'DataSourceCatalog' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DataSourceSchema' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'OfflineBatchTask' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Comment',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetBatchTaskUdfLineages' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetBatchTaskVersions' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetBatchTaskInfoByVersion' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetBatchTaskInfo' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FileId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IncludeAllUpStreams',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteBatchTask' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeleteCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'FileId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateBatchTask' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Directory' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ScheduleType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'TaskType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'Engine' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DataSourceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DataSourceCatalog' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DataSourceSchema' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PythonModuleList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetStreamJobs' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetQueueEngineVersionByEnv' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StreamBatchMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'BOTH',
                            'STREAM',
                            'BATCH',
                        ],
                    ],
                ],
                [
                    'name' => 'QueueName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClusterId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetClusterQueueInfoByEnv' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StreamBatchMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'STREAM',
                            'BATCH',
                            'BOTH',
                        ],
                    ],
                ],
            ],
        ],
        'CreateStreamBatchJobMapping' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StreamBatchJobMappingCreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Env' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EngineVersion' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ClusterId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'QueueName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Directory' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FileName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FileType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'VvpClusterType' => [
                                'type' => 'string',
                                'required' => true,
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
        'GetResource' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetResourceByVersion' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateResource' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'StorageAddress' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'ComputeEngineType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetFileStorageCredential' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UseVpcEndpoint',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Purpose',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteResource' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Comment',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateResource' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Directory' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ResourceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'StorageAddress' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ComputeEngineType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetUdf' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetUdfByVersion' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateUdf' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpdateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'RefResourceIdList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                            ],
                            'ClassName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Category' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'CommandHelp' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteUdf' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Comment',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateUdf' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'ComputeEngineType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Directory' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RefResourceIdList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                            ],
                            'ClassName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Category' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'CommandHelp' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListSubmitRecords' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SearchFilter' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'ProjectIdList' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                    'SubmitterList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                    'ChangeTypeList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                    'SubmitStartTime' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'SubmitEndTime' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Page' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                    ],
                                    'PageSize' => [
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
        'GetLatestSubmitDetail' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SubmitDetailQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ObjectId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ObjectType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PublishObjectList' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PublishCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'SubmitIdList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                            ],
                            'Comment' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListPublishRecords' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SearchFilter' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'ProjectIdList' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => true,
                                        ],
                                    ],
                                    'SubmitterList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                    ],
                                    'ChangeTypeList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                    'PublishStatusList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                    'PublishStartTime' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'PublishEndTime' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Page' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                    ],
                                    'PageSize' => [
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
        'DeleteRegisterLineage' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeleteRegisterLineageCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Source' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'ReferenceType' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Guid' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'MetadataType' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'MetadataSubType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Catalog' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Schema' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Env' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ExtProperties' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Target' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'ReferenceType' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Guid' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'MetadataType' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'MetadataSubType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Catalog' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Schema' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Env' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ExtProperties' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'DetailedLineages' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'IsDirect' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                        'Source' => [
                                            'type' => 'object',
                                            'required' => true,
                                            'properties' => [
                                                'ReferenceType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Guid' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'ParentGuid' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'MetadataType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Catalog' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Schema' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Env' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Name' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'ExtProperties' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                        'Target' => [
                                            'type' => 'object',
                                            'required' => true,
                                            'properties' => [
                                                'ReferenceType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Guid' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'ParentGuid' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'MetadataType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Catalog' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Schema' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Env' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Name' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'ExtProperties' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'CascadeDeleteLineage' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'TenantId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AddRegisterLineage' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AddRegisterLineageCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Source' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'ReferenceType' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Guid' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'MetadataType' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'MetadataSubType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Catalog' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Schema' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Env' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ExtProperties' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'Target' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'ReferenceType' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'Guid' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'MetadataType' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'MetadataSubType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Catalog' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Schema' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Env' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'Name' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ExtProperties' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'DetailedLineages' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Source' => [
                                            'type' => 'object',
                                            'required' => true,
                                            'properties' => [
                                                'ReferenceType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Guid' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'ParentGuid' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'MetadataType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Catalog' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Schema' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Env' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Name' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'ExtProperties' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                        'Target' => [
                                            'type' => 'object',
                                            'required' => true,
                                            'properties' => [
                                                'ReferenceType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Guid' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'ParentGuid' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'MetadataType' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Catalog' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Schema' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Env' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'Name' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'ExtProperties' => [
                                                    'type' => 'object',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                        'IsDirect' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'CheckAssetExist' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'RelationProperties' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'TenantId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'UserId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTableLineageByTaskId' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TableLineageByTaskIdQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'TaskId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'TaskEnv' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NeedNotExistObject' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTableColumnLineageByTaskId' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TableColumnLineageByTaskIdQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'TaskId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'TaskEnv' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'NeedNotExistObject' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetInstanceUpDownStream' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FieldInstanceIdList' => [
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
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UpStreamDepth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DownStreamDepth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetInstanceDownStream' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceGet',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'InstanceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'NodeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'RunStatus',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DownStreamDepth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetSupplementDagrunInstance' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DagrunId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPhysicalInstance' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListInstances' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'NodeId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RunStatusList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'MinBizDate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MaxBizDate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'BizType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SubBizTypeList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'SchedulePeriodList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'OwnerList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'PriorityList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'SchedulePaused' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'MinRunDate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MaxRunDate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ScheduleType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'SearchText' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'BizUnitId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'FlowId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'OperateInstance' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OperateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'InstanceIdList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'FieldInstanceIdList' => [
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
                            'Operation' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'FixData' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FixDataCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'RootInstanceId' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Id' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'FieldInstanceIdList' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'DownStreamInstanceIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'FieldInstanceIdList' => [
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
                            'ContainRootInstance' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'DownstreamRange' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ForceRerun' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateNodeSupplement' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'NodeIdList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'FieldIdList' => [
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
                            'StartBizDate' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EndBizDate' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'DownStreamNodeIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'FieldIdList' => [
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
                            'ContainAllDownStream' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'FilterList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ValueList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'Exclude' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'Parallelism' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'MinDueTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'MaxDueTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'GlobalParamList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'NodeParamsList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'NodeId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ParamList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Key' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Value' => [
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
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PausePhysicalNode' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PauseCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'NodeIdList' => [
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
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetOperationSubmitStatus' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPhysicalInstanceLog' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetSupplementDagrun' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SupplementId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPhysicalNode' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPhysicalNodeContent' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetNodeUpDownStream' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FieldIdList' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UpStreamDepth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DownStreamDepth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListNodes' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'NodeBizType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'NodeSubBizTypeList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'SchedulePeriodList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'OwnerList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'PriorityList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'SchedulePaused' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'DryRun' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ScheduleType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'SearchText' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPhysicalNodeOperationLog' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListNodeDownStream' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'NodeIdList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'FieldIdList' => [
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
                            'DownStreamDepth' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'FilterList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ValueList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                        'Exclude' => [
                                            'type' => 'boolean',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetPhysicalNodeByOutputName' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OutputName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetDevObjectDependency' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ObjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ObjectType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ObjectFrom',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ResumePhysicalNode' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResumeCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'NodeIdList' => [
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
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ExecuteManualNode' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ExecuteCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'NodeId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'FlowName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'StartBizDate' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EndBizDate' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ParamList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAlertNotifications' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'UserIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'NotifyStartTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'NotifyEndTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ChannelTypeList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'CustomChannelIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'StatusList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'AlertReasonList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'SourceSystem' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'MonitoredItemIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAlertEvents' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'UserIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'AlertStartTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AlertEndTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'StatusList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'ProjectNameList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'BizNameList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'AlertObjectTypeList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'AlertReasonList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'SourceSystem' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'MonitoredItemIdList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAlertEvent' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RevokeDataServiceApi' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RevokeCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'AppId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'ApiId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Reason' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PublishDataServiceApi' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApiId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDataServicePublishedApis' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'GroupId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'ApiName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDataServiceMyAppPermissions' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDataServiceMyApiPermissions' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDataServiceAuthorizedApps' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDataServiceApiImpacts' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'StartTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EndTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ApiId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'OrderColumn' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrderType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'AppName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDataServiceApiCalls' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'AppKey' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'ApiName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ApiId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'StartTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EndTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ClientIp' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Successful' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDataServiceApiCallStatistics' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'OrderColumn' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'OrderType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'StartTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'EndTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'PageNo' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GrantDataServiceApi' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'GrantCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ExpireDate' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Reason' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ApiId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'AppId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'ProdFieldList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'DevFieldList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'ApplyDev' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'ApplyProd' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDataServiceProjectAddableUsers' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataServiceMyProjects' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataServiceAuthorizedProjects' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataServiceAuthorizedAppsByGroupId' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataServiceAppsByGroupId' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataServiceAppGroups' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataServiceAppAuthorizedUsers' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataServiceApiGroups' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataServiceApiErrorImpact' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataServiceApiDocument' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VersionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetDataServiceApiCallTrend' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDataServiceApiCallSummary' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ApplyDataServiceApp' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplyCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ExpireDate' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Reason' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AppId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ApplyDataServiceApi' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApplyCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ExpireDate' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Reason' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ApiId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'AppId' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'ProdFieldList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Id' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                            ],
                            'DevFieldList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Id' => [
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
        'AddDataServiceProjectMember' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ProjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AddCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ProjectMemberList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Role' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                        'UserId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'DisplayName' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'AccountName' => [
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
        'CreateDataServiceApi' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CreateCommand',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'ApiName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Version' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'ApiType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'Mode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'ProjectId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'ApiGroupId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'ApiGroupName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'RequestType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'BizProtocol' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                            ],
                            'Timeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'CacheTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'UpdateRate' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'CustomUpdateRate' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'CallMode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'ExecutionTimeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'ScriptDetails' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'Script' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'IsPaginated' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'SqlMode' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                    ],
                                    'SortPriority' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'DatasourceType' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                    ],
                                    'DatasourceID' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'ScriptRequestParameters' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => true,
                                            'properties' => [
                                                'ParameterName' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'ParameterDescription' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'ParameterValueType' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'ParameterDataType' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'ExampleValue' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'IsRequiredParameter' => [
                                                    'type' => 'boolean',
                                                    'required' => true,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ScriptResponseParameters' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => true,
                                            'properties' => [
                                                'ParameterName' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'ParameterDescription' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'ParameterDataType' => [
                                                    'type' => 'string',
                                                    'required' => true,
                                                ],
                                                'ExampleValue' => [
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
            ],
        ],
        'ListApiByApp' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Keyword' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'PageNum' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'AppKey' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAuthorizedDataServiceApiDetails' => [
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
                    'name' => 'OpTenantId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ListQuery',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'AppKey' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'Page' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'minimum' => '1',
                            ],
                            'PageSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'minimum' => '1',
                                'maximum' => '100',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dataphin-public.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dataphin-public.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dataphin-public.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dataphin-public.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'dataphin-public.cn-chengdu.aliyuncs.com',
        ],
    ],
];