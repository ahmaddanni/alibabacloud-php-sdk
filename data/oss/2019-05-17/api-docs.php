<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'OSS',
        'product' => 'Oss',
        'version' => '2019-05-17',
    ],
    'components' => [
        'schemas' => [
            'AcceleratePaths' => [
                'type' => 'object',
                'properties' => [
                    'DefaultCachePolicy' => [
                        'type' => 'string',
                    ],
                    'Path' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'CachePolicy' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'AccessControlList' => [
                'type' => 'object',
                'properties' => [
                    'Grant' => [
                        '$ref' => '#/components/schemas/Grant',
                    ],
                ],
            ],
            'AccessControlPolicy' => [
                'type' => 'object',
                'properties' => [
                    'Owner' => [
                        '$ref' => '#/components/schemas/Owner',
                    ],
                    'AccessControlList' => [
                        '$ref' => '#/components/schemas/AccessControlList',
                    ],
                ],
            ],
            'AccessMonitorConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        '$ref' => '#/components/schemas/AccessMonitorStatus',
                    ],
                ],
            ],
            'AccessMonitorStatus' => [
                'type' => 'string',
                'enum' => [
                    'Enabled',
                    'Disabled',
                ],
            ],
            'AccessPoint' => [
                'type' => 'object',
                'properties' => [
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'AccessPointName' => [
                        '$ref' => '#/components/schemas/AccessPointName',
                    ],
                    'Alias' => [
                        '$ref' => '#/components/schemas/AccessPointAlias',
                    ],
                    'NetworkOrigin' => [
                        '$ref' => '#/components/schemas/AccessPointNetworkOrigin',
                    ],
                    'VpcConfiguration' => [
                        '$ref' => '#/components/schemas/AccessPointVpcConfiguration',
                    ],
                    'Status' => [
                        '$ref' => '#/components/schemas/AccessPointStatus',
                    ],
                ],
            ],
            'AccessPointAlias' => [
                'type' => 'string',
            ],
            'AccessPointArn' => [
                'type' => 'string',
            ],
            'AccessPointName' => [
                'type' => 'string',
            ],
            'AccessPointNetworkOrigin' => [
                'type' => 'string',
            ],
            'AccessPointStatus' => [
                'type' => 'string',
            ],
            'AccessPointVpcConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'VpcId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ApplyServerSideEncryptionByDefault' => [
                'type' => 'object',
                'properties' => [
                    'SSEAlgorithm' => [
                        'type' => 'string',
                    ],
                    'KMSMasterKeyID' => [
                        'type' => 'string',
                    ],
                    'KMSDataEncryption' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ArchiveDirectReadConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'AsyncFetchTaskConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Url' => [
                        'type' => 'string',
                    ],
                    'Object' => [
                        'type' => 'string',
                    ],
                    'Host' => [
                        'type' => 'string',
                    ],
                    'ContentMD5' => [
                        'type' => 'string',
                    ],
                    'Callback' => [
                        'type' => 'string',
                    ],
                    'StorageClass' => [
                        'type' => 'string',
                    ],
                    'IgnoreSameKey' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'AsyncFetchTaskInfo' => [
                'type' => 'object',
                'properties' => [
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'State' => [
                        'type' => 'string',
                    ],
                    'ErrorMsg' => [
                        'type' => 'string',
                    ],
                    'TaskInfo' => [
                        '$ref' => '#/components/schemas/AsyncFetchTaskConfiguration',
                    ],
                ],
            ],
            'AsyncFetchTaskResult' => [
                'type' => 'object',
                'properties' => [
                    'TaskId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Bucket' => [
                'type' => 'object',
                'properties' => [
                    'CreationDate' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'ExtranetEndpoint' => [
                        'type' => 'string',
                    ],
                    'IntranetEndpoint' => [
                        'type' => 'string',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'StorageClass' => [
                        '$ref' => '#/components/schemas/StorageClass',
                    ],
                    'Region' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BucketACL' => [
                'type' => 'string',
                'enum' => [
                    'private',
                    'public-read',
                    'public-read-write',
                ],
            ],
            'BucketAntiDDOSConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Cnames' => [
                        'type' => 'object',
                        'properties' => [
                            'Domain' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'BucketAntiDDOSInfo' => [
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'Ctime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Mtime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ActiveTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Cnames' => [
                        'type' => 'object',
                        'properties' => [
                            'Domain' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'BucketChannelConfig' => [
                'type' => 'object',
                'properties' => [
                    'version' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'DebugInfo' => [
                        'type' => 'string',
                    ],
                    'RuleList' => [
                        'type' => 'object',
                        'properties' => [
                            'Rule' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RuleName' => [
                                            'type' => 'string',
                                        ],
                                        'RuleRegex' => [
                                            'type' => 'string',
                                        ],
                                        'FrontContent' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'BucketCnameConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Cname' => [
                        'type' => 'object',
                        'properties' => [
                            'Domain' => [
                                'type' => 'string',
                            ],
                            'CertificateConfiguration' => [
                                '$ref' => '#/components/schemas/CertificateConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
            'BucketDataRedundancyTransition' => [
                'type' => 'object',
                'properties' => [
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'type' => 'string',
                    ],
                    'ProcessPercentage' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'EstimatedRemainingTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BucketInfo' => [
                'type' => 'object',
                'properties' => [
                    'Bucket' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessMonitor' => [
                                'type' => 'string',
                            ],
                            'CreationDate' => [
                                'type' => 'string',
                                'format' => 'iso8601',
                            ],
                            'CrossRegionReplication' => [
                                'type' => 'string',
                            ],
                            'DataRedundancyType' => [
                                '$ref' => '#/components/schemas/DataRedundancyType',
                            ],
                            'ExtranetEndpoint' => [
                                '$ref' => '#/components/schemas/Endpoint',
                            ],
                            'IntranetEndpoint' => [
                                '$ref' => '#/components/schemas/Endpoint',
                            ],
                            'Location' => [
                                'type' => 'string',
                            ],
                            'Name' => [
                                'type' => 'string',
                            ],
                            'ResourceGroupId' => [
                                '$ref' => '#/components/schemas/ResourceGroupId',
                            ],
                            'StorageClass' => [
                                '$ref' => '#/components/schemas/StorageClass',
                            ],
                            'TransferAcceleration' => [
                                'type' => 'string',
                            ],
                            'Versioning' => [
                                '$ref' => '#/components/schemas/BucketVersioningStatus',
                            ],
                            'Owner' => [
                                '$ref' => '#/components/schemas/Owner',
                            ],
                            'AccessControlList' => [
                                '$ref' => '#/components/schemas/AccessControlList',
                            ],
                            'ServerSideEncryptionRule' => [
                                'type' => 'object',
                                'properties' => [
                                    'SSEAlgorithm' => [
                                        'type' => 'string',
                                    ],
                                    'KMSMasterKeyID' => [
                                        'type' => 'string',
                                    ],
                                    'KMSDataEncryption' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'BucketPolicy' => [
                                'type' => 'object',
                                'properties' => [
                                    'LogBucket' => [
                                        'type' => 'string',
                                    ],
                                    'LogPrefix' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Comment' => [
                                'type' => 'string',
                            ],
                            'BlockPublicAccess' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'BucketLoggingStatus' => [
                'type' => 'object',
                'properties' => [
                    'LoggingEnabled' => [
                        '$ref' => '#/components/schemas/LoggingEnabled',
                        'required' => true,
                    ],
                ],
            ],
            'BucketProcessConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'CompliedHost' => [
                        'type' => 'string',
                    ],
                    'OssDomainSupportAtProcess' => [
                        'type' => 'string',
                    ],
                    'SourceFileProtect' => [
                        'type' => 'string',
                    ],
                    'SourceFileProtectSuffix' => [
                        'type' => 'string',
                    ],
                    'BucketChannelConfig' => [
                        '$ref' => '#/components/schemas/BucketChannelConfig',
                    ],
                    'StyleDelimiters' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BucketQoSConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'TotalUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Exclusive' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'BucketResourceGroupConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'ResourceGroupId' => [
                        '$ref' => '#/components/schemas/ResourceGroupId',
                    ],
                ],
            ],
            'BucketStat' => [
                'type' => 'object',
                'properties' => [
                    'Storage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MultipartUploadCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LiveChannelCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MultipartPartCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DeleteMarkerCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LastModifiedTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StandardStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StandardObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'InfrequentAccessStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'InfrequentAccessRealStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'InfrequentAccessObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ArchiveStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ArchiveRealStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ArchiveObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ColdArchiveStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ColdArchiveRealStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ColdArchiveObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DeepColdArchiveStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DeepColdArchiveRealStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DeepColdArchiveObjectCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MultipartPartStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StandardMultipartPartCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StandardMultipartPartStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'InfrequentMultipartPartCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'InfrequentMultipartPartStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ArchiveMultipartPartCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ArchiveMultipartPartStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ColdArchiveMultipartPartCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ColdArchiveMultipartPartStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DeepColdArchiveMultipartPartCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DeepColdArchiveMultipartPartStorage' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'BucketVersioningStatus' => [
                'type' => 'string',
                'enum' => [
                    'Enabled',
                    'Suspended',
                ],
            ],
            'BucketWormState' => [
                'type' => 'string',
                'enum' => [
                    'InProgress',
                    'Locked',
                ],
            ],
            'CORSConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'CORSRule' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CORSRule',
                        ],
                    ],
                    'ResponseVary' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'CORSRule' => [
                'type' => 'object',
                'properties' => [
                    'AllowedOrigin' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'AllowedMethod' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'AllowedHeader' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'ExposeHeader' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'MaxAgeSeconds' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'CSVInput' => [
                'type' => 'object',
                'properties' => [
                    'FileHeaderInfo' => [
                        '$ref' => '#/components/schemas/FileHeaderInfo',
                    ],
                    'RecordDelimiter' => [
                        'type' => 'string',
                    ],
                    'FieldDelimiter' => [
                        'type' => 'string',
                    ],
                    'QuoteCharacter' => [
                        'type' => 'string',
                    ],
                    'CommentCharacter' => [
                        'type' => 'string',
                    ],
                    'Range' => [
                        'type' => 'string',
                    ],
                    'AllowQuotedRecordDelimiter' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'CSVOutput' => [
                'type' => 'object',
                'properties' => [
                    'RecordDelimiter' => [
                        'type' => 'string',
                    ],
                    'FieldDelimiter' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CacheBaseInfo' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'AvailableZone' => [
                        'type' => 'string',
                    ],
                    'QuotaConfiguration' => [
                        '$ref' => '#/components/schemas/CacheQuotaConfiguration',
                    ],
                    'CreationDate' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CacheBucketInfo' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'CachePolicy' => [
                        'type' => 'string',
                    ],
                    'AcceleratePaths' => [
                        '$ref' => '#/components/schemas/AcceleratePaths',
                    ],
                ],
            ],
            'CacheConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Caches' => [
                        'type' => 'object',
                        'properties' => [
                            'Cache' => [
                                'type' => 'object',
                                'properties' => [
                                    'AvailableZone' => [
                                        'type' => 'string',
                                    ],
                                    'CacheName' => [
                                        'type' => 'string',
                                    ],
                                    'CachePolicy' => [
                                        'type' => 'string',
                                    ],
                                    'AcceleratePaths' => [
                                        '$ref' => '#/components/schemas/AcceleratePaths',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'CacheDetailInfo' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'AvailableZone' => [
                        'type' => 'string',
                    ],
                    'QuotaConfiguration' => [
                        '$ref' => '#/components/schemas/CacheQuotaConfiguration',
                    ],
                    'CreationDate' => [
                        'type' => 'string',
                    ],
                    'Buckets' => [
                        'type' => 'object',
                        'properties' => [
                            'Bucket' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/CacheBucketInfo',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'CacheQuotaConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'QuotaDesc' => [
                        'type' => 'object',
                        'properties' => [
                            'Quota' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'CallbackPolicy' => [
                'type' => 'object',
                'properties' => [
                    'PolicyItem' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'PolicyName' => [
                                    'type' => 'string',
                                ],
                                'Callback' => [
                                    'type' => 'string',
                                ],
                                'CallbackVar' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'CertificateConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'CertId' => [
                        'type' => 'string',
                    ],
                    'Certificate' => [
                        'type' => 'string',
                    ],
                    'PrivateKey' => [
                        'type' => 'string',
                    ],
                    'PreviousCertId' => [
                        'type' => 'string',
                    ],
                    'Force' => [
                        'type' => 'boolean',
                    ],
                    'DeleteCertificate' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Channel' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'OrigPicForbidden' => [
                        'type' => 'boolean',
                    ],
                    'UseStyleOnly' => [
                        'type' => 'boolean',
                    ],
                    'AutoSetContentType' => [
                        'type' => 'boolean',
                    ],
                    'UseSrcFormat' => [
                        'type' => 'boolean',
                    ],
                    'SetAttachName' => [
                        'type' => 'boolean',
                    ],
                    'Default404Pic' => [
                        'type' => 'string',
                    ],
                    'StyleDelimiters' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ChannelInfo' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'OrigPicForbidden' => [
                        'type' => 'boolean',
                    ],
                    'UseSrcFormat' => [
                        'type' => 'boolean',
                    ],
                    'SetAttachName' => [
                        'type' => 'boolean',
                    ],
                    'UseStyleOnly' => [
                        'type' => 'boolean',
                    ],
                    'AutoSetContentType' => [
                        'type' => 'boolean',
                    ],
                    'StyleDelimiters' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CnameCertificate' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'CertId' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'CreationDate' => [
                        'type' => 'string',
                    ],
                    'Fingerprint' => [
                        'type' => 'string',
                    ],
                    'ValidStartDate' => [
                        'type' => 'string',
                    ],
                    'ValidEndDate' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CnameInfo' => [
                'type' => 'object',
                'properties' => [
                    'Domain' => [
                        'type' => 'string',
                    ],
                    'LastModified' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Certificate' => [
                        '$ref' => '#/components/schemas/CnameCertificate',
                    ],
                ],
            ],
            'CnameSummary' => [
                'type' => 'object',
                'properties' => [
                    'Domain' => [
                        'type' => 'string',
                    ],
                    'LastModified' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Certificate' => [
                        '$ref' => '#/components/schemas/CnameCertificate',
                    ],
                ],
            ],
            'CnameToken' => [
                'type' => 'object',
                'properties' => [
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'Cname' => [
                        'type' => 'string',
                    ],
                    'Token' => [
                        'type' => 'string',
                    ],
                    'ExpireTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CommentConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Comment' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CommonHeaders' => [
                'type' => 'object',
                'properties' => [
                    'Header' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                ],
                                'Value' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'CommonPrefix' => [
                'type' => 'object',
                'properties' => [
                    'Prefix' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CompleteMultipartUpload' => [
                'type' => 'object',
                'properties' => [
                    'Part' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'PartNumber' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'ETag' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'CompressionType' => [
                'type' => 'string',
                'enum' => [
                    'None',
                    'GZIP',
                ],
            ],
            'CopyObjectResult' => [
                'type' => 'object',
                'properties' => [
                    'ETag' => [
                        'type' => 'string',
                    ],
                    'LastModified' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CopyPartResult' => [
                'type' => 'object',
                'properties' => [
                    'ETag' => [
                        'type' => 'string',
                    ],
                    'LastModified' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                ],
            ],
            'CreateAccessPointConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'AccessPointName' => [
                        'type' => 'string',
                    ],
                    'NetworkOrigin' => [
                        '$ref' => '#/components/schemas/AccessPointNetworkOrigin',
                    ],
                    'VpcConfiguration' => [
                        '$ref' => '#/components/schemas/AccessPointVpcConfiguration',
                    ],
                ],
            ],
            'CreateAccessPointResult' => [
                'type' => 'object',
                'properties' => [
                    'AccessPointArn' => [
                        '$ref' => '#/components/schemas/AccessPointArn',
                    ],
                    'Alias' => [
                        '$ref' => '#/components/schemas/AccessPointAlias',
                    ],
                ],
            ],
            'CreateBucketConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'StorageClass' => [
                        '$ref' => '#/components/schemas/StorageClass',
                    ],
                    'DataRedundancyType' => [
                        '$ref' => '#/components/schemas/DataRedundancyType',
                    ],
                ],
            ],
            'CreateCacheConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'AvailableZone' => [
                        'type' => 'string',
                    ],
                    'QuotaConfiguration' => [
                        '$ref' => '#/components/schemas/CacheQuotaConfiguration',
                    ],
                ],
            ],
            'CreateDataLakeCachePrefetchJob' => [
                'type' => 'object',
                'properties' => [
                    'Includes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Tag' => [
                        'type' => 'string',
                    ],
                    'Excludes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CreateDataLakeStorageTransferJob' => [
                'type' => 'object',
                'properties' => [
                    'Includes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'ExecutorRoleId' => [
                        'type' => 'string',
                    ],
                    'LogBaseDir' => [
                        'type' => 'string',
                    ],
                    'Tag' => [
                        'type' => 'string',
                    ],
                    'NeedVerify' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'CreateFileGroup' => [
                'type' => 'object',
                'properties' => [
                    'Part' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'PartNumber' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'PartName' => [
                                    'type' => 'string',
                                ],
                                'ETag' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'CreateFileGroupResult' => [
                'type' => 'object',
                'properties' => [
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'Key' => [
                        'type' => 'string',
                    ],
                    'ETag' => [
                        'type' => 'string',
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'CreateLargeReservedCapacityResult' => [
                'type' => 'object',
                'properties' => [
                    'Owner' => [
                        '$ref' => '#/components/schemas/Owner',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Region' => [
                        'type' => 'string',
                    ],
                    'ID' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateObjectLinkResult' => [
                'type' => 'object',
                'properties' => [
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'Key' => [
                        'type' => 'string',
                    ],
                    'ETag' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CreateSelectMetaProcess' => [
                'type' => 'string',
            ],
            'DataAccelerator' => [
                'type' => 'object',
                'properties' => [
                    'BasicInfomation' => [
                        'type' => 'object',
                        'properties' => [
                            'AcceleratePaths' => [
                                '$ref' => '#/components/schemas/AcceleratePaths',
                            ],
                            'CreationDate' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'Quota' => [
                                'type' => 'string',
                            ],
                            'AvailableZone' => [
                                'type' => 'string',
                            ],
                            'QuotaFrozenUtil' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'BucketName' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DataAcceleratorConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'AvailableZone' => [
                        'type' => 'string',
                    ],
                    'Quota' => [
                        'type' => 'string',
                    ],
                    'AcceleratePaths' => [
                        '$ref' => '#/components/schemas/AcceleratePaths',
                    ],
                ],
            ],
            'DataLakeCachePrefetchJob' => [
                'type' => 'object',
                'properties' => [
                    'Id' => [
                        'type' => 'string',
                    ],
                    'HistoryId' => [
                        'type' => 'string',
                    ],
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Rule' => [
                        '$ref' => '#/components/schemas/DataLakeCachePrefetchJobRule',
                    ],
                ],
            ],
            'DataLakeCachePrefetchJobHistory' => [
                'type' => 'object',
                'properties' => [
                    'JobId' => [
                        'type' => 'string',
                    ],
                    'Id' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EndTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SucceedCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DataLakeCachePrefetchJobRule' => [
                'type' => 'object',
                'properties' => [
                    'PrefixFilter' => [
                        'type' => 'object',
                        'properties' => [
                            'Includes' => [
                                'type' => 'object',
                                'properties' => [
                                    'Include' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Excludes' => [
                                'type' => 'object',
                                'properties' => [
                                    'Exclude' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Tag' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DataLakeStorageTransferJob' => [
                'type' => 'object',
                'properties' => [
                    'Id' => [
                        'type' => 'string',
                    ],
                    'HistoryId' => [
                        'type' => 'string',
                    ],
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Rule' => [
                        '$ref' => '#/components/schemas/DataLakeStorageTransferJobRule',
                    ],
                    'ProgressInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'Percent' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'DataLakeStorageTransferJobHistory' => [
                'type' => 'object',
                'properties' => [
                    'JobId' => [
                        'type' => 'string',
                    ],
                    'Id' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EndTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SucceedCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DetailInfo' => [
                        'type' => 'object',
                        'properties' => [
                            'HDFSTransferJobId' => [
                                'type' => 'string',
                            ],
                            'HDFSTransferDataDir' => [
                                'type' => 'string',
                            ],
                            'HDFSTransferImportMetaDir' => [
                                'type' => 'string',
                            ],
                            'HDFSTransferErrInfoDir' => [
                                'type' => 'string',
                            ],
                            'LogBaseDir' => [
                                'type' => 'string',
                            ],
                            'HDFSFailedCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'ErrorMsg' => [
                                'type' => 'string',
                            ],
                            'VerifyTotalCount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'VerifyStatus' => [
                                'type' => 'string',
                            ],
                            'VerifyErrInfoDir' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'DataLakeStorageTransferJobHistoryId' => [
                'type' => 'object',
                'properties' => [
                    'HistoryId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DataLakeStorageTransferJobId' => [
                'type' => 'object',
                'properties' => [
                    'Id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DataLakeStorageTransferJobRule' => [
                'type' => 'object',
                'properties' => [
                    'PrefixFilter' => [
                        'type' => 'object',
                        'properties' => [
                            'Includes' => [
                                'type' => 'object',
                                'properties' => [
                                    'Include' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Tag' => [
                        'type' => 'string',
                    ],
                    'ExecutorRoleId' => [
                        'type' => 'string',
                    ],
                    'LogBaseDir' => [
                        'type' => 'string',
                    ],
                    'NeedVerify' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'DataLakeStorageTransferJobs' => [
                'type' => 'object',
                'properties' => [
                    'Truncated' => [
                        'type' => 'string',
                    ],
                    'NextMarkerBucket' => [
                        'type' => 'string',
                    ],
                    'NextMarkerJobId' => [
                        'type' => 'string',
                    ],
                    'DataLakeStorageTransferJob' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataLakeStorageTransferJob',
                        ],
                    ],
                ],
            ],
            'DataRedundancyType' => [
                'type' => 'string',
                'enum' => [
                    'LRS',
                    'ZRS',
                ],
            ],
            'Delete' => [
                'type' => 'object',
                'properties' => [
                    'Quiet' => [
                        'type' => 'boolean',
                    ],
                    'Object' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ObjectIdentifier',
                        ],
                    ],
                ],
            ],
            'DeleteMarkerEntry' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'VersionId' => [
                        'type' => 'string',
                    ],
                    'IsLatest' => [
                        'type' => 'boolean',
                    ],
                    'LastModified' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'Owner' => [
                        '$ref' => '#/components/schemas/Owner',
                    ],
                ],
            ],
            'DeletedObject' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'DeleteMarker' => [
                        'type' => 'boolean',
                    ],
                    'DeleteMarkerVersionId' => [
                        'type' => 'string',
                    ],
                    'VersionId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'EncodeType' => [
                'type' => 'string',
                'enum' => [
                    'url',
                ],
            ],
            'Endpoint' => [
                'type' => 'string',
            ],
            'Error' => [
                'type' => 'object',
                'properties' => [
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                    'RequestId' => [
                        'type' => 'string',
                    ],
                    'HostId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ErrorDocument' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'HttpStatus' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'EventNotificationConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'FunctionComputeConfiguration' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/FunctionComputeConfiguration',
                        ],
                    ],
                ],
            ],
            'ExtendWormConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'RetentionPeriodInDays' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'FileGroupInfo' => [
                'type' => 'object',
                'properties' => [
                    'FilePart' => [
                        'type' => 'object',
                        'properties' => [
                            'Part' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'PartNumber' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'PartName' => [
                                            'type' => 'string',
                                        ],
                                        'ETag' => [
                                            'type' => 'string',
                                        ],
                                        'PartSize' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'Key' => [
                        'type' => 'string',
                    ],
                    'ETag' => [
                        'type' => 'string',
                    ],
                    'FileLength' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'FileHeaderInfo' => [
                'type' => 'string',
                'enum' => [
                    'USE',
                    'IGNORE',
                    'NONE',
                ],
            ],
            'FunctionComputeConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'ID' => [
                        'type' => 'string',
                    ],
                    'Event' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Filter' => [
                        'type' => 'object',
                        'properties' => [
                            'Key' => [
                                'type' => 'object',
                                'properties' => [
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'Suffix' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Function' => [
                        'type' => 'object',
                        'properties' => [
                            'Arn' => [
                                'type' => 'string',
                            ],
                            'AssumeRole' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'GetAccessPointResult' => [
                'type' => 'object',
                'properties' => [
                    'AccessPointName' => [
                        '$ref' => '#/components/schemas/AccessPointName',
                    ],
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'AccountId' => [
                        'type' => 'string',
                    ],
                    'NetworkOrigin' => [
                        '$ref' => '#/components/schemas/AccessPointNetworkOrigin',
                    ],
                    'VpcConfiguration' => [
                        '$ref' => '#/components/schemas/AccessPointVpcConfiguration',
                    ],
                    'AccessPointArn' => [
                        '$ref' => '#/components/schemas/AccessPointArn',
                    ],
                    'Alias' => [
                        '$ref' => '#/components/schemas/AccessPointAlias',
                    ],
                    'Status' => [
                        '$ref' => '#/components/schemas/AccessPointStatus',
                    ],
                    'Endpoints' => [
                        'type' => 'object',
                        'properties' => [
                            'PublicEndpoint' => [
                                '$ref' => '#/components/schemas/Endpoint',
                            ],
                            'InternalEndpoint' => [
                                '$ref' => '#/components/schemas/Endpoint',
                            ],
                        ],
                    ],
                    'PublicAccessBlockConfiguration' => [
                        '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                    ],
                    'CreationDate' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetBucketProcessConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Version' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'CompliedHost' => [
                        'type' => 'string',
                    ],
                    'SourceFileProtect' => [
                        'type' => 'string',
                    ],
                    'SourceFileProtectSuffix' => [
                        'type' => 'string',
                    ],
                    'StyleDelimiters' => [
                        'type' => 'string',
                    ],
                    'BucketChannelConfig' => [
                        '$ref' => '#/components/schemas/BucketChannelConfig',
                    ],
                    'LastModified' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetChannelResult' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'OrigPicForbidden' => [
                        'type' => 'boolean',
                    ],
                    'UseSrcFormat' => [
                        'type' => 'boolean',
                    ],
                    'SetAttachName' => [
                        'type' => 'boolean',
                    ],
                    'UseStyleOnly' => [
                        'type' => 'boolean',
                    ],
                    'AutoSetContentType' => [
                        'type' => 'boolean',
                    ],
                    'Default404Pic' => [
                        'type' => 'string',
                    ],
                    'StyleDelimiters' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'LastModifyTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetObjectInfoResult' => [
                'type' => 'object',
                'properties' => [
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Key' => [
                        'type' => 'string',
                    ],
                    'EncryptFlag' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LastModified' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'ETag' => [
                        'type' => 'string',
                    ],
                    'HashCrc64ecma' => [
                        'type' => 'string',
                    ],
                    'StorageClass' => [
                        'type' => 'string',
                    ],
                    'Content-Type' => [
                        'type' => 'string',
                    ],
                    'Size' => [
                        'type' => 'string',
                    ],
                    'UploadId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetResourcePoolInfoResp' => [
                'type' => 'object',
                'properties' => [
                    'Region' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'QosConfiguration' => [
                        '$ref' => '#/components/schemas/QoSConfiguration',
                    ],
                ],
            ],
            'Grant' => [
                '$ref' => '#/components/schemas/ObjectACL',
            ],
            'HttpsConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'TLS' => [
                        'type' => 'object',
                        'properties' => [
                            'Enable' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'TLSVersion' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'CipherSuite' => [
                        'type' => 'object',
                        'properties' => [
                            'Enable' => [
                                'type' => 'boolean',
                            ],
                            'StrongCipherSuite' => [
                                'type' => 'boolean',
                            ],
                            'CustomCipherSuite' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'TLS13CustomCipherSuite' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'IndexDocument' => [
                'type' => 'object',
                'properties' => [
                    'Suffix' => [
                        'type' => 'string',
                    ],
                    'SupportSubDir' => [
                        'type' => 'boolean',
                    ],
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'InitiateWormConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'RetentionPeriodInDays' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
            'InputSerialization' => [
                'type' => 'object',
                'properties' => [
                    'CompressionType' => [
                        '$ref' => '#/components/schemas/CompressionType',
                    ],
                    'CSV' => [
                        '$ref' => '#/components/schemas/CSVInput',
                    ],
                    'JSON' => [
                        '$ref' => '#/components/schemas/JSONInput',
                    ],
                ],
            ],
            'InventoryConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Id' => [
                        'type' => 'string',
                    ],
                    'IsEnabled' => [
                        'type' => 'boolean',
                    ],
                    'Destination' => [
                        '$ref' => '#/components/schemas/InventoryDestination',
                    ],
                    'Schedule' => [
                        '$ref' => '#/components/schemas/InventorySchedule',
                    ],
                    'Filter' => [
                        '$ref' => '#/components/schemas/InventoryFilter',
                    ],
                    'IncludedObjectVersions' => [
                        'type' => 'string',
                    ],
                    'OptionalFields' => [
                        'type' => 'object',
                        'properties' => [
                            'Field' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/InventoryOptionalField',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'InventoryDestination' => [
                'type' => 'object',
                'properties' => [
                    'OSSBucketDestination' => [
                        '$ref' => '#/components/schemas/InventoryOSSBucketDestination',
                    ],
                ],
            ],
            'InventoryEncryption' => [
                'type' => 'object',
                'properties' => [
                    'SSE-OSS' => [
                        '$ref' => '#/components/schemas/SSEOSS',
                    ],
                    'SSE-KMS' => [
                        '$ref' => '#/components/schemas/SSEKMS',
                    ],
                ],
            ],
            'InventoryFilter' => [
                'type' => 'object',
                'properties' => [
                    'Prefix' => [
                        'type' => 'string',
                    ],
                    'LastModifyBeginTimeStamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LastModifyEndTimeStamp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LowerSizeBound' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'UpperSizeBound' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StorageClass' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'InventoryFormat' => [
                'type' => 'string',
                'enum' => [
                    'CSV',
                ],
            ],
            'InventoryFrequency' => [
                'type' => 'string',
                'enum' => [
                    'Daily',
                    'Weekly',
                ],
            ],
            'InventoryIncludedObjectVersions' => [
                'type' => 'string',
                'enum' => [
                    'All',
                    'Current',
                ],
            ],
            'InventoryOSSBucketDestination' => [
                'type' => 'object',
                'properties' => [
                    'Format' => [
                        '$ref' => '#/components/schemas/InventoryFormat',
                    ],
                    'AccountId' => [
                        'type' => 'string',
                    ],
                    'RoleArn' => [
                        'type' => 'string',
                    ],
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'Prefix' => [
                        'type' => 'string',
                    ],
                    'Encryption' => [
                        '$ref' => '#/components/schemas/InventoryEncryption',
                    ],
                ],
            ],
            'InventoryOptionalField' => [
                'type' => 'string',
                'enum' => [
                    'Size',
                    'LastModifiedDate',
                    'ETag',
                    'StorageClass',
                    'IsMultipartUploaded',
                    'EncryptionStatus',
                ],
            ],
            'InventorySchedule' => [
                'type' => 'object',
                'properties' => [
                    'Frequency' => [
                        '$ref' => '#/components/schemas/InventoryFrequency',
                    ],
                ],
            ],
            'JSONInput' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        '$ref' => '#/components/schemas/JSONType',
                    ],
                    'Range' => [
                        'type' => 'string',
                    ],
                    'ParseJsonNumberAsString' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'JSONOutput' => [
                'type' => 'object',
                'properties' => [
                    'RecordDelimiter' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'JSONType' => [
                'type' => 'string',
                'enum' => [
                    'DOCUMENT',
                    'LINES',
                ],
            ],
            'LifecycleConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Rule' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LifecycleRule',
                        ],
                    ],
                ],
            ],
            'LifecycleRule' => [
                'type' => 'object',
                'properties' => [
                    'ID' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Prefix' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Status' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Expiration' => [
                        'type' => 'object',
                        'properties' => [
                            'CreatedBeforeDate' => [
                                'type' => 'string',
                                'format' => 'iso8601',
                            ],
                            'Days' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'ExpiredObjectDeleteMarker' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                    'Transition' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'CreatedBeforeDate' => [
                                    'type' => 'string',
                                    'format' => 'iso8601',
                                ],
                                'Days' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'StorageClass' => [
                                    '$ref' => '#/components/schemas/StorageClass',
                                ],
                                'IsAccessTime' => [
                                    'type' => 'boolean',
                                ],
                                'ReturnToStdWhenVisit' => [
                                    'type' => 'boolean',
                                ],
                                'AllowSmallFile' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                    'AbortMultipartUpload' => [
                        'type' => 'object',
                        'properties' => [
                            'Days' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'CreatedBeforeDate' => [
                                'type' => 'string',
                                'format' => 'iso8601',
                            ],
                        ],
                    ],
                    'Tag' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                    'NoncurrentVersionExpiration' => [
                        'type' => 'object',
                        'properties' => [
                            'NoncurrentDays' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'NoncurrentVersionTransition' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'NoncurrentDays' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'StorageClass' => [
                                    '$ref' => '#/components/schemas/StorageClass',
                                ],
                                'IsAccessTime' => [
                                    'type' => 'boolean',
                                ],
                                'ReturnToStdWhenVisit' => [
                                    'type' => 'boolean',
                                ],
                                'AllowSmallFile' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                    'Filter' => [
                        'type' => 'object',
                        'properties' => [
                            'Not' => [
                                'type' => 'object',
                                'properties' => [
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'Tag' => [
                                        '$ref' => '#/components/schemas/Tag',
                                    ],
                                ],
                            ],
                            'ObjectSizeGreaterThan' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'ObjectSizeLessThan' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'AtimeBase' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ListAccessPointsResult' => [
                'type' => 'object',
                'properties' => [
                    'IsTruncated' => [
                        'type' => 'string',
                    ],
                    'NextContinuationToken' => [
                        'type' => 'string',
                    ],
                    'AccountId' => [
                        'type' => 'string',
                    ],
                    'AccessPoints' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessPoint' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/AccessPoint',
                                ],
                            ],
                        ],
                    ],
                    'MaxKeys' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'ListAllMyCacheResult' => [
                'type' => 'object',
                'properties' => [
                    'Caches' => [
                        'type' => 'object',
                        'properties' => [
                            'Cache' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/CacheBaseInfo',
                                ],
                            ],
                        ],
                    ],
                    'Owner' => [
                        '$ref' => '#/components/schemas/Owner',
                    ],
                    'Prefix' => [
                        'type' => 'string',
                    ],
                    'Marker' => [
                        'type' => 'string',
                    ],
                    'MaxKeys' => [
                        'type' => 'string',
                    ],
                    'IsTruncated' => [
                        'type' => 'boolean',
                    ],
                    'NextMarker' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ListBucketRequesterQoSInfosResult' => [
                'type' => 'object',
                'properties' => [
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'ContinuationToken' => [
                        'type' => 'string',
                    ],
                    'NextContinuationToken' => [
                        'type' => 'string',
                    ],
                    'IsTruncated' => [
                        'type' => 'boolean',
                    ],
                    'RequesterQoSInfo' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RequesterQoSInfo',
                        ],
                    ],
                ],
            ],
            'ListDataLakeCachePrefetchJobHistory' => [
                'type' => 'object',
                'properties' => [
                    'DataLakeCachePrefetchJobHistory' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataLakeCachePrefetchJobHistory',
                        ],
                    ],
                ],
            ],
            'ListDataLakeStorageTransferJobHistory' => [
                'type' => 'object',
                'properties' => [
                    'DataLakeStorageTransferJobHistory' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/DataLakeStorageTransferJobHistory',
                        ],
                    ],
                ],
            ],
            'ListResourcePoolBucketsResult' => [
                'type' => 'object',
                'properties' => [
                    'ResourcePool' => [
                        'type' => 'string',
                    ],
                    'ContionuationToken' => [
                        'type' => 'string',
                    ],
                    'NextContionuationToken' => [
                        'type' => 'string',
                    ],
                    'IsTruncated' => [
                        'type' => 'boolean',
                    ],
                    'ResourcePoolBucket' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ResourcePoolBucket',
                        ],
                    ],
                ],
            ],
            'ListResourcePoolRequesterQoSInfosResult' => [
                'type' => 'object',
                'properties' => [
                    'ResourcePool' => [
                        'type' => 'string',
                    ],
                    'ContinuationToken' => [
                        'type' => 'string',
                    ],
                    'NextContinuationToken' => [
                        'type' => 'string',
                    ],
                    'IsTruncated' => [
                        'type' => 'boolean',
                    ],
                    'RequesterQoSInfo' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/RequesterQoSInfo',
                        ],
                    ],
                ],
            ],
            'ListResourcePoolsResult' => [
                'type' => 'object',
                'properties' => [
                    'Region' => [
                        'type' => 'string',
                    ],
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'ContionuationToken' => [
                        'type' => 'string',
                    ],
                    'NextContionuationToken' => [
                        'type' => 'string',
                    ],
                    'IsTruncated' => [
                        'type' => 'boolean',
                    ],
                    'ResourcePool' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ResourcePoolSimpleInfo',
                        ],
                    ],
                ],
            ],
            'ListUserRegionsResult' => [
                'type' => 'object',
                'properties' => [
                    'Regions' => [
                        'type' => 'object',
                        'properties' => [
                            'Region' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'ListVirtualBucketResult' => [
                'type' => 'object',
                'properties' => [
                    'VirtualBucket' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/VirtualBucket',
                        ],
                    ],
                ],
            ],
            'LiveChannel' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'LastModified' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'PublishUrls' => [
                        '$ref' => '#/components/schemas/LiveChannelPublishUrls',
                    ],
                    'PlayUrls' => [
                        '$ref' => '#/components/schemas/LiveChannelPlayUrls',
                    ],
                ],
            ],
            'LiveChannelAudio' => [
                'type' => 'object',
                'properties' => [
                    'Bandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SampleRate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Codec' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LiveChannelConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Target' => [
                        '$ref' => '#/components/schemas/LiveChannelTarget',
                    ],
                    'Snapshot' => [
                        '$ref' => '#/components/schemas/LiveChannelSnapshot',
                    ],
                ],
            ],
            'LiveChannelPlayUrls' => [
                'type' => 'object',
                'properties' => [
                    'Url' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LiveChannelPublishUrls' => [
                'type' => 'object',
                'properties' => [
                    'Url' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LiveChannelSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'RoleName' => [
                        'type' => 'string',
                    ],
                    'DestBucket' => [
                        'type' => 'string',
                    ],
                    'NotifyTopic' => [
                        'type' => 'string',
                    ],
                    'Interval' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'LiveChannelTarget' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'FragDuration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FragCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'PlaylistName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LiveChannelVideo' => [
                'type' => 'object',
                'properties' => [
                    'Width' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Height' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FrameRate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Bandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Codec' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LiveRecord' => [
                'type' => 'object',
                'properties' => [
                    'StartTime' => [
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'type' => 'string',
                    ],
                    'RemoteAddr' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LocationTransferType' => [
                'type' => 'object',
                'properties' => [
                    'Location' => [
                        'type' => 'string',
                    ],
                    'TransferTypes' => [
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'LoggingEnabled' => [
                'type' => 'object',
                'properties' => [
                    'TargetBucket' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'TargetPrefix' => [
                        'type' => 'string',
                    ],
                    'LoggingRole' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetaQuery' => [
                'type' => 'object',
                'properties' => [
                    'NextToken' => [
                        'type' => 'string',
                    ],
                    'MaxResults' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Query' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'Sort' => [
                        'type' => 'string',
                    ],
                    'Order' => [
                        '$ref' => '#/components/schemas/MetaQueryOrder',
                    ],
                    'Aggregations' => [
                        'type' => 'object',
                        'properties' => [
                            'Aggregation' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/MetaQueryAggregation',
                                ],
                            ],
                        ],
                    ],
                    'MediaTypes' => [
                        'type' => 'object',
                        'properties' => [
                            'MediaType' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'SimpleQuery' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetaQueryAggregation' => [
                'type' => 'object',
                'properties' => [
                    'Field' => [
                        'type' => 'string',
                    ],
                    'Operation' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetaQueryAggregationsResult' => [
                'type' => 'object',
                'properties' => [
                    'Field' => [
                        'type' => 'string',
                    ],
                    'Operation' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'Groups' => [
                        'type' => 'object',
                        'properties' => [
                            'Group' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                        'Count' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'MetaQueryFile' => [
                'type' => 'object',
                'properties' => [
                    'Filename' => [
                        'type' => 'string',
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FileModifiedTime' => [
                        'type' => 'string',
                    ],
                    'OSSObjectType' => [
                        'type' => 'string',
                    ],
                    'OSSStorageClass' => [
                        'type' => 'string',
                    ],
                    'ObjectACL' => [
                        'type' => 'string',
                    ],
                    'ETag' => [
                        'type' => 'string',
                    ],
                    'OSSCRC64' => [
                        'type' => 'string',
                    ],
                    'ServerSideEncryption' => [
                        'type' => 'string',
                    ],
                    'ServerSideEncryptionCustomerAlgorithm' => [
                        'type' => 'string',
                    ],
                    'OSSTaggingCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'OSSTagging' => [
                        'type' => 'object',
                        'properties' => [
                            'Tagging' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/MetaQueryTagging',
                                ],
                            ],
                        ],
                    ],
                    'OSSUserMeta' => [
                        'type' => 'object',
                        'properties' => [
                            'UserMeta' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/MetaQueryUserMeta',
                                ],
                            ],
                        ],
                    ],
                    'URI' => [
                        'type' => 'string',
                    ],
                    'ProduceTime' => [
                        'type' => 'string',
                    ],
                    'ContentType' => [
                        'type' => 'string',
                    ],
                    'MediaType' => [
                        'type' => 'string',
                    ],
                    'LatLong' => [
                        'type' => 'string',
                    ],
                    'Title' => [
                        'type' => 'string',
                    ],
                    'OSSExpiration' => [
                        'type' => 'string',
                    ],
                    'AccessControlAllowOrigin' => [
                        'type' => 'string',
                    ],
                    'AccessControlRequestMethod' => [
                        'type' => 'string',
                    ],
                    'ServerSideDataEncryption' => [
                        'type' => 'string',
                    ],
                    'ServerSideEncryptionKeyId' => [
                        'type' => 'string',
                    ],
                    'CacheControl' => [
                        'type' => 'string',
                    ],
                    'ContentDisposition' => [
                        'type' => 'string',
                    ],
                    'ContentEncoding' => [
                        'type' => 'string',
                    ],
                    'ContentLanguage' => [
                        'type' => 'string',
                    ],
                    'ImageHeight' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ImageWidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'VideoWidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'VideoHeight' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Bitrate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Artist' => [
                        'type' => 'string',
                    ],
                    'AlbumArtist' => [
                        'type' => 'string',
                    ],
                    'Composer' => [
                        'type' => 'string',
                    ],
                    'Performer' => [
                        'type' => 'string',
                    ],
                    'Album' => [
                        'type' => 'string',
                    ],
                    'Duration' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'VideoStreams' => [
                        'type' => 'object',
                        'properties' => [
                            'VideoStream' => [
                                '$ref' => '#/components/schemas/MetaQueryRespVideoStream',
                            ],
                        ],
                    ],
                    'AudioStreams' => [
                        'type' => 'object',
                        'properties' => [
                            'AudioStream' => [
                                '$ref' => '#/components/schemas/MetaQueryRespAudioStream',
                            ],
                        ],
                    ],
                    'Subtitles' => [
                        'type' => 'object',
                        'properties' => [
                            'Subtitle' => [
                                '$ref' => '#/components/schemas/MetaQueryRespSubtitle',
                            ],
                        ],
                    ],
                    'Addresses' => [
                        'type' => 'object',
                        'properties' => [
                            'Address' => [
                                '$ref' => '#/components/schemas/MetaQueryRespAddress',
                            ],
                        ],
                    ],
                ],
            ],
            'MetaQueryOpenRequest' => [
                'type' => 'object',
                'properties' => [
                    'Filters' => [
                        'type' => 'object',
                        'properties' => [
                            'Filter' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'MetaQueryOrder' => [
                'type' => 'string',
                'enum' => [
                    'asc',
                    'desc',
                ],
            ],
            'MetaQueryResp' => [
                'type' => 'object',
                'properties' => [
                    'NextToken' => [
                        'type' => 'string',
                    ],
                    'Files' => [
                        'type' => 'object',
                        'properties' => [
                            'File' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/MetaQueryFile',
                                ],
                            ],
                        ],
                    ],
                    'Aggregations' => [
                        'type' => 'object',
                        'properties' => [
                            'Aggregation' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/MetaQueryAggregationsResult',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'MetaQueryRespAddress' => [
                'type' => 'object',
                'properties' => [
                    'AddressLine' => [
                        'type' => 'string',
                    ],
                    'City' => [
                        'type' => 'string',
                    ],
                    'District' => [
                        'type' => 'string',
                    ],
                    'Language' => [
                        'type' => 'string',
                    ],
                    'Province' => [
                        'type' => 'string',
                    ],
                    'Township' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetaQueryRespAudioStream' => [
                'type' => 'object',
                'properties' => [
                    'CodecName' => [
                        'type' => 'string',
                    ],
                    'Bitrate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SampleRate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StartTime' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'Duration' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'Channels' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Language' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetaQueryRespSubtitle' => [
                'type' => 'object',
                'properties' => [
                    'CodecName' => [
                        'type' => 'string',
                    ],
                    'Language' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'Duration' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'MetaQueryRespVideoStream' => [
                'type' => 'object',
                'properties' => [
                    'CodecName' => [
                        'type' => 'string',
                    ],
                    'Language' => [
                        'type' => 'string',
                    ],
                    'Bitrate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FrameRate' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'Duration' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'FrameCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'BitDepth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'PixelFormat' => [
                        'type' => 'string',
                    ],
                    'ColorSpace' => [
                        'type' => 'string',
                    ],
                    'Height' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Width' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'MetaQueryTagging' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetaQueryUserMeta' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NotificationConfiguration' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'TopicConfiguration' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Id' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'ObjectACL' => [
                'type' => 'string',
                'enum' => [
                    'private',
                    'public-read',
                    'public-read-write',
                    'default',
                ],
            ],
            'ObjectHashConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'ObjectHashFunction' => [
                        'type' => 'string',
                    ],
                    'DisplayObjectHash' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ObjectIdentifier' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'VersionId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ObjectLinkInfo' => [
                'type' => 'object',
                'properties' => [
                    'Part' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'PartNumber' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                                'PartName' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'ObjectList' => [
                'type' => 'array',
                'items' => [
                    '$ref' => '#/components/schemas/ObjectSummary',
                ],
            ],
            'ObjectProcessConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'AllowedFeatures' => [
                        'type' => 'object',
                        'properties' => [
                            'AllowedFeature' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'TransformationConfigurations' => [
                        'type' => 'object',
                        'properties' => [
                            'TransformationConfiguration' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Actions' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Action' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'ContentTransformation' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'FunctionCompute' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'FunctionAssumeRoleArn' => [
                                                            'type' => 'string',
                                                        ],
                                                        'FunctionArn' => [
                                                            'type' => 'string',
                                                        ],
                                                    ],
                                                ],
                                                'AdditionalFeatures' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'CustomForwardHeaders' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'CustomForwardHeader' => [
                                                                    'type' => 'array',
                                                                    'items' => [
                                                                        'type' => 'string',
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
            ],
            'ObjectSummary' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'LastModified' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'ETag' => [
                        'type' => 'string',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StorageClass' => [
                        '$ref' => '#/components/schemas/StorageClass',
                    ],
                    'Owner' => [
                        '$ref' => '#/components/schemas/Owner',
                    ],
                    'RestoreInfo' => [
                        'type' => 'string',
                    ],
                    'TransitionTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                ],
            ],
            'ObjectVersion' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'VersionId' => [
                        'type' => 'string',
                    ],
                    'IsLatest' => [
                        'type' => 'boolean',
                    ],
                    'LastModified' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                    'ETag' => [
                        'type' => 'string',
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'StorageClass' => [
                        '$ref' => '#/components/schemas/StorageClass',
                    ],
                    'Owner' => [
                        '$ref' => '#/components/schemas/Owner',
                    ],
                    'RestoreInfo' => [
                        'type' => 'string',
                    ],
                    'TransitionTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                ],
            ],
            'OutputSerialization' => [
                'type' => 'object',
                'properties' => [
                    'CSV' => [
                        '$ref' => '#/components/schemas/CSVOutput',
                    ],
                    'JSON' => [
                        '$ref' => '#/components/schemas/JSONOutput',
                    ],
                    'KeepAllColumns' => [
                        'type' => 'boolean',
                    ],
                    'OutputHeader' => [
                        'type' => 'boolean',
                    ],
                    'OutputRawData' => [
                        'type' => 'boolean',
                    ],
                    'EnablePayloadCrc' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'OverwriteConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Rule' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ID' => [
                                    'type' => 'string',
                                ],
                                'Action' => [
                                    'type' => 'string',
                                ],
                                'Prefix' => [
                                    'type' => 'string',
                                ],
                                'Suffix' => [
                                    'type' => 'string',
                                ],
                                'Principals' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Principal' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Owner' => [
                'type' => 'object',
                'properties' => [
                    'ID' => [
                        'type' => 'string',
                    ],
                    'DisplayName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Part' => [
                'type' => 'object',
                'properties' => [
                    'ETag' => [
                        'type' => 'string',
                    ],
                    'PartNumber' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LastModified' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                ],
            ],
            'PromoteDataLakeCacheReq' => [
                'type' => 'object',
                'properties' => [
                    'Object' => [
                        'type' => 'object',
                        'properties' => [
                            'ObjectName' => [
                                'type' => 'string',
                            ],
                            'Range' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'PublicAccessBlockConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'BlockPublicAccess' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'PutChannelConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'OrigPicForbidden' => [
                        'type' => 'boolean',
                    ],
                    'UseSrcFormat' => [
                        'type' => 'boolean',
                    ],
                    'SetAttachName' => [
                        'type' => 'boolean',
                    ],
                    'UseStyleOnly' => [
                        'type' => 'boolean',
                    ],
                    'AutoSetContentType' => [
                        'type' => 'boolean',
                    ],
                    'Default404Pic' => [
                        'type' => 'string',
                    ],
                    'StyleDelimiters' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PutReplicationRule' => [
                'type' => 'object',
                'properties' => [
                    'ID' => [
                        'type' => 'string',
                    ],
                    'PrefixSet' => [
                        '$ref' => '#/components/schemas/ReplicationPrefixSet',
                    ],
                    'Action' => [
                        'type' => 'string',
                    ],
                    'Destination' => [
                        '$ref' => '#/components/schemas/ReplicationDestination',
                    ],
                    'HistoricalObjectReplication' => [
                        'type' => 'string',
                        'enum' => [
                            'enabled',
                            'disabled',
                        ],
                    ],
                    'SyncRole' => [
                        'type' => 'string',
                    ],
                    'SourceSelectionCriteria' => [
                        '$ref' => '#/components/schemas/ReplicationSourceSelectionCriteria',
                    ],
                    'EncryptionConfiguration' => [
                        '$ref' => '#/components/schemas/ReplicationEncryptionConfiguration',
                    ],
                    'RTC' => [
                        '$ref' => '#/components/schemas/RTC',
                    ],
                ],
            ],
            'QoSConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'TotalUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'QoSConfigurationWithRemark' => [
                'type' => 'object',
                'properties' => [
                    'TotalUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Remark' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'RTC' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RefererConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'AllowEmptyReferer' => [
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'AllowTruncateQueryString' => [
                        'type' => 'boolean',
                    ],
                    'TruncatePath' => [
                        'type' => 'boolean',
                    ],
                    'RefererList' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'Referer' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'RefererBlacklist' => [
                        'type' => 'object',
                        'properties' => [
                            'Referer' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'RegionInfo' => [
                'type' => 'object',
                'properties' => [
                    'Region' => [
                        'type' => 'string',
                    ],
                    'InternetEndpoint' => [
                        'type' => 'string',
                    ],
                    'InternalEndpoint' => [
                        'type' => 'string',
                    ],
                    'AccelerateEndpoint' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ReplicationAction' => [
                'type' => 'string',
            ],
            'ReplicationConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Rule' => [
                        '$ref' => '#/components/schemas/PutReplicationRule',
                    ],
                ],
            ],
            'ReplicationDestination' => [
                'type' => 'object',
                'properties' => [
                    'Bucket' => [
                        'type' => 'string',
                    ],
                    'Location' => [
                        'type' => 'string',
                    ],
                    'TransferType' => [
                        'type' => 'string',
                        'enum' => [
                            'internal',
                            'oss_acc',
                        ],
                    ],
                ],
            ],
            'ReplicationEncryptionConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'ReplicaKmsKeyID' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ReplicationPrefixSet' => [
                'type' => 'object',
                'properties' => [
                    'Prefix' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ReplicationProgressRule' => [
                'type' => 'object',
                'properties' => [
                    'ID' => [
                        'type' => 'string',
                    ],
                    'PrefixSet' => [
                        '$ref' => '#/components/schemas/ReplicationPrefixSet',
                    ],
                    'Action' => [
                        'type' => 'string',
                    ],
                    'Destination' => [
                        '$ref' => '#/components/schemas/ReplicationDestination',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'HistoricalObjectReplication' => [
                        'type' => 'string',
                    ],
                    'Progress' => [
                        'type' => 'object',
                        'properties' => [
                            'HistoricalObject' => [
                                'type' => 'string',
                            ],
                            'NewObject' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'ReplicationRule' => [
                'type' => 'object',
                'properties' => [
                    'ID' => [
                        'type' => 'string',
                    ],
                    'PrefixSet' => [
                        '$ref' => '#/components/schemas/ReplicationPrefixSet',
                    ],
                    'Action' => [
                        'type' => 'string',
                    ],
                    'Destination' => [
                        '$ref' => '#/components/schemas/ReplicationDestination',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'HistoricalObjectReplication' => [
                        'type' => 'string',
                        'enum' => [
                            'enabled',
                            'disabled',
                        ],
                    ],
                    'SyncRole' => [
                        'type' => 'string',
                    ],
                    'SourceSelectionCriteria' => [
                        '$ref' => '#/components/schemas/ReplicationSourceSelectionCriteria',
                    ],
                    'EncryptionConfiguration' => [
                        '$ref' => '#/components/schemas/ReplicationEncryptionConfiguration',
                    ],
                    'RTC' => [
                        '$ref' => '#/components/schemas/RTC',
                    ],
                ],
            ],
            'ReplicationRuleProgress' => [
                'type' => 'object',
                'properties' => [
                    'ID' => [
                        'type' => 'string',
                    ],
                    'PrefixSet' => [
                        '$ref' => '#/components/schemas/ReplicationPrefixSet',
                    ],
                    'Action' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ReplicationRules' => [
                'type' => 'object',
                'properties' => [
                    'ID' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ReplicationSourceSelectionCriteria' => [
                'type' => 'object',
                'properties' => [
                    'SseKmsEncryptedObjects' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'type' => 'string',
                                'enum' => [
                                    'Enabled',
                                    'Disabled',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'ReplicationStatus' => [
                'type' => 'string',
            ],
            'RequestPaymentConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Payer' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RequesterQoSInfo' => [
                'type' => 'object',
                'properties' => [
                    'Requester' => [
                        'type' => 'string',
                    ],
                    'QoSConfiguration' => [
                        '$ref' => '#/components/schemas/QoSConfiguration',
                    ],
                ],
            ],
            'ReservedCapacityCreateConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Region' => [
                        'type' => 'string',
                    ],
                    'Capacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DataRedundancyType' => [
                        'type' => 'string',
                    ],
                    'Years' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ReservedCapacityRecord' => [
                'type' => 'object',
                'properties' => [
                    'Owner' => [
                        '$ref' => '#/components/schemas/Owner',
                    ],
                    'ID' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Region' => [
                        'type' => 'string',
                    ],
                    'Version' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Capacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'CreateTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LastModifyTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LastExpansionCapacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExpansionTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DueTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Years' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FirstTimeEnabled' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                    'DataRedundancyType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ReservedCapacityRecordList' => [
                'type' => 'object',
                'properties' => [
                    'ReservedCapacityRecord' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ReservedCapacityRecord',
                        ],
                    ],
                ],
            ],
            'ReservedCapacityUpdateConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Capacity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Years' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResourceGroupId' => [
                'type' => 'string',
            ],
            'ResourcePoolBucket' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'JoinTime' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                ],
            ],
            'ResourcePoolSimpleInfo' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ResponseHeaderConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Rule' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'Filters' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Operation' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                                'HideHeaders' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Header' => [
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'RestoreRequest' => [
                'type' => 'object',
                'properties' => [
                    'Days' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'JobParameters' => [
                        'type' => 'object',
                        'properties' => [
                            'Tier' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'RoutingRule' => [
                'type' => 'object',
                'properties' => [
                    'RuleNumber' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Condition' => [
                        '$ref' => '#/components/schemas/RoutingRuleCondition',
                    ],
                    'Redirect' => [
                        '$ref' => '#/components/schemas/RoutingRuleRedirect',
                    ],
                    'LuaConfig' => [
                        '$ref' => '#/components/schemas/RoutingRuleLuaConfig',
                    ],
                ],
            ],
            'RoutingRuleCondition' => [
                'type' => 'object',
                'properties' => [
                    'KeyPrefixEquals' => [
                        'type' => 'string',
                    ],
                    'KeySuffixEquals' => [
                        'type' => 'string',
                    ],
                    'HttpErrorCodeReturnedEquals' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IncludeHeader' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                ],
                                'Equals' => [
                                    'type' => 'string',
                                ],
                                'StartsWith' => [
                                    'type' => 'string',
                                ],
                                'EndsWith' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'RoutingRuleLuaConfig' => [
                'type' => 'object',
                'properties' => [
                    'Script' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RoutingRuleRedirect' => [
                'type' => 'object',
                'properties' => [
                    'RedirectType' => [
                        'type' => 'string',
                    ],
                    'PassQueryString' => [
                        'type' => 'boolean',
                    ],
                    'MirrorURL' => [
                        'type' => 'string',
                    ],
                    'MirrorSNI' => [
                        'type' => 'boolean',
                    ],
                    'MirrorPassQueryString' => [
                        'type' => 'boolean',
                    ],
                    'MirrorFollowRedirect' => [
                        'type' => 'boolean',
                    ],
                    'MirrorCheckMd5' => [
                        'type' => 'boolean',
                    ],
                    'MirrorHeaders' => [
                        'type' => 'object',
                        'properties' => [
                            'PassAll' => [
                                'type' => 'boolean',
                            ],
                            'Pass' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'Remove' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'Set' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Protocol' => [
                        'type' => 'string',
                    ],
                    'HostName' => [
                        'type' => 'string',
                    ],
                    'ReplaceKeyPrefixWith' => [
                        'type' => 'string',
                    ],
                    'EnableReplacePrefix' => [
                        'type' => 'boolean',
                    ],
                    'ReplaceKeyWith' => [
                        'type' => 'string',
                    ],
                    'HttpRedirectCode' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MirrorPassOriginalSlashes' => [
                        'type' => 'boolean',
                    ],
                    'MirrorURLSlave' => [
                        'type' => 'string',
                    ],
                    'MirrorURLProbe' => [
                        'type' => 'string',
                    ],
                    'MirrorSaveOssMeta' => [
                        'type' => 'boolean',
                    ],
                    'MirrorProxyPass' => [
                        'type' => 'boolean',
                    ],
                    'MirrorAllowGetImageInfo' => [
                        'type' => 'boolean',
                    ],
                    'MirrorAllowVideoSnapshot' => [
                        'type' => 'boolean',
                    ],
                    'MirrorIsExpressTunnel' => [
                        'type' => 'boolean',
                    ],
                    'MirrorDstRegion' => [
                        'type' => 'string',
                    ],
                    'MirrorDstVpcId' => [
                        'type' => 'string',
                    ],
                    'MirrorDstSlaveVpcId' => [
                        'type' => 'string',
                    ],
                    'MirrorUserLastModified' => [
                        'type' => 'boolean',
                    ],
                    'MirrorSwitchAllErrors' => [
                        'type' => 'boolean',
                    ],
                    'MirrorTunnelId' => [
                        'type' => 'string',
                    ],
                    'MirrorUsingRole' => [
                        'type' => 'boolean',
                    ],
                    'MirrorRole' => [
                        'type' => 'string',
                    ],
                    'MirrorAllowHeadObject' => [
                        'type' => 'boolean',
                    ],
                    'TransparentMirrorResponseCodes' => [
                        'type' => 'string',
                    ],
                    'MirrorAsyncStatus' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'MirrorTaggings' => [
                        'type' => 'object',
                        'properties' => [
                            'Taggings' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'MirrorReturnHeaders' => [
                        'type' => 'object',
                        'properties' => [
                            'ReturnHeader' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'type' => 'string',
                                        ],
                                        'Value' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'MirrorAuth' => [
                        'type' => 'object',
                        'properties' => [
                            'AuthType' => [
                                'type' => 'string',
                            ],
                            'Region' => [
                                'type' => 'string',
                            ],
                            'AccessKeyId' => [
                                'type' => 'string',
                            ],
                            'AccessKeySecret' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'MirrorMultiAlternates' => [
                        'type' => 'object',
                        'properties' => [
                            'MirrorMultiAlternate' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'MirrorMultiAlternateNumber' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'MirrorMultiAlternateURL' => [
                                            'type' => 'string',
                                        ],
                                        'MirrorMultiAlternateVpcId' => [
                                            'type' => 'string',
                                        ],
                                        'MirrorMultiAlternateDstRegion' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'RtcConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'RTC' => [
                        '$ref' => '#/components/schemas/RTC',
                    ],
                    'ID' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SSEKMS' => [
                'type' => 'object',
                'properties' => [
                    'KeyId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SSEOSS' => [
                'type' => 'string',
            ],
            'SelectMetaRequest' => [
                'type' => 'object',
                'properties' => [
                    'InputSerialization' => [
                        '$ref' => '#/components/schemas/InputSerialization',
                    ],
                    'OverwriteIfExists' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SelectMetaStatus' => [
                'type' => 'object',
                'properties' => [
                    'Offset' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalScannedBytes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Status' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SplitsCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'RowsCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ColsCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ErrorMessage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SelectProcess' => [
                'type' => 'string',
            ],
            'SelectRequest' => [
                'type' => 'object',
                'properties' => [
                    'Expression' => [
                        'type' => 'string',
                    ],
                    'InputSerialization' => [
                        '$ref' => '#/components/schemas/InputSerialization',
                    ],
                    'OutputSerialization' => [
                        '$ref' => '#/components/schemas/OutputSerialization',
                    ],
                    'Options' => [
                        '$ref' => '#/components/schemas/SelectRequestOptions',
                    ],
                ],
            ],
            'SelectRequestOptions' => [
                'type' => 'object',
                'properties' => [
                    'SkipPartialDataRecord' => [
                        'type' => 'boolean',
                    ],
                    'MaxSkippedRecordsAllowed' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ServerSideEncryptionRule' => [
                'type' => 'object',
                'properties' => [
                    'ApplyServerSideEncryptionByDefault' => [
                        '$ref' => '#/components/schemas/ApplyServerSideEncryptionByDefault',
                    ],
                ],
            ],
            'StorageClass' => [
                'type' => 'string',
                'enum' => [
                    'Standard',
                    'IA',
                    'Archive',
                    'ColdArchive',
                    'DeepColdArchive',
                ],
            ],
            'Style' => [
                'type' => 'object',
                'properties' => [
                    'Content' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'StyleInfo' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'LastModifyTime' => [
                        'type' => 'string',
                    ],
                    'Category' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Tag' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'TagSet' => [
                'type' => 'object',
                'properties' => [
                    'Tag' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Tag',
                        ],
                    ],
                ],
            ],
            'Tagging' => [
                'type' => 'object',
                'properties' => [
                    'TagSet' => [
                        '$ref' => '#/components/schemas/TagSet',
                        'required' => false,
                    ],
                ],
            ],
            'TransferAccelerationConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Upload' => [
                'type' => 'object',
                'properties' => [
                    'Key' => [
                        'type' => 'string',
                    ],
                    'UploadId' => [
                        'type' => 'string',
                    ],
                    'Initiated' => [
                        'type' => 'string',
                        'format' => 'iso8601',
                    ],
                ],
            ],
            'UserAntiDDOSInfo' => [
                'type' => 'object',
                'properties' => [
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                    'Owner' => [
                        'type' => 'string',
                    ],
                    'Ctime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Mtime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ActiveTime' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UserDefinedLogFieldsConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'HeaderSet' => [
                        'type' => 'object',
                        'properties' => [
                            'header' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'ParamSet' => [
                        'type' => 'object',
                        'properties' => [
                            'parameter' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'UserQosConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'TotalUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetUploadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetDownloadBandwidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'IntranetQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ExtranetQps' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Remark' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Region' => [
                        'type' => 'string',
                    ],
                    'DefaultQoSConfiguration' => [
                        '$ref' => '#/components/schemas/QoSConfigurationWithRemark',
                    ],
                ],
            ],
            'VersioningConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        '$ref' => '#/components/schemas/BucketVersioningStatus',
                    ],
                ],
            ],
            'VirtualBucket' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                    ],
                    'RealBucket' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'Status' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'VirtualBucketConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'RealBucket' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'VpcId' => [
                'type' => 'string',
            ],
            'WebsiteConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'IndexDocument' => [
                        '$ref' => '#/components/schemas/IndexDocument',
                    ],
                    'ErrorDocument' => [
                        '$ref' => '#/components/schemas/ErrorDocument',
                    ],
                    'RoutingRules' => [
                        'type' => 'object',
                        'properties' => [
                            'RoutingRule' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/RoutingRule',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ListBuckets' => [
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-resource-group-id',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ResourceGroupId',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tag-key',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tag-value',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'tagging',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListAllMyBucketsResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Owner' => [
                                        '$ref' => '#/components/schemas/Owner',
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'Marker' => [
                                        'type' => 'string',
                                    ],
                                    'MaxKeys' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'NextMarker' => [
                                        'type' => 'string',
                                    ],
                                    'Buckets' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Bucket' => [
                                                'type' => 'array',
                                                'items' => [
                                                    '$ref' => '#/components/schemas/Bucket',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5xx' => [],
            ],
        ],
        'DescribeRegions' => [
            'path' => '/?regions',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'regions',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RegionInfoList' => [
                                'type' => 'object',
                                'properties' => [
                                    'RegionInfo' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/RegionInfo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetBucketStat' => [
            'path' => '/?stat',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'BucketStat' => [
                                '$ref' => '#/components/schemas/BucketStat',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucket' => [
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/BucketACL',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-resource-group-id',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ResourceGroupId',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-bucket-tagging',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'CreateBucketConfiguration' => [
                                '$ref' => '#/components/schemas/CreateBucketConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'DeleteBucket' => [
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'ListObjects' => [
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'delimiter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListBucketResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'Marker' => [
                                        'type' => 'string',
                                    ],
                                    'MaxKeys' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Delimiter' => [
                                        'type' => 'string',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                    'NextMarker' => [
                                        'type' => 'string',
                                    ],
                                    'Contents' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/ObjectSummary',
                                        ],
                                    ],
                                    'CommonPrefixes' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CommonPrefix',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'ListObjectsV2' => [
            'path' => '/?list-type=2',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'delimiter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'fetch-owner',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'start-after',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'continuation-token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListBucketResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'StartAfter' => [
                                        'type' => 'string',
                                    ],
                                    'MaxKeys' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Delimiter' => [
                                        'type' => 'string',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'KeyCount' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                    'ContinuationToken' => [
                                        'type' => 'string',
                                    ],
                                    'NextContinuationToken' => [
                                        'type' => 'string',
                                    ],
                                    'Contents' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/ObjectSummary',
                                        ],
                                    ],
                                    'CommonPrefixes' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CommonPrefix',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'GetBucketInfo' => [
            'path' => '/?bucketInfo',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'BucketInfo' => [
                                '$ref' => '#/components/schemas/BucketInfo',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'GetBucketLocation' => [
            'path' => '/?location',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'LocationConstraint' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'ListAccessPoints' => [
            'path' => '/?accessPoint',
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
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'continuation-token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListAccessPointsResult' => [
                                '$ref' => '#/components/schemas/ListAccessPointsResult',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAccessPoint' => [
            'path' => '/?accessPoint',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'header',
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
                            'GetAccessPointResult' => [
                                '$ref' => '#/components/schemas/GetAccessPointResult',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAccessPointPolicy' => [
            'path' => '/?accessPointPolicy',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAccessPointPolicy' => [
            'path' => '/?accessPointPolicy',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PutAccessPointPolicy' => [
            'path' => '/?accessPointPolicy',
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
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
        'DeleteAccessPoint' => [
            'path' => '/?accessPoint',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'CreateAccessPoint' => [
            'path' => '/?accessPoint',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'CreateAccessPointConfiguration' => [
                                '$ref' => '#/components/schemas/CreateAccessPointConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CreateAccessPointResult' => [
                                '$ref' => '#/components/schemas/CreateAccessPointResult',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'InitiateBucketWorm' => [
            'path' => '/?worm',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'InitiateWormConfiguration' => [
                                '$ref' => '#/components/schemas/InitiateWormConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
            ],
        ],
        'AbortBucketWorm' => [
            'path' => '/?worm',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'CompleteBucketWorm' => [
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'wormId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'ExtendBucketWorm' => [
            'path' => '/?wormExtend',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'wormId',
                    'in' => 'query',
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
                            'ExtendWormConfiguration' => [
                                '$ref' => '#/components/schemas/ExtendWormConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'GetBucketWorm' => [
            'path' => '/?worm',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'WormConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'WormId' => [
                                        'type' => 'string',
                                    ],
                                    'State' => [
                                        '$ref' => '#/components/schemas/BucketWormState',
                                    ],
                                    'RetentionPeriodInDays' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'CreationDate' => [
                                        'type' => 'string',
                                    ],
                                    'ExpirationDate' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketAcl' => [
            'path' => '/?acl',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/BucketACL',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketAcl' => [
            'path' => '/?acl',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'AccessControlPolicy' => [
                                'type' => 'object',
                                'properties' => [
                                    'Owner' => [
                                        '$ref' => '#/components/schemas/Owner',
                                    ],
                                    'AccessControlList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Grant' => [
                                                '$ref' => '#/components/schemas/BucketACL',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PutBucketLifecycle' => [
            'path' => '/?lifecycle',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-allow-same-action-overlap',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'LifecycleConfiguration' => [
                                '$ref' => '#/components/schemas/LifecycleConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketLifecycle' => [
            'path' => '/?lifecycle',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'LifecycleConfiguration' => [
                                '$ref' => '#/components/schemas/LifecycleConfiguration',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteBucketLifecycle' => [
            'path' => '/?lifecycle',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutBucketTransferAcceleration' => [
            'path' => '/?transferAcceleration',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'TransferAccelerationConfiguration' => [
                                '$ref' => '#/components/schemas/TransferAccelerationConfiguration',
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
        'GetBucketTransferAcceleration' => [
            'path' => '/?transferAcceleration',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'TransferAccelerationConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Enabled' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketVersioning' => [
            'path' => '/?versioning',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'VersioningConfiguration' => [
                                '$ref' => '#/components/schemas/VersioningConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
            ],
        ],
        'GetBucketVersioning' => [
            'path' => '/?versioning',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'VersioningConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        '$ref' => '#/components/schemas/BucketVersioningStatus',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '4xx' => [],
            ],
        ],
        'ListObjectVersions' => [
            'path' => '/?versions',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'delimiter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'key-marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'version-id-marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListVersionsResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'type' => 'string',
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'KeyMarker' => [
                                        'type' => 'string',
                                    ],
                                    'VersionIdMarker' => [
                                        'type' => 'string',
                                    ],
                                    'MaxKeys' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'Delimiter' => [
                                        'type' => 'string',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                    'NextKeyMarker' => [
                                        'type' => 'string',
                                    ],
                                    'NextVersionIdMarker' => [
                                        'type' => 'string',
                                    ],
                                    'Version' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/ObjectVersion',
                                        ],
                                    ],
                                    'DeleteMarker' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/DeleteMarkerEntry',
                                        ],
                                    ],
                                    'CommonPrefixes' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CommonPrefix',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '4xx' => [],
                '5xx' => [],
            ],
        ],
        'PutBucketPolicy' => [
            'path' => '/?policy',
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
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
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
                        'type' => 'string',
                        'format' => 'binary',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetBucketPolicy' => [
            'path' => '/?policy',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteBucketPolicy' => [
            'path' => '/?policy',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
            ],
        ],
        'GetBucketPolicyStatus' => [
            'path' => '/?policyStatus',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PolicyStatus' => [
                                'type' => 'object',
                                'properties' => [
                                    'IsPublic' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketRtc' => [
            'path' => '/?rtc',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ReplicationRule' => [
                                '$ref' => '#/components/schemas/RtcConfiguration',
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
        'PutBucketReplication' => [
            'path' => '/?replication&comp=add',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ReplicationConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Rule' => [
                                        '$ref' => '#/components/schemas/ReplicationRule',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketReplication' => [
            'path' => '/?replication',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ReplicationConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Rule' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/ReplicationRule',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetBucketReplicationLocation' => [
            'path' => '/?replicationLocation',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ReplicationLocation' => [
                                'type' => 'object',
                                'properties' => [
                                    'Location' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'LocationTransferTypeConstraint' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'LocationTransferType' => [
                                                'type' => 'array',
                                                'items' => [
                                                    '$ref' => '#/components/schemas/LocationTransferType',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'LocationRTCConstraint' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Location' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'string',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5xx' => [],
            ],
        ],
        'GetBucketReplicationProgress' => [
            'path' => '/?replicationProgress',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'rule-id',
                    'in' => 'query',
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
                            'ReplicationProgress' => [
                                'type' => 'object',
                                'properties' => [
                                    'Rule' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/ReplicationProgressRule',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteBucketReplication' => [
            'path' => '/?replication&comp=delete',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ReplicationRules' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ID' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5xx' => [],
            ],
        ],
        'PutBucketInventory' => [
            'path' => '/?inventory',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'inventoryId',
                    'in' => 'query',
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
                            'InventoryConfiguration' => [
                                '$ref' => '#/components/schemas/InventoryConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
            ],
        ],
        'GetBucketInventory' => [
            'path' => '/?inventory',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'inventoryId',
                    'in' => 'query',
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
                            'InventoryConfiguration' => [
                                '$ref' => '#/components/schemas/InventoryConfiguration',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'ListBucketInventory' => [
            'path' => '/?inventory',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'continuation-token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListInventoryConfigurationsResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'InventoryConfiguration' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/InventoryConfiguration',
                                        ],
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'NextContinuationToken' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '4xx' => [],
            ],
        ],
        'DeleteBucketInventory' => [
            'path' => '/?inventory',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'inventoryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '4xx' => [],
            ],
        ],
        'PutBucketLogging' => [
            'path' => '/?logging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'BucketLoggingStatus' => [
                                '$ref' => '#/components/schemas/BucketLoggingStatus',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketLogging' => [
            'path' => '/?logging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'BucketLoggingStatus' => [
                                '$ref' => '#/components/schemas/BucketLoggingStatus',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteBucketLogging' => [
            'path' => '/?logging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutUserDefinedLogFieldsConfig' => [
            'path' => '/?userDefinedLogFieldsConfig',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'UserDefinedLogFieldsConfiguration' => [
                                '$ref' => '#/components/schemas/UserDefinedLogFieldsConfiguration',
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
        'GetUserDefinedLogFieldsConfig' => [
            'path' => '/?userDefinedLogFieldsConfig',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'UserDefinedLogFieldsConfiguration' => [
                                '$ref' => '#/components/schemas/UserDefinedLogFieldsConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteUserDefinedLogFieldsConfig' => [
            'path' => '/?userDefinedLogFieldsConfig',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketWebsite' => [
            'path' => '/?website',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'WebsiteConfiguration' => [
                                '$ref' => '#/components/schemas/WebsiteConfiguration',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PutBucketWebsite' => [
            'path' => '/?website',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'WebsiteConfiguration' => [
                                '$ref' => '#/components/schemas/WebsiteConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'DeleteBucketWebsite' => [
            'path' => '/?website',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutBucketReferer' => [
            'path' => '/?referer',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'RefererConfiguration' => [
                                '$ref' => '#/components/schemas/RefererConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketReferer' => [
            'path' => '/?referer',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'RefererConfiguration' => [
                                '$ref' => '#/components/schemas/RefererConfiguration',
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PutBucketTags' => [
            'path' => '/?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'Tagging' => [
                                '$ref' => '#/components/schemas/Tagging',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketTags' => [
            'path' => '/?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'Tagging' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagSet' => [
                                        '$ref' => '#/components/schemas/TagSet',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteBucketTags' => [
            'path' => '/?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'ListUserDataRedundancyTransition' => [
            'path' => '/?redundancyTransition',
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
                    'name' => 'continuation-token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'max-keys',
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
                            'ListBucketDataRedundancyTransition' => [
                                'type' => 'object',
                                'properties' => [
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'NextContinuationToken' => [
                                        'type' => 'string',
                                    ],
                                    'BucketDataRedundancyTransition' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/BucketDataRedundancyTransition',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListBucketDataRedundancyTransition' => [
            'path' => '/?redundancyTransition',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ListBucketDataRedundancyTransition' => [
                                'type' => 'object',
                                'properties' => [
                                    'BucketDataRedundancyTransition' => [
                                        '$ref' => '#/components/schemas/BucketDataRedundancyTransition',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetBucketDataRedundancyTransition' => [
            'path' => '/?redundancyTransition',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-redundancy-transition-taskid',
                    'in' => 'query',
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
                            'BucketDataRedundancyTransition' => [
                                '$ref' => '#/components/schemas/BucketDataRedundancyTransition',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateBucketDataRedundancyTransition' => [
            'path' => '/?redundancyTransition',
            'methods' => [
                'post',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-target-redundancy-type',
                    'in' => 'query',
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
                            'BucketDataRedundancyTransition' => [
                                'type' => 'object',
                                'properties' => [
                                    'TaskId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteBucketDataRedundancyTransition' => [
            'path' => '/?redundancyTransition',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-redundancy-transition-taskid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'PutBucketEncryption' => [
            'path' => '/?encryption',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ServerSideEncryptionRule' => [
                                '$ref' => '#/components/schemas/ServerSideEncryptionRule',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketEncryption' => [
            'path' => '/?encryption',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ServerSideEncryptionRule' => [
                                'type' => 'object',
                                'properties' => [
                                    'ApplyServerSideEncryptionByDefault' => [
                                        '$ref' => '#/components/schemas/ApplyServerSideEncryptionByDefault',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteBucketEncryption' => [
            'path' => '/?encryption',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutBucketRequestPayment' => [
            'path' => '/?requestPayment',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'RequestPaymentConfiguration' => [
                                '$ref' => '#/components/schemas/RequestPaymentConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketRequestPayment' => [
            'path' => '/?requestPayment',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'RequestPaymentConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Payer' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PutBucketCors' => [
            'path' => '/?cors',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'CORSConfiguration' => [
                                '$ref' => '#/components/schemas/CORSConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetBucketCors' => [
            'path' => '/?cors',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'CORSConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'CORSRule' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CORSRule',
                                        ],
                                    ],
                                    'ResponseVary' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteBucketCors' => [
            'path' => '/?cors',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'OptionObject' => [
            'path' => '/{key}',
            'methods' => [
                'options',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Origin',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Access-Control-Request-Method',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Access-Control-Request-Headers',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutBucketAccessMonitor' => [
            'path' => '/?accessmonitor',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'AccessMonitorConfiguration' => [
                                '$ref' => '#/components/schemas/AccessMonitorConfiguration',
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
        'GetBucketAccessMonitor' => [
            'path' => '/?accessmonitor',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'AccessMonitorConfiguration' => [
                                '$ref' => '#/components/schemas/AccessMonitorConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetMetaQueryStatus' => [
            'path' => '/?metaQuery',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'MetaQueryStatus' => [
                                'type' => 'object',
                                'properties' => [
                                    'State' => [
                                        'type' => 'string',
                                    ],
                                    'Phase' => [
                                        'type' => 'string',
                                    ],
                                    'CreateTime' => [
                                        'type' => 'string',
                                    ],
                                    'UpdateTime' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CloseMetaQuery' => [
            'path' => '/?metaQuery&comp=delete',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'DoMetaQuery' => [
            'path' => '/?metaQuery&comp=query',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'MetaQuery' => [
                                '$ref' => '#/components/schemas/MetaQuery',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'MetaQuery' => [
                                '$ref' => '#/components/schemas/MetaQueryResp',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'OpenMetaQuery' => [
            'path' => '/?metaQuery&comp=add',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'role',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'MetaQuery' => [
                                '$ref' => '#/components/schemas/MetaQueryOpenRequest',
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
        'UpdateUserAntiDDosInfo' => [
            'path' => '/?antiDDos',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'x-oss-defender-instance',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-defender-status',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'UpdateBucketAntiDDosInfo' => [
            'path' => '/?antiDDos',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-defender-instance',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-defender-status',
                    'in' => 'header',
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
                            'AntiDDOSConfiguration' => [
                                '$ref' => '#/components/schemas/BucketAntiDDOSConfiguration',
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
        'ListBucketAntiDDosInfo' => [
            'path' => '/?bucketAntiDDos',
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
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AntiDDOSListConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Marker' => [
                                        'type' => 'string',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'AntiDDOSConfiguration' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/BucketAntiDDOSInfo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'InitUserAntiDDosInfo' => [
            'path' => '/?antiDDos',
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
            'parameters' => [],
            'responses' => [
                200 => [],
            ],
        ],
        'InitBucketAntiDDosInfo' => [
            'path' => '/?antiDDos',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-defender-instance',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-defender-type',
                    'in' => 'header',
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
                            'AntiDDOSConfiguration' => [
                                '$ref' => '#/components/schemas/BucketAntiDDOSConfiguration',
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
        'GetUserAntiDDosInfo' => [
            'path' => '/?antiDDos',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AntiDDOSListConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'AntiDDOSConfiguration' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/UserAntiDDOSInfo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetBucketResourceGroup' => [
            'path' => '/?resourceGroup',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'BucketResourceGroupConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'ResourceGroupId' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketResourceGroup' => [
            'path' => '/?resourceGroup',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'BucketResourceGroupConfiguration' => [
                                '$ref' => '#/components/schemas/BucketResourceGroupConfiguration',
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
        'PutCname' => [
            'path' => '/?cname&comp=add',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'BucketCnameConfiguration' => [
                                '$ref' => '#/components/schemas/BucketCnameConfiguration',
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
        'ListCname' => [
            'path' => '/?cname',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ListCnameResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'Owner' => [
                                        'type' => 'string',
                                    ],
                                    'Cname' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CnameInfo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteCname' => [
            'path' => '/?cname&comp=delete',
            'methods' => [
                'post',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'BucketCnameConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Cname' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Domain' => [
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
            'responses' => [
                200 => [],
            ],
        ],
        'GetCnameToken' => [
            'path' => '/?comp=token',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'cname',
                    'in' => 'query',
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
                            'CnameToken' => [
                                '$ref' => '#/components/schemas/CnameToken',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateCnameToken' => [
            'path' => '/?cname&comp=token',
            'methods' => [
                'post',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'BucketCnameConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Cname' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'Domain' => [
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
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CnameToken' => [
                                '$ref' => '#/components/schemas/CnameToken',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutStyle' => [
            'path' => '/?style',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'styleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'category',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'Style' => [
                                '$ref' => '#/components/schemas/Style',
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
        'ListStyle' => [
            'path' => '/?style',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'StyleList' => [
                                'type' => 'object',
                                'properties' => [
                                    'Style' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/StyleInfo',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetStyle' => [
            'path' => '/?style',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'styleName',
                    'in' => 'query',
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
                            'Style' => [
                                '$ref' => '#/components/schemas/StyleInfo',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteStyle' => [
            'path' => '/?style',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'styleName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketHttpsConfig' => [
            'path' => '/?httpsConfig',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'HttpsConfiguration' => [
                                '$ref' => '#/components/schemas/HttpsConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketHttpsConfig' => [
            'path' => '/?httpsConfig',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'HttpsConfiguration' => [
                                '$ref' => '#/components/schemas/HttpsConfiguration',
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
        'CreateAccessPointForObjectProcess' => [
            'path' => '/?accessPointForObjectProcess',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
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
                            'CreateAccessPointForObjectProcessConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'AccessPointName' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ObjectProcessConfiguration' => [
                                        '$ref' => '#/components/schemas/ObjectProcessConfiguration',
                                        'required' => false,
                                    ],
                                    'AllowAnonymousAccessForObjectProcess' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CreateAccessPointForObjectProcessResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'AccessPointForObjectProcessArn' => [
                                        'type' => 'string',
                                    ],
                                    'AccessPointForObjectProcessAlias' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAccessPointForObjectProcess' => [
            'path' => '/?accessPointForObjectProcess',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
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
                            'GetAccessPointForObjectProcessResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'AccessPointNameForObjectProcess' => [
                                        'type' => 'string',
                                    ],
                                    'AccessPointForObjectProcessAlias' => [
                                        'type' => 'string',
                                    ],
                                    'AccessPointName' => [
                                        'type' => 'string',
                                    ],
                                    'AccountId' => [
                                        'type' => 'string',
                                    ],
                                    'AccessPointForObjectProcessArn' => [
                                        'type' => 'string',
                                    ],
                                    'CreationDate' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'Endpoints' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'PublicEndpoint' => [
                                                'type' => 'string',
                                            ],
                                            'InternalEndpoint' => [
                                                'type' => 'string',
                                            ],
                                        ],
                                    ],
                                    'AllowAnonymousAccessForObjectProcess' => [
                                        'type' => 'string',
                                    ],
                                    'PublicAccessBlockConfiguration' => [
                                        '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAccessPointsForObjectProcess' => [
            'path' => '/?accessPointForObjectProcess',
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
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'continuation-token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListAccessPointsForObjectProcessResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'NextContinuationToken' => [
                                        'type' => 'string',
                                    ],
                                    'AccountId' => [
                                        'type' => 'string',
                                    ],
                                    'AccessPointsForObjectProcess' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'AccessPointForObjectProcess' => [
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'AccessPointNameForObjectProcess' => [
                                                            'type' => 'string',
                                                        ],
                                                        'AccessPointForObjectProcessAlias' => [
                                                            'type' => 'string',
                                                        ],
                                                        'AccessPointName' => [
                                                            'type' => 'string',
                                                        ],
                                                        'Status' => [
                                                            'type' => 'string',
                                                        ],
                                                        'AllowAnonymousAccessForObjectProcess' => [
                                                            'type' => 'string',
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
        'DeleteAccessPointForObjectProcess' => [
            'path' => '/?accessPointForObjectProcess',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetAccessPointConfigForObjectProcess' => [
            'path' => '/?accessPointConfigForObjectProcess',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
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
                            'GetAccessPointConfigForObjectProcessResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'ObjectProcessConfiguration' => [
                                        '$ref' => '#/components/schemas/ObjectProcessConfiguration',
                                    ],
                                    'AllowAnonymousAccessForObjectProcess' => [
                                        'type' => 'string',
                                    ],
                                    'PublicAccessBlockConfiguration' => [
                                        '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutAccessPointConfigForObjectProcess' => [
            'path' => '/?accessPointConfigForObjectProcess',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
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
                            'PutAccessPointConfigForObjectProcessConfiguration' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'ObjectProcessConfiguration' => [
                                        '$ref' => '#/components/schemas/ObjectProcessConfiguration',
                                        'required' => false,
                                    ],
                                    'AllowAnonymousAccessForObjectProcess' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'PublicAccessBlockConfiguration' => [
                                        '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'PutAccessPointPolicyForObjectProcess' => [
            'path' => '/?accessPointPolicyForObjectProcess',
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
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
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
        'GetAccessPointPolicyForObjectProcess' => [
            'path' => '/?accessPointPolicyForObjectProcess',
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
                'application/octet-stream',
            ],
            'produces' => [
                'application/json',
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteAccessPointPolicyForObjectProcess' => [
            'path' => '/?accessPointPolicyForObjectProcess',
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
                'application/octet-stream',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-for-object-process-name',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
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
        'DeletePublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
            'parameters' => [],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
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
        'DeleteBucketPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetAccessPointPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutAccessPointPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'query',
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
                            'PublicAccessBlockConfiguration' => [
                                '$ref' => '#/components/schemas/PublicAccessBlockConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [],
        ],
        'DeleteAccessPointPublicAccessBlock' => [
            'path' => '/?publicAccessBlock',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-access-point-name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketArchiveDirectRead' => [
            'path' => '/?bucketArchiveDirectRead',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ArchiveDirectReadConfiguration' => [
                                '$ref' => '#/components/schemas/ArchiveDirectReadConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutBucketArchiveDirectRead' => [
            'path' => '/?bucketArchiveDirectRead',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ArchiveDirectReadConfiguration' => [
                                '$ref' => '#/components/schemas/ArchiveDirectReadConfiguration',
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
        'PutBucketOverwriteConfig' => [
            'path' => '/?overwriteConfig',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'OverwriteConfiguration' => [
                                '$ref' => '#/components/schemas/OverwriteConfiguration',
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
        'GetBucketOverwriteConfig' => [
            'path' => '/?overwriteConfig',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'OverwriteConfiguration' => [
                                '$ref' => '#/components/schemas/OverwriteConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteBucketOverwriteConfig' => [
            'path' => '/?overwriteConfig',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'PutObject' => [
            'path' => '/{key}',
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
                'application/octet-stream',
            ],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-forbid-overwrite',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-data-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption-key-id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-object-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ObjectACL',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-storage-class',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/StorageClass',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-tagging',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-meta-*',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CopyObject' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-forbid-overwrite',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-none-match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-unmodified-since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-modified-since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-metadata-directive',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-data-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption-key-id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-object-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ObjectACL',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-storage-class',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/StorageClass',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-tagging',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-tagging-directive',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-meta-*',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CopyObjectResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'ETag' => [
                                        'type' => 'string',
                                    ],
                                    'LastModified' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'GetObject' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'response-content-type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'response-content-language',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'response-expires',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'response-cache-control',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'response-content-disposition',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'response-content-encoding',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Range',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Modified-Since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Unmodified-Since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-None-Match',
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
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'AppendObject' => [
            'path' => '/{key}?append',
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
                'application/octet-stream',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'position',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-object-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ObjectACL',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-storage-class',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/StorageClass',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-meta-*',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                [
                    'name' => 'Cache-Control',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content-Disposition',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content-Encoding',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content-MD5',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Expires',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SealAppendObject' => [
            'path' => '/{key}?seal',
            'methods' => [
                'post',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'position',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'DeleteObject' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'HeadObject' => [
            'path' => '/{key}',
            'methods' => [
                'head',
            ],
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Modified-Since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Unmodified-Since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'If-None-Match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetObjectMeta' => [
            'path' => '/{key}?objectMeta',
            'methods' => [
                'head',
            ],
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'RestoreObject' => [
            'path' => '/{key}?restore',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'RestoreRequest' => [
                                '$ref' => '#/components/schemas/RestoreRequest',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'CleanRestoredObject' => [
            'path' => '/{key}?cleanRestoredObject',
            'methods' => [
                'post',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'SelectObject' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-process',
                    'in' => 'query',
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
                            'SelectRequest' => [
                                '$ref' => '#/components/schemas/SelectRequest',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'CreateSelectObjectMeta' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-process',
                    'in' => 'query',
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
                            'CsvMetaRequest' => [
                                '$ref' => '#/components/schemas/SelectMetaRequest',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        '$ref' => '#/components/schemas/SelectMetaStatus',
                    ],
                ],
            ],
        ],
        'InitiateMultipartUpload' => [
            'path' => '/{key}?uploads',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-forbid-overwrite',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-storage-class',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/StorageClass',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-tagging',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-data-encryption',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-server-side-encryption-key-id',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Cache-Control',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content-Disposition',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content-Encoding',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Expires',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'InitiateMultipartUploadResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'UploadId' => [
                                        'type' => 'string',
                                    ],
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'UploadPart' => [
            'path' => '/{key}',
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
                'application/octet-stream',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'partNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'uploadId',
                    'in' => 'query',
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
                        'format' => 'binary',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CompleteMultipartUpload' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'uploadId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-forbid-overwrite',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-complete-all',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'CompleteMultipartUpload' => [
                                '$ref' => '#/components/schemas/CompleteMultipartUpload',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CompleteMultipartUploadResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                    'Location' => [
                                        'type' => 'string',
                                    ],
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'ETag' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'UploadPartCopy' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'partNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'uploadId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-range',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-none-match',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-unmodified-since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-copy-source-if-modified-since',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CopyPartResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'LastModified' => [
                                        'type' => 'string',
                                        'format' => 'iso8601',
                                    ],
                                    'ETag' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'AbortMultipartUpload' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'uploadId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'ListMultipartUploads' => [
            'path' => '/?uploads',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'delimiter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'max-uploads',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'key-marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'upload-id-marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListMultipartUploadsResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'EncodingType' => [
                                        'type' => 'string',
                                    ],
                                    'KeyMarker' => [
                                        'type' => 'string',
                                    ],
                                    'UploadIdMarker' => [
                                        'type' => 'string',
                                    ],
                                    'NextKeyMarker' => [
                                        'type' => 'string',
                                    ],
                                    'NextUploadIdMarker' => [
                                        'type' => 'string',
                                    ],
                                    'MaxUploads' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'Delimiter' => [
                                        'type' => 'string',
                                    ],
                                    'Upload' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/Upload',
                                        ],
                                    ],
                                    'CommonPrefixes' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/CommonPrefix',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'ListParts' => [
            'path' => '/{key}',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'uploadId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'max-parts',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'part-number-marker',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'encoding-type',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/EncodeType',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListPartResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Bucket' => [
                                        'type' => 'string',
                                    ],
                                    'Key' => [
                                        'type' => 'string',
                                    ],
                                    'UploadId' => [
                                        'type' => 'string',
                                    ],
                                    'PartNumberMarker' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'NextPartNumberMarker' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'MaxParts' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'Part' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/Part',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5xx' => [],
            ],
        ],
        'PutObjectAcl' => [
            'path' => '/{key}?acl',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-object-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ObjectACL',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetObjectAcl' => [
            'path' => '/{key}?acl',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'AccessControlPolicy' => [
                                'type' => 'object',
                                'properties' => [
                                    'Owner' => [
                                        '$ref' => '#/components/schemas/Owner',
                                    ],
                                    'AccessControlList' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Grant' => [
                                                '$ref' => '#/components/schemas/ObjectACL',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PutSymlink' => [
            'path' => '/{key}?symlink',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-symlink-target',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-object-acl',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/ObjectACL',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-storage-class',
                    'in' => 'header',
                    'schema' => [
                        '$ref' => '#/components/schemas/StorageClass',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-oss-forbid-overwrite',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetSymlink' => [
            'path' => '/{key}?symlink',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutObjectTagging' => [
            'path' => '/{key}?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                            'Tagging' => [
                                '$ref' => '#/components/schemas/Tagging',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetObjectTagging' => [
            'path' => '/{key}?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Tagging' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagSet' => [
                                        '$ref' => '#/components/schemas/TagSet',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteObjectTagging' => [
            'path' => '/{key}?tagging',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'key',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'versionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutLiveChannel' => [
            'path' => '/{channel}?live',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
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
                            'LiveChannelConfiguration' => [
                                '$ref' => '#/components/schemas/LiveChannelConfiguration',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CreateLiveChannelResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'PublishUrls' => [
                                        '$ref' => '#/components/schemas/LiveChannelPublishUrls',
                                    ],
                                    'PlayUrls' => [
                                        '$ref' => '#/components/schemas/LiveChannelPlayUrls',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'ListLiveChannel' => [
            'path' => '/?live',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'max-keys',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'ListLiveChannelResult' => [
                                'type' => 'object',
                                'properties' => [
                                    'Prefix' => [
                                        'type' => 'string',
                                    ],
                                    'Marker' => [
                                        'type' => 'string',
                                    ],
                                    'MaxKeys' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'IsTruncated' => [
                                        'type' => 'boolean',
                                    ],
                                    'NextMarker' => [
                                        'type' => 'string',
                                    ],
                                    'LiveChannel' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/LiveChannel',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'DeleteLiveChannel' => [
            'path' => '/{channel}?live',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutLiveChannelStatus' => [
            'path' => '/{channel}?live',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'GetLiveChannelInfo' => [
            'path' => '/{channel}?live',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
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
                            'LiveChannelConfiguration' => [
                                'type' => 'object',
                                'properties' => [
                                    'Description' => [
                                        'type' => 'string',
                                    ],
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'Target' => [
                                        '$ref' => '#/components/schemas/LiveChannelTarget',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'GetLiveChannelHistory' => [
            'path' => '/{channel}?live&comp=history',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
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
                            'LiveChannelHistory' => [
                                'type' => 'object',
                                'properties' => [
                                    'LiveRecord' => [
                                        'type' => 'array',
                                        'items' => [
                                            '$ref' => '#/components/schemas/LiveRecord',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'GetLiveChannelStat' => [
            'path' => '/{channel}?live&comp=stat',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
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
                            'LiveChannelStat' => [
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'type' => 'string',
                                    ],
                                    'ConnectedTime' => [
                                        'type' => 'string',
                                        'format' => 'iso8601',
                                    ],
                                    'RemoteAddr' => [
                                        'type' => 'string',
                                    ],
                                    'Video' => [
                                        '$ref' => '#/components/schemas/LiveChannelVideo',
                                    ],
                                    'Audio' => [
                                        '$ref' => '#/components/schemas/LiveChannelAudio',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'GetVodPlaylist' => [
            'path' => '/{channel}?vod',
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
                'application/xml',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'string',
                        'format' => 'binary',
                    ],
                ],
                '5XX' => [],
            ],
        ],
        'PostVodPlaylist' => [
            'path' => '/{channel}/{playlist}?vod',
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
                'application/xml',
            ],
            'produces' => [
                'application/xml',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'channel',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'playlist',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
                '5XX' => [],
            ],
        ],
        'PutChannel' => [
            'path' => '/?img',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'Channel' => [
                                '$ref' => '#/components/schemas/Channel',
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
        'PutBucketHash' => [
            'path' => '/?objectHash',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'ObjectHashConfiguration' => [
                                '$ref' => '#/components/schemas/ObjectHashConfiguration',
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
        'PutBucketCommonHeader' => [
            'path' => '/?x-oss-common-header',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'CommonHeaders' => [
                                '$ref' => '#/components/schemas/CommonHeaders',
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
        'DeleteBucketCommonHeader' => [
            'path' => '/?x-oss-common-header',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'PutProcessConfiguration' => [
            'path' => '/?processConfiguration',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'BucketProcessConfiguration' => [
                                '$ref' => '#/components/schemas/BucketProcessConfiguration',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'GetBucketEventNotification' => [
            'path' => '/?eventNotification',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'NotificationConfiguration' => [
                                '$ref' => '#/components/schemas/EventNotificationConfiguration',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'PutDataLakeCachePrefetchJob' => [
            'path' => '/?x-oss-datalake-cache-prefetch-job',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-datalake-job-id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'xml',
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'CreateDataLakeCachePrefetchJob' => [
                                '$ref' => '#/components/schemas/CreateDataLakeCachePrefetchJob',
                            ],
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'DataLakeCachePrefetchJobID' => [
                                'type' => 'object',
                                'properties' => [
                                    'ID' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StartDataLakeCachePrefetchJob' => [
            'path' => '/?x-oss-datalake-cache-prefetch-job&x-oss-datalake-job-start',
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
                    'name' => 'bucket',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-oss-datalake-job-id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [],
            ],
        ],
        'ListDataLakeStorageTransferJob' => [
            'path' => '/?x-oss-datalake-storage-transfer-job',
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
                    'name' => 'bucket',
                    'in' => 'host',
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
                            'DataLakeStorageTransferJobs' => [
                                '$ref' => '#/components/schemas/DataLakeStorageTransferJobs',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-wuhan-lr',
            'endpoint' => 'oss-cn-wuhan-lr.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'oss-cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'oss-cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'oss-cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'oss-cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'oss-cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'oss-cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'oss-cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'oss-cn-nanjing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fuzhou',
            'endpoint' => 'oss-cn-fuzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'oss-cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'oss-cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'oss-cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'oss-cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'oss-cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'oss-ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'oss-ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'oss-ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'oss-ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'oss-ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'oss-ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-6',
            'endpoint' => 'oss-ap-southeast-6.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'oss-us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'oss-us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'oss-eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'oss-eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'oss-ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'oss-me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'oss-cn-hzjbp-b-console.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'oss-cn-shanghai-finance-1-internal.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'oss-cn-shenzhen-finance-1-internal.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'oss-ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'oss-cn-beijing-finance-1-internal.aliyuncs.com',
        ],
    ],
];