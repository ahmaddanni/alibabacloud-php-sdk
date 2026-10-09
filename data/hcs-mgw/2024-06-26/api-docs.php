<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'hcs-mgw',
        'version' => '2024-06-26',
    ],
    'components' => [
        'schemas' => [
            'AddressDetail' => [
                'type' => 'object',
                'properties' => [
                    'AddressType' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Bucket' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Domain' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Prefix' => [
                        'type' => 'string',
                    ],
                    'AccessId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'AccessSecret' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Role' => [
                        'type' => 'string',
                    ],
                    'InvDomain' => [
                        'type' => 'string',
                    ],
                    'InvBucket' => [
                        'type' => 'string',
                    ],
                    'InvAccessId' => [
                        'type' => 'string',
                    ],
                    'InvAccessSecret' => [
                        'type' => 'string',
                    ],
                    'InvPath' => [
                        'type' => 'string',
                    ],
                    'InvRole' => [
                        'type' => 'string',
                    ],
                    'InvLocation' => [
                        'type' => 'string',
                    ],
                    'AgentList' => [
                        'type' => 'string',
                    ],
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'InvRegionId' => [
                        'type' => 'string',
                    ],
                    'DataType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Audit' => [
                'type' => 'object',
                'properties' => [
                    'LogMode' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateAddressInfo' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'AddressDetail' => [
                        '$ref' => '#/components/schemas/AddressDetail',
                        'required' => true,
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateAgentInfo' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'DeployMethod' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'AgentEndpoint' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                    'TunnelId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'CreateJobInfo' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'SrcAddress' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'DestAddress' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'OverwriteMode' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'TransferMode' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                    'ParentVersion' => [
                        'type' => 'string',
                    ],
                    'ConvertSymlinkTarget' => [
                        'type' => 'boolean',
                    ],
                    'Audit' => [
                        '$ref' => '#/components/schemas/Audit',
                    ],
                    'EnableMultiVersioning' => [
                        'type' => 'boolean',
                    ],
                    'FilterRule' => [
                        '$ref' => '#/components/schemas/FilterRule',
                    ],
                    'ImportQos' => [
                        '$ref' => '#/components/schemas/ImportQos',
                    ],
                    'ScheduleRule' => [
                        '$ref' => '#/components/schemas/ScheduleRule',
                    ],
                    'CreateReport' => [
                        'type' => 'boolean',
                    ],
                    'WithStorageClass' => [
                        'type' => 'boolean',
                    ],
                    'TargetStorageClass' => [
                        'type' => 'string',
                    ],
                    'WithLastModifyTime' => [
                        'type' => 'boolean',
                    ],
                    'AppendableToNormal' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'CreateReportInfo' => [
                'type' => 'object',
                'properties' => [
                    'JobName' => [
                        'type' => 'string',
                    ],
                    'Version' => [
                        'type' => 'string',
                    ],
                    'RuntimeId' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'CreateTunnelInfo' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'TunnelQos' => [
                        '$ref' => '#/components/schemas/TunnelQos',
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FileTypeFilters' => [
                'type' => 'object',
                'properties' => [
                    'ExcludeSymlink' => [
                        'type' => 'boolean',
                    ],
                    'ExcludeDir' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'FilterRule' => [
                'type' => 'object',
                'properties' => [
                    'KeyFilters' => [
                        '$ref' => '#/components/schemas/KeyFilters',
                    ],
                    'LastModifiedFilters' => [
                        '$ref' => '#/components/schemas/LastModifiedFilters',
                    ],
                    'FileTypeFilters' => [
                        '$ref' => '#/components/schemas/FileTypeFilters',
                    ],
                ],
            ],
            'GetAddressResp' => [
                'type' => 'object',
                'properties' => [
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'AddressDetail' => [
                        '$ref' => '#/components/schemas/AddressDetail',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'ModifyTime' => [
                        'type' => 'string',
                    ],
                    'VerifyTime' => [
                        'type' => 'string',
                    ],
                    'Version' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'VerifyResult' => [
                        '$ref' => '#/components/schemas/VerifyResp',
                    ],
                ],
            ],
            'GetAgentResp' => [
                'type' => 'object',
                'properties' => [
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'ModifyTime' => [
                        'type' => 'string',
                    ],
                    'DeployMethod' => [
                        'type' => 'string',
                    ],
                    'AgentEndpoint' => [
                        'type' => 'string',
                    ],
                    'ActivationKey' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                    'Version' => [
                        'type' => 'string',
                    ],
                    'TunnelId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetAgentStatusResp' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'AgentVersion' => [
                        'type' => 'string',
                    ],
                    'AgentIP' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetJobResp' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'SrcAddress' => [
                        'type' => 'string',
                    ],
                    'DestAddress' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'EnableMultiVersioning' => [
                        'type' => 'boolean',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'ModifyTime' => [
                        'type' => 'string',
                    ],
                    'Version' => [
                        'type' => 'string',
                    ],
                    'Audit' => [
                        '$ref' => '#/components/schemas/Audit',
                    ],
                    'OverwriteMode' => [
                        'type' => 'string',
                    ],
                    'TransferMode' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                    'ParentName' => [
                        'type' => 'string',
                    ],
                    'ParentVersion' => [
                        'type' => 'string',
                    ],
                    'ConvertSymlinkTarget' => [
                        'type' => 'boolean',
                    ],
                    'CreateReport' => [
                        'type' => 'boolean',
                    ],
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'FilterRule' => [
                        '$ref' => '#/components/schemas/FilterRule',
                    ],
                    'ImportQos' => [
                        '$ref' => '#/components/schemas/ImportQos',
                    ],
                    'ScheduleRule' => [
                        '$ref' => '#/components/schemas/ScheduleRule',
                    ],
                    'WithStorageClass' => [
                        'type' => 'boolean',
                    ],
                    'TargetStorageClass' => [
                        'type' => 'string',
                    ],
                    'WithLastModifyTime' => [
                        'type' => 'boolean',
                    ],
                    'AppendableToNormal' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'GetJobResultResp' => [
                'type' => 'object',
                'properties' => [
                    'ReadyRetry' => [
                        'type' => 'string',
                    ],
                    'InvPath' => [
                        'type' => 'string',
                    ],
                    'InvBucket' => [
                        'type' => 'string',
                    ],
                    'InvDomain' => [
                        'type' => 'string',
                    ],
                    'InvLocation' => [
                        'type' => 'string',
                    ],
                    'InvAccessId' => [
                        'type' => 'string',
                    ],
                    'InvAccessSecret' => [
                        'type' => 'string',
                    ],
                    'InvRegionId' => [
                        'type' => 'string',
                    ],
                    'AddressType' => [
                        'type' => 'string',
                    ],
                    'TotalObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CopiedObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FailedObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalObjectSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CopiedObjectSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Version' => [
                        'type' => 'string',
                    ],
                    'SkippedObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SkippedObjectSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'GetReportResp' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'ReportCreateTime' => [
                        'type' => 'string',
                    ],
                    'ReportEndTime' => [
                        'type' => 'string',
                    ],
                    'TotalCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CopiedCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SkippedCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FailedCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'JobCreateTime' => [
                        'type' => 'string',
                    ],
                    'JobEndTime' => [
                        'type' => 'string',
                    ],
                    'JobExecuteTime' => [
                        'type' => 'string',
                    ],
                    'TotalListPrefix' => [
                        'type' => 'string',
                    ],
                    'SkippedListPrefix' => [
                        'type' => 'string',
                    ],
                    'FailedListPrefix' => [
                        'type' => 'string',
                    ],
                    'ErrorMessage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetTunnelResp' => [
                'type' => 'object',
                'properties' => [
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'TunnelId' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'ModifyTime' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                    'TunnelQos' => [
                        '$ref' => '#/components/schemas/TunnelQos',
                    ],
                ],
            ],
            'ImportQos' => [
                'type' => 'object',
                'properties' => [
                    'MaxBandWidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MaxImportTaskQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'JobHistory' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'JobVersion' => [
                        'type' => 'string',
                    ],
                    'RuntimeId' => [
                        'type' => 'string',
                    ],
                    'CommitId' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'TotalCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CopiedCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FailedCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CopiedSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RuntimeState' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                    'Operator' => [
                        'type' => 'string',
                    ],
                    'ListStatus' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'KeyFilterItem' => [
                'type' => 'object',
                'properties' => [
                    'Regex' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'KeyFilters' => [
                'type' => 'object',
                'properties' => [
                    'Includes' => [
                        '$ref' => '#/components/schemas/KeyFilterItem',
                    ],
                    'Excludes' => [
                        '$ref' => '#/components/schemas/KeyFilterItem',
                    ],
                ],
            ],
            'LastModifiedFilters' => [
                'type' => 'object',
                'properties' => [
                    'Includes' => [
                        '$ref' => '#/components/schemas/LastModifyFilterItem',
                    ],
                    'Excludes' => [
                        '$ref' => '#/components/schemas/LastModifyFilterItem',
                    ],
                ],
            ],
            'LastModifyFilterItem' => [
                'type' => 'object',
                'properties' => [
                    'TimeFilter' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/TimeFilter',
                        ],
                    ],
                ],
            ],
            'ListAddressResp' => [
                'type' => 'object',
                'properties' => [
                    'Truncated' => [
                        'type' => 'boolean',
                    ],
                    'NextMarker' => [
                        'type' => 'string',
                    ],
                    'ImportAddress' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/GetAddressResp',
                        ],
                    ],
                ],
            ],
            'ListAgentResp' => [
                'type' => 'object',
                'properties' => [
                    'Truncated' => [
                        'type' => 'boolean',
                    ],
                    'NextMarker' => [
                        'type' => 'string',
                    ],
                    'ImportAgent' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/GetAgentResp',
                        ],
                    ],
                ],
            ],
            'ListJobHistoryResp' => [
                'type' => 'object',
                'properties' => [
                    'Truncated' => [
                        'type' => 'string',
                    ],
                    'NextMarker' => [
                        'type' => 'string',
                    ],
                    'JobHistory' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/JobHistory',
                        ],
                    ],
                ],
            ],
            'ListJobInfo' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'Truncated' => [
                        'type' => 'boolean',
                    ],
                    'NextMarker' => [
                        'type' => 'string',
                    ],
                    'ImportJob' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CreateJobInfo',
                        ],
                    ],
                ],
            ],
            'ListJobResp' => [
                'type' => 'object',
                'properties' => [
                    'NextMarker' => [
                        'type' => 'string',
                    ],
                    'Truncated' => [
                        'type' => 'boolean',
                    ],
                    'ImportJob' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/GetJobResp',
                        ],
                    ],
                ],
            ],
            'ListTunnelResp' => [
                'type' => 'object',
                'properties' => [
                    'Truncated' => [
                        'type' => 'boolean',
                    ],
                    'NextMarker' => [
                        'type' => 'string',
                    ],
                    'ImportTunnel' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/GetTunnelResp',
                        ],
                    ],
                ],
            ],
            'ScheduleRule' => [
                'type' => 'object',
                'properties' => [
                    'StartCronExpression' => [
                        'type' => 'string',
                    ],
                    'SuspendCronExpression' => [
                        'type' => 'string',
                    ],
                    'MaxScheduleCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'TimeFilter' => [
                'type' => 'object',
                'properties' => [
                    'StartTime' => [
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TunnelQos' => [
                'type' => 'object',
                'properties' => [
                    'MaxQps' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'MaxBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'UpdateAddressInfo' => [
                'type' => 'object',
                'properties' => [
                    'AgentList' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UpdateJobInfo' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'ImportQos' => [
                        '$ref' => '#/components/schemas/ImportQos',
                    ],
                ],
            ],
            'UpdateTunnelInfo' => [
                'type' => 'object',
                'properties' => [
                    'TunnelQos' => [
                        '$ref' => '#/components/schemas/TunnelQos',
                    ],
                    'Tags' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'VerifyAddressResp' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'VerifyTime' => [
                        'type' => 'string',
                    ],
                    'ErrorCode' => [
                        'type' => 'string',
                    ],
                    'ErrorMessage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'VerifyResp' => [
                'type' => 'object',
                'properties' => [
                    'HttpCode' => [
                        'type' => 'string',
                    ],
                    'ErrorCode' => [
                        'type' => 'string',
                    ],
                    'ErrorMsg' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateJob' => [
            'path' => '/job',
            'methods' => [
                'post',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportJob' => [
                                '$ref' => '#/components/schemas/CreateJobInfo',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [],
        ],
        'GetJob' => [
            'path' => '/job/{jobName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'byVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'jobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportJob' => [
                                '$ref' => '#/components/schemas/GetJobResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListJob' => [
            'path' => '/joblist',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'parentName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'all',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportJobList' => [
                                '$ref' => '#/components/schemas/ListJobResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateJob' => [
            'path' => '/job/{jobName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportJob' => [
                                '$ref' => '#/components/schemas/UpdateJobInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'jobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [],
        ],
        'DeleteJob' => [
            'path' => '/job/{jobName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'forceDelete',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'jobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [],
        ],
        'ListJobHistory' => [
            'path' => '/jobhistory/{jobName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'jobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'runtimeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'JobHistoryList' => [
                                '$ref' => '#/components/schemas/ListJobHistoryResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateReport' => [
            'path' => '/report',
            'methods' => [
                'post',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'CreateReport' => [
                                '$ref' => '#/components/schemas/CreateReportInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [],
        ],
        'GetReport' => [
            'path' => '/report',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'runtimeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'GetReportResponse' => [
                                '$ref' => '#/components/schemas/GetReportResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetJobResult' => [
            'path' => '/job/{jobName}?jobResult',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'jobName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'runtimeId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportJobResult' => [
                                '$ref' => '#/components/schemas/GetJobResultResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAddress' => [
            'path' => '/address',
            'methods' => [
                'post',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportAddress' => [
                                '$ref' => '#/components/schemas/CreateAddressInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [],
        ],
        'GetAddress' => [
            'path' => '/address/{addressName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'addressName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportAddress' => [
                                '$ref' => '#/components/schemas/GetAddressResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAddress' => [
            'path' => '/addresslist',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportAddressList' => [
                                '$ref' => '#/components/schemas/ListAddressResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateAddress' => [
            'path' => '/address/{addressName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'addressName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportAddress' => [
                                '$ref' => '#/components/schemas/UpdateAddressInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'DeleteAddress' => [
            'path' => '/address/{addressName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'addressName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [],
        ],
        'VerifyAddress' => [
            'path' => '/address/{addressName}?verify',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'addressName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VerifyAddressResponse' => [
                                '$ref' => '#/components/schemas/VerifyAddressResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAgent' => [
            'path' => '/agent',
            'methods' => [
                'post',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportAgent' => [
                                '$ref' => '#/components/schemas/CreateAgentInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [],
        ],
        'GetAgent' => [
            'path' => '/agent/{agentName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'agentName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportAgent' => [
                                '$ref' => '#/components/schemas/GetAgentResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAgent' => [
            'path' => '/agentlist',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportAgentList' => [
                                '$ref' => '#/components/schemas/ListAgentResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAgentStatus' => [
            'path' => '/agent/{agentName}?status',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'agentName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportAgentStatus' => [
                                '$ref' => '#/components/schemas/GetAgentStatusResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAgent' => [
            'path' => '/agent/{agentName}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'agentName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [],
        ],
        'CreateTunnel' => [
            'path' => '/tunnel',
            'methods' => [
                'post',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportTunnel' => [
                                '$ref' => '#/components/schemas/CreateTunnelInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetTunnel' => [
            'path' => '/tunnel/{tunnelId}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'tunnelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportTunnel' => [
                                '$ref' => '#/components/schemas/GetTunnelResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateTunnel' => [
            'path' => '/tunnel/{tunnelId}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'tunnelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'ImportTunnel' => [
                                '$ref' => '#/components/schemas/UpdateTunnelInfo',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'ListTunnel' => [
            'path' => '/tunnellist',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'count',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ImportTunnelList' => [
                                '$ref' => '#/components/schemas/ListTunnelResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteTunnel' => [
            'path' => '/tunnel/{tunnelId}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'tunnelId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cn-beijing.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'cn-wulanchabu.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cn-hangzhou.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cn-shanghai.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cn-shenzhen.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cn-chengdu.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cn-hongkong.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'ap-northeast-1.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ap-southeast-1.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'us-east-1.mgw.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'eu-central-1.mgw.aliyuncs.com',
        ],
    ],
];