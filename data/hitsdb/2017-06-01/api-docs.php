<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'hitsdb',
        'version' => '2017-06-01',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateHiTSDBInstance' => [
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
                    'name' => 'AppKey',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ZoneId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceAlias',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'InstanceClass',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'influxdata.n1.xlarge',
                            'influxdata.n1.2xlarge',
                            'influxdata.n1.4xlarge',
                            'influxdata.n1.8xlarge',
                            'influxdata.n1.16xlarge',
                            'influxdata.n1.mxlarge',
                            'influxdata.n1.xlarge_ha',
                            'influxdata.n1.2xlarge_ha',
                            'influxdata.n1.4xlarge_ha',
                            'influxdata.n1.8xlarge_ha',
                            'influxdata.n1.16xlarge_ha',
                            'influxdata.n1.mxlarge_ha',
                            'tsdb.1x.basic',
                            'tsdb.3x.basic',
                            'tsdb.4x.basic',
                            'tsdb.12x.standard',
                            'tsdb.24x.standard',
                            'tsdb.48x.large',
                            'tsdb.96x.large',
                            'tsdb.iot.1x.small',
                        ],
                    ],
                ],
                [
                    'name' => 'InstanceStorage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PayType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'POSTPAY',
                            'PREPAY',
                        ],
                    ],
                ],
                [
                    'name' => 'VPCId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'VSwitchId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'Month',
                            'Year',
                        ],
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'DiskCategory',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'cloud_essd',
                            'cloud_ssd',
                            'cloud_efficiency',
                        ],
                    ],
                ],
            ],
        ],
        'DeleteHiTSDBInstance' => [
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
            ],
        ],
        'DescribeHiTSDBInstance' => [
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
            ],
        ],
        'DescribeHiTSDBInstanceList' => [
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
                    'name' => 'QueryStr',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'StatusList',
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
                    'name' => 'EngineType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeHiTSDBInstanceSecurityIpList' => [
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
                    'name' => 'GroupName',
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
            'parameters' => [
                [
                    'name' => 'AcceptLanguage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeZones' => [
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
                    'name' => 'Language',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyHiTSDBInstanceClass' => [
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
                    'name' => 'InstanceClass',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'InstanceStorage',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ModifyHiTSDBInstanceSecurityIpList' => [
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
                    'name' => 'SecurityIpList',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RenameHiTSDBInstanceAlias' => [
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
                    'name' => 'InstanceAlias',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RenewTSDBInstance' => [
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
                    'name' => 'InstanceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PricingCycle',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RestartHiTSDBInstance' => [
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
            ],
        ],
        'SwitchHiTSDBInstancePublicNet' => [
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
                    'name' => 'SwitchAction',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-wulanchabu',
            'regionName' => '华北6（乌兰察布）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.cn-wulanchabu.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-wulanchabu.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'regionName' => '华北2（北京）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.cn-beijing.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-beijing.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'regionName' => '华北1（青岛）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.cn-qingdao.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-qingdao.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'regionName' => '华东2（上海）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.cn-shanghai.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-shanghai.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'regionName' => '中国香港',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.cn-hongkong.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-hongkong.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'regionName' => '华北3（张家口）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.cn-zhangjiakou.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-zhangjiakou.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'regionName' => '华南1（深圳）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.cn-shenzhen.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-shenzhen.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'regionName' => '日本（东京）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.ap-northeast-1.aliyuncs.com',
            'endpoint' => 'hitsdb.ap-northeast-1.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'regionName' => '西南1（成都）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.cn-chengdu.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-chengdu.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'regionName' => '新加坡',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.ap-southeast-1.aliyuncs.com',
            'endpoint' => 'hitsdb.ap-southeast-1.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'regionName' => '马来西亚（吉隆坡）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.ap-southeast-3.aliyuncs.com',
            'endpoint' => 'hitsdb.ap-southeast-3.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'regionName' => '华北5（呼和浩特）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.cn-huhehaote.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-huhehaote.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'regionName' => '印度尼西亚（雅加达）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.ap-southeast-5.aliyuncs.com',
            'endpoint' => 'hitsdb.ap-southeast-5.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'regionName' => '华东1（杭州）',
            'areaId' => 'asiaPacific',
            'areaName' => '亚太',
            'public' => 'hitsdb.cn-hangzhou.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-hangzhou.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'regionName' => '美国（弗吉尼亚）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'hitsdb.us-east-1.aliyuncs.com',
            'endpoint' => 'hitsdb.us-east-1.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'regionName' => '英国（伦敦）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'hitsdb.eu-west-1.aliyuncs.com',
            'endpoint' => 'hitsdb.eu-west-1.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'regionName' => '美国（硅谷）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'hitsdb.us-west-1.aliyuncs.com',
            'endpoint' => 'hitsdb.us-west-1.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'regionName' => '德国（法兰克福）',
            'areaId' => 'europeAmerica',
            'areaName' => '欧洲与美洲',
            'public' => 'hitsdb.eu-central-1.aliyuncs.com',
            'endpoint' => 'hitsdb.eu-central-1.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'regionName' => '华东1 金融云',
            'areaId' => 'industryCloud',
            'areaName' => '行业云',
            'public' => 'hitsdb.cn-hangzhou-finance.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-hangzhou-finance.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-hangzhou-finance.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'regionName' => '华南1 金融云',
            'areaId' => 'industryCloud',
            'areaName' => '行业云',
            'public' => 'hitsdb.cn-shenzhen-finance-1.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-shenzhen-finance-1.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'regionName' => '华东2 金融云',
            'areaId' => 'industryCloud',
            'areaName' => '行业云',
            'public' => 'hitsdb.cn-shanghai-finance-1.aliyuncs.com',
            'endpoint' => 'hitsdb.cn-shanghai-finance-1.aliyuncs.com',
            'vpc' => 'hitsdb-vpc.cn-shanghai-finance-1.aliyuncs.com',
        ],
    ],
];