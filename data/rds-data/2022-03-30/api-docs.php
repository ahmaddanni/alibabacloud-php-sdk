<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'rds-data',
        'version' => '2022-03-30',
    ],
    'components' => [
        'schemas' => [
            'BatchExecuteStatementResult' => [
                'type' => 'object',
                'properties' => [
                    'GeneratedFieldsList' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'array',
                            'items' => [
                                '$ref' => '#/components/schemas/Field',
                            ],
                        ],
                    ],
                ],
            ],
            'BeginTransactionResult' => [
                'type' => 'object',
                'properties' => [
                    'TransactionId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ColumnMetadata' => [
                'type' => 'object',
                'properties' => [
                    'ArrayBaseColumnType' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'IsAutoIncrement' => [
                        'type' => 'boolean',
                    ],
                    'IsCaseSensitive' => [
                        'type' => 'boolean',
                    ],
                    'IsCurrency' => [
                        'type' => 'boolean',
                    ],
                    'IsSigned' => [
                        'type' => 'boolean',
                    ],
                    'Label' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Nullable' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Precision' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Scale' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'SchemaName' => [
                        'type' => 'string',
                    ],
                    'TableName' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'TypeName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CommitTransactionResult' => [
                'type' => 'object',
                'properties' => [
                    'TransactionStatus' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DeleteResult' => [
                'type' => 'object',
                'properties' => [
                    'NumberOfRecordsUpdated' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ExecuteStatementResult' => [
                'type' => 'object',
                'properties' => [
                    'ColumnMetadata' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ColumnMetadata',
                        ],
                    ],
                    'FormattedRecords' => [
                        'type' => 'string',
                    ],
                    'GeneratedFields' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Field',
                        ],
                    ],
                    'NumberOfRecordsUpdated' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Records' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'array',
                            'items' => [
                                '$ref' => '#/components/schemas/Field',
                            ],
                        ],
                    ],
                ],
            ],
            'Field' => [
                'type' => 'object',
                'properties' => [
                    'ArrayValue' => [
                        'type' => 'string',
                    ],
                    'BlobValue' => [
                        'type' => 'string',
                    ],
                    'BooleanValue' => [
                        'type' => 'boolean',
                    ],
                    'IsNull' => [
                        'type' => 'boolean',
                    ],
                    'LongValue' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StringValue' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InsertListResult' => [
                'type' => 'object',
                'properties' => [
                    'NumberOfRecordsUpdated' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AutoIncrementKeys' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                    ],
                ],
            ],
            'InsertResult' => [
                'type' => 'object',
                'properties' => [
                    'NumberOfRecordsUpdated' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AutoIncrementKey' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ResultSetOptions' => [
                'type' => 'object',
                'properties' => [
                    'DecimalReturnType' => [
                        'type' => 'string',
                    ],
                    'LongReturnType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RollbackTransactionResult' => [
                'type' => 'object',
                'properties' => [
                    'TransactionStatus' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SelectResult' => [
                'type' => 'object',
                'properties' => [
                    'Records' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'any',
                            ],
                        ],
                    ],
                ],
            ],
            'Selector' => [
                'type' => 'object',
                'properties' => [
                    'Lt' => [
                        'type' => 'string',
                    ],
                    'Le' => [
                        'type' => 'string',
                    ],
                    'Gt' => [
                        'type' => 'string',
                    ],
                    'Ge' => [
                        'type' => 'string',
                    ],
                    'Eq' => [
                        'type' => 'string',
                    ],
                    'Ne' => [
                        'type' => 'string',
                    ],
                    'Like' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SqlParameter' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'TypeHint' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        '$ref' => '#/components/schemas/Field',
                    ],
                ],
            ],
            'UpdateResult' => [
                'type' => 'object',
                'properties' => [
                    'NumberOfRecordsUpdated' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'BeginTransaction' => [
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Database',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CommitTransaction' => [
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TransactionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RollbackTransaction' => [
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TransactionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'InsertList' => [
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Database',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Table',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TransactionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Records',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'additionalProperties' => [
                                'type' => 'any',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ExecuteStatement' => [
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Database',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ContinueAfterTimeout',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FormatRecordsAs',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IncludeResultMetadata',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sql',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TransactionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Parameters',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/SqlParameter',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'ResultSetOptions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'DecimalReturnType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'LongReturnType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchExecuteStatement' => [
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
                    'name' => 'SecretArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceArn',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Database',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sql',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TransactionId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ParameterSets',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'array',
                            'required' => false,
                            'items' => [
                                '$ref' => '#/components/schemas/SqlParameter',
                                'required' => false,
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
            'endpoint' => 'rds-data.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'rds-data.cn-beijing.aliyuncs.com',
        ],
    ],
];