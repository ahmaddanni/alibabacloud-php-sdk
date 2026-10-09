<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Push',
        'version' => '2016-08-01',
    ],
    'components' => [
        'schemas' => [
            'PushTask' => [
                'type' => 'object',
                'properties' => [
                    'Action' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'PUSH_IMMEDIATELY',
                            'SCHEDULED_PUSH',
                            'CREATE_CONTINUOUS_PUSH',
                            'CONTINUOUS_PUSH',
                        ],
                    ],
                    'Target' => [
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'DEVICE',
                                    'TAG',
                                    'ALIAS',
                                    'ACCOUNT',
                                    'ALL',
                                    'FILE',
                                ],
                            ],
                            'Value' => [
                                'type' => 'string',
                            ],
                            'Platform' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'ANDROID',
                                    'IOS',
                                    'HMOS',
                                    'ALL',
                                ],
                            ],
                        ],
                    ],
                    'Message' => [
                        'type' => 'object',
                        'properties' => [
                            'Title' => [
                                'type' => 'string',
                            ],
                            'Body' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                    'Notification' => [
                        'type' => 'object',
                        'properties' => [
                            'Title' => [
                                'type' => 'string',
                            ],
                            'Body' => [
                                'type' => 'string',
                            ],
                            'Ios' => [
                                'type' => 'object',
                                'properties' => [
                                    'Subtitle' => [
                                        'type' => 'string',
                                    ],
                                    'Music' => [
                                        'type' => 'string',
                                    ],
                                    'Badge' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'BadgeAutoIncrement' => [
                                        'type' => 'boolean',
                                    ],
                                    'Silent' => [
                                        'type' => 'boolean',
                                    ],
                                    'Mutable' => [
                                        'type' => 'boolean',
                                    ],
                                    'Category' => [
                                        'type' => 'string',
                                    ],
                                    'CollapseId' => [
                                        'type' => 'string',
                                    ],
                                    'ThreadId' => [
                                        'type' => 'string',
                                    ],
                                    'InterruptionLevel' => [
                                        'type' => 'string',
                                        'enum' => [
                                            'passive',
                                            'active',
                                            'time-sensitive',
                                            'critical',
                                        ],
                                    ],
                                    'RelevanceScore' => [
                                        'type' => 'number',
                                        'format' => 'double',
                                    ],
                                    'ExtParameters' => [
                                        'type' => 'string',
                                    ],
                                    'LiveActivity' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Id' => [
                                                'type' => 'string',
                                            ],
                                            'Event' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'start',
                                                    'update',
                                                    'end',
                                                ],
                                            ],
                                            'AttributesType' => [
                                                'type' => 'string',
                                            ],
                                            'Attributes' => [
                                                'type' => 'string',
                                            ],
                                            'ContentState' => [
                                                'type' => 'string',
                                            ],
                                            'DismissalDate' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                            ],
                                            'StaleDate' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                            ],
                                        ],
                                    ],
                                    'ApnsEnv' => [
                                        'type' => 'string',
                                        'enum' => [
                                            'DEV',
                                            'PRODUCT',
                                        ],
                                    ],
                                ],
                            ],
                            'Hmos' => [
                                'type' => 'object',
                                'properties' => [
                                    'Category' => [
                                        'type' => 'string',
                                        'enum' => [
                                            'IM',
                                            'VOIP',
                                            'SUBSCRIPTION',
                                            'TRAVEL',
                                            'HEALTH',
                                            'WORK',
                                            'ACCOUNT',
                                            'EXPRESS',
                                            'FINANCE',
                                            'DEVICE_REMINDER',
                                            'MAIL',
                                            'CUSTOMER_SERVICE',
                                            'MARKETING',
                                        ],
                                    ],
                                    'SlotType' => [
                                        'type' => 'string',
                                        'enum' => [
                                            'SOCIAL_COMMUNICATION',
                                            'SERVICE_INFORMATION',
                                            'CONTENT_INFORMATION',
                                            'CUSTOMER_SERVICE',
                                            'OTHER_TYPES',
                                            'UNKNOWN_TYPE',
                                            'LIVE_VIEW',
                                        ],
                                    ],
                                    'NotifyId' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'Action' => [
                                        'type' => 'string',
                                    ],
                                    'Uri' => [
                                        'type' => 'string',
                                    ],
                                    'RenderStyle' => [
                                        'type' => 'string',
                                        'enum' => [
                                            'NORMAL',
                                            'MULTI_LINE',
                                        ],
                                    ],
                                    'ImageUrl' => [
                                        'type' => 'string',
                                    ],
                                    'InboxContent' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'ExtParameters' => [
                                        'type' => 'string',
                                    ],
                                    'TestMessage' => [
                                        'type' => 'boolean',
                                    ],
                                    'ReceiptId' => [
                                        'type' => 'string',
                                    ],
                                    'ExtensionPush' => [
                                        'type' => 'boolean',
                                    ],
                                    'ExtensionExtraData' => [
                                        'type' => 'string',
                                    ],
                                    'BadgeSetNum' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'BadgeAddNum' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'LiveViewPayload' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'Android' => [
                                'type' => 'object',
                                'properties' => [
                                    'VendorChannelActivity' => [
                                        'type' => 'string',
                                    ],
                                    'ChannelId' => [
                                        'type' => 'string',
                                    ],
                                    'RenderStyle' => [
                                        'type' => 'string',
                                        'enum' => [
                                            'NORMAL',
                                            'BIG_TEXT',
                                            'BIG_PICTURE',
                                            'MULTI_LINE',
                                        ],
                                    ],
                                    'PictureUrl' => [
                                        'type' => 'string',
                                    ],
                                    'ImageUrl' => [
                                        'type' => 'string',
                                    ],
                                    'InboxContent' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                    'NotifyId' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'GroupId' => [
                                        'type' => 'string',
                                    ],
                                    'ExtParameters' => [
                                        'type' => 'string',
                                    ],
                                    'Music' => [
                                        'type' => 'string',
                                    ],
                                    'BadgeSetNum' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'BadgeAddNum' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                    ],
                                    'BadgeActivity' => [
                                        'type' => 'string',
                                    ],
                                    'TestMessage' => [
                                        'type' => 'boolean',
                                    ],
                                    'Options' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'Accs' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'CustomStyle' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'Priority' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                    ],
                                                    'ThreadId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'OpenType' => [
                                                        'type' => 'string',
                                                        'enum' => [
                                                            'APPLICATION',
                                                            'ACTIVITY',
                                                            'URL',
                                                            'NONE',
                                                        ],
                                                    ],
                                                    'OpenActivity' => [
                                                        'type' => 'string',
                                                    ],
                                                    'OpenUrl' => [
                                                        'type' => 'string',
                                                    ],
                                                    'NotifyType' => [
                                                        'type' => 'string',
                                                        'enum' => [
                                                            'VIBRATE',
                                                            'SOUND',
                                                            'BOTH',
                                                            'NONE',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Huawei' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ReceiptId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Category' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Urgency' => [
                                                        'type' => 'string',
                                                        'enum' => [
                                                            'HIGH',
                                                            'NORMAL',
                                                        ],
                                                    ],
                                                    'Importance' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'enum' => [
                                                            '0',
                                                            '1',
                                                        ],
                                                    ],
                                                    'LiveNotificationPayload' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'Honor' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Importance' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'enum' => [
                                                            '0',
                                                            '1',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Xiaomi' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Channel' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'Vivo' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Category' => [
                                                        'type' => 'string',
                                                        'enum' => [
                                                            'IM',
                                                            'ACCOUNT',
                                                            'DEVICE_REMINDER',
                                                            'ORDER',
                                                            'TODO',
                                                            'SUBSCRIPTION',
                                                            'NEWS',
                                                            'CONTENT',
                                                            'MARKETING',
                                                            'SOCIAL',
                                                        ],
                                                    ],
                                                    'ReceiptId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'Importance' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'enum' => [
                                                            '0',
                                                            '1',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Oppo' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'Category' => [
                                                        'type' => 'string',
                                                        'enum' => [
                                                            'IM',
                                                            'ACCOUNT',
                                                            'DEVICE_REMINDER',
                                                            'ORDER',
                                                            'TODO',
                                                            'SUBSCRIPTION',
                                                            'NEWS',
                                                            'CONTENT',
                                                            'MARKETING',
                                                            'SOCIAL',
                                                        ],
                                                    ],
                                                    'NotifyLevel' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'enum' => [
                                                            '1',
                                                            '2',
                                                            '16',
                                                        ],
                                                    ],
                                                    'PrivateMsgTemplateId' => [
                                                        'type' => 'string',
                                                    ],
                                                    'PrivateTitleParameters' => [
                                                        'type' => 'string',
                                                    ],
                                                    'PrivateContentParameters' => [
                                                        'type' => 'string',
                                                    ],
                                                    'IntelligentIntent' => [
                                                        'type' => 'string',
                                                    ],
                                                    'DeleteIntentData' => [
                                                        'type' => 'string',
                                                    ],
                                                ],
                                            ],
                                            'Meizu' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'NoticeMsgType' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'enum' => [
                                                            '0',
                                                            '1',
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
                    'Options' => [
                        'type' => 'object',
                        'properties' => [
                            'UseChannels' => [
                                'type' => 'string',
                            ],
                            'PushTime' => [
                                'type' => 'string',
                            ],
                            'ExpireTime' => [
                                'type' => 'string',
                            ],
                            'JobKey' => [
                                'type' => 'string',
                            ],
                            'Trim' => [
                                'type' => 'boolean',
                            ],
                            'Sms' => [
                                'type' => 'object',
                                'properties' => [
                                    'TemplateName' => [
                                        'type' => 'string',
                                    ],
                                    'SignName' => [
                                        'type' => 'string',
                                    ],
                                    'Params' => [
                                        'type' => 'string',
                                    ],
                                    'DelaySecs' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'SendPolicy' => [
                                        'type' => 'string',
                                        'enum' => [
                                            'PUSH_NOT_RECEIVED',
                                            'USER_NOT_OPENED',
                                        ],
                                    ],
                                ],
                            ],
                            'MessageId' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'Push' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PushType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'MESSAGE',
                            'NOTICE',
                        ],
                    ],
                ],
                [
                    'name' => 'DeviceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'iOS',
                            'ANDROID',
                            'ALL',
                            'HARMONY',
                        ],
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'ALL',
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                            'TAG',
                            'TBD',
                            'FILE',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StoreOffline',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SendChannels',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PushTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JobKey',
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
                    'name' => 'Body',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Trim',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSApnsEnv',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'PRODUCT',
                            'DEV',
                        ],
                    ],
                ],
                [
                    'name' => 'iOSRemind',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSSubtitle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSRemindBody',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSMusic',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSBadge',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSBadgeAutoIncrement',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSSilentNotification',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSMutableContent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSNotificationCategory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSNotificationCollapseId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSNotificationThreadId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSInterruptionLevel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSRelevanceScore',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'number',
                        'format' => 'double',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSExtParameters',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSLiveActivityEvent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'start',
                            'update',
                            'end',
                        ],
                    ],
                ],
                [
                    'name' => 'iOSLiveActivityId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSLiveActivityAttributesType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSLiveActivityAttributes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSLiveActivityContentState',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSLiveActivityDismissalDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'iOSLiveActivityStaleDate',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidNotifyType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'NONE',
                            'VIBRATE',
                            'SOUND',
                            'BOTH',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidRemind',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidOpenType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'APPLICATION',
                            'ACTIVITY',
                            'URL',
                            'NONE',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidActivity',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidOpenUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidPopupActivity',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidPopupTitle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidPopupBody',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidRenderStyle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidBigTitle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidBigBody',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidBigPictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidXiaomiBigPictureUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidXiaomiImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidInboxBody',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidNotificationBarType',
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
                    'name' => 'AndroidNotificationBarPriority',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '-2',
                        'maximum' => '2',
                    ],
                ],
                [
                    'name' => 'AndroidNotificationNotifyId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidNotificationChannel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidNotificationHuaweiChannel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidNotificationHonorChannel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidNotificationXiaomiChannel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidNotificationVivoChannel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidNotificationGroup',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidNotificationThreadId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidExtParameters',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidMessageHuaweiUrgency',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidMessageHuaweiCategory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidMessageOppoCategory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidMessageOppoNotifyLevel',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidMessageVivoCategory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidTargetUserType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidHuaweiTargetUserType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidHonorTargetUserType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidVivoPushMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidOppoIntentEnv',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidHuaweiReceiptId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidVivoReceiptId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidBadgeClass',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidBadgeAddNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '99',
                    ],
                ],
                [
                    'name' => 'AndroidBadgeSetNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '99',
                    ],
                ],
                [
                    'name' => 'AndroidMusic',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyRemind',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyRemindTitle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyRemindBody',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyCategory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'IM',
                            'VOIP',
                            'SUBSCRIPTION',
                            'TRAVEL',
                            'HEALTH',
                            'WORK',
                            'ACCOUNT',
                            'EXPRESS',
                            'FINANCE',
                            'DEVICE_REMINDER',
                            'MAIL',
                            'CUSTOMER_SERVICE',
                            'MARKETING',
                        ],
                    ],
                ],
                [
                    'name' => 'HarmonyNotificationSlotType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'SOCIAL_COMMUNICATION',
                            'SERVICE_INFORMATION',
                            'CONTENT_INFORMATION',
                            'CUSTOMER_SERVICE',
                            'OTHER_TYPES',
                        ],
                    ],
                ],
                [
                    'name' => 'HarmonyNotifyId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyActionType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'APP_HOME_PAGE',
                            'APP_CUSTOM_PAGE',
                        ],
                    ],
                ],
                [
                    'name' => 'HarmonyAction',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyUri',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyRenderStyle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'NORMAL',
                            'MULTI_LINE',
                        ],
                    ],
                ],
                [
                    'name' => 'HarmonyImageUrl',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyInboxContent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyExtParameters',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyTestMessage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyReceiptId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyExtensionPush',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyExtensionExtraData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyBadgeAddNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'HarmonyBadgeSetNum',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SmsTemplateName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SmsSignName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SmsParams',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SmsDelaySecs',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                    ],
                ],
                [
                    'name' => 'SmsSendPolicy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '0',
                        'maximum' => '1',
                    ],
                ],
                [
                    'name' => 'SendSpeed',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'deprecated' => true,
                        'required' => false,
                        'minimum' => '10000',
                    ],
                ],
                [
                    'name' => 'AndroidXiaoMiNotifyTitle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidXiaoMiNotifyBody',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidXiaoMiActivity',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IdempotentToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 36,
                        'maxLength' => 36,
                    ],
                ],
                [
                    'name' => 'AndroidMeizuNoticeMsgType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'enum' => [
                            '0',
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'AndroidOppoPrivateMsgTemplateId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidOppoPrivateTitleParameters',
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
                    'name' => 'AndroidOppoPrivateContentParameters',
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
                    'name' => 'HarmonyLiveViewPayload',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidHuaweiLiveNotificationPayload',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidOppoIntelligentIntent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AndroidOppoDeleteIntentData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'MassPush' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PushTask',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'PushType' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'DeviceType' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Target' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'TargetValue' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'StoreOffline' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'SendChannels' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'PushTime' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ExpireTime' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'JobKey' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Title' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Body' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Trim' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'iOSApnsEnv' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSRemind' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'iOSSubtitle' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSRemindBody' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSMusic' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSBadge' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'iOSBadgeAutoIncrement' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'iOSSilentNotification' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'iOSMutableContent' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'iOSNotificationCategory' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSNotificationCollapseId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSNotificationThreadId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSInterruptionLevel' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSRelevanceScore' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => false,
                                ],
                                'iOSExtParameters' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSLiveActivityEvent' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'start',
                                        'update',
                                        'end',
                                    ],
                                ],
                                'iOSLiveActivityId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSLiveActivityAttributesType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSLiveActivityAttributes' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSLiveActivityContentState' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'iOSLiveActivityDismissalDate' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                                'iOSLiveActivityStaleDate' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                                'AndroidNotifyType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidRemind' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'AndroidOpenType' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidActivity' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidOpenUrl' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidPopupActivity' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidPopupTitle' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidPopupBody' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidRenderStyle' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidBigTitle' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidBigBody' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidBigPictureUrl' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidXiaomiBigPictureUrl' => [
                                    'type' => 'string',
                                    'deprecated' => true,
                                    'required' => false,
                                ],
                                'AndroidImageUrl' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidXiaomiImageUrl' => [
                                    'type' => 'string',
                                    'deprecated' => true,
                                    'required' => false,
                                ],
                                'AndroidInboxBody' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidNotificationBarType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'AndroidNotificationBarPriority' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'AndroidNotificationNotifyId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'AndroidNotificationChannel' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidNotificationHuaweiChannel' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidNotificationHonorChannel' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidNotificationXiaomiChannel' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidNotificationVivoChannel' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidNotificationGroup' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidNotificationThreadId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidExtParameters' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidMessageHuaweiUrgency' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidMessageHuaweiCategory' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidMessageOppoCategory' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidMessageOppoNotifyLevel' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'AndroidMessageVivoCategory' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidTargetUserType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '0',
                                        '1',
                                    ],
                                ],
                                'AndroidHuaweiTargetUserType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '0',
                                        '1',
                                    ],
                                ],
                                'AndroidHonorTargetUserType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '0',
                                        '1',
                                    ],
                                ],
                                'AndroidVivoPushMode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '0',
                                        '1',
                                    ],
                                ],
                                'AndroidOppoIntentEnv' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '0',
                                        '1',
                                    ],
                                ],
                                'AndroidHuaweiReceiptId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidVivoReceiptId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidBadgeClass' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidBadgeAddNum' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'AndroidBadgeSetNum' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'AndroidMusic' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'HarmonyRemind' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'HarmonyRemindTitle' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'HarmonyRemindBody' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'HarmonyCategory' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'IM',
                                        'VOIP',
                                        'SUBSCRIPTION',
                                        'TRAVEL',
                                        'HEALTH',
                                        'WORK',
                                        'ACCOUNT',
                                        'EXPRESS',
                                        'FINANCE',
                                        'DEVICE_REMINDER',
                                        'MAIL',
                                        'CUSTOMER_SERVICE',
                                        'MARKETING',
                                    ],
                                ],
                                'HarmonyNotificationSlotType' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'SOCIAL_COMMUNICATION',
                                        'SERVICE_INFORMATION',
                                        'CONTENT_INFORMATION',
                                        'CUSTOMER_SERVICE',
                                        'OTHER_TYPES',
                                    ],
                                ],
                                'HarmonyNotifyId' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'HarmonyActionType' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'APP_HOME_PAGE',
                                        'APP_CUSTOM_PAGE',
                                    ],
                                ],
                                'HarmonyAction' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'HarmonyUri' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'HarmonyRenderStyle' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'NORMAL',
                                        'MULTI_LINE',
                                    ],
                                ],
                                'HarmonyImageUrl' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'HarmonyInboxContent' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'HarmonyExtParameters' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'HarmonyTestMessage' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'HarmonyReceiptId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'HarmonyExtensionPush' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'HarmonyExtensionExtraData' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'HarmonyBadgeAddNum' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'HarmonyBadgeSetNum' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'SendSpeed' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'deprecated' => true,
                                    'required' => false,
                                ],
                                'AndroidXiaoMiNotifyTitle' => [
                                    'type' => 'string',
                                    'deprecated' => true,
                                    'required' => false,
                                ],
                                'AndroidXiaoMiNotifyBody' => [
                                    'type' => 'string',
                                    'deprecated' => true,
                                    'required' => false,
                                ],
                                'AndroidXiaoMiActivity' => [
                                    'type' => 'string',
                                    'deprecated' => true,
                                    'required' => false,
                                ],
                                'AndroidMeizuNoticeMsgType' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'enum' => [
                                        '0',
                                        '1',
                                    ],
                                ],
                                'AndroidOppoPrivateMsgTemplateId' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidOppoPrivateTitleParameters' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'additionalProperties' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'AndroidOppoPrivateContentParameters' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'additionalProperties' => [
                                        'type' => 'string',
                                    ],
                                ],
                                'HarmonyLiveViewPayload' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidHuaweiLiveNotificationPayload' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidOppoIntelligentIntent' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'AndroidOppoDeleteIntentData' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'IdempotentToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 36,
                        'maxLength' => 36,
                    ],
                ],
            ],
        ],
        'ContinuouslyPush' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CompleteContinuouslyPush' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CancelPush' => [
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
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PushV2' => [
            'methods' => [
                'post',
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IdempotentToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 36,
                        'maxLength' => 36,
                    ],
                ],
                [
                    'name' => 'PushTask',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        '$ref' => '#/components/schemas/PushTask',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'MassPushV2' => [
            'methods' => [
                'post',
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IdempotentToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'minLength' => 36,
                        'maxLength' => 36,
                    ],
                ],
                [
                    'name' => 'PushTasks',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            '$ref' => '#/components/schemas/PushTask',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'CheckCertificate' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'minimum' => '0',
                        'maximum' => '1000000000',
                    ],
                ],
            ],
        ],
        'QueryPushRecords' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
                [
                    'name' => 'PushType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'MESSAGE',
                            'NOTICE',
                        ],
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'ACCOUNT',
                            'ALIAS',
                            'DEVICE',
                            'TAG',
                            'TBD',
                            'FILE',
                            'ALL',
                        ],
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'CONSOLE',
                            'API',
                            'OpenAPIExplorer',
                        ],
                    ],
                ],
                [
                    'name' => 'Keyword',
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
                    'name' => 'PageSize',
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
                    'name' => 'Page',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'maximum' => '10000',
                    ],
                ],
            ],
        ],
        'QueryDeviceStat' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
                [
                    'name' => 'DeviceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'iOS',
                            'ANDROID',
                            'ALL',
                        ],
                    ],
                ],
                [
                    'name' => 'QueryType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'NEW',
                            'TOTAL',
                        ],
                    ],
                ],
            ],
        ],
        'QueryUniqueDeviceStat' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
                [
                    'name' => 'Granularity',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'DAY',
                            'MONTH',
                        ],
                    ],
                ],
            ],
        ],
        'QueryDeviceInfo' => [
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
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'QueryPushStatByApp' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
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
                [
                    'name' => 'Granularity',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'DAY',
                        ],
                    ],
                ],
            ],
        ],
        'QueryPushStatByMsg' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CheckDevices' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'BindTag' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClientKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'KeyType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                        ],
                    ],
                ],
                [
                    'name' => 'TagName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UnbindTag' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClientKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'KeyType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                        ],
                    ],
                ],
                [
                    'name' => 'TagName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RemoveTag' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TagName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'QueryTags' => [
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
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClientKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'KeyType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                        ],
                    ],
                ],
            ],
        ],
        'ListTags' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'BindAlias' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AliasName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UnbindAlias' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AliasName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'UnbindAll',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'QueryAliases' => [
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
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'QueryDevicesByAlias' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Alias',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'QueryDevicesByAccount' => [
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
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Account',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'BindPhone' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UnbindPhone' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PushMessageToiOS' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'ALL',
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                            'TAG',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
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
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StoreOffline',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JobKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PushNoticeToiOS' => [
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
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'ALL',
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                            'TAG',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ApnsEnv',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'DEV',
                            'PRODUCT',
                        ],
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
                    'name' => 'Body',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'JobKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtParameters',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PushNoticeToAndroid' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'ALL',
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                            'TAG',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
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
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StoreOffline',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JobKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ExtParameters',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'PushMessageToAndroid' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'ALL',
                            'DEVICE',
                            'ACCOUNT',
                            'ALIAS',
                            'TAG',
                        ],
                    ],
                ],
                [
                    'name' => 'TargetValue',
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
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Body',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'StoreOffline',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'JobKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CheckDevice' => [
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListSummaryApps' => [
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
            'deprecated' => true,
            'parameters' => [],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'cloudpush.aliyuncs.com',
        ],
    ],
];