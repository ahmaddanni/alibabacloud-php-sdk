<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'energyExpertExternal',
        'version' => '2022-09-23',
    ],
    'components' => [
        'schemas' => [
            'CarbonEmissionElecSummaryItem' => [
                'type' => 'object',
                'properties' => [
                    'carbonEmissionData' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'rawData' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'ratio' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'dataUnit' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ChatDocumentPageNum' => [
                'type' => 'object',
                'properties' => [
                    'pos' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'array',
                            'items' => [
                                '$ref' => '#/components/schemas/ChatRefDocPostion',
                            ],
                        ],
                    ],
                    'num' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ChatFolderItem' => [
                'type' => 'object',
                'properties' => [
                    'subFolders' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ChatItem',
                        ],
                    ],
                    'folderName' => [
                        'type' => 'string',
                    ],
                    'folderId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ChatItem' => [
                'type' => 'object',
                'properties' => [
                    'question' => [
                        'type' => 'string',
                    ],
                    'answer' => [
                        'type' => 'string',
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'refDocList' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ChatRefDocItem',
                        ],
                    ],
                    'folderName' => [
                        'type' => 'string',
                    ],
                    'folderId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ChatRefDocInfo' => [
                'type' => 'object',
                'properties' => [
                    'pages' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'pageListInfo' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ChatRefDocPageInfo',
                        ],
                    ],
                ],
            ],
            'ChatRefDocItem' => [
                'type' => 'object',
                'properties' => [
                    'docName' => [
                        'type' => 'string',
                    ],
                    'sourceType' => [
                        'type' => 'string',
                    ],
                    'docUrl' => [
                        'type' => 'string',
                    ],
                    'docInfo' => [
                        '$ref' => '#/components/schemas/ChatRefDocInfo',
                    ],
                    'originDocName' => [
                        'type' => 'string',
                    ],
                    'pageNum' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ChatDocumentPageNum',
                        ],
                    ],
                    'originDocUrl' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ChatRefDocPageInfo' => [
                'type' => 'object',
                'properties' => [
                    'imageWidth' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'imageUrl' => [
                        'type' => 'string',
                    ],
                    'pageIdCurDoc' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'angle' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'excelParseResult' => [
                        'type' => 'string',
                    ],
                    'wordParseResult' => [
                        'type' => 'string',
                    ],
                    'pdfParseResult' => [
                        'type' => 'string',
                    ],
                    'imageHeight' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ChatRefDocPageNum' => [
                'type' => 'object',
                'properties' => [
                    'pos' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'array',
                            'items' => [
                                '$ref' => '#/components/schemas/ChatRefDocPostion',
                            ],
                        ],
                    ],
                    'num' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ChatRefDocPostion' => [
                'type' => 'object',
                'properties' => [
                    'x' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'y' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ConstituteItem' => [
                'type' => 'object',
                'properties' => [
                    'enterpriseName' => [
                        'type' => 'string',
                    ],
                    'rawData' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'carbonEmissionData' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'ratio' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'nameKey' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'emissionSourceKey' => [
                        'type' => 'string',
                    ],
                    'emissionSource' => [
                        'type' => 'string',
                    ],
                    'dataUnit' => [
                        'type' => 'string',
                    ],
                    'envGasEmissions' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'type' => [
                                    'type' => 'string',
                                ],
                                'name' => [
                                    'type' => 'string',
                                ],
                                'gasEmissionData' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'carbonEmissionData' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                            ],
                        ],
                    ],
                    'subConstituteItems' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ConstituteItem',
                        ],
                    ],
                ],
            ],
            'ContentItem' => [
                'type' => 'object',
                'properties' => [
                    'score' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'extInfo' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'alignment' => [
                                    'type' => 'string',
                                ],
                                'index' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'level' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'pageNum' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                ],
                                'pos' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'x' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                            ],
                                            'y' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                            ],
                                        ],
                                    ],
                                ],
                                'subType' => [
                                    'type' => 'string',
                                ],
                                'text' => [
                                    'type' => 'string',
                                ],
                                'type' => [
                                    'type' => 'string',
                                ],
                                'uniqueId' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'text' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DocumentDetailItem' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'folderId' => [
                        'type' => 'string',
                    ],
                    'folderName' => [
                        'type' => 'string',
                    ],
                    'jobId' => [
                        'type' => 'string',
                    ],
                    'jobStatus' => [
                        'type' => 'string',
                    ],
                    'docName' => [
                        'type' => 'string',
                    ],
                    'originDocName' => [
                        'type' => 'string',
                    ],
                    'docUrl' => [
                        'type' => 'string',
                    ],
                    'originDocUrl' => [
                        'type' => 'string',
                    ],
                    'docHash' => [
                        'type' => 'string',
                    ],
                    'createTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'updateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                ],
            ],
            'EpdInventoryConstituteItem' => [
                'type' => 'object',
                'properties' => [
                    'inventoryValuePerProduct' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'factorDataset' => [
                        'type' => 'string',
                    ],
                    'percent' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'inventoryValuePerProductUnit' => [
                        'type' => 'string',
                    ],
                    'num' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'quantity' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'resourceType' => [
                        'type' => 'string',
                    ],
                    'factorType' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'unit' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'inventoryId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'inventoryValue' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'factorUnit' => [
                        'type' => 'string',
                    ],
                    'inventoryUnit' => [
                        'type' => 'string',
                    ],
                    'state' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'factor' => [
                        'type' => 'string',
                    ],
                    'carbonEmission' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'factorId' => [
                        'type' => 'string',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/EpdInventoryConstituteItem',
                        ],
                    ],
                ],
            ],
            'FolderItem' => [
                'type' => 'object',
                'properties' => [
                    'folderId' => [
                        'type' => 'string',
                    ],
                    'folderNum' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'docCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'folderName' => [
                        'type' => 'string',
                    ],
                    'parentFolderId' => [
                        'type' => 'string',
                    ],
                    'folderDefault' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'currentLevel' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'syncStatus' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'syncParsingStatus' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ossDomain' => [
                        'type' => 'string',
                    ],
                    'ossUpdateBy' => [
                        'type' => 'string',
                    ],
                    'taskId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'resourcePath' => [
                        'type' => 'string',
                    ],
                    'storageType' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'ossPath' => [
                        'type' => 'string',
                    ],
                    'subFolderList' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/FolderItem',
                        ],
                    ],
                ],
            ],
            'GwpInventoryConstitute' => [
                'type' => 'object',
                'properties' => [
                    'percent' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'resourceType' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'unit' => [
                        'type' => 'string',
                    ],
                    'carbonEmission' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'byResourceType' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/GwpResourceConstitute',
                        ],
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/GwpInventoryConstitute',
                        ],
                    ],
                ],
            ],
            'GwpResourceConstitute' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'unit' => [
                        'type' => 'string',
                    ],
                    'resourceType' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'carbonEmission' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'percent' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OrgEmission' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'nameKey' => [
                        'type' => 'string',
                    ],
                    'carbonEmissionData' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'weightingCarbonEmissionData' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'weightingRatio' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'ratio' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'weightingProportion' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'moduleEmissionList' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                ],
                                'nameKey' => [
                                    'type' => 'string',
                                ],
                                'carbonEmissionData' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'ratio' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                            ],
                        ],
                    ],
                    'subEmissionItems' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/OrgEmission',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'GetDataItemList' => [
            'path' => '/api/v1/carbon/emission/data/item/list',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PushItemData' => [
            'path' => '/api/v1/carbon/emission/data/item/push',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'year' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'items' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'code' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'month' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'value' => [
                                        'type' => 'number',
                                        'format' => 'double',
                                        'required' => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RecalculateCarbonEmission' => [
            'path' => '/api/v1/carbon/emission/data/item/recalculate',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'year' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetFootprintList' => [
            'path' => '/api/v1/carbon/footprint/product/list',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'currentPage' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'pageSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GenerateResult' => [
            'path' => '/api/v1/carbon/footprint/result/generate',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'IsCompleted' => [
            'path' => '/api/v1/carbon/footprint/result/completed',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetPcrInfo' => [
            'path' => '/api/v1/carbon/footprint/result/pcr/detail',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetGwpInventorySummary' => [
            'path' => '/api/v1/carbon/footprint/result/gwp/inventory/summary',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetGwpBenchmarkSummary' => [
            'path' => '/api/v1/carbon/footprint/result/gwp/benchmark/summary',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetEpdSummary' => [
            'path' => '/api/v1/carbon/footprint/result/epd/summary',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetInventoryList' => [
            'path' => '/api/v1/carbon/footprint/result/inventory/list',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'methodType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'emissionType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'group' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetGwpBenchmarkList' => [
            'path' => '/api/v1/carbon/footprint/result/gwp/benchmark/list',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetGwpInventoryConstitute' => [
            'path' => '/api/v1/carbon/footprint/result/gwp/inventory/constitute',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetEpdInventoryConstitute' => [
            'path' => '/api/v1/carbon/footprint/result/epd/inventory/constitute',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetReductionProposal' => [
            'path' => '/api/v1/carbon/footprint/result/reduction/proposal',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'dataQualityEvaluationType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDataQualityAnalysis' => [
            'path' => '/api/v1/carbon/footprint/data/quality/analysis',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'dataQualityEvaluationType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'productType' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetEmissionSummary' => [
            'path' => '/api/v1/carbon/emission/analysis/summary',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'year' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'moduleType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'moduleCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetEmissionSourceConstitute' => [
            'path' => '/api/v1/carbon/emission/analysis/constitute',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'year' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'moduleType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'moduleCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetCarbonEmissionTrend' => [
            'path' => '/api/v1/carbon/emission/analysis/trend',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'yearList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                            ],
                            'moduleType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'moduleCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'trendType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetElecConstitute' => [
            'path' => '/api/v1/carbon/emission/analysis/elec/constitute',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'year' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetElecTrend' => [
            'path' => '/api/v1/carbon/emission/analysis/elec/trend',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'yearList' => [
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
        'GetAreaElecConstitute' => [
            'path' => '/api/v1/carbon/emission/analysis/elec/area',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'year' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetGasConstitute' => [
            'path' => '/api/v1/carbon/emission/analysis/gas/constitute',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'year' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'moduleType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'moduleCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetOrgConstitute' => [
            'path' => '/api/v1/carbon/emission/analysis/org',
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
                            'code' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'year' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'moduleCode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'moduleType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'BatchSaveInstructionStatus' => [
            'path' => '/api/v1/carbon/hvac/batchSaveInstructionStatus',
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
                            'factoryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'statusList' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SetRunningPlan' => [
            'path' => '/api/v1/carbon/hvac/setRunningPlan',
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
                            'factoryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'systemId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pKey' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'seasonMode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'dateType' => [
                                'type' => 'integer',
                                'format' => 'int32',
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
                            'statisticsTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'workingStartTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'workingEndTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'earliestStartupTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'latestShutdownTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'minTem' => [
                                'type' => 'number',
                                'format' => 'double',
                                'required' => false,
                            ],
                            'maxTem' => [
                                'type' => 'number',
                                'format' => 'double',
                                'required' => false,
                            ],
                            'maxCarbonDioxide' => [
                                'type' => 'number',
                                'format' => 'double',
                                'required' => false,
                            ],
                            'controlType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'EditUnfavorableAreaDevices' => [
            'path' => '/api/v1/carbon/hvac/editUnfavorableAreaDevices',
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
                            'factoryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'systemId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'hvacDeviceConfigVOList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'deviceName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'deviceId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'deviceType' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'isForbidden' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'isUnfavorableArea' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                        'buildingId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'floorId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'fenceId' => [
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
        'EditProhibitedDevices' => [
            'path' => '/api/v1/carbon/hvac/editProhibitedDevices',
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
                            'factoryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'systemId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'hvacDeviceConfigVOList' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'deviceName' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'deviceId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'deviceType' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'isForbidden' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                        ],
                                        'isUnfavorableArea' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'buildingId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'floorId' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'fenceId' => [
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
        'BatchUpdateSystemRunningPlan' => [
            'path' => '/api/v1/carbon/hvac/batchUpdateSystemRunningPlan',
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
                            'factoryId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'systemId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'seasonMode' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'dateType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'startTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'endTime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'workingStartTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'workingEndTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'earliestStartupTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'latestShutdownTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'minTem' => [
                                'type' => 'number',
                                'format' => 'double',
                                'required' => false,
                            ],
                            'maxTem' => [
                                'type' => 'number',
                                'format' => 'double',
                                'required' => false,
                            ],
                            'maxCarbonDioxide' => [
                                'type' => 'number',
                                'format' => 'double',
                                'required' => false,
                            ],
                            'controlType' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PushDeviceData' => [
            'path' => '/api/v1/data/increment/push',
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
                            'deviceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'devices' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'deviceId' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'recordTime' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'data' => [
                                            'type' => 'object',
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
        'GetDeviceInfo' => [
            'path' => '/api/external/getDeviceInfo',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'factoryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'deviceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDeviceList' => [
            'path' => '/api/external/getDeviceList',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'factoryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetOrgAndFactory' => [
            'path' => '/api/external/getOrgAndFactory',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [],
        ],
        'SubmitDocParsingTask' => [
            'path' => '/api/v2/aidoc/document/submitDocParsingTask',
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
                    'name' => 'fileUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'folderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'needAnalyzeImg',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetDocParsingResult' => [
            'path' => '/api/v2/aidoc/document/getDocParsingResult',
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
                            'taskId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'returnFormat' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'md',
                                    'json',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SubmitDocExtractionTask' => [
            'path' => '/api/v2/aidoc/document/submitDocExtractionTask',
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
                    'name' => 'fileUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'templateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'folderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'extractType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'rag',
                            'longTextUnderstanding',
                        ],
                    ],
                ],
            ],
        ],
        'GetDocExtractionResult' => [
            'path' => '/api/v2/aidoc/document/getDocExtractionResult',
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
                            'taskId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SubmitVLExtractionTask' => [
            'path' => '/api/v2/aidoc/document/submitVLExtractionTask',
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
                    'name' => 'fileUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'folderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'templateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetVLExtractionResult' => [
            'path' => '/api/v2/aidoc/document/getVLExtractionResult',
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
                            'taskId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AnalyzeVlRealtime' => [
            'path' => '/api/v1/aidoc/document/analyzeVlRealtime',
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
                    'name' => 'fileUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'templateId',
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
                    ],
                ],
            ],
        ],
        'GetChatFolderList' => [
            'path' => '/api/v2/aidoc/document/chat/folder/list',
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
        'CreateChatSession' => [
            'path' => '/api/v2/aidoc/document/chat/session/create',
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
                            'userId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'folderId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetChatSessionList' => [
            'path' => '/api/v2/aidoc/document/chat/session/list',
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
                            'userId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'currentPage' => [
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
        'GetChatList' => [
            'path' => '/api/v2/aidoc/document/chat/list',
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
                            'sessionId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'currentPage' => [
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
        'Chat' => [
            'path' => '/api/v2/aidoc/document/chat',
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
                            'sessionId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'question' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ChatStream' => [
            'path' => '/api/v2/aidoc/document/chat/stream',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
                'application/octet-stream',
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
                            'sessionId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'question' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AddFolder' => [
            'path' => '/api/v1/aidoc/folder/add',
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
                            'folderName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'parentFolderId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteFolder' => [
            'path' => '/api/v1/aidoc/folder/delete',
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
                    'name' => 'folderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DetailDocument' => [
            'path' => '/api/v1/aidoc/document/detail',
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
                    'name' => 'taskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteDocument' => [
            'path' => '/api/v1/aidoc/document/delete',
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
                    'name' => 'taskId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetDocumentAnalyzeResult' => [
            'path' => '/api/v1/aidoc/document/getDocumentAnalyzeResult',
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
                            'jobId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SubmitDocumentAnalyzeJob' => [
            'path' => '/api/v1/aidoc/document/submitDocumentAnalyzeJob',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'fileUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'fileName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'templateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'folderId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'analysisType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SendDocumentAskQuestion' => [
            'path' => '/api/v1/aidoc/document/sendDocumentAskQuestion',
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
                            'prompt' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'folderId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'sessionId' => [
                                'type' => 'string',
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
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'energyexpertexternal.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'energyexpertexternal.cn-hangzhou.aliyuncs.com',
        ],
    ],
];