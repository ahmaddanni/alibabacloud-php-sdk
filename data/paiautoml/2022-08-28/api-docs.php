<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'paiAutoML',
        'version' => '2022-08-28',
    ],
    'components' => [
        'schemas' => [
            'AutofeExperimentConfiguration' => [
                'type' => 'object',
                'properties' => [
                    'oss_config' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'oss_bucket' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'oss_access_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'oss_access_key' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'oss_role_arn' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'oss_endpoint' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'odps_config' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'odps_region_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'odps_project_name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'odps_endpoint' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'odps_access_id' => [
                                'type' => 'string',
                            ],
                            'odps_access_key' => [
                                'type' => 'string',
                            ],
                            'odps_role_arn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'yml_config' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'workspace_name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'output_config_oss_dir' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'label' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'data_source' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'data_type' => [
                                'type' => 'string',
                            ],
                            'aggregate_only' => [
                                'type' => 'string',
                            ],
                            'reuse_results' => [
                                'type' => 'string',
                            ],
                            'workers' => [
                                'type' => 'string',
                            ],
                            'memory' => [
                                'type' => 'string',
                            ],
                            'cpu' => [
                                'type' => 'string',
                            ],
                            'debug_mode' => [
                                'type' => 'string',
                            ],
                            'action' => [
                                'type' => 'string',
                            ],
                            'sample_size' => [
                                'type' => 'string',
                            ],
                            'analyze_exp_id' => [
                                'type' => 'string',
                            ],
                            'data_partition' => [
                                'type' => 'string',
                            ],
                            'exclude_columns' => [
                                'type' => 'string',
                            ],
                            'feature_selection' => [
                                'type' => 'string',
                            ],
                            'selection_exp_id' => [
                                'type' => 'string',
                            ],
                            'pipeline_exp_id' => [
                                'type' => 'string',
                            ],
                            'sample_ratio' => [
                                'type' => 'string',
                            ],
                            'filter_thresh' => [
                                'type' => 'string',
                            ],
                            'skip_select' => [
                                'type' => 'string',
                            ],
                            'iv_thresh' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'HpoExperimentConfig' => [
                'type' => 'object',
                'properties' => [
                    'params_config' => [
                        'type' => 'object',
                        'properties' => [
                            'params_src_dst_filepath' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'platform_config' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'cmd' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                            ],
                            'resume' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'metric_config' => [
                        'type' => 'object',
                        'required' => true,
                        'properties' => [
                            'metric_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'metric_source' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'final_mode' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'metric_dict' => [
                                'type' => 'object',
                                'required' => true,
                            ],
                            'source_list_final_mode' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'oss_config' => [
                        'type' => 'object',
                        'properties' => [
                            'endpoint' => [
                                'type' => 'string',
                            ],
                            'accessKeyID' => [
                                'type' => 'string',
                            ],
                            'accessKeySecret' => [
                                'type' => 'string',
                            ],
                            'role_arn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'odps_config' => [
                        'type' => 'object',
                        'properties' => [
                            'access_id' => [
                                'type' => 'string',
                            ],
                            'access_key' => [
                                'type' => 'string',
                            ],
                            'project_name' => [
                                'type' => 'string',
                            ],
                            'end_point' => [
                                'type' => 'string',
                            ],
                            'log_view_host' => [
                                'type' => 'string',
                            ],
                            'region' => [
                                'type' => 'string',
                            ],
                            'role_arn' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'ts_config' => [
                        'type' => 'object',
                        'properties' => [
                            'access_key_id' => [
                                'type' => 'string',
                            ],
                            'access_key_secret' => [
                                'type' => 'string',
                            ],
                            'region_id' => [
                                'type' => 'string',
                            ],
                            'endpoint' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'paiflow_config' => [
                        'type' => 'object',
                        'properties' => [
                            'access_key_id' => [
                                'type' => 'string',
                            ],
                            'access_key_secret' => [
                                'type' => 'string',
                            ],
                            'region_id' => [
                                'type' => 'string',
                            ],
                            'workspace_id' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'yml_config' => [
                        'type' => 'object',
                        'properties' => [
                            'trial_concurrency' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'max_trial_number' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'experiment_name' => [
                                'type' => 'string',
                            ],
                            'tuner' => [
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'class_args' => [
                                        'type' => 'object',
                                    ],
                                ],
                            ],
                            'debug' => [
                                'type' => 'boolean',
                            ],
                            'log_level' => [
                                'type' => 'string',
                            ],
                            'assessor' => [
                                'type' => 'object',
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                    ],
                                    'class_args' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'proportion' => [
                                                'type' => 'number',
                                                'format' => 'float',
                                            ],
                                            'start_step' => [
                                                'type' => 'integer',
                                                'format' => 'int32',
                                            ],
                                            'moving_avg' => [
                                                'type' => 'string',
                                            ],
                                            'optimize_mode' => [
                                                'type' => 'string',
                                            ],
                                            'earlystop' => [
                                                'type' => 'boolean',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'search_space' => [
                        'type' => 'object',
                    ],
                    'k8s_config' => [
                        'type' => 'object',
                        'properties' => [
                            'nni_container_requested_memory' => [
                                'type' => 'string',
                            ],
                            'nni_container_requested_cpu' => [
                                'type' => 'string',
                            ],
                            'nni_container_memory_limit' => [
                                'type' => 'string',
                            ],
                            'nni_container_cpu_limit' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'dlc_config' => [
                        'type' => 'object',
                        'properties' => [
                            'access_id' => [
                                'type' => 'string',
                            ],
                            'access_key' => [
                                'type' => 'string',
                            ],
                            'endpoint' => [
                                'type' => 'string',
                            ],
                            'region' => [
                                'type' => 'string',
                            ],
                            'protocol' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'schedule_config' => [
                        'type' => 'object',
                        'properties' => [
                            'day' => [
                                'type' => 'string',
                            ],
                            'start_time' => [
                                'type' => 'string',
                            ],
                            'end_time' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'monitor_config' => [
                        'type' => 'object',
                        'properties' => [
                            'url' => [
                                'type' => 'string',
                            ],
                            'keyword' => [
                                'type' => 'string',
                            ],
                            'at_mobiles' => [
                                'type' => 'string',
                            ],
                            'at_user_ids' => [
                                'type' => 'string',
                            ],
                            'is_at_all' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'output_config' => [
                        'type' => 'object',
                        'properties' => [
                            'model_path' => [
                                'type' => 'string',
                            ],
                            'summary_path' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'GetServiceIdentityRole' => [
            'path' => '/api/automl/v1/serviceidentityrole',
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
        'CreateServiceIdentityRole' => [
            'path' => '/api/automl/v1/serviceidentityrole',
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
        'CreateHpoExperiment' => [
            'path' => '/api/automl/v1/hpo/experiment',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'HpoExperimentConfiguration' => [
                                '$ref' => '#/components/schemas/HpoExperimentConfig',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Tag' => [
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
            ],
        ],
        'ListHpoExperiments' => [
            'path' => '/api/automl/v1/hpo/experiments',
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Creator',
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
                [
                    'name' => 'MinCreateTime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'MaxCreateTime',
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
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Accessibility',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'IncludeConfigData',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'SortBy',
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
        'GetHpoExperiment' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateHpoExperiment' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/update',
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
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ExperimentId',
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
                            'HpoExperimentConfiguration' => [
                                '$ref' => '#/components/schemas/HpoExperimentConfig',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Tag' => [
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
            ],
        ],
        'StopHpoExperiment' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/stop',
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
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteHpoExperiment' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/delete',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListHpoExperimentLogs' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/logs',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LogName',
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
        'ListHpoTrials' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/trials',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
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
                [
                    'name' => 'SortBy',
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
        'GetHpoTrial' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/trial/{TrialId}',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TrialId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'StopHpoTrials' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/stop_trials',
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
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ExperimentId',
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
                            'TrialIds' => [
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
        'RestartHpoTrials' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/restart_trials',
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
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ExperimentId',
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
                            'TrialIds' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'TrialHyperParameters' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListHpoTrialLogNames' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/trial/{TrialId}/lognames',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'TrialId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ListHpoTrialLogs' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/trial/{TrialId}/logs',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TrialId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'LogName',
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
        'ListHpoTrialCommands' => [
            'path' => '/api/automl/v1/hpo/experiment/{ExperimentId}/trial/{TrialId}/commands',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TrialId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateAutofeExperiment' => [
            'path' => '/api/automl/v1/autofe/experiment',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'Name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'AutofeExperimentConfiguration' => [
                                '$ref' => '#/components/schemas/AutofeExperimentConfiguration',
                                'required' => false,
                            ],
                            'Description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Accessibility' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'WorkspaceId' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'Tag' => [
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
            ],
        ],
        'GetAutofeExperiment' => [
            'path' => '/api/automl/v1/autofe/experiment/{ExperimentId}',
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
                    'name' => 'ExperimentId',
                    'in' => 'path',
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
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'paiautoml.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'paiautoml.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'paiautoml.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'paiautoml.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'paiautoml.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'paiautoml.cn-wulanchabu.aliyuncs.com',
        ],
    ],
];