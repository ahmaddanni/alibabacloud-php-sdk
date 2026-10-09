<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'airticketOpen',
        'version' => '2023-01-17',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetToken' => [
            'path' => '/airticket/v1/token',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'rootTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'app_key',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'app_secret',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'Search' => [
            'path' => '/airticket/v1/trade/action-search',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'cabin_class',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'air_legs',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'departure_city' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'arrival_city' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'departure_airport_list' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                                'arrival_airport_list' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                                'departure_date' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'adults',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'children',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'infants',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'search_control_options',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'airline_prefer_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'airline_excluded_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'service_quality' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'Enrich' => [
            'path' => '/airticket/v1/trade/action-enrich',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'solution_id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'adults',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'children',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'infants',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cabin_class',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'journey_param_list',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'departure_city' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'arrival_city' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'departure_date' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'segment_param_list' => [
                                    'type' => 'array',
                                    'required' => true,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'departure_city' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'arrival_city' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'departure_airport' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'arrival_airport' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'departure_time' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'departure_date' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'marketing_flight_no' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'cabin' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'child_cabin' => [
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
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AncillarySuggest' => [
            'path' => '/airticket/v1/ancillary/action-suggest',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'solution_id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'Pricing' => [
            'path' => '/airticket/v1/trade/action-pricing',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'solution_id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'Book' => [
            'path' => '/airticket/v1/trade/action-book',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'solution_id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'out_order_num',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'contact',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'last_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'first_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'mobile_phone_num' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'mobile_country_code' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'passenger_list',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'last_name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'first_name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'birthday' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'type' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                                'mobile_phone_number' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'mobile_country_code' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'gender' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                ],
                                'nationality' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'credential' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'cert_issue_place' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'credential_num' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'expire_date' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'credential_type' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'passenger_ancillary_purchase_map_list',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'passenger_list' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'last_name' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'first_name' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'birthday' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'type' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => true,
                                            ],
                                            'mobile_phone_number' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'mobile_country_code' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'gender' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                            ],
                                            'nationality' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'credential' => [
                                                'type' => 'object',
                                                'required' => false,
                                                'properties' => [
                                                    'cert_issue_place' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'credential_num' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'expire_date' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                    ],
                                                    'credential_type' => [
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                                'book_ancillary_req_item' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'ancillary_id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'ancillary_type' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TicketingCheck' => [
            'path' => '/airticket/v1/trade/action-ticketing-check',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'order_num',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'Ticketing' => [
            'path' => '/airticket/v1/trade/action-ticketing',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'order_num',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'Cancel' => [
            'path' => '/airticket/v1/trade/action-cancel',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'order_num',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'OrderDetail' => [
            'path' => '/airticket/v1/trade/order-detail',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'order_num',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'out_order_num',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'OrderList' => [
            'path' => '/airticket/v1/trade/order-list',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'book_time_start',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'book_time_end',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_index',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RefundApply' => [
            'path' => '/airticket/v1/refund/action-apply',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'order_num',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'refund_type',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'refund_type_id' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                            ],
                            'file' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'remark' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'refund_passenger_list',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'first_name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'last_name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'document' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'refund_journeys',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'segment_list' => [
                                    'type' => 'array',
                                    'required' => true,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'departure_airport' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'arrival_airport' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'departure_city' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'arrival_city' => [
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
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RefundDetailList' => [
            'path' => '/airticket/v1/refund/detail-list',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'order_num',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'refund_create_begin_time',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'refund_create_end_time',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'page_index',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'RefundDetail' => [
            'path' => '/airticket/v1/refund/detail',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'refund_order_num',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ChangeConfirm' => [
            'path' => '/airticket/v1/change/action-confirm',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'change_order_num',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ChangeCancel' => [
            'path' => '/airticket/v1/change/action-cancel',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'change_order_num',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ChangeDetailListOfBuyer' => [
            'path' => '/airticket/v1/change/buyer/detail-list',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'utc_create_begin',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'utc_create_end',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_index',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ChangeDetail' => [
            'path' => '/airticket/v1/change/detail',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'change_order_num',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ChangeApply' => [
            'path' => '/airticket/v1/change/action-apply',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'http',
                'https',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'order_num',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'change_passenger_list',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'first_name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'last_name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'document' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'changed_journeys',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'segment_list' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'departure_airport' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'arrival_airport' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'departure_city' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'arrival_city' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'departure_date' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'departure_time' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                            ],
                                            'departure_time_str' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'arrive_time' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                            ],
                                            'arrive_time_str' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'departure_terminal' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'arrive_terminal' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'marketing_flight_no' => [
                                                'type' => 'string',
                                                'required' => true,
                                            ],
                                            'operating_flight_no' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'code_share' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'contact',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'mobile_country_code' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'mobile_phone_num' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'remark',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ChangeDetailListOfOrderNum' => [
            'path' => '/airticket/v1/change/order-num/detail-list',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'order_num',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'page_index',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'FlightChangeOfOrder' => [
            'path' => '/airticket/v1/flightchange/of-order',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'order_num',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'AccountFlowList' => [
            'path' => '/airticket/v1/account/flow-list',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'utc_begin_time',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'day_num',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'page_index',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'FileUpload' => [
            'path' => '/airticket/v1/attachment/action-upload',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'order_num',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'file_content',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'LuggageDirect' => [
            'path' => '/airticket/v1/flight-data/luggage-direct',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'flight_segment_param_list',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'departure_airport' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'arrival_airport' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'departure_terminal' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'arrival_terminal' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'departure_time' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                                'arrival_time' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                                'stop_city_list' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'marketing_airline' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'operating_airline' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ticketing_airline' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'marketing_flight_no' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'code_share' => [
                                    'type' => 'boolean',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TransitVisa' => [
            'path' => '/airticket/v1/flight-data/transit-visa',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
                'http',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'flight_segment_param_list',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'departure_airport' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'arrival_airport' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'departure_terminal' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'arrival_terminal' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'departure_time' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                                'arrival_time' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => true,
                                ],
                                'stop_city_list' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'marketing_airline' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'operating_airline' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'ticketing_airline' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'marketing_flight_no' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'code_share' => [
                                    'type' => 'boolean',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CollectFlightLowestPrice' => [
            'path' => '/airticket/v1/data-collect/flight-lowest-price',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'lowest_price_flight_info_list',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'request_id' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'departure_city' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'arrival_city' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'trip_type' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => true,
                                ],
                                'departure_date' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'return_date' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'departure_flight_number' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'return_flight_number' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'suez_total_price' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'market_total_price' => [
                                    'type' => 'number',
                                    'format' => 'double',
                                    'required' => true,
                                ],
                                'solution_id' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'StandardSearch' => [
            'path' => '/airticket/v1/trade/action-standardsearch',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'accessTokenAuth' => [],
                ],
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'cabin_class',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'air_legs',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'departure_city' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'arrival_city' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'departure_airport_list' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                                'arrival_airport_list' => [
                                    'type' => 'array',
                                    'required' => false,
                                    'items' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                                'departure_date' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'adults',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'children',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'infants',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'search_control_options',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'airline_prefer_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'airline_excluded_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'service_quality' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-access-token',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'x-acs-airticket-language',
                    'in' => 'header',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [],
];