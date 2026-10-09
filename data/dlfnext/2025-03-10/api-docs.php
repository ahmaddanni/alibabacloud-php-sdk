<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'DlfNext',
        'version' => '2025-03-10',
    ],
    'components' => [
        'schemas' => [
            'Catalog' => [
                'type' => 'object',
                'properties' => [
                    'owner' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'shareId' => [
                        'type' => 'string',
                    ],
                    'options' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'isShared' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'CatalogSummary' => [
                'type' => 'object',
                'properties' => [
                    'databaseCount' => [
                        '$ref' => '#/components/schemas/MoMValues',
                    ],
                    'tableCount' => [
                        '$ref' => '#/components/schemas/MoMValues',
                    ],
                    'partitionCount' => [
                        '$ref' => '#/components/schemas/MoMValues',
                    ],
                    'totalFileSizeInBytes' => [
                        '$ref' => '#/components/schemas/MoMValues',
                    ],
                    'totalFileCount' => [
                        '$ref' => '#/components/schemas/MoMValues',
                    ],
                    'apiVisitCountMonthly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'fileAccessCountMonthly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'throughputMonthly' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'generatedDate' => [
                        'type' => 'string',
                    ],
                    'objTypeStandardSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'objTypeIaSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'objTypeArchiveSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'objTypeColdArchiveSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalMetaSizeInBytes' => [
                        '$ref' => '#/components/schemas/MoMValues',
                    ],
                ],
            ],
            'CatalogSummaryTrend' => [
                'type' => 'object',
                'properties' => [
                    'apiVisitCount' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DateSummary',
                        ],
                    ],
                    'fileAccessCount' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DateSummary',
                        ],
                    ],
                    'throughput' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DateSummary',
                        ],
                    ],
                    'totalMetaCount' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DateSummary',
                        ],
                    ],
                    'totalFileCount' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DateSummary',
                        ],
                    ],
                    'totalFileSizeInBytes' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DateSummary',
                        ],
                    ],
                ],
            ],
            'DataField' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'type' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                ],
            ],
            'Database' => [
                'type' => 'object',
                'properties' => [
                    'owner' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'options' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DatabaseSummary' => [
                'type' => 'object',
                'properties' => [
                    'databaseName' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                    'tableCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'partitionCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalFileSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalFileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'generatedDate' => [
                        'type' => 'string',
                    ],
                    'objTypeStandardSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'objTypeIaSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'objTypeArchiveSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'objTypeColdArchiveSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalMetaSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DateSummary' => [
                'type' => 'object',
                'properties' => [
                    'date' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ErrorResponse' => [
                'type' => 'object',
                'properties' => [
                    'code' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'resourceName' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                    'resourceType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FailurePermission' => [
                'type' => 'object',
                'properties' => [
                    'errorMessage' => [
                        'type' => 'string',
                    ],
                    'errorCode' => [
                        'type' => 'string',
                    ],
                    'permission' => [
                        '$ref' => '#/components/schemas/Permission',
                    ],
                ],
            ],
            'FullDataType' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'fields' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataField',
                        ],
                    ],
                    'value' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                    'key' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                    'element' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                ],
            ],
            'FullInstant' => [
                'type' => 'object',
                'properties' => [
                    'snapshotId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'tagName' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FullSchemaChange' => [
                'type' => 'object',
                'properties' => [
                    'keepNullability' => [
                        'type' => 'boolean',
                    ],
                    'move' => [
                        '$ref' => '#/components/schemas/Move',
                    ],
                    'newName' => [
                        'type' => 'string',
                    ],
                    'newNullability' => [
                        'type' => 'boolean',
                    ],
                    'fieldNames' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'dataType' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                    'newComment' => [
                        'type' => 'string',
                    ],
                    'action' => [
                        'type' => 'string',
                        'enum' => [
                            'setOption',
                            'removeOption',
                            'updateComment',
                            'addColumn',
                            'renameColumn',
                            'dropColumn',
                            'updateColumnComment',
                            'updateColumnType',
                            'updateColumnPosition',
                            'updateColumnNullability',
                        ],
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'key' => [
                        'type' => 'string',
                    ],
                    'newDataType' => [
                        '$ref' => '#/components/schemas/FullDataType',
                    ],
                ],
            ],
            'Function' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'deterministic' => [
                        'type' => 'boolean',
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'inputParams' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataField',
                        ],
                    ],
                    'returnParams' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataField',
                        ],
                    ],
                    'definitions' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/FunctionDefinition',
                        ],
                    ],
                    'options' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FunctionChange' => [
                'type' => 'object',
                'properties' => [
                    'action' => [
                        'type' => 'string',
                        'enum' => [
                            'setOption',
                            'removeOption',
                            'updateComment',
                            'addDefinition',
                            'updateDefinition',
                            'dropDefinition',
                        ],
                    ],
                    'key' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'definition' => [
                        '$ref' => '#/components/schemas/FunctionDefinition',
                    ],
                ],
            ],
            'FunctionDefinition' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'sql',
                            'file',
                            'lambda',
                        ],
                    ],
                    'definition' => [
                        'type' => 'string',
                    ],
                    'language' => [
                        'type' => 'string',
                    ],
                    'className' => [
                        'type' => 'string',
                    ],
                    'functionName' => [
                        'type' => 'string',
                    ],
                    'fileResources' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/FunctionFileResource',
                        ],
                    ],
                ],
            ],
            'FunctionFileResource' => [
                'type' => 'object',
                'properties' => [
                    'resourceType' => [
                        'type' => 'string',
                    ],
                    'uri' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'IcebergNestedField' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'doc' => [
                        'type' => 'string',
                    ],
                    'optional' => [
                        'type' => 'boolean',
                    ],
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'IcebergPartitionField' => [
                'type' => 'object',
                'properties' => [
                    'sourceId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'transform' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'fieldId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'IcebergSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'sequenceNumber' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'timestampMillis' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'schemaId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'addedRows' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'operation' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'parentId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'idString' => [
                        'type' => 'string',
                    ],
                    'parentIdString' => [
                        'type' => 'string',
                    ],
                    'summary' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'IcebergTable' => [
                'type' => 'object',
                'properties' => [
                    'owner' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'icebergTableMetadata' => [
                        '$ref' => '#/components/schemas/IcebergTableMetadata',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'IcebergTableMetadata' => [
                'type' => 'object',
                'properties' => [
                    'currentSnapshot' => [
                        '$ref' => '#/components/schemas/IcebergSnapshot',
                    ],
                    'partitionFields' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/IcebergPartitionField',
                        ],
                    ],
                    'fields' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/IcebergNestedField',
                        ],
                    ],
                    'properties' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'identifierFieldIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                        ],
                    ],
                ],
            ],
            'Identifier' => [
                'type' => 'object',
                'properties' => [
                    'database' => [
                        'type' => 'string',
                    ],
                    'object' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MoMValues' => [
                'type' => 'object',
                'properties' => [
                    'lastDayValue' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastMonthValue' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'currentValue' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Move' => [
                'type' => 'object',
                'properties' => [
                    'referenceFieldName' => [
                        'type' => 'string',
                    ],
                    'fieldName' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'FIRST',
                            'AFTER',
                            'BEFORE',
                            'LAST',
                        ],
                    ],
                ],
            ],
            'Namespace' => [
                'type' => 'object',
                'properties' => [
                    'owner' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'options' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Partition' => [
                'type' => 'object',
                'properties' => [
                    'lastFileCreationTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'recordCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'fileSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'fileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'done' => [
                        'type' => 'boolean',
                    ],
                    'spec' => [
                        'type' => 'object',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'storageClass' => [
                        'type' => 'string',
                    ],
                    'storageAction' => [
                        'type' => 'string',
                    ],
                    'storageActionTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'PartitionSummaries' => [
                'type' => 'object',
                'properties' => [
                    'partitions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PartitionSummary',
                        ],
                    ],
                    'nextPageToken' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PartitionSummary' => [
                'type' => 'object',
                'properties' => [
                    'databaseName' => [
                        'type' => 'string',
                    ],
                    'tableName' => [
                        'type' => 'string',
                    ],
                    'partitionName' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalFileSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalFileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'storageClass' => [
                        'type' => 'string',
                    ],
                    'storageActionTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'storageActionParams' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Permission' => [
                'type' => 'object',
                'properties' => [
                    'resourceType' => [
                        'type' => 'string',
                    ],
                    'database' => [
                        'type' => 'string',
                    ],
                    'table' => [
                        'type' => 'string',
                    ],
                    'access' => [
                        'type' => 'string',
                    ],
                    'principal' => [
                        'type' => 'string',
                    ],
                    'columns' => [
                        'type' => 'object',
                        'properties' => [
                            'columnNames' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'excludedColumnNames' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'function' => [
                        'type' => 'string',
                    ],
                    'view' => [
                        'type' => 'string',
                    ],
                    'expireTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PrepayResource' => [
                'type' => 'object',
                'properties' => [
                    'catalogId' => [
                        'type' => 'string',
                    ],
                    'instanceId' => [
                        'type' => 'string',
                    ],
                    'catalogName' => [
                        'type' => 'string',
                    ],
                    'instanceStatus' => [
                        'type' => 'string',
                    ],
                    'cu' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'gmtCreate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'expireTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ReceivedShare' => [
                'type' => 'object',
                'properties' => [
                    'providerTenantId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'shareId' => [
                        'type' => 'string',
                    ],
                    'shareName' => [
                        'type' => 'string',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'catalogName' => [
                        'type' => 'string',
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'enableWrite' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Receiver' => [
                'type' => 'object',
                'properties' => [
                    'receiverName' => [
                        'type' => 'string',
                    ],
                    'receiverTenantId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Role' => [
                'type' => 'object',
                'properties' => [
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'isPredefined' => [
                        'type' => 'string',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                    ],
                    'roleName' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'rolePrincipal' => [
                        'type' => 'string',
                    ],
                    'users' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/User',
                        ],
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Schema' => [
                'type' => 'object',
                'properties' => [
                    'primaryKeys' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'options' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'partitionKeys' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'fields' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataField',
                        ],
                    ],
                ],
            ],
            'Share' => [
                'type' => 'object',
                'properties' => [
                    'providerTenantId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'shareId' => [
                        'type' => 'string',
                    ],
                    'shareName' => [
                        'type' => 'string',
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'enableWrite' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ShareOptions' => [
                'type' => 'object',
                'properties' => [
                    'receiverSizeLimit' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'shareSizeLimit' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'shareResourceSizeLimit' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'catalogSizeLimit' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ShareResource' => [
                'type' => 'object',
                'properties' => [
                    'shareType' => [
                        'type' => 'string',
                        'enum' => [
                            'CATALOG_ALL',
                            'DATABASE_ALL',
                            'TABLE',
                        ],
                    ],
                    'databaseName' => [
                        'type' => 'string',
                    ],
                    'tableName' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Snapshot' => [
                'type' => 'object',
                'properties' => [
                    'deltaManifestList' => [
                        'type' => 'string',
                    ],
                    'changelogManifestList' => [
                        'type' => 'string',
                    ],
                    'watermark' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'commitKind' => [
                        'type' => 'string',
                        'enum' => [
                            'APPEND',
                            'COMPACT',
                            'OVERWRITE',
                            'ANALYZE',
                        ],
                    ],
                    'deltaRecordCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'baseManifestList' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'totalRecordCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'commitUser' => [
                        'type' => 'string',
                    ],
                    'logOffsets' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                    ],
                    'schemaId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'indexManifest' => [
                        'type' => 'string',
                    ],
                    'changelogRecordCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'timeMillis' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'statistics' => [
                        'type' => 'string',
                    ],
                    'commitIdentifier' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'parentIdString' => [
                        'type' => 'string',
                    ],
                    'sequenceNumber' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'summary' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'idString' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Table' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'isExternal' => [
                        'type' => 'boolean',
                    ],
                    'schemaId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'schema' => [
                        '$ref' => '#/components/schemas/Schema',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'storageClass' => [
                        'type' => 'string',
                    ],
                    'storageAction' => [
                        'type' => 'string',
                    ],
                    'storageActionTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'icebergTableMetadata' => [
                        '$ref' => '#/components/schemas/IcebergTableMetadata',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TableCompaction' => [
                'type' => 'object',
                'properties' => [
                    'catalogId' => [
                        'type' => 'string',
                    ],
                    'tableId' => [
                        'type' => 'string',
                    ],
                    'lastCompactedFileTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'deprecated' => true,
                    ],
                    'cuUsage' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'maxLevel0FileCount' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                    'latencyFileEarliestTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'TableCompactionHistory' => [
                'type' => 'object',
                'properties' => [
                    'catalogId' => [
                        'type' => 'string',
                    ],
                    'tableId' => [
                        'type' => 'string',
                    ],
                    'snapshotId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'commitTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'beforeFilesLastCreationTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'beforeFilesCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'afterFilesCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'beforeFilesSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'afterFilesSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'TableSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'lastFileCreationTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'recordCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'fileSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'fileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'snapshot' => [
                        '$ref' => '#/components/schemas/Snapshot',
                    ],
                ],
            ],
            'TableSummary' => [
                'type' => 'object',
                'properties' => [
                    'databaseName' => [
                        'type' => 'string',
                    ],
                    'tableName' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'partitionCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalFileSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalFileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastAccessTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'generatedDate' => [
                        'type' => 'string',
                    ],
                    'path' => [
                        'type' => 'string',
                    ],
                    'storageClass' => [
                        'type' => 'string',
                    ],
                    'storageActionTimestamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'objTypeStandardSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'objTypeIaSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'objTypeArchiveSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'objTypeColdArchiveSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'totalMetaSizeInBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'storageActionParams' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'User' => [
                'type' => 'object',
                'properties' => [
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                    ],
                    'userName' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                        'enum' => [
                            'RAM_USER',
                            'RAM_ROLE',
                        ],
                    ],
                    'userId' => [
                        'type' => 'string',
                    ],
                    'userPrincipal' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'View' => [
                'type' => 'object',
                'properties' => [
                    'schema' => [
                        '$ref' => '#/components/schemas/ViewSchema',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'createdAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updatedBy' => [
                        'type' => 'string',
                    ],
                    'createdBy' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'id' => [
                        'type' => 'string',
                    ],
                    'updatedAt' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ViewChange' => [
                'type' => 'object',
                'properties' => [
                    'action' => [
                        'type' => 'string',
                        'enum' => [
                            'addDialect',
                            'updateDialect',
                            'dropDialect',
                            'setOption',
                            'removeOption',
                            'updateComment',
                        ],
                    ],
                    'dialect' => [
                        'type' => 'string',
                    ],
                    'query' => [
                        'type' => 'string',
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'key' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ViewSchema' => [
                'type' => 'object',
                'properties' => [
                    'fields' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataField',
                        ],
                    ],
                    'query' => [
                        'type' => 'string',
                    ],
                    'dialects' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'options' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ViewSchemaChange' => [
                'type' => 'object',
                'properties' => [
                    'action' => [
                        'type' => 'string',
                        'enum' => [
                            'addDialect',
                            'updateDialect',
                            'dropDialect',
                            'setOption',
                            'removeOption',
                            'updateComment',
                        ],
                    ],
                    'dialect' => [
                        'type' => 'string',
                    ],
                    'query' => [
                        'type' => 'string',
                    ],
                    'comment' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'key' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'Subscribe' => [
            'path' => '/dlf/v1/service/subscribe',
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
            'parameters' => [],
        ],
        'DescribeRegions' => [
            'path' => '/dlf/v1/service/regions',
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
        'GetRegionStatus' => [
            'path' => '/dlf/v1/service/status',
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
        'CreateCatalog' => [
            'path' => '/dlf/v1/catalogs',
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'options' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'PAIMON',
                                    'ICEBERG',
                                ],
                            ],
                            'isShared' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'shareId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetCatalog' => [
            'path' => '/dlf/v1/catalogs/{catalog}',
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
                    'name' => 'catalog',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetCatalogById' => [
            'path' => '/dlf/v1/catalogs/id/{id}',
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
                    'name' => 'id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AlterCatalog' => [
            'path' => '/dlf/v1/catalogs/{catalog}',
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
                    'name' => 'catalog',
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
                            'removals' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'updates' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DropCatalog' => [
            'path' => '/dlf/v1/catalogs/{catalog}',
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
                    'name' => 'catalog',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListCatalogs' => [
            'path' => '/dlf/v1/catalogs',
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
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'catalogNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCatalogToken' => [
            'path' => '/dlf/v1/catalogs/{catalog}/token',
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
                    'name' => 'catalog',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDatabase' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateDatabase' => [
            'path' => '/dlf/v1/{catalogId}/databases',
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
                    'name' => 'catalogId',
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
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'options' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AlterDatabase' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
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
                            'removals' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'updates' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DropDatabase' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListDatabases' => [
            'path' => '/dlf/v1/{catalogId}/databases',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'databaseNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListDatabaseDetails' => [
            'path' => '/dlf/v1/{catalogId}/database-details',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'databaseNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTableCompaction' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}/compaction',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetTable' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateTable' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
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
                            'identifier' => [
                                '$ref' => '#/components/schemas/Identifier',
                                'required' => false,
                            ],
                            'schema' => [
                                '$ref' => '#/components/schemas/Schema',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AlterTable' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
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
                            'changes' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/FullSchemaChange',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DropTable' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RollbackTable' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}/rollback',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
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
                            'instant' => [
                                '$ref' => '#/components/schemas/FullInstant',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTables' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tableNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTableDetails' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/table-details',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tableNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTableSnapshot' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}/snapshot',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSnapshots' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}/snapshots',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTableToken' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}/token',
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
                    'name' => 'isInternal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListPartitions' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}/partitions',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
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
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'partitionNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateShare' => [
            'path' => '/dlf/v1/share/shares',
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
                            'shareName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'comment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'enableWrite' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetShare' => [
            'path' => '/dlf/v1/share/shares/{share}',
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
                    'name' => 'share',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AlterShare' => [
            'path' => '/dlf/v1/share/shares/{share}',
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
                    'name' => 'share',
                    'in' => 'path',
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
                            'shareName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'comment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'enableWrite' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DropShare' => [
            'path' => '/dlf/v1/share/shares/{share}',
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
                    'name' => 'share',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListProvidedShares' => [
            'path' => '/dlf/v1/share/shares/list/provided',
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
                    'name' => 'pageToken',
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
            ],
        ],
        'ListReceivedShares' => [
            'path' => '/dlf/v1/share/shares/list/received',
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
                    'name' => 'pageToken',
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
            ],
        ],
        'CreateReceiver' => [
            'path' => '/dlf/v1/share/receivers',
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
                            'receiverName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'receiverTenantId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'comment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetReceiver' => [
            'path' => '/dlf/v1/share/receivers/{receiver}',
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
                    'name' => 'receiver',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AlterReceiver' => [
            'path' => '/dlf/v1/share/receivers/{receiver}',
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
                    'name' => 'receiver',
                    'in' => 'path',
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
                            'receiverName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'comment' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DropReceiver' => [
            'path' => '/dlf/v1/share/receivers/{receiver}',
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
                    'name' => 'receiver',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListReceivers' => [
            'path' => '/dlf/v1/share/receivers',
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
                    'name' => 'receiverName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
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
            ],
        ],
        'ListShareReceivers' => [
            'path' => '/dlf/v1/share/shares/{share}/receivers',
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
                    'name' => 'share',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
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
            ],
        ],
        'AlterShareReceivers' => [
            'path' => '/dlf/v1/share/shares/{share}/receivers',
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
                    'name' => 'share',
                    'in' => 'path',
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
                            'addedReceivers' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'removedReceivers' => [
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
        'AlterShareResources' => [
            'path' => '/dlf/v1/share/shares/{share}/resources',
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
                            'catalogId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'shareResourceList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/ShareResource',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'share',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListShareResources' => [
            'path' => '/dlf/v1/share/shares/{share}/resources',
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
                    'name' => 'share',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
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
            ],
        ],
        'BatchGrantPermissions' => [
            'path' => '/dlf/v1/auth/permissions/{catalogId}/batchgrant',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'struct',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'permissions' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Permission',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchRevokePermissions' => [
            'path' => '/dlf/v1/auth/permissions/{catalogId}/batchrevoke',
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
                    'name' => 'catalogId',
                    'in' => 'path',
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
                            'permissions' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/Permission',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListPermissions' => [
            'path' => '/dlf/v1/auth/permissions/{catalogId}/list',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'function',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'view',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'principal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
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
            ],
        ],
        'CreateRole' => [
            'path' => '/dlf/v1/auth/roles',
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
                            'roleName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetRole' => [
            'path' => '/dlf/v1/auth/roles',
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
                    'name' => 'rolePrincipal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateRole' => [
            'path' => '/dlf/v1/auth/roles',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'displayName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'rolePrincipal' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteRole' => [
            'path' => '/dlf/v1/auth/roles',
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
                    'name' => 'rolePrincipal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListRoles' => [
            'path' => '/dlf/v1/auth/roles/list',
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
                    'name' => 'roleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
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
            ],
        ],
        'GetUser' => [
            'path' => '/dlf/v1/auth/users',
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
                    'name' => 'userPrincipal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListUsers' => [
            'path' => '/dlf/v1/auth/users/list',
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
                    'name' => 'userName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
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
            ],
        ],
        'ListRoleUsers' => [
            'path' => '/dlf/v1/auth/roles/users/list',
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
                    'name' => 'rolePrincipal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
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
            ],
        ],
        'UpdateRoleUsers' => [
            'path' => '/dlf/v1/auth/roles/users',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'userPrincipals' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'rolePrincipal' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListUserRoles' => [
            'path' => '/dlf/v1/auth/users/roles/list',
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
                    'name' => 'userPrincipal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageToken',
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
            ],
        ],
        'GrantRoleToUsers' => [
            'path' => '/dlf/v1/auth/roles/grant',
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
                            'userPrincipals' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'rolePrincipal' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RevokeRoleFromUsers' => [
            'path' => '/dlf/v1/auth/roles/revoke',
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
                            'userPrincipals' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'rolePrincipal' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RefreshUserSync' => [
            'path' => '/dlf/v1/auth/usersync',
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
            'parameters' => [],
        ],
        'GetCatalogSummary' => [
            'path' => '/dlf/v1/{catalogId}/storage-summary',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'date',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCatalogSummaryTrend' => [
            'path' => '/dlf/v1/{catalogId}/storage-summary/trend',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'startDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'endDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDatabaseSummary' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/storage-summary',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'date',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTableSummary' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}/storage-summary',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'date',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListPartitionSummaries' => [
            'path' => '/dlf/v1/{catalogId}/databases/{database}/tables/{table}/partitions/storage-summary',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'database',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'partitionNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListIcebergTableDetails' => [
            'path' => '/iceberg/dlf/v1/{catalogId}/namespaces/{namespace}/table-details',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tableNamePattern',
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
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListIcebergSnapshots' => [
            'path' => '/iceberg/dlf/v1/{catalogId}/namespaces/{namespace}/tables/{table}/snapshots',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListIcebergNamespaceDetails' => [
            'path' => '/iceberg/dlf/v1/{catalogId}/namespace-details',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'pageToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'namespaceNamePattern',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetIcebergTable' => [
            'path' => '/iceberg/dlf/v1/{catalogId}/namespaces/{namespace}/tables/{table}',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'table',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetIcebergNamespace' => [
            'path' => '/iceberg/dlf/v1/{catalogId}/namespaces/{namespace}',
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
                    'name' => 'catalogId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'dlfnext.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'dlfnext.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'dlfnext.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'dlfnext.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'dlfnext.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dlfnext.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'dlfnext.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'dlfnext.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'dlfnext.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'dlfnext.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'dlfnext.us-west-1.aliyuncs.com',
        ],
    ],
];