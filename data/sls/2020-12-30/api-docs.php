<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'Sls',
        'version' => '2020-12-30',
    ],
    'components' => [
        'schemas' => [
            'Alert' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/AlertConfiguration',
                        'required' => true,
                    ],
                    'schedule' => [
                        '$ref' => '#/components/schemas/Schedule',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AlertConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'muteUntil' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'version' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'templateConfiguration' => [
                        '$ref' => '#/components/schemas/TemplateConfiguration',
                    ],
                    'dashboard' => [
                        'type' => 'string',
                    ],
                    'threshold' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'noDataFire' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'noDataSeverity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'sendResolved' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'queryList' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/AlertQuery',
                        ],
                    ],
                    'annotations' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AlertTag',
                        ],
                    ],
                    'labels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AlertTag',
                        ],
                    ],
                    'conditionConfiguration' => [
                        '$ref' => '#/components/schemas/ConditionConfiguration',
                    ],
                    'severityConfigurations' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/SeverityConfiguration',
                        ],
                    ],
                    'joinConfigurations' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/JoinConfiguration',
                        ],
                    ],
                    'groupConfiguration' => [
                        '$ref' => '#/components/schemas/GroupConfiguration',
                        'required' => true,
                    ],
                    'policyConfiguration' => [
                        '$ref' => '#/components/schemas/PolicyConfiguration',
                    ],
                    'autoAnnotation' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'sinkEventStore' => [
                        '$ref' => '#/components/schemas/SinkEventStoreConfiguration',
                    ],
                    'sinkCms' => [
                        '$ref' => '#/components/schemas/SinkCmsConfiguration',
                    ],
                    'sinkAlerthub' => [
                        '$ref' => '#/components/schemas/SinkAlerthubConfiguration',
                        'required' => false,
                    ],
                    'tags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'AlertQuery' => [
                'type' => 'object',
                'properties' => [
                    'chartTitle' => [
                        'type' => 'string',
                    ],
                    'query' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'timeSpanType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'start' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'end' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'storeType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'project' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'store' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'region' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                    ],
                    'dashboardId' => [
                        'type' => 'string',
                    ],
                    'powerSqlMode' => [
                        'type' => 'string',
                    ],
                    'ui' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AlertTag' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AsyncSqlResponseData' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'state' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'AsyncSqlMetaPB' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'result_rows' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'processed_rows' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'elapsed_milli' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'cpu_sec' => [
                                'type' => 'number',
                                'format' => 'double',
                                'required' => false,
                            ],
                            'cpu_cores' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'progress' => [
                                'type' => 'string',
                            ],
                            'keys' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'rows' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'array',
                            'items' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'error_code' => [
                        'type' => 'string',
                    ],
                    'error_message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'chart' => [
                'type' => 'object',
                'properties' => [
                    'title' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'search' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                    'display' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                    'action' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                ],
            ],
            'ConditionConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'condition' => [
                        'type' => 'string',
                    ],
                    'countCondition' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ConsumeProcessor' => [
                'type' => 'object',
                'properties' => [
                    'processorName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/ConsumeProcessorConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ConsumeProcessorConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'spl' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ConsumerGroup' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'timeout' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'order' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'dashboard' => [
                'type' => 'object',
                'properties' => [
                    'dashboardName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'attribute' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'charts' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/chart',
                        ],
                    ],
                ],
            ],
            'EncryptConf' => [
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'encrypt_type' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'user_cmk_info' => [
                        '$ref' => '#/components/schemas/EncryptUserCmkConf',
                    ],
                ],
            ],
            'EncryptUserCmkConf' => [
                'type' => 'object',
                'properties' => [
                    'cmk_key_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'arn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'region_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'ESIngestionConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'source' => [
                        '$ref' => '#/components/schemas/ESIngestionConfigurationSource',
                        'required' => true,
                    ],
                ],
            ],
            'ESIngestionConfigurationSource' => [
                'type' => 'object',
                'properties' => [
                    'BootstrapServers' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Index' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Username' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Password' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'TimeFieldName' => [
                        'type' => 'string',
                    ],
                    'TimeFormat' => [
                        'type' => 'string',
                    ],
                    'TimeZone' => [
                        'type' => 'string',
                    ],
                    'Query' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ConnectorMode' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'StartTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EndTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MaxDataDelaySec' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'MinFragRangeSec' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'VpcId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ETL' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/ETLConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ETLConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'script' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'lang' => [
                        'type' => 'string',
                    ],
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'accessKeyId' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                    'accessKeySecret' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                    'fromTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'toTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sinks' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/ETLConfigurationSink',
                        ],
                    ],
                    'parameters' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'ETLConfigurationSink' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'endpoint' => [
                        'type' => 'string',
                    ],
                    'project' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'datasets' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'required' => true,
                        ],
                        'minItems' => 1,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'accessKeyId' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                    'accessKeySecret' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
            ],
            'etlJob' => [
                'type' => 'object',
                'properties' => [
                    'etlJobName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sourceConfig' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'logstoreName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'triggerConfig' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'roleArn' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'triggerInterval' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'maxRetryTime' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'startingPosition' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'startingUnixtime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'functionConfig' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'functionProvider' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'endpoint' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'accountId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'regionName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'serviceName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'functionName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'roleArn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'functionParameter' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                    'enable' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'logConfig' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'endpoint' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'projectName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'logstoreName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
            'etlMeta' => [
                'type' => 'object',
                'properties' => [
                    'etlMetaName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'etlMetaKey' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'etlMetaTag' => [
                        'type' => 'string',
                    ],
                    'enable' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'etlMetaValue' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'externalStore' => [
                'type' => 'object',
                'properties' => [
                    'externalStoreName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'storeType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'parameter' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                ],
            ],
            'GroupConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'fields' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Histogram' => [
                'type' => 'object',
                'properties' => [
                    'from' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'to' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'progress' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'index' => [
                'type' => 'object',
                'properties' => [
                    'max_text_len' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'log_reduce_white_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'log_reduce_black_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'line' => [
                        'type' => 'object',
                        'properties' => [
                            'chn' => [
                                'type' => 'boolean',
                            ],
                            'caseSensitive' => [
                                'type' => 'boolean',
                            ],
                            'token' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'include_keys' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'exclude_keys' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'keys' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/IndexKey',
                        ],
                    ],
                    'log_reduce' => [
                        'type' => 'boolean',
                    ],
                    'scan_index' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'IndexJsonKey' => [
                'type' => 'object',
                'properties' => [
                    'chn' => [
                        'type' => 'boolean',
                    ],
                    'caseSensitive' => [
                        'type' => 'boolean',
                    ],
                    'token' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'alias' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'doc_value' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'IndexKey' => [
                'type' => 'object',
                'properties' => [
                    'chn' => [
                        'type' => 'boolean',
                    ],
                    'caseSensitive' => [
                        'type' => 'boolean',
                    ],
                    'token' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'alias' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'doc_value' => [
                        'type' => 'boolean',
                    ],
                    'index_all' => [
                        'type' => 'boolean',
                    ],
                    'max_depth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'json_keys' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/IndexJsonKey',
                        ],
                    ],
                ],
            ],
            'IngestProcessor' => [
                'type' => 'object',
                'properties' => [
                    'processorName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/IngestProcessorConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'IngestProcessorConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'spl' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'parseFail' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'JoinConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'condition' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LogContent' => [
                'type' => 'object',
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
            'logging' => [
                'type' => 'object',
                'properties' => [
                    'loggingProject' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'loggingDetails' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'type' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [
                                        'consumergroup_log',
                                        'logtail_alarm',
                                        'operation_log',
                                        'logtail_profile',
                                        'metering',
                                        'logtail_status',
                                        'scheduled_sql_alert',
                                        'etl_alert',
                                    ],
                                ],
                                'logstore' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'LogGroup' => [
                'type' => 'object',
                'properties' => [
                    'Topic' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Source' => [
                        'type' => 'string',
                    ],
                    'LogTags' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/LogTag',
                        ],
                    ],
                    'LogItems' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/LogItem',
                        ],
                    ],
                ],
            ],
            'LogGroupList' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'LogGroupList' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/LogGroup',
                        ],
                    ],
                ],
            ],
            'LogItem' => [
                'type' => 'object',
                'properties' => [
                    'Time' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'Contents' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/LogContent',
                        ],
                    ],
                ],
            ],
            'logstore' => [
                'type' => 'object',
                'properties' => [
                    'logstoreName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ttl' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'shardCount' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'enable_tracking' => [
                        'type' => 'boolean',
                    ],
                    'autoSplit' => [
                        'type' => 'boolean',
                    ],
                    'maxSplitShard' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'appendMeta' => [
                        'type' => 'boolean',
                    ],
                    'telemetryType' => [
                        'type' => 'string',
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'encrypt_conf' => [
                        '$ref' => '#/components/schemas/EncryptConf',
                    ],
                    'hot_ttl' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'infrequentAccessTTL' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'mode' => [
                        'type' => 'string',
                    ],
                    'productType' => [
                        'type' => 'string',
                    ],
                    'resourceQuota' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'storage' => [
                                'type' => 'object',
                                'properties' => [
                                    'preserved' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'used' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'processorId' => [
                        'type' => 'string',
                    ],
                    'shardingPolicy' => [
                        '$ref' => '#/components/schemas/ShardingPolicy',
                    ],
                ],
            ],
            'LogTag' => [
                'type' => 'object',
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
            'LogtailConfig' => [
                'type' => 'object',
                'properties' => [
                    'configName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'logSample' => [
                        'type' => 'string',
                    ],
                    'inputType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'inputDetail' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                    'outputType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'outputDetail' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'endpoint' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'logstoreName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'region' => [
                                'type' => 'string',
                            ],
                            'telemetryType' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'LogtailPipelineConfig' => [
                'type' => 'object',
                'properties' => [
                    'configName' => [
                        'type' => 'string',
                        'required' => true,
                        'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z_-]{0,126}[0-9a-zA-Z]$',
                    ],
                    'logSample' => [
                        'type' => 'string',
                    ],
                    'global' => [
                        'type' => 'object',
                    ],
                    'inputs' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                        ],
                        'minItems' => 1,
                    ],
                    'processors' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                        'minItems' => 1,
                    ],
                    'aggregators' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                        'minItems' => 1,
                    ],
                    'flushers' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                        ],
                        'minItems' => 1,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'task' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'machine' => [
                'type' => 'object',
                'properties' => [
                    'ip' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'machine-uniqueid' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'lastHeartbeatTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'userdefined-id' => [
                        'type' => 'string',
                    ],
                    'host-id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'machineGroup' => [
                'type' => 'object',
                'properties' => [
                    'groupName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'groupType' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'machineIdentifyType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'groupAttribute' => [
                        'type' => 'object',
                        'properties' => [
                            'groupTopic' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'externalName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                    'machineList' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'MaxComputeExport' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/MaxComputeExportConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MaxComputeExportConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sink' => [
                        '$ref' => '#/components/schemas/MaxComputeExportConfigurationSink',
                        'required' => true,
                    ],
                    'fromTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'toTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
            'MaxComputeExportConfigurationSink' => [
                'type' => 'object',
                'properties' => [
                    'odpsEndpoint' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'odpsTunnelEndpoint' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'odpsProject' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'odpsTable' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'odpsRolearn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'odpsAccessKeyId' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                    'odpsAccessSecret' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                    'partitionTimeFormat' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'timeZone' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'fields' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'partitionColumn' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'filterInvalid' => [
                        'type' => 'boolean',
                    ],
                    'timeFormatType' => [
                        'type' => 'string',
                    ],
                    'bufferInterval' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MLDataParam' => [
                'type' => 'object',
                'properties' => [
                    'annotationdataId' => [
                        'type' => 'string',
                    ],
                    'dataHash' => [
                        'type' => 'string',
                    ],
                    'datasetId' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'valueType' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'annotations' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'annotatedBy' => [
                                    'type' => 'string',
                                ],
                                'updateTime' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'results' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'predictions' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'object',
                            'properties' => [
                                'annotatedBy' => [
                                    'type' => 'string',
                                ],
                                'updateTime' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'results' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'object',
                                        'additionalProperties' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'MLDataSetParam' => [
                'type' => 'object',
                'properties' => [
                    'datasetId' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'dataType' => [
                        'type' => 'string',
                    ],
                    'labelId' => [
                        'type' => 'string',
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'createBy' => [
                        'type' => 'string',
                    ],
                    'settingType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MLLabelParam' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'labelId' => [
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
                    'type' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'settings' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'mode' => [
                                    'type' => 'string',
                                ],
                                'type' => [
                                    'type' => 'string',
                                ],
                                'config' => [
                                    'type' => 'string',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'MLServiceAnalysisParam' => [
                'type' => 'object',
                'properties' => [
                    'parameter' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'input' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'additionalProperties' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'OSSExport' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/OSSExportConfiguration',
                        'required' => false,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'status' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OSSExportConfiguration' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'sink' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'endpoint' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'bucket' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'prefix' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'suffix' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'roleArn' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pathFormat' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'pathFormatType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'timeZone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'contentType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'contentDetail' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'compressionType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'bufferInterval' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'bufferSize' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'delaySec' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'delaySeconds' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                    'fromTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'toTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
            'OSSIngestion' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'schedule' => [
                        '$ref' => '#/components/schemas/Schedule',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/OSSIngestionConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                    'processorId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OSSIngestionConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'source' => [
                        '$ref' => '#/components/schemas/OSSIngestionConfigurationSource',
                        'required' => true,
                    ],
                ],
            ],
            'OSSIngestionConfigurationSource' => [
                'type' => 'object',
                'properties' => [
                    'endpoint' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'bucket' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'compressionCodec' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'encoding' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'format' => [
                        'type' => 'object',
                        'required' => true,
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                    'interval' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'pattern' => [
                        'type' => 'string',
                    ],
                    'prefix' => [
                        'type' => 'string',
                    ],
                    'restoreObjectEnabled' => [
                        'type' => 'boolean',
                    ],
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'timeField' => [
                        'type' => 'string',
                    ],
                    'timeFormat' => [
                        'type' => 'string',
                    ],
                    'timePattern' => [
                        'type' => 'string',
                    ],
                    'timeZone' => [
                        'type' => 'string',
                    ],
                    'useMetaIndex' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'roleARN' => [
                        'type' => 'string',
                    ],
                    'tagPackId' => [
                        'type' => 'boolean',
                    ],
                    'processorId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PolicyConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'alertPolicyId' => [
                        'type' => 'string',
                    ],
                    'actionPolicyId' => [
                        'type' => 'string',
                    ],
                    'repeatInterval' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'project' => [
                'type' => 'object',
                'properties' => [
                    'createTime' => [
                        'type' => 'string',
                    ],
                    'lastModifyTime' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'projectName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'region' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                    ],
                    'dataRedundancyType' => [
                        'type' => 'string',
                    ],
                    'quota' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                    'recycleBinEnabled' => [
                        'type' => 'boolean',
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ProjectSummary' => [
                'type' => 'object',
                'properties' => [
                    'projectName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'updateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'region' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'resourceGroupId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'S3Ingestion' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'schedule' => [
                        '$ref' => '#/components/schemas/Schedule',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/S3IngestionConfigurationSource',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                    'processorId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'S3IngestionConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                    ],
                    'source' => [
                        '$ref' => '#/components/schemas/S3IngestionConfigurationSource',
                    ],
                ],
            ],
            'S3IngestionConfigurationSource' => [
                'type' => 'object',
                'properties' => [
                    'awsRegion' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'awsAccessKey' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'awsAccessKeySecret' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'bucket' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'compressionCodec' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'encoding' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'format' => [
                        'type' => 'object',
                        'required' => true,
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                    'interval' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'pattern' => [
                        'type' => 'string',
                    ],
                    'prefix' => [
                        'type' => 'string',
                    ],
                    'awsUseSQS' => [
                        'type' => 'boolean',
                    ],
                    'awsSQSQueueUrl' => [
                        'type' => 'string',
                    ],
                    'useAwsSQSOnly' => [
                        'type' => 'boolean',
                    ],
                    'tagPackId' => [
                        'type' => 'boolean',
                    ],
                    'startTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'endTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'timeField' => [
                        'type' => 'string',
                    ],
                    'timeFormat' => [
                        'type' => 'string',
                    ],
                    'timePattern' => [
                        'type' => 'string',
                    ],
                    'timeZone' => [
                        'type' => 'string',
                    ],
                    'processorId' => [
                        'type' => 'string',
                    ],
                    'endpoint' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SavedSearch' => [
                'type' => 'object',
                'properties' => [
                    'savedsearchName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'searchQuery' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'topic' => [
                        'type' => 'string',
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'Schedule' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'FixedRate',
                            'Cron',
                        ],
                    ],
                    'cronExpression' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'runImmediately' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'timeZone' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'delay' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'interval' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'ScheduledSQL' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'description' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'displayName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'schedule' => [
                        '$ref' => '#/components/schemas/Schedule',
                        'required' => true,
                    ],
                    'configuration' => [
                        '$ref' => '#/components/schemas/ScheduledSQLConfiguration',
                        'required' => true,
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'lastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'scheduleId' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ScheduledSQLConfiguration' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'script' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sqlType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'destEndpoint' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'destProject' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sourceLogstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'destLogstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'roleArn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'destRoleArn' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'fromTimeExpr' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'toTimeExpr' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'maxRunTimeInSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'resourcePool' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'maxRetries' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'fromTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'toTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'dataFormat' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'parameters' => [
                        'type' => 'object',
                        'required' => true,
                    ],
                ],
            ],
            'serviceStatus' => [
                'type' => 'object',
                'properties' => [
                    'status' => [
                        'type' => 'string',
                    ],
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SeverityConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'severity' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'evalCondition' => [
                        '$ref' => '#/components/schemas/ConditionConfiguration',
                    ],
                ],
            ],
            'shard' => [
                'type' => 'object',
                'properties' => [
                    'shardID' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'inclusiveBeginKey' => [
                        'type' => 'string',
                    ],
                    'exclusiveEndKey' => [
                        'type' => 'string',
                    ],
                    'serverIp' => [
                        'type' => 'string',
                    ],
                    'createTime' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ShardingPolicy' => [
                'type' => 'object',
                'properties' => [
                    'shardGroup' => [
                        'type' => 'object',
                        'properties' => [
                            'keys' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'groupCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                        ],
                    ],
                    'shardHash' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'keys' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'maxHashCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'enum' => [
                                    '1',
                                    '2',
                                    '4',
                                ],
                            ],
                        ],
                    ],
                    'queryActiveTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'SinkAlerthubConfiguration' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SinkCmsConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SinkEventStoreConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'endpoint' => [
                        'type' => 'string',
                    ],
                    'project' => [
                        'type' => 'string',
                    ],
                    'eventStore' => [
                        'type' => 'string',
                    ],
                    'roleArn' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StoreViewStore' => [
                'type' => 'object',
                'properties' => [
                    'project' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'storeName' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'query' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SubmitAsyncSqlParams' => [
                'type' => 'object',
                'properties' => [
                    'logstore' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'query' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'from' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'to' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'extensions' => [
                        'type' => 'object',
                        'properties' => [
                            'maxRunTime' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'powerSql' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'TemplateConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                    'lang' => [
                        'type' => 'string',
                    ],
                    'tokens' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                    'aonotations' => [
                        'type' => 'object',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ApplyConfigToMachineGroup' => [
            'path' => '/machinegroups/{machineGroup}/configs/{configName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CallAiTools' => [
            'path' => '/ml/tool/call',
            'methods' => [
                'post',
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
                            'toolName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'params' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'regionId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ChangeResourceGroup' => [
            'path' => '/resourcegroup',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                            'resourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ConsumerGroupHeartBeat' => [
            'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}?type=heartbeat',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumerGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumer',
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
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'ConsumerGroupUpdateCheckPoint' => [
            'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}?type=checkpoint',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumerGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumer',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'forceSuccess',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
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
                            'shard' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'checkpoint' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAlert' => [
            'path' => '/alerts',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/AlertConfiguration',
                                'required' => true,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAnnotationDataSet' => [
            'path' => '/ml/annotationdataset',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/MLDataSetParam',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'datasetId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateAnnotationLabel' => [
            'path' => '/ml/annotationlabel',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/MLLabelParam',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateConfig' => [
            'path' => '/configs',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/LogtailConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateConsumerGroup' => [
            'path' => '/logstores/{logstore}/consumergroups',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
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
                        'required' => true,
                        'properties' => [
                            'consumerGroup' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'timeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'order' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateDashboard' => [
            'path' => '/dashboards',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                        '$ref' => '#/components/schemas/dashboard',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateDomain' => [
            'path' => '/domains',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                        'required' => true,
                        'properties' => [
                            'domainName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateDownloadJob' => [
            'path' => '/downloadjobs',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                        'required' => true,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'logstore' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'fromTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'toTime' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => true,
                                    ],
                                    'query' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'powerSql' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'allowInComplete' => [
                                        'type' => 'boolean',
                                        'required' => true,
                                    ],
                                    'sink' => [
                                        'type' => 'object',
                                        'required' => true,
                                        'properties' => [
                                            'type' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'contentType' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'compressionType' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'roleArn' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'bucket' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'prefix' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateETL' => [
            'path' => '/etls',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/ETLConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateIndex' => [
            'path' => '/logstores/{logstore}/index',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
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
                        '$ref' => '#/components/schemas/index',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateLogStore' => [
            'path' => '/logstores',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                        'required' => true,
                        'properties' => [
                            'logstoreName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'shardCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'encrypt_conf' => [
                                '$ref' => '#/components/schemas/EncryptConf',
                                'required' => false,
                            ],
                            'autoSplit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'enable_tracking' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'maxSplitShard' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'appendMeta' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'telemetryType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'hot_ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'infrequentAccessTTL' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'processorId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'shardingPolicy' => [
                                '$ref' => '#/components/schemas/ShardingPolicy',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateLogging' => [
            'path' => '/logging',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                        'required' => true,
                        'properties' => [
                            'loggingProject' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'loggingDetails' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'type' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'consumergroup_log',
                                                'logtail_alarm',
                                                'operation_log',
                                                'logtail_profile',
                                                'metering',
                                                'logtail_status',
                                                'scheduled_sql_alert',
                                                'etl_alert',
                                            ],
                                        ],
                                        'logstore' => [
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
        'CreateLogtailPipelineConfig' => [
            'path' => '/pipelineconfigs',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                            'configName' => [
                                'type' => 'string',
                                'required' => true,
                                'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
                            ],
                            'logSample' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'global' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'inputs' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'processors' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'aggregators' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'flushers' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'task' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateMachineGroup' => [
            'path' => '/machinegroups',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                        'required' => true,
                        'properties' => [
                            'groupName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'machineIdentifyType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'groupType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'groupAttribute' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'groupTopic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'externalName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'machineList' => [
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
        'CreateMaxComputeExport' => [
            'path' => '/maxcomputeexports',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/MaxComputeExportConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateMetricStore' => [
            'path' => '/metricstores',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                                'required' => true,
                            ],
                            'ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'shardCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'autoSplit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'maxSplitShard' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'metricType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'hot_ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'infrequentAccessTTL' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'appendMeta' => [
                                'type' => 'boolean',
                            ],
                            'shardingPolicy' => [
                                '$ref' => '#/components/schemas/ShardingPolicy',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateOSSExport' => [
            'path' => '/ossexports',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSExportConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateOSSHDFSExport' => [
            'path' => '/osshdfsexports',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSExportConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateOSSIngestion' => [
            'path' => '/ossingestions',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSIngestionConfiguration',
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
        'CreateProject' => [
            'path' => '/',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'projectName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'resourceGroupId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'dataRedundancyType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'LRS',
                                    'ZRS',
                                ],
                            ],
                            'recycleBinEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateS3Ingestion' => [
            'path' => '/s3ingestions',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/S3IngestionConfiguration',
                                'required' => false,
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
        'CreateSavedSearch' => [
            'path' => '/savedsearches',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'savedsearchName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'searchQuery' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'logstore' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateScheduledSQL' => [
            'path' => '/scheduledsqls',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => true,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/ScheduledSQLConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateSqlInstance' => [
            'path' => '/sqlinstance',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                            'cu' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'useAsDefault' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateStoreView' => [
            'path' => '/storeviews',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                                'required' => true,
                            ],
                            'storeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'stores' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/StoreViewStore',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateTicket' => [
            'path' => '/tickets',
            'methods' => [
                'post',
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
                    'name' => 'expirationTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'accessTokenExpirationTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAlert' => [
            'path' => '/alerts/{alertName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAnnotationData' => [
            'path' => '/ml/annotationdataset/{datasetId}/annotationdata/{annotationdataId}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'annotationdataId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAnnotationDataSet' => [
            'path' => '/ml/annotationdataset/{datasetId}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteAnnotationLabel' => [
            'path' => '/ml/annotationlabel/{labelId}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'labelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteCollectionPolicy' => [
            'path' => '/collectionpolicy/{policyName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'policyName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 3,
                        'maxLength' => 63,
                    ],
                ],
                [
                    'name' => 'productCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dataCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteConfig' => [
            'path' => '/configs/{configName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteConsumeProcessor' => [
            'path' => '/consumeprocessors/{processorName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteConsumerGroup' => [
            'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumerGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteDashboard' => [
            'path' => '/dashboards/{dashboardName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dashboardName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteDomain' => [
            'path' => '/domains/{domainName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'domainName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteDownloadJob' => [
            'path' => '/downloadjobs/{downloadJobName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'downloadJobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'properties' => [],
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteETL' => [
            'path' => '/etls/{etlName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'etlName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteIndex' => [
            'path' => '/logstores/{logstore}/index',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteIngestProcessor' => [
            'path' => '/ingestprocessors/{processorName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteLogStore' => [
            'path' => '/logstores/{logstore}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteLogging' => [
            'path' => '/logging',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteLogtailPipelineConfig' => [
            'path' => '/pipelineconfigs/{configName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
                    ],
                ],
            ],
        ],
        'DeleteMachineGroup' => [
            'path' => '/machinegroups/{machineGroup}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteMaxComputeExport' => [
            'path' => '/maxcomputeexports/{mcExportName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'mcExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteMetricStore' => [
            'path' => '/metricstores/{name}',
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
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteOSSExport' => [
            'path' => '/ossexports/{ossExportName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteOSSHDFSExport' => [
            'path' => '/osshdfsexports/{ossExportName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteOSSIngestion' => [
            'path' => '/ossingestions/{ossIngestionName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossIngestionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteProject' => [
            'path' => '/',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'forceDelete',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteProjectPolicy' => [
            'path' => '/policy',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteS3Ingestion' => [
            'path' => '/s3ingestions/{s3IngestionName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 's3IngestionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteSavedSearch' => [
            'path' => '/savedsearches/{savedsearchName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'savedsearchName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteScheduledSQL' => [
            'path' => '/scheduledsqls/{scheduledSQLName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledSQLName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteStoreView' => [
            'path' => '/storeviews/{name}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeRegions' => [
            'path' => '/regions',
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
                    'name' => 'language',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DisableAlert' => [
            'path' => '/alerts/{alertName}?action=disable',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DisableScheduledSQL' => [
            'path' => '/scheduledsqls/{scheduledSQLName}?action=disable',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledSQLName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'EnableAlert' => [
            'path' => '/alerts/{alertName}?action=enable',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'EnableScheduledSQL' => [
            'path' => '/scheduledsqls/{scheduledSQLName}?action=enable',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledSQLName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAlert' => [
            'path' => '/alerts/{alertName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAnnotationData' => [
            'path' => '/ml/annotationdataset/{datasetId}/annotationdata/{annotationdataId}',
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
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'annotationdataId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAnnotationDataSet' => [
            'path' => '/ml/annotationdataset/{datasetId}',
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
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAnnotationLabel' => [
            'path' => '/ml/annotationlabel/{labelId}',
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
                    'name' => 'labelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetAppliedConfigs' => [
            'path' => '/machinegroups/{machineGroup}/configs',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAppliedMachineGroups' => [
            'path' => '/configs/{configName}/machinegroups',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetAsyncSql' => [
            'path' => '/asyncsql/{queryId}',
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
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'queryId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'line',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCheckPoint' => [
            'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumerGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shard',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetCollectionPolicy' => [
            'path' => '/collectionpolicy/{policyName}',
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
                    'name' => 'policyName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 3,
                        'maxLength' => 63,
                    ],
                ],
                [
                    'name' => 'productCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dataCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetConfig' => [
            'path' => '/configs/{configName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetConsumeProcessor' => [
            'path' => '/consumeprocessors/{processorName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetContextLogs' => [
            'path' => '/logstores/{logstore}?type=context_log',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pack_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'pack_meta',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'back_lines',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'forward_lines',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetCursor' => [
            'path' => '/logstores/{logstore}/shards/{shardId}?type=cursor',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetCursorTime' => [
            'path' => '/logstores/{logstore}/shards/{shardId}?type=cursor_time',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'cursor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDashboard' => [
            'path' => '/dashboards/{dashboardName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dashboardName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetDownloadJob' => [
            'path' => '/downloadjobs/{downloadJobName}',
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
                    'name' => 'downloadJobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'properties' => [],
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetETL' => [
            'path' => '/etls/{etlName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'etlName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetHistograms' => [
            'path' => '/logstores/{logstore}/index?type=histogram',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'topic',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetIndex' => [
            'path' => '/logstores/{logstore}/index',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetIngestProcessor' => [
            'path' => '/ingestprocessors/{processorName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetLogStore' => [
            'path' => '/logstores/{logstore}',
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
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetLogStoreMeteringMode' => [
            'path' => '/logstores/{logstore}/meteringmode',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetLogging' => [
            'path' => '/logging',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetLogs' => [
            'path' => '/logstores/{logstore}?type=log',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'from',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'to',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'topic',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'line',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'reverse',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'powerSql',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLogsV2' => [
            'path' => '/logstores/{logstore}/logs',
            'methods' => [
                'post',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Accept-Encoding',
                    'in' => 'header',
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
                            'from' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'to' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'line' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '100',
                            ],
                            'offset' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'reverse' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'powerSql' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'session' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'query' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'forward' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'highlight' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetLogtailPipelineConfig' => [
            'path' => '/pipelineconfigs/{configName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
                    ],
                ],
            ],
        ],
        'GetMLServiceResults' => [
            'path' => '/ml/service/{serviceName}/analysis',
            'methods' => [
                'post',
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
                    'name' => 'serviceName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'allowBuiltin',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/MLServiceAnalysisParam',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetMachineGroup' => [
            'path' => '/machinegroups/{machineGroup}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetMaxComputeExport' => [
            'path' => '/maxcomputeexports/{mcExportName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'mcExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetMetricStore' => [
            'path' => '/metricstores/{name}',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetMetricStoreMeteringMode' => [
            'path' => '/metricstores/{metricStore}/meteringmode',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'metricStore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetOSSExport' => [
            'path' => '/ossexports/{ossExportName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetOSSHDFSExport' => [
            'path' => '/osshdfsexports/{ossExportName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetOSSIngestion' => [
            'path' => '/ossingestions/{ossIngestionName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossIngestionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetProject' => [
            'path' => '/',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetProjectLogs' => [
            'path' => '/logs',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'powerSql',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetProjectPolicy' => [
            'path' => '/policy',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetS3Ingestion' => [
            'path' => '/s3ingestions/{s3IngestionName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 's3IngestionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetSavedSearch' => [
            'path' => '/savedsearches/{savedsearchName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'savedsearchName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetScheduledSQL' => [
            'path' => '/scheduledsqls/{scheduledSQLName}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledSQLName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetSlsService' => [
            'path' => '/slsservice',
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
        'GetSqlInstance' => [
            'path' => '/sqlinstance',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetStoreView' => [
            'path' => '/storeviews/{name}',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetStoreViewIndex' => [
            'path' => '/storeviews/{name}/index',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAiTools' => [
            'path' => '/ml/tool/list',
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
        'ListAlerts' => [
            'path' => '/alerts',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAnnotationData' => [
            'path' => '/ml/annotationdataset/{datasetId}/annotationdata',
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
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAnnotationDataSets' => [
            'path' => '/ml/annotationdataset',
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
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListAnnotationLabels' => [
            'path' => '/ml/annotationlabel',
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
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListCollectionPolicies' => [
            'path' => '/collectionpolicy',
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
                    'name' => 'productCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'dataCode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'policyName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '100',
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                    ],
                ],
                [
                    'name' => 'instanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'centralProject',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListConfig' => [
            'path' => '/configs',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstoreName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListConsumeProcessors' => [
            'path' => '/consumeprocessors',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'displayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListConsumerGroup' => [
            'path' => '/logstores/{logstore}/consumergroups',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListDashboard' => [
            'path' => '/dashboards',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
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
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'dashboardName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'displayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListDomains' => [
            'path' => '/domains',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'domainName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListDownloadJobs' => [
            'path' => '/downloadjobs',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListETLs' => [
            'path' => '/etls',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListIngestProcessors' => [
            'path' => '/ingestprocessors',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'displayName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListLogStores' => [
            'path' => '/logstores',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstoreName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'telemetryType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'mode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListLogtailPipelineConfig' => [
            'path' => '/pipelineconfigs',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '500',
                    ],
                ],
                [
                    'name' => 'logstoreName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'configType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListMachineGroup' => [
            'path' => '/machinegroups',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'groupName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListMachines' => [
            'path' => '/machinegroups/{machineGroup}/machines',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListMaxComputeExports' => [
            'path' => '/maxcomputeexports',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListMetricStores' => [
            'path' => '/metricstores',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'mode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListOSSExports' => [
            'path' => '/ossexports',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListOSSHDFSExports' => [
            'path' => '/osshdfsexports',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListOSSIngestions' => [
            'path' => '/ossingestions',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListProject' => [
            'path' => '/',
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
                    'name' => 'projectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'fetchQuota',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListS3Ingestions' => [
            'path' => '/s3ingestions',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListSavedSearch' => [
            'path' => '/savedsearches',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListScheduledSQLs' => [
            'path' => '/scheduledsqls',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListShards' => [
            'path' => '/logstores/{logstore}/shards',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListStoreViews' => [
            'path' => '/storeviews',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'offset',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'storeType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTagResources' => [
            'path' => '/tags',
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
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'resourceId',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 1,
                    ],
                ],
                [
                    'name' => 'tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'key' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'MergeShard' => [
            'path' => '/logstores/{logstore}/shards/{shard}?action=merge',
            'methods' => [
                'post',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shard',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'OpenSlsService' => [
            'path' => '/slsservice',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [],
        ],
        'PullLogs' => [
            'path' => '/logstores/{logStore}/shards/{shardId}?type=log',
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
            'consumes' => [],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logStore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shardId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'cursor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                        'maximum' => '1000',
                    ],
                ],
                [
                    'name' => 'end_cursor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Accept-Encoding',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutAnnotationData' => [
            'path' => '/ml/annotationdataset/{datasetId}/annotationdata',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'annotationdataId',
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
                            'rawLog' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'additionalProperties' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'mlDataParam' => [
                                '$ref' => '#/components/schemas/MLDataParam',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutConsumeProcessor' => [
            'path' => '/consumeprocessors/{processorName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
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
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/ConsumeProcessorConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutIngestProcessor' => [
            'path' => '/ingestprocessors/{processorName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'processorName',
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
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/IngestProcessorConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutLogs' => [
            'path' => '/logstores/{logstore}/shards/lb',
            'methods' => [
                'post',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-log-compresstype',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'lz4',
                        ],
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/LogGroup',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutProjectPolicy' => [
            'path' => '/policy',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PutProjectTransferAcceleration' => [
            'path' => '/transferacceleration',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                            'enabled' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutWebtracking' => [
            'path' => '/logstores/{logstoreName}/track',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstoreName',
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
                        'required' => true,
                        'properties' => [
                            '__topic__' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            '__source__' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            '__logs__' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'additionalProperties' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            '__tags__' => [
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
        'RefreshToken' => [
            'path' => '/token/refresh',
            'methods' => [
                'post',
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
                    'name' => 'ticket',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'accessTokenExpirationTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RemoveConfigFromMachineGroup' => [
            'path' => '/machinegroups/{machineGroup}/configs/{configName}',
            'methods' => [
                'delete',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'SplitShard' => [
            'path' => '/logstores/{logstore}/shards/{shard}?action=split',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'shard',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'shardCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartETL' => [
            'path' => '/etls/{etlName}?action=START',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'etlName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StartMaxComputeExport' => [
            'path' => '/maxcomputeexports/{mcExportName}?action=START',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'mcExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StartOSSExport' => [
            'path' => '/ossexports/{ossExportName}?action=START',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StartOSSHDFSExport' => [
            'path' => '/osshdfsexports/{ossExportName}?action=START',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StartOSSIngestion' => [
            'path' => '/ossingestions/{ossIngestionName}?action=START',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossIngestionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopETL' => [
            'path' => '/etls/{etlName}?action=STOP',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'etlName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StopMaxComputeExport' => [
            'path' => '/maxcomputeexports/{mcExportName}?action=STOP',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'mcExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopOSSExport' => [
            'path' => '/ossexports/{ossExportName}?action=STOP',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopOSSHDFSExport' => [
            'path' => '/osshdfsexports/{ossExportName}?action=STOP',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopOSSIngestion' => [
            'path' => '/ossingestions/{ossIngestionName}?action=STOP',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossIngestionName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'SubmitAsyncSql' => [
            'path' => '/asyncsql',
            'methods' => [
                'post',
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
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Accept',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Accept-Encoding',
                    'in' => 'header',
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
                        '$ref' => '#/components/schemas/SubmitAsyncSqlParams',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TagResources' => [
            'path' => '/tag',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'resourceType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'resourceId' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'tags' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'value' => [
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
        'UntagResources' => [
            'path' => '/untag',
            'methods' => [
                'post',
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
                            'resourceType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resourceId' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'all' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'tags' => [
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
        'UpdateAlert' => [
            'path' => '/alerts/{alertName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'alertName',
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
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/AlertConfiguration',
                                'required' => true,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateAnnotationDataSet' => [
            'path' => '/ml/annotationdataset/{datasetId}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'datasetId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/MLDataSetParam',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateAnnotationLabel' => [
            'path' => '/ml/annotationlabel',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        '$ref' => '#/components/schemas/MLLabelParam',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateConfig' => [
            'path' => '/configs/{configName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
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
                        '$ref' => '#/components/schemas/LogtailConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateConsumerGroup' => [
            'path' => '/logstores/{logstore}/consumergroups/{consumerGroup}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'consumerGroup',
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
                        'required' => true,
                        'properties' => [
                            'order' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'timeout' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDashboard' => [
            'path' => '/dashboards/{dashboardName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'dashboardName',
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
                            'dashboardName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'attribute' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'charts' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/chart',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateETL' => [
            'path' => '/etls/{etlName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'etlName',
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
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/ETLConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateIndex' => [
            'path' => '/logstores/{logstore}/index',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
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
                        '$ref' => '#/components/schemas/index',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateLogStore' => [
            'path' => '/logstores/{logstore}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
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
                        'required' => true,
                        'properties' => [
                            'logstoreName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'shardCount' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'encrypt_conf' => [
                                '$ref' => '#/components/schemas/EncryptConf',
                                'required' => false,
                            ],
                            'autoSplit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'enable_tracking' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'appendMeta' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'maxSplitShard' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'telemetryType' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'hot_ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'infrequentAccessTTL' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'shardingPolicy' => [
                                '$ref' => '#/components/schemas/ShardingPolicy',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateLogStoreEncryption' => [
            'path' => '/logstores/{logstore}/encryption',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
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
                            'enable' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'encryptType' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'default',
                                    'm4',
                                    'sm4_ecb',
                                    'sm4_cbc',
                                    'sm4_gcm',
                                    'aes_ecb',
                                    'aes_cbc',
                                    'aes_cfb',
                                    'aes_ofb',
                                    'aes_gcm',
                                ],
                            ],
                            'userCmkInfo' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'keyId' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'roleArn' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'regionId' => [
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
        'UpdateLogStoreMeteringMode' => [
            'path' => '/logstores/{logstore}/meteringmode',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
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
                            'meteringMode' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'ChargeByDataIngest',
                                    'ChargeByFunction',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateLogStoreProcessor' => [
            'path' => '/logstores/{logstore}/processor',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'logstore',
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
                            'processorName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateLogging' => [
            'path' => '/logging',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                        'required' => true,
                        'properties' => [
                            'loggingProject' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'loggingDetails' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'type' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'consumergroup_log',
                                                'logtail_alarm',
                                                'operation_log',
                                                'logtail_profile',
                                                'metering',
                                                'logtail_status',
                                                'scheduled_sql_alert',
                                                'etl_alert',
                                            ],
                                        ],
                                        'logstore' => [
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
        'UpdateLogtailPipelineConfig' => [
            'path' => '/pipelineconfigs/{configName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'configName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
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
                            'configName' => [
                                'type' => 'string',
                                'required' => true,
                                'pattern' => '^[0-9a-zA-Z][0-9a-zA-Z-_]{0,126}[0-9a-zA-Z]$',
                            ],
                            'logSample' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'global' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                            'inputs' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'processors' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'aggregators' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'flushers' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                            ],
                            'task' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateMachineGroup' => [
            'path' => '/machinegroups/{groupName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'groupName',
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
                        'required' => true,
                        'properties' => [
                            'groupName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'machineIdentifyType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'groupType' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'groupAttribute' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'groupTopic' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'externalName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'machineList' => [
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
        'UpdateMachineGroupMachine' => [
            'path' => '/machinegroups/{machineGroup}/machines',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'machineGroup',
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
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'action',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'add',
                            'delete',
                        ],
                    ],
                ],
            ],
        ],
        'UpdateMaxComputeExport' => [
            'path' => '/maxcomputeexports/{mcExportName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'mcExportName',
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
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/MaxComputeExportConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateMetricStore' => [
            'path' => '/metricstores/{name}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
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
                            'ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'autoSplit' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'maxSplitShard' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'hot_ttl' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'infrequentAccessTTL' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'appendMeta' => [
                                'type' => 'boolean',
                            ],
                            'shardingPolicy' => [
                                '$ref' => '#/components/schemas/ShardingPolicy',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateMetricStoreMeteringMode' => [
            'path' => '/metricstores/{metricStore}/meteringmode',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'metricStore',
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
                            'meteringMode' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'ChargeByDataIngest',
                                    'ChargeByFunction',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateMetricStoreProcessor' => [
            'path' => '/metricstores/{metricstore}/processor',
            'methods' => [
                'post',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'metricstore',
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
                            'processorName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateOSSExport' => [
            'path' => '/ossexports/{ossExportName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
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
                            'displayName' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSExportConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateOSSHDFSExport' => [
            'path' => '/osshdfsexports/{ossExportName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossExportName',
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
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSExportConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateOSSIngestion' => [
            'path' => '/ossingestions/{ossIngestionName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ossIngestionName',
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
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => false,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/OSSIngestionConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateProject' => [
            'path' => '/',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'description' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'recycleBinEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateSavedSearch' => [
            'path' => '/savedsearches/{savedsearchName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'savedsearchName',
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
                            'savedsearchName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'searchQuery' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'logstore' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'topic' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateScheduledSQL' => [
            'path' => '/scheduledsqls/{scheduledSQLName}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scheduledSQLName',
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
                            'displayName' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'schedule' => [
                                '$ref' => '#/components/schemas/Schedule',
                                'required' => true,
                            ],
                            'configuration' => [
                                '$ref' => '#/components/schemas/ScheduledSQLConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateSqlInstance' => [
            'path' => '/sqlinstance',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
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
                            'cu' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'useAsDefault' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateStoreView' => [
            'path' => '/storeviews/{name}',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'name',
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
                            'storeType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'stores' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/StoreViewStore',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpsertCollectionPolicy' => [
            'path' => '/collectionpolicy',
            'methods' => [
                'post',
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
                            'policyName' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 3,
                                'maxLength' => 63,
                            ],
                            'productCode' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'dataCode' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'enabled' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'policyConfig' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'resourceMode' => [
                                        'type' => 'string',
                                        'required' => true,
                                        'enum' => [
                                            'all',
                                            'instanceMode',
                                            'attributeMode',
                                        ],
                                    ],
                                    'resourceTags' => [
                                        'type' => 'object',
                                        'required' => false,
                                    ],
                                    'regions' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'instanceIds' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'centralizeEnabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'centralizeConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'destRegion' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'destProject' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'destLogstore' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'destTTL' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'dataConfig' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'dataRegion' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'resourceDirectory' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'accountGroupType' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'members' => [
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
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'regionName' => '日本（东京）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'ap-northeast-1.log.aliyuncs.com',
            'endpoint' => 'ap-northeast-1.log.aliyuncs.com',
            'vpc' => 'ap-northeast-1-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'regionName' => '韩国（首尔）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'ap-northeast-2.log.aliyuncs.com',
            'endpoint' => 'ap-northeast-2.log.aliyuncs.com',
            'vpc' => 'ap-northeast-2-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'regionName' => '新加坡',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'ap-southeast-1.log.aliyuncs.com',
            'endpoint' => 'ap-southeast-1.log.aliyuncs.com',
            'vpc' => 'ap-southeast-1-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'regionName' => '澳大利亚（悉尼）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'ap-southeast-2.log.aliyuncs.com',
            'endpoint' => 'ap-southeast-2.log.aliyuncs.com',
            'vpc' => 'ap-southeast-2-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'regionName' => '马来西亚（吉隆坡）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'ap-southeast-3.log.aliyuncs.com',
            'endpoint' => 'ap-southeast-3.log.aliyuncs.com',
            'vpc' => 'ap-southeast-3-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'regionName' => '印度尼西亚（雅加达）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'ap-southeast-5.log.aliyuncs.com',
            'endpoint' => 'ap-southeast-5.log.aliyuncs.com',
            'vpc' => 'ap-southeast-5-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'regionName' => '菲律宾（马尼拉）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'ap-southeast-6.log.aliyuncs.com',
            'endpoint' => 'ap-southeast-6.log.aliyuncs.com',
            'vpc' => 'ap-southeast-6-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'regionName' => '泰国（曼谷）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'ap-southeast-7.log.aliyuncs.com',
            'endpoint' => 'ap-southeast-7.log.aliyuncs.com',
            'vpc' => 'ap-southeast-7-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'regionName' => '华北2（北京）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-beijing.log.aliyuncs.com',
            'endpoint' => 'cn-beijing.log.aliyuncs.com',
            'vpc' => 'cn-beijing-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'regionName' => '西南1（成都）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-chengdu.log.aliyuncs.com',
            'endpoint' => 'cn-chengdu.log.aliyuncs.com',
            'vpc' => 'cn-chengdu-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fuzhou',
            'regionName' => '华东6（福州-本地地域）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-fuzhou.log.aliyuncs.com',
            'endpoint' => 'cn-fuzhou.log.aliyuncs.com',
            'vpc' => 'cn-fuzhou-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'regionName' => '华南3（广州）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-guangzhou.log.aliyuncs.com',
            'endpoint' => 'cn-guangzhou.log.aliyuncs.com',
            'vpc' => 'cn-guangzhou-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'regionName' => '华东1（杭州）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-hangzhou.log.aliyuncs.com',
            'endpoint' => 'cn-hangzhou.log.aliyuncs.com',
            'vpc' => 'cn-hangzhou-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'regionName' => '华南2（河源）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-heyuan.log.aliyuncs.com',
            'endpoint' => 'cn-heyuan.log.aliyuncs.com',
            'vpc' => 'cn-heyuan-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'regionName' => '中国香港',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-hongkong.log.aliyuncs.com',
            'endpoint' => 'cn-hongkong.log.aliyuncs.com',
            'vpc' => 'cn-hongkong-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'regionName' => '华北5（呼和浩特）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-huhehaote.log.aliyuncs.com',
            'endpoint' => 'cn-huhehaote.log.aliyuncs.com',
            'vpc' => 'cn-huhehaote-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'regionName' => '华东5（南京-本地地域）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-nanjing.log.aliyuncs.com',
            'endpoint' => 'cn-nanjing.log.aliyuncs.com',
            'vpc' => 'cn-nanjing-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'regionName' => '华北1（青岛）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-qingdao.log.aliyuncs.com',
            'endpoint' => 'cn-qingdao.log.aliyuncs.com',
            'vpc' => 'cn-qingdao-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'regionName' => '华东2（上海）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-shanghai.log.aliyuncs.com',
            'endpoint' => 'cn-shanghai.log.aliyuncs.com',
            'vpc' => 'cn-shanghai-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'regionName' => '华南1（深圳）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-shenzhen.log.aliyuncs.com',
            'endpoint' => 'cn-shenzhen.log.aliyuncs.com',
            'vpc' => 'cn-shenzhen-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'regionName' => '华北6（乌兰察布）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-wulanchabu.log.aliyuncs.com',
            'endpoint' => 'cn-wulanchabu.log.aliyuncs.com',
            'vpc' => 'cn-wulanchabu-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'regionName' => '华北3（张家口）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'cn-zhangjiakou.log.aliyuncs.com',
            'endpoint' => 'cn-zhangjiakou.log.aliyuncs.com',
            'vpc' => 'cn-zhangjiakou-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'regionName' => '美国（硅谷）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'us-west-1.log.aliyuncs.com',
            'endpoint' => 'us-west-1.log.aliyuncs.com',
            'vpc' => 'us-west-1-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'regionName' => '美国（弗吉尼亚）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'us-east-1.log.aliyuncs.com',
            'endpoint' => 'us-east-1.log.aliyuncs.com',
            'vpc' => 'us-east-1-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'regionName' => '英国（伦敦）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'eu-west-1.log.aliyuncs.com',
            'endpoint' => 'eu-west-1.log.aliyuncs.com',
            'vpc' => 'eu-west-1-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'regionName' => '德国（法兰克福）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'eu-central-1.log.aliyuncs.com',
            'endpoint' => 'eu-central-1.log.aliyuncs.com',
            'vpc' => 'eu-central-1-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'regionName' => '阿联酋（迪拜）',
            'areaId' => 'middleEast',
            'areaName' => '中东与印度',
            'public' => 'me-east-1.log.aliyuncs.com',
            'endpoint' => 'me-east-1.log.aliyuncs.com',
            'vpc' => 'me-east-1-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'regionName' => '沙特（利雅得）',
            'areaId' => 'middleEast',
            'areaName' => '中东与印度',
            'public' => 'me-central-1.log.aliyuncs.com',
            'endpoint' => 'me-central-1.log.aliyuncs.com',
            'vpc' => 'me-central-1-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'regionName' => '华南1 金融云',
            'areaId' => 'industryCloud',
            'areaName' => '行业云',
            'public' => 'cn-shenzhen-finance-1.log.aliyuncs.com',
            'endpoint' => 'cn-shenzhen-finance-1.log.aliyuncs.com',
            'vpc' => '',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'regionName' => '华东2 金融云',
            'areaId' => 'industryCloud',
            'areaName' => '行业云',
            'public' => 'cn-shanghai-finance-1.log.aliyuncs.com',
            'endpoint' => 'cn-shanghai-finance-1.log.aliyuncs.com',
            'vpc' => 'cn-shanghai-finance-1-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'regionName' => '华东1 金融云',
            'areaId' => 'industryCloud',
            'areaName' => '行业云',
            'public' => 'cn-hangzhou-finance.log.aliyuncs.com',
            'endpoint' => 'cn-hangzhou-finance.log.aliyuncs.com',
            'vpc' => 'cn-hangzhou-finance-intranet.log.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'regionName' => '华北2 金融云（邀测）',
            'areaId' => 'industryCloud',
            'areaName' => '行业云',
            'public' => 'cn-beijing-finance-1.log.aliyuncs.com',
            'endpoint' => 'cn-beijing-finance-1.log.aliyuncs.com',
            'vpc' => 'cn-beijing-finance-1-intranet.log.aliyuncs.com',
        ],
    ],
];