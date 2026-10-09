<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'ddosbgp',
        'version' => '2018-07-20',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreatePolicy' => [
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'minLength' => 1,
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'l3',
                            'l4',
                        ],
                    ],
                ],
                [
                    'name' => 'PortVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '2',
                        ],
                    ],
                ],
            ],
        ],
        'DeletePolicy' => [
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyPolicy' => [
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ActionType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'BlackIpListExpireAt' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'EnableIntelligence' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'IntelligenceLevel' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'default',
                                    'weak',
                                    'hard',
                                ],
                            ],
                            'WhitenGfbrNets' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'EnableDropIcmp' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'RegionBlockCountryList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '241',
                                ],
                                'minItems' => 1,
                                'maxItems' => 241,
                            ],
                            'RegionBlockProvinceList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '82',
                                ],
                                'minItems' => 1,
                                'maxItems' => 35,
                            ],
                            'SourceLimit' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Pps' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'minimum' => '32',
                                        'maximum' => '500000',
                                    ],
                                    'Bps' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'minimum' => '1024',
                                        'maximum' => '268435456',
                                    ],
                                    'SynPps' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'minimum' => '1',
                                        'maximum' => '100000',
                                    ],
                                    'SynBps' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'minimum' => '1024',
                                        'maximum' => '268435456',
                                    ],
                                ],
                            ],
                            'SourceBlockList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Type' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'enum' => [
                                                '3',
                                                '4',
                                                '5',
                                                '6',
                                            ],
                                        ],
                                        'BlockExpireSeconds' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '60',
                                            'maximum' => '2592000',
                                        ],
                                        'EverySeconds' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '60',
                                            'maximum' => '1200',
                                        ],
                                        'ExceedLimitTimes' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '1',
                                            'maximum' => '1200',
                                        ],
                                    ],
                                ],
                                'maxItems' => 4,
                            ],
                            'ReflectBlockUdpPortList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '65535',
                                ],
                                'minItems' => 1,
                                'maxItems' => 128,
                            ],
                            'PortRuleList' => [
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
                                        'Protocol' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'tcp',
                                                'udp',
                                            ],
                                        ],
                                        'SrcPortStart' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'SrcPortEnd' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'DstPortStart' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'DstPortEnd' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'MatchAction' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'drop',
                                            ],
                                        ],
                                        'SeqNo' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '1',
                                            'maximum' => '100',
                                        ],
                                    ],
                                ],
                            ],
                            'FingerPrintRuleList' => [
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
                                        'Protocol' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'tcp',
                                                'udp',
                                            ],
                                        ],
                                        'SrcPortStart' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'SrcPortEnd' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'DstPortStart' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'DstPortEnd' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'MinPktLen' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '1500',
                                        ],
                                        'MaxPktLen' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '1500',
                                        ],
                                        'Offset' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '1500',
                                        ],
                                        'PayloadBytes' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'minLength' => 2,
                                            'maxLength' => 32,
                                            'pattern' => '^([0-9a-fA-f]{2}){1,15}$',
                                        ],
                                        'MatchAction' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'drop',
                                                'accept',
                                                'ip_rate',
                                                'session_rate',
                                            ],
                                        ],
                                        'RateValue' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '1',
                                            'maximum' => '100000',
                                        ],
                                        'SeqNo' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '1',
                                            'maximum' => '100',
                                        ],
                                    ],
                                ],
                            ],
                            'EnableL4Defense' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'L4RuleList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'minLength' => 1,
                                            'maxLength' => 32,
                                        ],
                                        'Priority' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '1',
                                            'maximum' => '100',
                                        ],
                                        'Method' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'hex',
                                                'char',
                                            ],
                                        ],
                                        'Match' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                '0',
                                                '1',
                                            ],
                                        ],
                                        'Action' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                '1',
                                                '2',
                                                'observe',
                                                'block',
                                            ],
                                        ],
                                        'Limited' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '2048',
                                            'exclusiveMaximum' => true,
                                        ],
                                        'ConditionList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Arg' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'minLength' => 1,
                                                        'maxLength' => 4096,
                                                    ],
                                                    'Position' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '2047',
                                                    ],
                                                    'Depth' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '1',
                                                        'maximum' => '2048',
                                                    ],
                                                    'Encode' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Pattern' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Content' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Offset' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'Start' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'required' => false,
                                                            ],
                                                            'End' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'required' => false,
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'minItems' => 1,
                                            'maxItems' => 10,
                                        ],
                                    ],
                                ],
                            ],
                            'WhiteIpList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 2000,
                            ],
                            'BlackIpList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 2000,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'PortVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '2',
                        ],
                    ],
                ],
            ],
        ],
        'ModifyPolicyContent' => [
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
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'BlackIpListExpireAt' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'EnableIntelligence' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'IntelligenceLevel' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'default',
                                    'weak',
                                    'hard',
                                ],
                            ],
                            'WhitenGfbrNets' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'EnableDropIcmp' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'RegionBlockCountryList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '241',
                                ],
                                'minItems' => 1,
                                'maxItems' => 241,
                            ],
                            'RegionBlockProvinceList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '82',
                                ],
                                'minItems' => 1,
                                'maxItems' => 35,
                            ],
                            'SourceLimit' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'Pps' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'minimum' => '32',
                                        'maximum' => '500000',
                                    ],
                                    'Bps' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'minimum' => '1024',
                                        'maximum' => '268435456',
                                    ],
                                    'SynPps' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'minimum' => '1',
                                        'maximum' => '100000',
                                    ],
                                    'SynBps' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'minimum' => '1024',
                                        'maximum' => '268435456',
                                    ],
                                ],
                            ],
                            'SourceBlockList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Type' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'enum' => [
                                                '3',
                                                '4',
                                                '5',
                                                '6',
                                            ],
                                        ],
                                        'BlockExpireSeconds' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '60',
                                            'maximum' => '2592000',
                                        ],
                                        'EverySeconds' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '60',
                                            'maximum' => '1200',
                                        ],
                                        'ExceedLimitTimes' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '1',
                                            'maximum' => '1200',
                                        ],
                                    ],
                                ],
                                'maxItems' => 4,
                            ],
                            'ReflectBlockUdpPortList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '0',
                                    'maximum' => '65535',
                                ],
                                'minItems' => 1,
                                'maxItems' => 128,
                            ],
                            'PortRuleList' => [
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
                                        'Protocol' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'tcp',
                                                'udp',
                                            ],
                                        ],
                                        'SrcPortStart' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'SrcPortEnd' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'DstPortStart' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'DstPortEnd' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'MatchAction' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'drop',
                                            ],
                                        ],
                                        'SeqNo' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '1',
                                            'maximum' => '100',
                                        ],
                                    ],
                                ],
                            ],
                            'FingerPrintRuleList' => [
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
                                        'Protocol' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'tcp',
                                                'udp',
                                            ],
                                        ],
                                        'SrcPortStart' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'SrcPortEnd' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'DstPortStart' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'DstPortEnd' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '65535',
                                        ],
                                        'MinPktLen' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '1500',
                                        ],
                                        'MaxPktLen' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '0',
                                            'maximum' => '1500',
                                        ],
                                        'Offset' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '1500',
                                        ],
                                        'PayloadBytes' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'minLength' => 2,
                                            'maxLength' => 32,
                                            'pattern' => '^([0-9a-fA-f]{2}){1,15}$',
                                        ],
                                        'MatchAction' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'enum' => [
                                                'drop',
                                                'accept',
                                                'ip_rate',
                                                'session_rate',
                                            ],
                                        ],
                                        'RateValue' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '1',
                                            'maximum' => '100000',
                                        ],
                                        'SeqNo' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => true,
                                            'minimum' => '1',
                                            'maximum' => '100',
                                        ],
                                    ],
                                ],
                            ],
                            'EnableL4Defense' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'L4RuleList' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'Name' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'minLength' => 1,
                                            'maxLength' => 32,
                                        ],
                                        'Priority' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '1',
                                            'maximum' => '100',
                                        ],
                                        'Method' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                'hex',
                                                'char',
                                            ],
                                        ],
                                        'Match' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                '0',
                                                '1',
                                            ],
                                        ],
                                        'Action' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [
                                                '1',
                                                '2',
                                                'observe',
                                                'block',
                                            ],
                                        ],
                                        'Limited' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'minimum' => '0',
                                            'maximum' => '2048',
                                            'exclusiveMaximum' => true,
                                        ],
                                        'ConditionList' => [
                                            'type' => 'array',
                                            'required' => false,
                                            'items' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'Arg' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'minLength' => 1,
                                                        'maxLength' => 4096,
                                                    ],
                                                    'Position' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '0',
                                                        'maximum' => '2047',
                                                    ],
                                                    'Depth' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'minimum' => '1',
                                                        'maximum' => '2048',
                                                    ],
                                                    'Encode' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Pattern' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Content' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'Offset' => [
                                                        'type' => 'object',
                                                        'required' => false,
                                                        'properties' => [
                                                            'Start' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'required' => false,
                                                            ],
                                                            'End' => [
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'required' => false,
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'minItems' => 1,
                                            'maxItems' => 5,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'PortVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '2',
                        ],
                    ],
                ],
            ],
        ],
        'ListPolicy' => [
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'l3',
                            'l4',
                            'default',
                        ],
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProductType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AttachToPolicy' => [
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
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IpPortProtocolList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Ip' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'pattern' => '^(\\d{1,3}\\.){3}\\d{1,3}$',
                                ],
                                'Port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '65535',
                                ],
                                'Protocol' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'udp',
                                        'tcp',
                                    ],
                                ],
                                'PortRange' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'PortVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DetachFromPolicy' => [
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
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'default',
                            'l3',
                            'l4',
                        ],
                    ],
                ],
                [
                    'name' => 'IpPortProtocolList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Ip' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '65535',
                                ],
                                'Protocol' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'udp',
                                        'tcp',
                                    ],
                                ],
                                'PortRange' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                    ],
                ],
                [
                    'name' => 'PortVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '2',
                        ],
                    ],
                ],
            ],
        ],
        'ListPolicyAttachment' => [
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
                    'name' => 'PolicyId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PolicyType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'default',
                            'l3',
                            'l4',
                        ],
                    ],
                ],
                [
                    'name' => 'IpPortProtocolList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Ip' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Port' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'minimum' => '1',
                                    'maximum' => '65535',
                                ],
                                'Protocol' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'enum' => [
                                        'udp',
                                        'tcp',
                                    ],
                                ],
                                'PortRange' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PortVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            '2',
                        ],
                    ],
                ],
            ],
        ],
        'DescribeRdStatus' => [
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
            'parameters' => [],
        ],
        'DescribeRdMemberList' => [
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
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    ],
                ],
                [
                    'name' => 'ResourceDirectoryId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AddRdMemberList' => [
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
                    'name' => 'MemberList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Uid' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 32,
                    ],
                ],
            ],
        ],
        'DeleteRdMemberList' => [
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
                    'name' => 'MemberList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'Uid' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                        'maxItems' => 32,
                    ],
                ],
            ],
        ],
        'ModifyRemark' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeRegions' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeInstanceList' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceIdList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'IpVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Orderby',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Orderdire',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
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
                [
                    'name' => 'InstanceTypeList',
                    'in' => 'query',
                    'style' => 'flat',
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
        'DescribeInstanceSpecs' => [
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
                    'name' => 'InstanceIdList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeExcpetionCount' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribePackIpList' => [
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
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ProductName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MemberUid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetSlsOpenStatus' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CheckGrant' => [
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IsSlr',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DettachAssetGroupToInstance' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'AssetGroupList',
                    'in' => 'query',
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
                                'Type' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Region' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                    ],
                ],
            ],
        ],
        'DescribeAssetGroupToInstance' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MemberUid',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AttachAssetGroupToInstance' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'AssetGroupList',
                    'in' => 'query',
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
                                'Type' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'Region' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'MemberUid' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                        'minItems' => 1,
                    ],
                ],
            ],
        ],
        'DescribeAssetGroup' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
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
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'AddIp' => [
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
                    'name' => 'IpList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteIp' => [
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
                    'name' => 'IpList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteBlackhole' => [
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
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeDdosEvent' => [
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
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageNo',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeOpEntities' => [
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
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
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
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OrderDir',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'OpAction',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeTraffic' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Ipnet',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Ip',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Interval',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'FlowType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'all',
                            'avg',
                            'max',
                        ],
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListOpenedAccessLogInstances' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
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
                    ],
                ],
            ],
        ],
        'CheckAccessLogAuth' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTagKeys' => [
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
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListTagResources' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceType',
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
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
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
                        'maxItems' => 21,
                    ],
                ],
            ],
        ],
        'TagResources' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
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
                        'maxItems' => 21,
                    ],
                ],
            ],
        ],
        'UntagResources' => [
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
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'All',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 51,
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                        'maxItems' => 21,
                    ],
                ],
            ],
        ],
        'ReleaseDdosOriginInstance' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeDdosOriginInstanceBill' => [
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
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'function',
                            'flow_cn',
                            'flow_ov',
                            'ip_count',
                            'standard_assets_flow_cn',
                            'standard_assets_flow_ov',
                            'monthly_summary',
                        ],
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IsShowList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'MoveResourceGroup' => [
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
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceGroupId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceRegionId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'ddosbgp.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'ddosbgp.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ddosbgp.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'ddosbgp.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'ddosbgp.us-east-1.aliyuncs.com',
        ],
    ],
];