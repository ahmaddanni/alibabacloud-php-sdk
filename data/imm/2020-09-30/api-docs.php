<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'imm',
        'version' => '2020-09-30',
    ],
    'components' => [
        'schemas' => [
            'Address' => [
                'type' => 'object',
                'properties' => [
                    'Language' => [
                        'type' => 'string',
                    ],
                    'AddressLine' => [
                        'type' => 'string',
                    ],
                    'Country' => [
                        'type' => 'string',
                    ],
                    'Province' => [
                        'type' => 'string',
                    ],
                    'City' => [
                        'type' => 'string',
                    ],
                    'District' => [
                        'type' => 'string',
                    ],
                    'Township' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AddressForStory' => [
                'type' => 'object',
                'properties' => [
                    'Country' => [
                        'type' => 'string',
                    ],
                    'Province' => [
                        'type' => 'string',
                    ],
                    'City' => [
                        'type' => 'string',
                    ],
                    'District' => [
                        'type' => 'string',
                    ],
                    'Township' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AlgorithmDefinition' => [
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'type' => 'string',
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'ProjectName' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'UpdateTime' => [
                        'type' => 'string',
                    ],
                    'TrainingSpecification' => [
                        '$ref' => '#/components/schemas/TrainingSpecification',
                    ],
                    'AlgorithmDefinitionId' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'CustomLabels' => [
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
            'Answer' => [
                'type' => 'object',
                'properties' => [
                    'Content' => [
                        'type' => 'string',
                    ],
                    'References' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ReferenceFile',
                        ],
                    ],
                ],
            ],
            'App' => [
                'type' => 'object',
                'properties' => [
                    'AppDescription' => [
                        'type' => 'string',
                    ],
                    'AppId' => [
                        'type' => 'string',
                    ],
                    'PackageName' => [
                        'type' => 'string',
                    ],
                    'AppType' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EnglishName' => [
                        'type' => 'string',
                    ],
                    'AppName' => [
                        'type' => 'string',
                    ],
                    'AppRegion' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'AppKey' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AssumeRoleChain' => [
                'type' => 'object',
                'properties' => [
                    'Policy' => [
                        'type' => 'string',
                    ],
                    'Chain' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AssumeRoleChainNode',
                        ],
                    ],
                ],
            ],
            'AssumeRoleChainNode' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'OwnerId' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Role' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'AudioStream' => [
                'type' => 'object',
                'properties' => [
                    'Index' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Language' => [
                        'type' => 'string',
                    ],
                    'CodecName' => [
                        'type' => 'string',
                    ],
                    'CodecLongName' => [
                        'type' => 'string',
                    ],
                    'CodecTimeBase' => [
                        'type' => 'string',
                    ],
                    'CodecTagString' => [
                        'type' => 'string',
                    ],
                    'CodecTag' => [
                        'type' => 'string',
                    ],
                    'TimeBase' => [
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
                    'Bitrate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FrameCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Lyric' => [
                        'type' => 'string',
                    ],
                    'SampleFormat' => [
                        'type' => 'string',
                    ],
                    'SampleRate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Channels' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ChannelLayout' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Binding' => [
                'type' => 'object',
                'properties' => [
                    'ProjectName' => [
                        'type' => 'string',
                    ],
                    'DatasetName' => [
                        'type' => 'string',
                    ],
                    'URI' => [
                        'type' => 'string',
                    ],
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
                    'Reason' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Body' => [
                'type' => 'object',
                'properties' => [
                    'Confidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Boundary' => [
                        '$ref' => '#/components/schemas/Boundary',
                    ],
                ],
            ],
            'Boundary' => [
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
                    'Left' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Top' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Polygon' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PointInt64',
                        ],
                    ],
                ],
            ],
            'Car' => [
                'type' => 'object',
                'properties' => [
                    'LicensePlates' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LicensePlate',
                        ],
                    ],
                    'CarType' => [
                        'type' => 'string',
                    ],
                    'CarTypeConfidence' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'CarColor' => [
                        'type' => 'string',
                    ],
                    'CarColorConfidence' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'Boundary' => [
                        '$ref' => '#/components/schemas/Boundary',
                    ],
                    'Confidence' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'ClusterForReq' => [
                'type' => 'object',
                'properties' => [
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'CustomId' => [
                        'type' => 'string',
                    ],
                    'CustomLabels' => [
                        'type' => 'object',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Cover' => [
                        'type' => 'object',
                        'properties' => [
                            'Figures' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FigureId' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Codes' => [
                'type' => 'object',
                'properties' => [
                    'Content' => [
                        'type' => 'string',
                    ],
                    'Confidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Boundary' => [
                        '$ref' => '#/components/schemas/Boundary',
                    ],
                    'Type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ContextualFile' => [
                'type' => 'object',
                'properties' => [
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'ProjectName' => [
                        'type' => 'string',
                    ],
                    'DatasetName' => [
                        'type' => 'string',
                    ],
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'URI' => [
                        'type' => 'string',
                    ],
                    'OSSURI' => [
                        'type' => 'string',
                    ],
                    'MediaType' => [
                        'type' => 'string',
                    ],
                    'ContentType' => [
                        'type' => 'string',
                    ],
                    'Elements' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Element',
                        ],
                    ],
                ],
            ],
            'ContextualMessage' => [
                'type' => 'object',
                'properties' => [
                    'Role' => [
                        'type' => 'string',
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                    'Files' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ContextualFile',
                        ],
                    ],
                ],
            ],
            'CredentialConfig' => [
                'type' => 'object',
                'properties' => [
                    'ServiceRole' => [
                        'type' => 'string',
                    ],
                    'Policy' => [
                        'type' => 'string',
                    ],
                    'Chain' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'AssumeRoleFor' => [
                                    'type' => 'string',
                                ],
                                'Role' => [
                                    'type' => 'string',
                                ],
                                'RoleType' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'CroppingSuggestion' => [
                'type' => 'object',
                'properties' => [
                    'AspectRatio' => [
                        'type' => 'string',
                    ],
                    'Confidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Boundary' => [
                        '$ref' => '#/components/schemas/Boundary',
                    ],
                ],
            ],
            'CustomParams' => [
                'type' => 'object',
                'properties' => [
                    'Properties' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Property',
                        ],
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CustomPrompt' => [
                'type' => 'object',
                'properties' => [
                    'RoleDefinition' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DataIngestion' => [
                'type' => 'object',
                'properties' => [
                    'Id' => [
                        'type' => 'string',
                    ],
                    'Input' => [
                        '$ref' => '#/components/schemas/Input',
                    ],
                    'Actions' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                ],
                                'Parameters' => [
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'FastFailPolicy' => [
                                    '$ref' => '#/components/schemas/FastFailPolicy',
                                ],
                            ],
                        ],
                    ],
                    'Notification' => [
                        'type' => 'object',
                        'properties' => [
                            'Endpoint' => [
                                'type' => 'string',
                            ],
                            'Topic' => [
                                'type' => 'string',
                            ],
                            'MNS' => [
                                '$ref' => '#/components/schemas/MNS',
                            ],
                            'RocketMQ' => [
                                '$ref' => '#/components/schemas/RocketMQ',
                            ],
                        ],
                    ],
                    'Statistic' => [
                        'type' => 'object',
                        'properties' => [
                            'SubmitSuccess' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'SubmitFailure' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'SkipFiles' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'State' => [
                        'type' => 'string',
                    ],
                    'Marker' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'UpdateTime' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'object',
                    ],
                    'Error' => [
                        'type' => 'string',
                    ],
                    'Phase' => [
                        'type' => 'string',
                    ],
                    'ServiceRole' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Dataset' => [
                'type' => 'object',
                'properties' => [
                    'ProjectName' => [
                        'type' => 'string',
                    ],
                    'DatasetName' => [
                        'type' => 'string',
                    ],
                    'TemplateId' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'UpdateTime' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'DatasetMaxBindCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DatasetMaxFileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DatasetMaxEntityCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DatasetMaxRelationCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DatasetMaxTotalFileSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'BindCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalFileSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'WorkflowParameters' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/WorkflowParameter',
                        ],
                    ],
                ],
            ],
            'DatasetTaskStatus' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'LastSucceededTime' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Element' => [
                'type' => 'object',
                'properties' => [
                    'ElementContents' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ElementContent',
                        ],
                    ],
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'ElementType' => [
                        'type' => 'string',
                    ],
                    'SemanticSimilarity' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'ElementRelations' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ElementRelation',
                        ],
                    ],
                ],
            ],
            'ElementContent' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                    'URL' => [
                        'type' => 'string',
                    ],
                    'TimeRange' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                    ],
                ],
            ],
            'ElementRelation' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FastFailPolicy' => [
                'type' => 'object',
                'properties' => [
                    'Action' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Figure' => [
                'type' => 'object',
                'properties' => [
                    'FigureId' => [
                        'type' => 'string',
                    ],
                    'FigureConfidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'FigureClusterId' => [
                        'type' => 'string',
                    ],
                    'FigureClusterConfidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'FigureType' => [
                        'type' => 'string',
                    ],
                    'Age' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AgeSD' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Gender' => [
                        'type' => 'string',
                    ],
                    'GenderConfidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Emotion' => [
                        'type' => 'string',
                    ],
                    'EmotionConfidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'FaceQuality' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Boundary' => [
                        '$ref' => '#/components/schemas/Boundary',
                    ],
                    'Mouth' => [
                        'type' => 'string',
                    ],
                    'MouthConfidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Beard' => [
                        'type' => 'string',
                    ],
                    'BeardConfidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Hat' => [
                        'type' => 'string',
                    ],
                    'HatConfidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Mask' => [
                        'type' => 'string',
                    ],
                    'MaskConfidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Glasses' => [
                        'type' => 'string',
                    ],
                    'GlassesConfidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Sharpness' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Attractive' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'HeadPose' => [
                        '$ref' => '#/components/schemas/HeadPose',
                    ],
                ],
            ],
            'FigureCluster' => [
                'type' => 'object',
                'properties' => [
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'ProjectName' => [
                        'type' => 'string',
                    ],
                    'DatasetName' => [
                        'type' => 'string',
                    ],
                    'ObjectType' => [
                        'type' => 'string',
                    ],
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'UpdateTime' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Gender' => [
                        'type' => 'string',
                    ],
                    'FaceCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ImageCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'VideoCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'AverageAge' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'MinAge' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'MaxAge' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Cover' => [
                        '$ref' => '#/components/schemas/File',
                    ],
                    'CustomId' => [
                        'type' => 'string',
                    ],
                    'CustomLabels' => [
                        'type' => 'object',
                    ],
                    'MetaLockVersion' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'FigureClusterForReq' => [
                'type' => 'object',
                'properties' => [
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Cover' => [
                        'type' => 'object',
                        'properties' => [
                            'Figures' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FigureId' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'CustomId' => [
                        'type' => 'string',
                    ],
                    'CustomLabels' => [
                        'type' => 'object',
                    ],
                    'MetaLockVersion' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'File' => [
                'type' => 'object',
                'properties' => [
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'ProjectName' => [
                        'type' => 'string',
                    ],
                    'DatasetName' => [
                        'type' => 'string',
                    ],
                    'ObjectType' => [
                        'type' => 'string',
                    ],
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'UpdateTime' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'URI' => [
                        'type' => 'string',
                    ],
                    'OSSURI' => [
                        'type' => 'string',
                    ],
                    'Filename' => [
                        'type' => 'string',
                    ],
                    'MediaType' => [
                        'type' => 'string',
                    ],
                    'ContentType' => [
                        'type' => 'string',
                    ],
                    'Size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FileHash' => [
                        'type' => 'string',
                    ],
                    'FileModifiedTime' => [
                        'type' => 'string',
                    ],
                    'FileCreateTime' => [
                        'type' => 'string',
                    ],
                    'FileAccessTime' => [
                        'type' => 'string',
                    ],
                    'ProduceTime' => [
                        'type' => 'string',
                    ],
                    'LatLong' => [
                        'type' => 'string',
                    ],
                    'Timezone' => [
                        'type' => 'string',
                    ],
                    'Addresses' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Address',
                        ],
                    ],
                    'TravelClusterId' => [
                        'type' => 'string',
                    ],
                    'Orientation' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Figures' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Figure',
                        ],
                    ],
                    'FigureCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Labels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Label',
                        ],
                    ],
                    'Title' => [
                        'type' => 'string',
                    ],
                    'ImageWidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ImageHeight' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EXIF' => [
                        'type' => 'string',
                    ],
                    'ImageScore' => [
                        '$ref' => '#/components/schemas/ImageScore',
                    ],
                    'CroppingSuggestions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CroppingSuggestion',
                        ],
                    ],
                    'OCRContents' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/OCRContents',
                        ],
                    ],
                    'VideoWidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'VideoHeight' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'VideoStreams' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/VideoStream',
                        ],
                    ],
                    'Subtitles' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SubtitleStream',
                        ],
                    ],
                    'AudioStreams' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AudioStream',
                        ],
                    ],
                    'Artist' => [
                        'type' => 'string',
                    ],
                    'AlbumArtist' => [
                        'type' => 'string',
                    ],
                    'AudioCovers' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Image',
                        ],
                    ],
                    'Composer' => [
                        'type' => 'string',
                    ],
                    'Performer' => [
                        'type' => 'string',
                    ],
                    'Language' => [
                        'type' => 'string',
                    ],
                    'Album' => [
                        'type' => 'string',
                    ],
                    'PageCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ETag' => [
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
                    'AccessControlAllowOrigin' => [
                        'type' => 'string',
                    ],
                    'AccessControlRequestMethod' => [
                        'type' => 'string',
                    ],
                    'ServerSideEncryptionCustomerAlgorithm' => [
                        'type' => 'string',
                    ],
                    'ServerSideEncryption' => [
                        'type' => 'string',
                    ],
                    'ServerSideDataEncryption' => [
                        'type' => 'string',
                    ],
                    'ServerSideEncryptionKeyId' => [
                        'type' => 'string',
                    ],
                    'OSSStorageClass' => [
                        'type' => 'string',
                    ],
                    'OSSCRC64' => [
                        'type' => 'string',
                    ],
                    'ObjectACL' => [
                        'type' => 'string',
                    ],
                    'ContentMd5' => [
                        'type' => 'string',
                    ],
                    'OSSUserMeta' => [
                        'type' => 'object',
                    ],
                    'OSSTaggingCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'OSSTagging' => [
                        'type' => 'object',
                    ],
                    'OSSExpiration' => [
                        'type' => 'string',
                    ],
                    'OSSVersionId' => [
                        'type' => 'string',
                    ],
                    'OSSDeleteMarker' => [
                        'type' => 'string',
                    ],
                    'OSSObjectType' => [
                        'type' => 'string',
                    ],
                    'CustomId' => [
                        'type' => 'string',
                    ],
                    'CustomLabels' => [
                        'type' => 'object',
                    ],
                    'StreamCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ProgramCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FormatName' => [
                        'type' => 'string',
                    ],
                    'FormatLongName' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'Bitrate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Duration' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'SemanticTypes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Elements' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Element',
                        ],
                    ],
                    'SceneElements' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SceneElement',
                        ],
                    ],
                    'OCRTexts' => [
                        'type' => 'string',
                    ],
                    'Reason' => [
                        'type' => 'string',
                    ],
                    'ObjectStatus' => [
                        'type' => 'string',
                    ],
                    'Insights' => [
                        '$ref' => '#/components/schemas/Insights',
                    ],
                ],
            ],
            'FileSmartCluster' => [
                'type' => 'object',
                'properties' => [
                    'SmartClusterId' => [
                        'type' => 'string',
                    ],
                    'Similarity' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'FunctionCall' => [
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Arguments' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HeadPose' => [
                'type' => 'object',
                'properties' => [
                    'Pitch' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Roll' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Yaw' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'Hyperparameters' => [
                'type' => 'object',
                'properties' => [
                    'BatchSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'InputSize' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                    ],
                    'Schedule' => [
                        '$ref' => '#/components/schemas/Schedule',
                    ],
                    'MaxEpoch' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Evaluator' => [
                        '$ref' => '#/components/schemas/CustomParams',
                        'required' => true,
                    ],
                    'DataLoaderWorkers' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Optimization' => [
                        '$ref' => '#/components/schemas/Optimization',
                    ],
                    'BackupInterval' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Image' => [
                'type' => 'object',
                'properties' => [
                    'ImageWidth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ImageHeight' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EXIF' => [
                        'type' => 'string',
                    ],
                    'ImageScore' => [
                        '$ref' => '#/components/schemas/ImageScore',
                    ],
                    'CroppingSuggestions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CroppingSuggestion',
                        ],
                    ],
                    'OCRContents' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/OCRContents',
                        ],
                    ],
                ],
            ],
            'ImageInsight' => [
                'type' => 'object',
                'properties' => [
                    'Caption' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ImageScore' => [
                'type' => 'object',
                'properties' => [
                    'OverallQualityScore' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'ImageURL' => [
                'type' => 'object',
                'properties' => [
                    'URL' => [
                        'type' => 'string',
                    ],
                    'Thumbnail' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Input' => [
                'type' => 'object',
                'properties' => [
                    'OSS' => [
                        '$ref' => '#/components/schemas/InputOSS',
                    ],
                ],
            ],
            'InputFile' => [
                'type' => 'object',
                'properties' => [
                    'URI' => [
                        'type' => 'string',
                    ],
                    'CustomId' => [
                        'type' => 'string',
                    ],
                    'CustomLabels' => [
                        'type' => 'object',
                    ],
                    'FileHash' => [
                        'type' => 'string',
                    ],
                    'OSSURI' => [
                        'type' => 'string',
                    ],
                    'MediaType' => [
                        'type' => 'string',
                    ],
                    'ContentType' => [
                        'type' => 'string',
                    ],
                    'Figures' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'FigureId' => [
                                    'type' => 'string',
                                ],
                                'FigureClusterId' => [
                                    'type' => 'string',
                                ],
                                'FigureType' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'LatLong' => [
                        'type' => 'string',
                    ],
                    'ProduceTime' => [
                        'type' => 'string',
                    ],
                    'Title' => [
                        'type' => 'string',
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
                    'Labels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Label',
                        ],
                    ],
                    'Addresses' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Address',
                        ],
                    ],
                ],
            ],
            'InputOSS' => [
                'type' => 'object',
                'properties' => [
                    'Bucket' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Prefix' => [
                        'type' => 'string',
                    ],
                    'MatchExpressions' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Insights' => [
                'type' => 'object',
                'properties' => [
                    'Video' => [
                        '$ref' => '#/components/schemas/VideoInsight',
                    ],
                    'Image' => [
                        '$ref' => '#/components/schemas/ImageInsight',
                    ],
                ],
            ],
            'KdtreeOption' => [
                'type' => 'object',
                'properties' => [
                    'CompressionLevel' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '10',
                    ],
                    'QuantizationBits' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '31',
                    ],
                    'LibraryName' => [
                        'type' => 'string',
                        'enum' => [
                            'draco',
                        ],
                    ],
                ],
            ],
            'KeyValuePair' => [
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
            'Label' => [
                'type' => 'object',
                'properties' => [
                    'Language' => [
                        'type' => 'string',
                    ],
                    'LabelName' => [
                        'type' => 'string',
                    ],
                    'LabelLevel' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LabelConfidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'ParentLabelName' => [
                        'type' => 'string',
                    ],
                    'CentricScore' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'LicensePlate' => [
                'type' => 'object',
                'properties' => [
                    'Content' => [
                        'type' => 'string',
                    ],
                    'Boundary' => [
                        '$ref' => '#/components/schemas/Boundary',
                    ],
                    'Confidence' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'LocationDateCluster' => [
                'type' => 'object',
                'properties' => [
                    'Title' => [
                        'type' => 'string',
                    ],
                    'LocationDateClusterLevel' => [
                        'type' => 'string',
                    ],
                    'LocationDateClusterStartTime' => [
                        'type' => 'string',
                    ],
                    'LocationDateClusterEndTime' => [
                        'type' => 'string',
                    ],
                    'Addresses' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Address',
                        ],
                    ],
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'UpdateTime' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'CustomId' => [
                        'type' => 'string',
                    ],
                    'CustomLabels' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'MNS' => [
                'type' => 'object',
                'properties' => [
                    'TopicName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Message' => [
                'type' => 'object',
                'properties' => [
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'Regenerate' => [
                        'type' => 'boolean',
                    ],
                    'Score' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'AssistantType' => [
                        'type' => 'string',
                    ],
                    'DatasetName' => [
                        'type' => 'string',
                    ],
                    'SourceURI' => [
                        'type' => 'string',
                    ],
                    'Topic' => [
                        'type' => 'string',
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                    'Language' => [
                        'type' => 'string',
                    ],
                    'Tone' => [
                        'type' => 'string',
                    ],
                    'Reply' => [
                        'type' => 'string',
                    ],
                    'Suggestion' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'MetaData' => [
                'type' => 'object',
                'properties' => [
                    'Identifier' => [
                        'type' => 'string',
                    ],
                    'Version' => [
                        'type' => 'string',
                    ],
                    'Provider' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ModelSpecification' => [
                'type' => 'object',
                'properties' => [
                    'MetaData' => [
                        '$ref' => '#/components/schemas/MetaData',
                        'required' => true,
                    ],
                    'Spec' => [
                        '$ref' => '#/components/schemas/Spec',
                        'required' => true,
                    ],
                ],
            ],
            'Notification' => [
                'type' => 'object',
                'properties' => [
                    'MNS' => [
                        '$ref' => '#/components/schemas/MNS',
                    ],
                    'RocketMQ' => [
                        '$ref' => '#/components/schemas/RocketMQ',
                    ],
                    'ExtendedMessageURI' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OCRContents' => [
                'type' => 'object',
                'properties' => [
                    'Language' => [
                        'type' => 'string',
                    ],
                    'Contents' => [
                        'type' => 'string',
                    ],
                    'Confidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Boundary' => [
                        '$ref' => '#/components/schemas/Boundary',
                    ],
                ],
            ],
            'OctreeOption' => [
                'type' => 'object',
                'properties' => [
                    'PointResolution' => [
                        'type' => 'number',
                        'format' => 'double',
                        'minimum' => '0',
                        'maximum' => '1',
                    ],
                    'OctreeResolution' => [
                        'type' => 'number',
                        'format' => 'double',
                        'minimum' => '0',
                        'maximum' => '1',
                    ],
                    'DoVoxelGridDownDownSampling' => [
                        'type' => 'boolean',
                    ],
                    'LibraryName' => [
                        'type' => 'string',
                        'enum' => [
                            'pcl',
                        ],
                    ],
                ],
            ],
            'Optimization' => [
                'type' => 'object',
                'properties' => [
                    'LearningRate' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Optimizer' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'PointInt64' => [
                'type' => 'object',
                'properties' => [
                    'X' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Y' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Project' => [
                'type' => 'object',
                'properties' => [
                    'ProjectName' => [
                        'type' => 'string',
                    ],
                    'ServiceRole' => [
                        'type' => 'string',
                    ],
                    'TemplateId' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'UpdateTime' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'ProjectQueriesPerSecond' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'EngineConcurrency' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ProjectMaxDatasetCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DatasetMaxBindCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DatasetMaxFileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DatasetMaxEntityCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DatasetMaxRelationCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DatasetMaxTotalFileSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'DatasetCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FileCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'TotalFileSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Tags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'TagKey' => [
                                    'type' => 'string',
                                ],
                                'TagValue' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Property' => [
                'type' => 'object',
                'properties' => [
                    'ItemsType' => [
                        'type' => 'string',
                    ],
                    'ValueType' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ReferenceFile' => [
                'type' => 'object',
                'properties' => [
                    'ProjectName' => [
                        'type' => 'string',
                    ],
                    'DatasetName' => [
                        'type' => 'string',
                    ],
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'URI' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RegionType' => [
                'type' => 'object',
                'properties' => [
                    'RegionId' => [
                        'type' => 'string',
                    ],
                    'LocalName' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Resource' => [
                'type' => 'object',
                'properties' => [
                    'ECSInstance' => [
                        'type' => 'string',
                    ],
                    'CPU' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GPUNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'RAM' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'GPUModel' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'RocketMQ' => [
                'type' => 'object',
                'properties' => [
                    'TopicName' => [
                        'type' => 'string',
                    ],
                    'InstanceId' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Row' => [
                'type' => 'object',
                'properties' => [
                    'URI' => [
                        'type' => 'string',
                    ],
                    'CustomLabels' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/KeyValuePair',
                        ],
                    ],
                ],
            ],
            'Runtime' => [
                'type' => 'object',
                'properties' => [
                    'Hyperparameters' => [
                        '$ref' => '#/components/schemas/Hyperparameters',
                        'required' => true,
                    ],
                    'Resource' => [
                        '$ref' => '#/components/schemas/Resource',
                        'required' => true,
                    ],
                ],
            ],
            'SceneElement' => [
                'type' => 'object',
                'properties' => [
                    'TimeRange' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                    ],
                    'FrameTimes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                    ],
                ],
            ],
            'Schedule' => [
                'type' => 'object',
                'properties' => [
                    'Gamma' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'StepSize' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'LRScheduler' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SimilarImage' => [
                'type' => 'object',
                'properties' => [
                    'URI' => [
                        'type' => 'string',
                    ],
                    'ImageScore' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'SimilarImageCluster' => [
                'type' => 'object',
                'properties' => [
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'UpdateTime' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'CustomLabels' => [
                        'type' => 'object',
                    ],
                    'Files' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SimilarImage',
                        ],
                    ],
                ],
            ],
            'SimpleQuery' => [
                'type' => 'object',
                'properties' => [
                    'Field' => [
                        'type' => 'string',
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                    'Operation' => [
                        'type' => 'string',
                    ],
                    'SubQueries' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SimpleQuery',
                        ],
                    ],
                ],
            ],
            'SmartCluster' => [
                'type' => 'object',
                'properties' => [
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'ProjectName' => [
                        'type' => 'string',
                    ],
                    'DatasetName' => [
                        'type' => 'string',
                    ],
                    'ObjectType' => [
                        'type' => 'string',
                    ],
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'UpdateTime' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Description' => [
                        'type' => 'string',
                    ],
                    'ObjectStatus' => [
                        'type' => 'string',
                    ],
                    'Rule' => [
                        '$ref' => '#/components/schemas/SmartClusterRule',
                    ],
                ],
            ],
            'SmartClusterRule' => [
                'type' => 'object',
                'properties' => [
                    'Keywords' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'Sensitivity' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'Spec' => [
                'type' => 'object',
                'properties' => [
                    'Backbone' => [
                        '$ref' => '#/components/schemas/CustomParams',
                    ],
                    'ClassNum' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Head' => [
                        '$ref' => '#/components/schemas/CustomParams',
                    ],
                    'Loss' => [
                        '$ref' => '#/components/schemas/CustomParams',
                    ],
                    'InputChannel' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Name' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Neck' => [
                        '$ref' => '#/components/schemas/CustomParams',
                    ],
                    'NumLandmarks' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'PretrainedPath' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Story' => [
                'type' => 'object',
                'properties' => [
                    'OwnerId' => [
                        'type' => 'string',
                    ],
                    'ProjectName' => [
                        'type' => 'string',
                    ],
                    'DatasetName' => [
                        'type' => 'string',
                    ],
                    'ObjectId' => [
                        'type' => 'string',
                    ],
                    'ObjectType' => [
                        'type' => 'string',
                    ],
                    'UpdateTime' => [
                        'type' => 'string',
                    ],
                    'CreateTime' => [
                        'type' => 'string',
                    ],
                    'StoryName' => [
                        'type' => 'string',
                    ],
                    'StoryType' => [
                        'type' => 'string',
                    ],
                    'StorySubType' => [
                        'type' => 'string',
                    ],
                    'StoryStartTime' => [
                        'type' => 'string',
                    ],
                    'StoryEndTime' => [
                        'type' => 'string',
                    ],
                    'Files' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/File',
                        ],
                    ],
                    'Cover' => [
                        '$ref' => '#/components/schemas/File',
                    ],
                    'FigureClusterIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'CustomId' => [
                        'type' => 'string',
                    ],
                    'CustomLabels' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                    'Addresses' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Address',
                        ],
                    ],
                ],
            ],
            'StreamOptions' => [
                'type' => 'object',
                'properties' => [
                    'IncrementalOutput' => [
                        'type' => 'boolean',
                    ],
                    'NeedReturnFinalResult' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SubtitleStream' => [
                'type' => 'object',
                'properties' => [
                    'Index' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Language' => [
                        'type' => 'string',
                    ],
                    'CodecName' => [
                        'type' => 'string',
                    ],
                    'CodecLongName' => [
                        'type' => 'string',
                    ],
                    'CodecTagString' => [
                        'type' => 'string',
                    ],
                    'CodecTag' => [
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
                    'Bitrate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Content' => [
                        'type' => 'string',
                    ],
                    'Width' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Height' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'TargetAudio' => [
                'type' => 'object',
                'properties' => [
                    'DisableAudio' => [
                        'type' => 'boolean',
                    ],
                    'Stream' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                    ],
                    'TranscodeAudio' => [
                        'type' => 'object',
                        'properties' => [
                            'Codec' => [
                                'type' => 'string',
                            ],
                            'BitrateOption' => [
                                'type' => 'string',
                            ],
                            'Bitrate' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Quality' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'SampleRateOption' => [
                                'type' => 'string',
                            ],
                            'SampleRate' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Channel' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'BitsPerSample' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'FilterAudio' => [
                        'type' => 'object',
                        'properties' => [
                            'Mixing' => [
                                'type' => 'boolean',
                            ],
                        ],
                    ],
                ],
            ],
            'TargetImage' => [
                'type' => 'object',
                'properties' => [
                    'Sprites' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ScaleType' => [
                                    'type' => 'string',
                                ],
                                'Mode' => [
                                    'type' => 'string',
                                ],
                                'StartTime' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'TileHeight' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'URI' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'ScaleWidth' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                ],
                                'Pad' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'Format' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Number' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'ScaleHeight' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                ],
                                'TileWidth' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'Interval' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'Margin' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'Threshold' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                            ],
                        ],
                    ],
                    'Animations' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'FrameRate' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'Format' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Number' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'ScaleType' => [
                                    'type' => 'string',
                                ],
                                'StartTime' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'URI' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'Interval' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                    'Snapshots' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Format' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Number' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'ScaleType' => [
                                    'type' => 'string',
                                ],
                                'Mode' => [
                                    'type' => 'string',
                                ],
                                'StartTime' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'Height' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'URI' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Width' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                ],
                                'Interval' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'Threshold' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'TargetSubtitle' => [
                'type' => 'object',
                'properties' => [
                    'DisableSubtitle' => [
                        'type' => 'boolean',
                    ],
                    'Stream' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                        ],
                    ],
                    'ExtractSubtitle' => [
                        'type' => 'object',
                        'properties' => [
                            'URI' => [
                                'type' => 'string',
                            ],
                            'Format' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'TargetVideo' => [
                'type' => 'object',
                'properties' => [
                    'DisableVideo' => [
                        'type' => 'boolean',
                    ],
                    'Stream' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int32',
                        ],
                    ],
                    'TranscodeVideo' => [
                        'type' => 'object',
                        'properties' => [
                            'Codec' => [
                                'type' => 'string',
                            ],
                            'PixelFormat' => [
                                'type' => 'string',
                            ],
                            'FrameRateOption' => [
                                'type' => 'string',
                            ],
                            'FrameRate' => [
                                'type' => 'number',
                                'format' => 'float',
                            ],
                            'ResolutionOption' => [
                                'type' => 'string',
                            ],
                            'Resolution' => [
                                'type' => 'string',
                            ],
                            'AdaptiveResolutionDirection' => [
                                'type' => 'boolean',
                            ],
                            'ScaleType' => [
                                'type' => 'string',
                            ],
                            'Rotation' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'BitrateOption' => [
                                'type' => 'string',
                            ],
                            'Bitrate' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'GOPSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'CRF' => [
                                'type' => 'number',
                                'format' => 'float',
                            ],
                            'BufferSize' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'MaxBitrate' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'BFrames' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Refs' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'VideoSlim' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'FilterVideo' => [
                        'type' => 'object',
                        'properties' => [
                            'Watermarks' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'type' => 'string',
                                        ],
                                        'Dx' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                        ],
                                        'Dy' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                        ],
                                        'StartTime' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                        ],
                                        'Duration' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                        ],
                                        'ReferPos' => [
                                            'type' => 'string',
                                        ],
                                        'Content' => [
                                            'type' => 'string',
                                        ],
                                        'FontName' => [
                                            'type' => 'string',
                                        ],
                                        'FontSize' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'FontColor' => [
                                            'type' => 'string',
                                        ],
                                        'FontApha' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                        ],
                                        'BorderWidth' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                        ],
                                        'BorderColor' => [
                                            'type' => 'string',
                                        ],
                                        'URI' => [
                                            'type' => 'string',
                                        ],
                                        'Width' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                        ],
                                        'Height' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                        ],
                                    ],
                                ],
                            ],
                            'Delogos' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'StartTime' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                        ],
                                        'Duration' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                        ],
                                        'Dx' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                        ],
                                        'Dy' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                        ],
                                        'Width' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                        ],
                                        'Height' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                        ],
                                        'ReferPos' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Speed' => [
                                'type' => 'number',
                                'format' => 'float',
                            ],
                            'Desensitization' => [
                                'type' => 'object',
                                'properties' => [
                                    'Face' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Confidence' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                            ],
                                            'MinSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                            ],
                                        ],
                                    ],
                                    'LicensePlate' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Confidence' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                            ],
                                            'MinSize' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'TaskInfo' => [
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'type' => 'string',
                    ],
                    'Code' => [
                        'type' => 'string',
                    ],
                    'Message' => [
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'type' => 'string',
                    ],
                    'UserData' => [
                        'type' => 'string',
                    ],
                    'TaskType' => [
                        'type' => 'string',
                    ],
                    'TaskId' => [
                        'type' => 'string',
                    ],
                    'Tags' => [
                        'type' => 'object',
                    ],
                    'TaskRequestDefinition' => [
                        'type' => 'string',
                    ],
                    'Progress' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'TimeRange' => [
                'type' => 'object',
                'properties' => [
                    'Start' => [
                        'type' => 'string',
                    ],
                    'End' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ToolCall' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'string',
                    ],
                    'Function' => [
                        '$ref' => '#/components/schemas/FunctionCall',
                    ],
                ],
            ],
            'TrainingSpecification' => [
                'type' => 'object',
                'properties' => [
                    'ValidationSourceURI' => [
                        'type' => 'string',
                    ],
                    'Runtime' => [
                        '$ref' => '#/components/schemas/Runtime',
                        'required' => true,
                    ],
                    'Endpoint' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'ModelSpecification' => [
                        '$ref' => '#/components/schemas/ModelSpecification',
                        'required' => true,
                    ],
                    'DatasetName' => [
                        'type' => 'string',
                    ],
                    'SourceURI' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'Transforms' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CustomParams',
                        ],
                    ],
                    'ValidationSplit' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'TargetURI' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'TrimPolicy' => [
                'type' => 'object',
                'properties' => [
                    'DisableDeleteEmptyCell' => [
                        'type' => 'boolean',
                    ],
                    'DisableDeleteRepeatedStyle' => [
                        'type' => 'boolean',
                    ],
                    'DisableDeleteUnusedShape' => [
                        'type' => 'boolean',
                    ],
                    'DisableDeleteUnusedPicture' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'VideoInsight' => [
                'type' => 'object',
                'properties' => [
                    'Description' => [
                        'type' => 'string',
                    ],
                    'Caption' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'VideoStream' => [
                'type' => 'object',
                'properties' => [
                    'Index' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Language' => [
                        'type' => 'string',
                    ],
                    'CodecName' => [
                        'type' => 'string',
                    ],
                    'CodecLongName' => [
                        'type' => 'string',
                    ],
                    'Profile' => [
                        'type' => 'string',
                    ],
                    'CodecTimeBase' => [
                        'type' => 'string',
                    ],
                    'CodecTagString' => [
                        'type' => 'string',
                    ],
                    'CodecTag' => [
                        'type' => 'string',
                    ],
                    'Width' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Height' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'HasBFrames' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'SampleAspectRatio' => [
                        'type' => 'string',
                    ],
                    'DisplayAspectRatio' => [
                        'type' => 'string',
                    ],
                    'PixelFormat' => [
                        'type' => 'string',
                    ],
                    'Level' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FrameRate' => [
                        'type' => 'string',
                    ],
                    'AverageFrameRate' => [
                        'type' => 'string',
                    ],
                    'TimeBase' => [
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
                    'Bitrate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'FrameCount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Rotate' => [
                        'type' => 'string',
                    ],
                    'BitDepth' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ColorSpace' => [
                        'type' => 'string',
                    ],
                    'ColorRange' => [
                        'type' => 'string',
                    ],
                    'ColorTransfer' => [
                        'type' => 'string',
                    ],
                    'ColorPrimaries' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'WebofficePermission' => [
                'type' => 'object',
                'properties' => [
                    'Rename' => [
                        'type' => 'boolean',
                    ],
                    'Readonly' => [
                        'type' => 'boolean',
                    ],
                    'History' => [
                        'type' => 'boolean',
                    ],
                    'Print' => [
                        'type' => 'boolean',
                    ],
                    'Export' => [
                        'type' => 'boolean',
                    ],
                    'Copy' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'WebofficeUser' => [
                'type' => 'object',
                'properties' => [
                    'Id' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                    'Avatar' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'WebofficeWatermark' => [
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Value' => [
                        'type' => 'string',
                    ],
                    'Rotate' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'Vertical' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Horizontal' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'Font' => [
                        'type' => 'string',
                    ],
                    'FillStyle' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'WorkflowParameter' => [
                'type' => 'object',
                'properties' => [
                    'Value' => [
                        'type' => 'string',
                    ],
                    'Name' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ListRegions' => [
            'methods' => [
                'get',
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
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateProject' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceRole',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProjectMaxDatasetCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxBindCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxFileCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxEntityCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxRelationCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxTotalFileSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
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
        'UpdateProject' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ServiceRole',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProjectMaxDatasetCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxBindCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxFileCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxEntityCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxRelationCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxTotalFileSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
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
        'GetProject' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'WithStatistics',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListProjects' => [
            'methods' => [
                'get',
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
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
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
                        'maxItems' => 20,
                    ],
                ],
            ],
        ],
        'DeleteProject' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateDataset' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxBindCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxFileCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxEntityCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxRelationCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxTotalFileSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WorkflowParameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/WorkflowParameter',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDataset' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxBindCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxFileCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxEntityCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxRelationCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DatasetMaxTotalFileSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WorkflowParameters',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/WorkflowParameter',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'GetDataset' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'WithStatistics',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListDatasets' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Prefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteDataset' => [
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'IndexFileMeta' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'File',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/InputFile',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'BatchIndexFileMeta' => [
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Files',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/InputFile',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateFileMeta' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'File',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/InputFile',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'BatchUpdateFileMeta' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Files',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/InputFile',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'GetFileMeta' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'URI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'WithFields',
                    'in' => 'query',
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
        'BatchGetFileMeta' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'URIs',
                    'in' => 'query',
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
                    'name' => 'WithFields',
                    'in' => 'query',
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
        'DeleteFileMeta' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'URI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'BatchDeleteFileMeta' => [
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'URIs',
                    'in' => 'query',
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
        'SimpleQuery' => [
            'methods' => [
                'get',
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Query',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/SimpleQuery',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Aggregations',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Field' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Operation' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'WithFields',
                    'in' => 'query',
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
                [
                    'name' => 'WithoutTotalHits',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'SemanticQuery' => [
            'methods' => [
                'get',
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WithFields',
                    'in' => 'query',
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
                [
                    'name' => 'MediaTypes',
                    'in' => 'query',
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
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'FuzzyQuery' => [
            'methods' => [
                'get',
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
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Query',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WithFields',
                    'in' => 'query',
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
        'CreateFigureClusteringTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateFigureClustersMergingTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'From',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'To',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Froms',
                    'in' => 'query',
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
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetFigureCluster' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
            ],
        ],
        'QueryFigureClusters' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomLabels',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CreateTimeRange',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRange',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UpdateTimeRange',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRange',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WithTotalCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'BatchGetFigureCluster' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ObjectIds',
                    'in' => 'query',
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
        'UpdateFigureCluster' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'FigureCluster',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/FigureClusterForReq',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'SearchImageFigureCluster' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateFacesSearchingTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'MaxResult',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateLocationDateClusteringTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DateOptions',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'GapDays' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'MinDays' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'MaxDays' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'LocationOptions',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'LocationDateClusterLevels' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'enum' => [],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QueryLocationDateClusters' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ObjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Address',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LocationDateClusterLevels',
                    'in' => 'query',
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
                [
                    'name' => 'LocationDateClusterStartTimeRange',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRange',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LocationDateClusterEndTimeRange',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRange',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CreateTimeRange',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRange',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UpdateTimeRange',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRange',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomLabels',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateLocationDateCluster' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'Title',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomLabels',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteLocationDateCluster' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ObjectId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateStory' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ObjectId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoryType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StorySubType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoryStartTime',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoryEndTime',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoryName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MinFileCount',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxFileCount',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NotifyTopicName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomLabels',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Address',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/AddressForStory',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QueryStories' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ObjectId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoryName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoryType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StorySubType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FigureClusterIds',
                    'in' => 'query',
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
                [
                    'name' => 'CreateTimeRange',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRange',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoryStartTimeRange',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRange',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StoryEndTimeRange',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRange',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomLabels',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WithEmptyStories',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetStory' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
            ],
        ],
        'CreateCustomizedStory' => [
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StoryType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StorySubType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StoryName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Cover',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'URI' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Files',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => true,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'CustomLabels',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateStory' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ObjectId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StoryName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Cover',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'URI' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'CustomLabels',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AddStoryFiles' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ObjectId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Files',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveStoryFiles' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ObjectId',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Files',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteStory' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
            ],
        ],
        'CreateSimilarImageClusteringTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QuerySimilarImageClusters' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CustomLabels',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateBinding' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'URI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetBinding' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'URI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListBindings' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteBinding' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'URI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AttachOSSBucket' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OSSBucket',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DetachOSSBucket' => [
            'methods' => [
                'get',
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
                    'name' => 'OSSBucket',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetOSSBucketAttachment' => [
            'methods' => [
                'get',
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
                    'name' => 'OSSBucket',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'EncodeBlindWatermark' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TargetURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StrengthLevel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageQuality',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateDecodeBlindWatermarkTask' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StrengthLevel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'WatermarkType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TargetURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageQuality',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Model',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OriginalImageURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetDecodeBlindWatermarkResult' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
        'DetectImageLabels' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Threshold',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DetectImageScore' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DetectImageCodes' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DetectImageFaces' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DetectImageCropping' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AspectRatios',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AddImageMosaic' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TargetURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ImageFormat',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Quality',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Targets',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Type' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Boundary' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'ReferPos' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'X' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                            'required' => true,
                                        ],
                                        'Y' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                            'required' => true,
                                        ],
                                        'Height' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                            'required' => true,
                                        ],
                                        'Width' => [
                                            'type' => 'number',
                                            'format' => 'float',
                                            'required' => true,
                                        ],
                                    ],
                                ],
                                'MosaicRadius' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'BlurRadius' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Sigma' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Color' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateImageToPDFTask' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Rotate' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'TargetURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateImageSplicingTask' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Rotate' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'TargetURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ImageFormat',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Quality',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Direction',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ScaleType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Align',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Padding',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Margin',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'BackgroundColor',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CompareImageFaces' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'URI1' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'URI2' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DetectImageBodies' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sensitivity',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DetectImageCars' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DetectImageTexts' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateMediaConvertTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'StartTime' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'Duration' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'Subtitles' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'URI' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'TimeOffset' => [
                                                'type' => 'number',
                                                'format' => 'double',
                                                'required' => false,
                                            ],
                                            'Language' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                                'Attached' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'AlignMode' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'DisableVideo' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'DisableAudio' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Targets',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Container' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Speed' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'Segment' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Format' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'Duration' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                            'required' => false,
                                        ],
                                        'StartNumber' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'Video' => [
                                    '$ref' => '#/components/schemas/TargetVideo',
                                    'required' => false,
                                ],
                                'Audio' => [
                                    '$ref' => '#/components/schemas/TargetAudio',
                                    'required' => false,
                                ],
                                'Subtitle' => [
                                    '$ref' => '#/components/schemas/TargetSubtitle',
                                    'required' => false,
                                ],
                                'Image' => [
                                    '$ref' => '#/components/schemas/TargetImage',
                                    'required' => false,
                                ],
                                'StripMetadata' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AlignmentIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DetectMediaMeta' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateVideoLabelClassificationTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetVideoLabelClassificationResult' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
        'GenerateVideoPlaylist' => [
            'methods' => [
                'post',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceStartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceDuration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'number',
                        'format' => 'float',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceSubtitles',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Language' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'MasterURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Targets',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Video' => [
                                    '$ref' => '#/components/schemas/TargetVideo',
                                    'required' => false,
                                ],
                                'Audio' => [
                                    '$ref' => '#/components/schemas/TargetAudio',
                                    'required' => false,
                                ],
                                'Subtitle' => [
                                    '$ref' => '#/components/schemas/TargetSubtitle',
                                    'required' => false,
                                ],
                                'TranscodeAhead' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'Duration' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'InitialTranscode' => [
                                    'type' => 'number',
                                    'format' => 'float',
                                    'required' => false,
                                ],
                                'InitialSegments' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'number',
                                        'format' => 'float',
                                        'required' => false,
                                    ],
                                ],
                                'Tags' => [
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
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OverwritePolicy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GenerateWebofficeToken' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Filename',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CachePreview',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Referer',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PreviewPages',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExternalUploaded',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NotifyTopicName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Hidecmb',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Permission',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/WebofficePermission',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'User',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/WebofficeUser',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Watermark',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/WebofficeWatermark',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RefreshWebofficeToken' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AccessToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RefreshToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateOfficeConversionTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Rotate' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'TargetURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TargetURIPrefix',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartPage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndPage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ScalePercentage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Quality',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Pages',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxSheetRow',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxSheetColumn',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SheetCount',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SheetIndex',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FitToWidth',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FitToHeight',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FirstPage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PaperSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PaperHorizontal',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TrimPolicy',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TrimPolicy',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ShowComments',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LongPicture',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ImageDPI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LongText',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HoldLineFeed',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ExtractDocumentText' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateFileCompressionTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Sources',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'URI' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Alias' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Mode' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceManifestURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TargetURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CompressedFormat',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateArchiveFileInspectionTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'deprecated' => false,
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateFileUncompressionTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Password',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SelectedFiles',
                    'in' => 'query',
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
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TargetURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateCompressPointCloudTask' => [
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TargetURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PointCloudFileFormat',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'pcd',
                        ],
                    ],
                ],
                [
                    'name' => 'CompressMethod',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'octree',
                            'kdtree',
                        ],
                    ],
                ],
                [
                    'name' => 'PointCloudFields',
                    'in' => 'query',
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
                    'name' => 'KdtreeOption',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/KdtreeOption',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OctreeOption',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/OctreeOption',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DetectTextAnomaly' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateImageModerationTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Scenes',
                    'in' => 'query',
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
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxFrames',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateVideoModerationTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'UserData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SourceURI',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CredentialConfig',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/CredentialConfig',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Scenes',
                    'in' => 'query',
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
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxFrames',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Notification',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetImageModerationResult' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
        'GetVideoModerationResult' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
        'GetTask' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'RequestDefinition',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTasks' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TaskTypes',
                    'in' => 'query',
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
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TagSelector',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartTimeRange',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRange',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTimeRange',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/TimeRange',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RequestDefinition',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateTrigger' => [
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Input',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Input',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Actions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Parameters' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                                'FastFailPolicy' => [
                                    '$ref' => '#/components/schemas/FastFailPolicy',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'MNS' => [
                                '$ref' => '#/components/schemas/MNS',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceRole',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'SuspendTrigger' => [
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ResumeTrigger' => [
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateTrigger' => [
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Input',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Input',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Actions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Parameters' => [
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
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetTrigger' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
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
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListTriggers' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TagSelector',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteTrigger' => [
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateBatch' => [
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Input',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Input',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Actions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Parameters' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                                'FastFailPolicy' => [
                                    '$ref' => '#/components/schemas/FastFailPolicy',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Notification',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'MNS' => [
                                '$ref' => '#/components/schemas/MNS',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ServiceRole',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'SuspendBatch' => [
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ResumeBatch' => [
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateBatch' => [
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Input',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/Input',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Actions',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Name' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Parameters' => [
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
                [
                    'name' => 'Tags',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListBatches' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'State',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TagSelector',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetBatch' => [
            'methods' => [
                'get',
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
                    'name' => 'ProjectName',
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
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteBatch' => [
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
                    'name' => 'ProjectName',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListAttachedOSSBuckets' => [
            'methods' => [
                'get',
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
            'parameters' => [
                [
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MaxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ContextualAnswer' => [
            'methods' => [
                'post',
                'get',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Messages',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/ContextualMessage',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'Files',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/ContextualFile',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'ContextualRetrieval' => [
            'methods' => [
                'post',
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
                    'name' => 'ProjectName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DatasetName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Messages',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/ContextualMessage',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'RecallOnly',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SmartClusterIds',
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
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'imm-vpc.cn-beijing-gov-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'imm.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'imm.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'imm.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'imm.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'imm.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'imm.cn-north-2-gov-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'imm.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'imm.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'imm.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'imm.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'imm.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'imm.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'imm.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'imm.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'imm.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'imm.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'imm.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'imm.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'imm.cn-wulanchabu.aliyuncs.com',
        ],
    ],
];