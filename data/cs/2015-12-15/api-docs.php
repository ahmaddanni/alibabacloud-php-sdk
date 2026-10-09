<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'CS',
        'version' => '2015-12-15',
    ],
    'components' => [
        'schemas' => [
            'Hugepage' => [
                'type' => 'object',
                'properties' => [
                    'transparentEnabled' => [
                        'type' => 'string',
                    ],
                    'transparentDefrag' => [
                        'type' => 'string',
                    ],
                    'khugepagedDefrag' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'khugepagedAllocSleepMillisecs' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'khugepagedScanSleepMillisecs' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'khugepagedPagesToScan' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'InstanceMetadataOptions' => [
                'type' => 'object',
                'properties' => [
                    'http_tokens' => [
                        'type' => 'string',
                        'enum' => [
                            'optional',
                            'required',
                        ],
                    ],
                ],
            ],
            'addon' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'config' => [
                        'type' => 'string',
                    ],
                    'disabled' => [
                        'type' => 'boolean',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'containerd_config' => [
                'type' => 'object',
                'properties' => [
                    'registryMirrors' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'insecureRegistries' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'maxConcurrentDownloads' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ignoreImageDefinedVolume' => [
                        'type' => 'boolean',
                    ],
                    'limitCore' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'limitNoFile' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'limitMemLock' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'data_disk' => [
                'type' => 'object',
                'properties' => [
                    'category' => [
                        'type' => 'string',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'encrypted' => [
                        'type' => 'string',
                    ],
                    'kms_key_id' => [
                        'type' => 'string',
                    ],
                    'auto_snapshot_policy_id' => [
                        'type' => 'string',
                    ],
                    'performance_level' => [
                        'type' => 'string',
                    ],
                    'provisioned_iops' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'bursting_enabled' => [
                        'type' => 'boolean',
                    ],
                    'auto_format' => [
                        'type' => 'boolean',
                    ],
                    'file_system' => [
                        'type' => 'string',
                    ],
                    'mount_target' => [
                        'type' => 'string',
                    ],
                    'disk_name' => [
                        'type' => 'string',
                    ],
                    'device' => [
                        'type' => 'string',
                    ],
                    'snapshot_id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'instance_patterns' => [
                'type' => 'object',
                'properties' => [
                    'cores' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'memory' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'instance_family_level' => [
                        'type' => 'string',
                    ],
                    'excluded_instance_types' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'min_cpu_cores' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'max_cpu_cores' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'min_memory_size' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'max_memory_size' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'instance_categories' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'cpu_architectures' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'core' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'deprecated' => true,
                    ],
                    'max_price' => [
                        'type' => 'number',
                        'format' => 'float',
                        'deprecated' => true,
                    ],
                    'architectures' => [
                        'type' => 'array',
                        'deprecated' => true,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'burst_performance_option' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                    'instance_type_families' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'minimum_eni_quantity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'minimum_eni_private_ip_address_quantity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'minimum_eni_ipv6_address_quantity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'maximum_gpu_amount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'kubelet_config' => [
                'type' => 'object',
                'properties' => [
                    'registryPullQPS' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'registryBurst' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'eventRecordQPS' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'eventBurst' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'kubeAPIQPS' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'kubeAPIBurst' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'serializeImagePulls' => [
                        'type' => 'boolean',
                    ],
                    'cpuManagerPolicy' => [
                        'type' => 'string',
                    ],
                    'evictionHard' => [
                        'type' => 'object',
                    ],
                    'evictionSoft' => [
                        'type' => 'object',
                    ],
                    'evictionSoftGracePeriod' => [
                        'type' => 'object',
                    ],
                    'systemReserved' => [
                        'type' => 'object',
                    ],
                    'kubeReserved' => [
                        'type' => 'object',
                    ],
                    'readOnlyPort' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'maxPods' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'containerLogMaxSize' => [
                        'type' => 'string',
                    ],
                    'containerLogMaxFiles' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'featureGates' => [
                        'type' => 'object',
                    ],
                    'allowedUnsafeSysctls' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'reservedMemory' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'numaNode' => [
                                    'type' => 'integer',
                                    'format' => 'int32',
                                ],
                                'limits' => [
                                    'type' => 'object',
                                ],
                            ],
                        ],
                    ],
                    'memoryManagerPolicy' => [
                        'type' => 'string',
                    ],
                    'cpuCFSQuota' => [
                        'type' => 'boolean',
                    ],
                    'cpuCFSQuotaPeriod' => [
                        'type' => 'string',
                    ],
                    'imageGCHighThresholdPercent' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'imageGCLowThresholdPercent' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'podPidsLimit' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'topologyManagerPolicy' => [
                        'type' => 'string',
                    ],
                    'clusterDNS' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'tracing' => [
                        'type' => 'object',
                        'properties' => [
                            'endpoint' => [
                                'type' => 'string',
                            ],
                            'samplingRatePerMillion' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'containerLogMaxWorkers' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'containerLogMonitorInterval' => [
                        'type' => 'string',
                    ],
                    'serverTLSBootstrap' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'maintenance_window' => [
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'type' => 'boolean',
                    ],
                    'maintenance_time' => [
                        'type' => 'string',
                    ],
                    'duration' => [
                        'type' => 'string',
                    ],
                    'weekly_period' => [
                        'type' => 'string',
                    ],
                    'recurrence' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'nodepool' => [
                'type' => 'object',
                'properties' => [
                    'auto_scaling' => [
                        'type' => 'object',
                        'properties' => [
                            'enable' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'max_instances' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'min_instances' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                            ],
                            'type' => [
                                'type' => 'string',
                            ],
                            'is_bond_eip' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                            ],
                            'eip_internet_charge_type' => [
                                'type' => 'string',
                                'deprecated' => true,
                            ],
                            'eip_bandwidth' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                            ],
                        ],
                    ],
                    'kubernetes_config' => [
                        'type' => 'object',
                        'properties' => [
                            'cms_enabled' => [
                                'type' => 'boolean',
                            ],
                            'cpu_policy' => [
                                'type' => 'string',
                            ],
                            'labels' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/tag',
                                ],
                            ],
                            'runtime' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'runtime_version' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'taints' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/taint',
                                ],
                            ],
                            'user_data' => [
                                'type' => 'string',
                            ],
                            'node_name_mode' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'nodepool_info' => [
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'resource_group_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'type' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'scaling_group' => [
                        'type' => 'object',
                        'properties' => [
                            'auto_renew' => [
                                'type' => 'boolean',
                            ],
                            'auto_renew_period' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'data_disks' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/data_disk',
                                ],
                            ],
                            'image_id' => [
                                'type' => 'string',
                            ],
                            'instance_charge_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'instance_types' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'key_pair' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'login_password' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'login_as_non_root' => [
                                'type' => 'boolean',
                            ],
                            'period' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'period_unit' => [
                                'type' => 'string',
                            ],
                            'platform' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'rds_instances' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'spot_strategy' => [
                                'type' => 'string',
                            ],
                            'spot_price_limit' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'instance_type' => [
                                            'type' => 'string',
                                        ],
                                        'price_limit' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'scaling_policy' => [
                                'type' => 'string',
                            ],
                            'security_group_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'security_group_ids' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'system_disk_category' => [
                                'type' => 'string',
                            ],
                            'system_disk_categories' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                ],
                                'maxItems' => 10,
                            ],
                            'system_disk_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'system_disk_performance_level' => [
                                'type' => 'string',
                            ],
                            'system_disk_encrypted' => [
                                'type' => 'boolean',
                            ],
                            'system_disk_kms_key_id' => [
                                'type' => 'string',
                            ],
                            'system_disk_encrypt_algorithm' => [
                                'type' => 'string',
                            ],
                            'system_disk_provisioned_iops' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'system_disk_bursting_enabled' => [
                                'type' => 'boolean',
                            ],
                            'tags' => [
                                'type' => 'array',
                                'items' => [
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
                            ],
                            'vswitch_ids' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'multi_az_policy' => [
                                'type' => 'string',
                            ],
                            'on_demand_base_capacity' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'on_demand_percentage_above_base_capacity' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'spot_instance_pools' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'spot_instance_remedy' => [
                                'type' => 'boolean',
                            ],
                            'compensate_with_on_demand' => [
                                'type' => 'boolean',
                            ],
                            'internet_charge_type' => [
                                'type' => 'string',
                            ],
                            'internet_max_bandwidth_out' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'image_type' => [
                                'type' => 'string',
                            ],
                            'deploymentset_id' => [
                                'type' => 'string',
                            ],
                            'desired_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'private_pool_options' => [
                                'type' => 'object',
                                'properties' => [
                                    'id' => [
                                        'type' => 'string',
                                    ],
                                    'match_criteria' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'ram_role_name' => [
                                'type' => 'string',
                            ],
                            'instance_metadata_options' => [
                                '$ref' => '#/components/schemas/InstanceMetadataOptions',
                            ],
                            'resource_pool_options' => [
                                'type' => 'object',
                                'properties' => [
                                    'strategy' => [
                                        'type' => 'string',
                                        'enum' => [
                                            'PrivatePoolFirst',
                                            'PrivatePoolOnly',
                                            'None',
                                        ],
                                    ],
                                    'private_pool_ids' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'string',
                                        ],
                                        'maxItems' => 20,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'tee_config' => [
                        'type' => 'object',
                        'properties' => [
                            'tee_enable' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                        ],
                    ],
                    'management' => [
                        'type' => 'object',
                        'properties' => [
                            'enable' => [
                                'type' => 'boolean',
                            ],
                            'auto_repair' => [
                                'type' => 'boolean',
                            ],
                            'upgrade_config' => [
                                'type' => 'object',
                                'deprecated' => true,
                                'properties' => [
                                    'auto_upgrade' => [
                                        'type' => 'boolean',
                                    ],
                                    'surge' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'surge_percentage' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                    'max_unavailable' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                    ],
                                ],
                            ],
                            'auto_repair_policy' => [
                                'type' => 'object',
                                'properties' => [
                                    'restart_node' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                            'auto_vul_fix' => [
                                'type' => 'boolean',
                            ],
                            'auto_vul_fix_policy' => [
                                'type' => 'object',
                                'properties' => [
                                    'restart_node' => [
                                        'type' => 'boolean',
                                    ],
                                    'vul_level' => [
                                        'type' => 'string',
                                    ],
                                ],
                            ],
                            'auto_upgrade' => [
                                'type' => 'boolean',
                            ],
                            'auto_upgrade_policy' => [
                                'type' => 'object',
                                'properties' => [
                                    'auto_upgrade_kubelet' => [
                                        'type' => 'boolean',
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'deprecated' => true,
                    ],
                    'interconnect_mode' => [
                        'type' => 'string',
                    ],
                    'interconnect_config' => [
                        'type' => 'object',
                        'deprecated' => true,
                        'properties' => [
                            'cen_id' => [
                                'type' => 'string',
                                'deprecated' => true,
                            ],
                            'ccn_id' => [
                                'type' => 'string',
                                'deprecated' => true,
                            ],
                            'ccn_region_id' => [
                                'type' => 'string',
                                'deprecated' => true,
                            ],
                            'bandwidth' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                            ],
                            'improved_period' => [
                                'type' => 'string',
                                'deprecated' => true,
                            ],
                        ],
                    ],
                    'max_nodes' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'node_config' => [
                        'type' => 'object',
                        'properties' => [
                            'kubelet_configuration' => [
                                '$ref' => '#/components/schemas/kubelet_config',
                            ],
                        ],
                    ],
                    'node_components' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                ],
                                'version' => [
                                    'type' => 'string',
                                ],
                                'config' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'custom_config' => [
                                            'type' => 'object',
                                            'additionalProperties' => [
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
            'runtime' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'tag' => [
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
            'taint' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'effect' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'OpenAckService' => [
            'path' => '/service/open',
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
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateCluster' => [
            'path' => '/clusters',
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
                            'name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'region_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'cluster_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'cluster_spec' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'profile' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'kubernetes_version' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'auto_mode' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'tags' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/tag',
                                    'required' => false,
                                ],
                            ],
                            'resource_group_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'deletion_protection' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'zone_ids' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'vpcid' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'vswitch_ids' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'ip_stack' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'ipv4',
                                    'dual',
                                ],
                            ],
                            'pod_vswitch_ids' => [
                                'type' => 'array',
                                'deprecated' => true,
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'container_cidr' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'service_cidr' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'security_group_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'is_enterprise_security_group' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'snat_entry' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'endpoint_public_access' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'load_balancer_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'ssh_flags' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'timezone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'node_cidr_mask' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'proxy_mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'controlplane_log_ttl' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'controlplane_log_project' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'controlplane_log_components' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'audit_log_config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'sls_project_name' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'rrsa_config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'cluster_domain' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'encryption_provider_key' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'service_account_issuer' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'api_audiences' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'extra_sans' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'maintenance_window' => [
                                '$ref' => '#/components/schemas/maintenance_window',
                                'required' => false,
                            ],
                            'operation_policy' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'cluster_auto_upgrade' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'enabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'channel' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'addons' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/addon',
                                    'required' => false,
                                ],
                            ],
                            'nodepools' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/nodepool',
                                    'required' => false,
                                ],
                            ],
                            'user_ca' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'control_plane_config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'charge_type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'period' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'period_unit' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'auto_renew' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_renew_period' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'instance_types' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'image_type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'image_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'key_pair' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'login_password' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_category' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_size' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'system_disk_snapshot_policy_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_performance_level' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_provisioned_iops' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'system_disk_bursting_enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'deploymentset_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'cloud_monitor_flags' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'instance_metadata_options' => [
                                        '$ref' => '#/components/schemas/InstanceMetadataOptions',
                                        'required' => false,
                                    ],
                                    'soc_enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'security_hardening_os' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'cpu_policy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'runtime' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'node_port_range' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'size' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'custom_san' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'runtime' => [
                                '$ref' => '#/components/schemas/runtime',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'node_name_mode' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'user_data' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'image_id' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'rds_instances' => [
                                'type' => 'array',
                                'deprecated' => true,
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'taints' => [
                                'type' => 'array',
                                'deprecated' => true,
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/taint',
                                    'required' => false,
                                ],
                            ],
                            'cloud_monitor_flags' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'platform' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'os_type' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'soc_enabled' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'security_hardening_os' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'cis_enabled' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'cpu_policy' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'node_port_range' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_vswitch_ids' => [
                                'type' => 'array',
                                'deprecated' => true,
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'key_pair' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'login_password' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_instance_types' => [
                                'type' => 'array',
                                'deprecated' => true,
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'master_system_disk_category' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_system_disk_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_system_disk_performance_level' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_system_disk_snapshot_policy_id' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_instance_charge_type' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_period_unit' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_period' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_auto_renew' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_auto_renew_period' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'num_of_nodes' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'worker_vswitch_ids' => [
                                'type' => 'array',
                                'deprecated' => true,
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'worker_instance_types' => [
                                'type' => 'array',
                                'deprecated' => true,
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'worker_system_disk_category' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'worker_system_disk_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'worker_system_disk_snapshot_policy_id' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'worker_system_disk_performance_level' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'worker_data_disks' => [
                                'type' => 'array',
                                'deprecated' => true,
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'category' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'encrypted' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'size' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'performance_level' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'worker_instance_charge_type' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'worker_period_unit' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'worker_period' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'worker_auto_renew' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'worker_auto_renew_period' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'instances' => [
                                'type' => 'array',
                                'deprecated' => true,
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'format_disk' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'keep_instance_name' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'service_discovery_types' => [
                                'type' => 'array',
                                'deprecated' => true,
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'nat_gateway' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'zone_id' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'logging_type' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'disable_rollback' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'timeout_mins' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'image_type' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'load_balancer_spec' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'enable_rrsa' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'charge_type' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'period_unit' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'period' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'auto_renew' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'auto_renew_period' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'access_control_list' => [
                                'type' => 'array',
                                'deprecated' => true,
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
        'DeleteCluster' => [
            'path' => '/clusters/{ClusterId}',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'retain_all_resources',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'keep_slb',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'deprecated' => true,
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'retain_resources',
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
                    'name' => 'delete_options',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'resource_type' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'delete_mode' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyCluster' => [
            'path' => '/api/v2/clusters/{ClusterId}',
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
                    'name' => 'ClusterId',
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
                            'api_server_eip' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'api_server_eip_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'deletion_protection' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'resource_group_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'maintenance_window' => [
                                '$ref' => '#/components/schemas/maintenance_window',
                                'required' => false,
                            ],
                            'enable_rrsa' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'access_control_list' => [
                                'type' => 'array',
                                'deprecated' => true,
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'cluster_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'system_events_logging' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'logging_project' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'operation_policy' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'cluster_auto_upgrade' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'enabled' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'channel' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'api_server_custom_cert_sans' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'action' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'enum' => [
                                            'append',
                                            'overwrite',
                                        ],
                                    ],
                                    'subject_alternative_names' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'vswitch_ids' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'control_plane_config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'charge_type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'period' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'period_unit' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'auto_renew' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_renew_period' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'instance_types' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'image_type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'image_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'key_pair' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'login_password' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_category' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_size' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'system_disk_snapshot_policy_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_performance_level' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_provisioned_iops' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'system_disk_bursting_enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'deploymentset_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'cloud_monitor_flags' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'soc_enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'security_hardening_os' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'cpu_policy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'runtime' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'node_port_range' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'size' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'security_group_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'timezone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'instance_deletion_protection' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'ingress_domain_rebinding' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'ingress_loadbalancer_id' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpgradeCluster' => [
            'path' => '/api/v2/clusters/{ClusterId}/upgrade',
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
                    'name' => 'ClusterId',
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
                            'component_name' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'next_version' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'version' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'master_only' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'rolling_policy' => [
                                'type' => 'object',
                                'deprecated' => true,
                                'required' => false,
                                'properties' => [
                                    'max_parallelism' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeClustersV1' => [
            'path' => '/api/v1/clusters',
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
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_number',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'profile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_spec',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'region_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeClustersForRegion' => [
            'path' => '/regions/{region_id}/clusters',
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
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_number',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'profile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_spec',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'region_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeClusterDetail' => [
            'path' => '/clusters/{ClusterId}',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeClusterResources' => [
            'path' => '/clusters/{ClusterId}/resources',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'with_addon_resources',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeKubernetesVersionMetadata' => [
            'path' => '/api/v1/metadata/versions',
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
                    'name' => 'Region',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ClusterType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'KubernetesVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Profile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'runtime',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Mode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [],
                    ],
                ],
                [
                    'name' => 'QueryUpgradableVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeUserClusterNamespaces' => [
            'path' => '/api/v2/k8s/{ClusterId}/namespaces',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeClusterLogs' => [
            'path' => '/clusters/{ClusterId}/logs',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeUserQuota' => [
            'path' => '/quota',
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
        'MigrateCluster' => [
            'path' => '/clusters/{cluster_id}/migrate',
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
            'parameters' => [
                [
                    'name' => 'cluster_id',
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
                            'oss_bucket_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'oss_bucket_endpoint' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeClusterUserKubeconfig' => [
            'path' => '/k8s/{ClusterId}/user_config',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PrivateIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemporaryDurationMinutes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeSubaccountK8sClusterUserConfig' => [
            'path' => '/k8s/{ClusterId}/users/{Uid}/user_config',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Uid',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PrivateIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'TemporaryDurationMinutes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListUserKubeConfigStates' => [
            'path' => '/users/{Uid}/kubeconfig/states',
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
                    'name' => 'Uid',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_number',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'deprecated' => false,
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'deprecated' => false,
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListClusterKubeconfigStates' => [
            'path' => '/clusters/{ClusterId}/kubeconfig/states',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateK8sClusterUserConfigExpire' => [
            'path' => '/k8s/{ClusterId}/user_config/expire',
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
                    'name' => 'ClusterId',
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
                            'expire_hour' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => true,
                                'minimum' => '0',
                                'maximum' => '876000',
                            ],
                            'user' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RevokeK8sClusterKubeConfig' => [
            'path' => '/k8s/{ClusterId}/certs',
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
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CleanClusterUserPermissions' => [
            'path' => '/cluster/{ClusterId}/user/{Uid}/permissions',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Uid',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CleanUserPermissions' => [
            'path' => '/users/{Uid}/permissions',
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
                    'name' => 'Uid',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ClusterIds',
                    'in' => 'query',
                    'style' => 'simple',
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
        'CreateClusterNodePool' => [
            'path' => '/clusters/{ClusterId}/nodepools',
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
                    'name' => 'ClusterId',
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
                            'nodepool_info' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'resource_group_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'auto_scaling' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'max_instances' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'min_instances' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'is_bond_eip' => [
                                        'type' => 'boolean',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                    'eip_internet_charge_type' => [
                                        'type' => 'string',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                    'eip_bandwidth' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'management' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_repair' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_repair_policy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'restart_node' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'approval_required' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'auto_vul_fix' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_vul_fix_policy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'restart_node' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'vul_level' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'exclude_packages' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'auto_upgrade' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_upgrade_policy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'auto_upgrade_kubelet' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'auto_upgrade_runtime' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'auto_upgrade_os' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'upgrade_config' => [
                                        'type' => 'object',
                                        'deprecated' => true,
                                        'required' => false,
                                        'properties' => [
                                            'auto_upgrade' => [
                                                'type' => 'boolean',
                                                'deprecated' => true,
                                                'required' => false,
                                            ],
                                            'surge' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                            ],
                                            'surge_percentage' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                            ],
                                            'max_unavailable' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'scaling_group' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'vswitch_ids' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'instance_types' => [
                                        'type' => 'array',
                                        'required' => true,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'instance_charge_type' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'period' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'period_unit' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'auto_renew' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_renew_period' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'spot_strategy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'spot_price_limit' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'instance_type' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'price_limit' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'image_type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'image_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_category' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_categories' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [],
                                        ],
                                        'maxItems' => 10,
                                    ],
                                    'system_disk_size' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'system_disk_performance_level' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_encrypted' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'system_disk_kms_key_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_encrypt_algorithm' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'enum' => [],
                                    ],
                                    'system_disk_bursting_enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'system_disk_provisioned_iops' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'data_disks' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/data_disk',
                                            'required' => false,
                                        ],
                                    ],
                                    'security_group_ids' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'key_pair' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'login_password' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'login_as_non_root' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'cis_enabled' => [
                                        'type' => 'boolean',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                    'soc_enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'security_hardening_os' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'internet_charge_type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'internet_max_bandwidth_out' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'tags' => [
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
                                    'desired_size' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'multi_az_policy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'scaling_policy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'on_demand_base_capacity' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'on_demand_percentage_above_base_capacity' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'spot_instance_pools' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'spot_instance_remedy' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'compensate_with_on_demand' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'deploymentset_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'rds_instances' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'private_pool_options' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'id' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'match_criteria' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'security_group_id' => [
                                        'type' => 'string',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                    'platform' => [
                                        'type' => 'string',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                    'instance_patterns' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/instance_patterns',
                                            'required' => false,
                                        ],
                                    ],
                                    'ram_role_name' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'instance_metadata_options' => [
                                        '$ref' => '#/components/schemas/InstanceMetadataOptions',
                                        'required' => false,
                                    ],
                                    'resource_pool_options' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'strategy' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'PrivatePoolOnly',
                                                    'PrivatePoolFirst',
                                                    'None',
                                                ],
                                            ],
                                            'private_pool_ids' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'system_disk_snapshot_policy_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'node_config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'kubelet_configuration' => [
                                        '$ref' => '#/components/schemas/kubelet_config',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'kubernetes_config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'labels' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/tag',
                                            'required' => false,
                                        ],
                                    ],
                                    'taints' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/taint',
                                            'required' => false,
                                        ],
                                    ],
                                    'runtime' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'runtime_version' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'cpu_policy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'user_data' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'unschedulable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'cms_enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'node_name_mode' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'pre_user_data' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'tee_config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'tee_enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'interconnect_config' => [
                                'type' => 'object',
                                'deprecated' => true,
                                'required' => false,
                                'properties' => [
                                    'cen_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ccn_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'ccn_region_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'bandwidth' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'improved_period' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'max_nodes' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'interconnect_mode' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'host_network' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'intranet' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'eflo_node_group' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'cluster_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'group_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'auto_mode' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'node_components' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'version' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'config' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'custom_config' => [
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
                        ],
                    ],
                ],
            ],
        ],
        'DeleteClusterNodepool' => [
            'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodepoolId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeClusterNodePoolDetail' => [
            'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodepoolId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeClusterNodePools' => [
            'path' => '/clusters/{ClusterId}/nodepools',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodepoolName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeNodePoolVuls' => [
            'path' => '/clusters/{cluster_id}/nodepools/{nodepool_id}/vuls',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'nodepool_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'necessity',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyClusterNodePool' => [
            'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodepoolId',
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
                            'nodepool_info' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'name' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'resource_group_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'auto_scaling' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'type' => [
                                        'type' => 'string',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                    'max_instances' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'min_instances' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'is_bond_eip' => [
                                        'type' => 'boolean',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                    'eip_internet_charge_type' => [
                                        'type' => 'string',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                    'eip_bandwidth' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'management' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_repair' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_repair_policy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'restart_node' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'approval_required' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'auto_vul_fix' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_vul_fix_policy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'restart_node' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'vul_level' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'exclude_packages' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'auto_upgrade' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_upgrade_policy' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'auto_upgrade_kubelet' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'auto_upgrade_runtime' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                            'auto_upgrade_os' => [
                                                'type' => 'boolean',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'upgrade_config' => [
                                        'type' => 'object',
                                        'deprecated' => true,
                                        'required' => false,
                                        'properties' => [
                                            'auto_upgrade' => [
                                                'type' => 'boolean',
                                                'deprecated' => true,
                                                'required' => false,
                                            ],
                                            'surge' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                            ],
                                            'surge_percentage' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                            ],
                                            'max_unavailable' => [
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'scaling_group' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'vswitch_ids' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'instance_types' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'instance_charge_type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'period' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'period_unit' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'auto_renew' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'auto_renew_period' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'spot_strategy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'spot_price_limit' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'instance_type' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                                'price_limit' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'image_type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'image_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_category' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_categories' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'enum' => [],
                                        ],
                                        'maxItems' => 10,
                                    ],
                                    'system_disk_size' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'system_disk_performance_level' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_encrypted' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'system_disk_kms_key_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'system_disk_encrypt_algorithm' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'enum' => [],
                                    ],
                                    'system_disk_provisioned_iops' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'system_disk_bursting_enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'data_disks' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/data_disk',
                                            'required' => false,
                                        ],
                                    ],
                                    'key_pair' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'login_password' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'internet_charge_type' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'internet_max_bandwidth_out' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'tags' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/tag',
                                            'required' => false,
                                        ],
                                    ],
                                    'desired_size' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'multi_az_policy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'scaling_policy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'on_demand_base_capacity' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'on_demand_percentage_above_base_capacity' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'spot_instance_pools' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                    'spot_instance_remedy' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'compensate_with_on_demand' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'rds_instances' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'private_pool_options' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'id' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                            'match_criteria' => [
                                                'type' => 'string',
                                                'required' => false,
                                            ],
                                        ],
                                    ],
                                    'platform' => [
                                        'type' => 'string',
                                        'deprecated' => true,
                                        'required' => false,
                                    ],
                                    'instance_patterns' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/instance_patterns',
                                            'required' => false,
                                        ],
                                    ],
                                    'deploymentset_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'security_group_ids' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                    'resource_pool_options' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'properties' => [
                                            'strategy' => [
                                                'type' => 'string',
                                                'required' => false,
                                                'enum' => [
                                                    'PrivatePoolFirst',
                                                    'PrivatePoolOnly',
                                                    'None',
                                                ],
                                            ],
                                            'private_pool_ids' => [
                                                'type' => 'array',
                                                'required' => false,
                                                'items' => [
                                                    'type' => 'string',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                    ],
                                    'system_disk_snapshot_policy_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'kubernetes_config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'labels' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/tag',
                                            'required' => false,
                                        ],
                                    ],
                                    'taints' => [
                                        'type' => 'array',
                                        'required' => false,
                                        'items' => [
                                            '$ref' => '#/components/schemas/taint',
                                            'required' => false,
                                        ],
                                    ],
                                    'runtime' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'runtime_version' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'cpu_policy' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'unschedulable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'user_data' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'cms_enabled' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                    'pre_user_data' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'node_name_mode' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'tee_config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'tee_enable' => [
                                        'type' => 'boolean',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'update_nodes' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'concurrency' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ScaleClusterNodePool' => [
            'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodepoolId',
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
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AttachInstancesToNodePool' => [
            'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}/attach',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodepoolId',
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
                            'instances' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'password' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'format_disk' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'keep_instance_name' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveNodePoolNodes' => [
            'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}/nodes',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodepoolId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'release_node',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'drain_node',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'nodes',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'deprecated' => true,
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'instance_ids',
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
                    'name' => 'concurrency',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpgradeClusterNodepool' => [
            'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}/upgrade',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodepoolId',
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
                            'image_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'runtime_version' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'kubernetes_version' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'runtime_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'use_replace' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'rolling_policy' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'pause_policy' => [
                                        'type' => 'string',
                                        'required' => false,
                                        'enum' => [
                                            'FirstBatch',
                                            'EveryBatch',
                                            'NotPause',
                                        ],
                                    ],
                                    'batch_interval' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                    'max_parallelism' => [
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'node_names' => [
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
        'RepairClusterNodePool' => [
            'path' => '/clusters/{cluster_id}/nodepools/{nodepool_id}/repair',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'nodepool_id',
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
                            'nodes' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'auto_restart' => [
                                'type' => 'boolean',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'operations' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'operation_id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'args' => [
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
        'FixNodePoolVuls' => [
            'path' => '/clusters/{cluster_id}/nodepools/{nodepool_id}/vuls/fix',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'nodepool_id',
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
                            'vuls' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'nodes' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'rollout_policy' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'max_parallelism' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'auto_restart' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyNodePoolNodeConfig' => [
            'path' => '/clusters/{ClusterId}/nodepools/{NodepoolId}/node_config',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'NodepoolId',
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
                            'kubelet_config' => [
                                '$ref' => '#/components/schemas/kubelet_config',
                                'required' => false,
                            ],
                            'rolling_policy' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'max_parallelism' => [
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'os_config' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'sysctl' => [
                                        'type' => 'object',
                                        'required' => false,
                                        'additionalProperties' => [
                                            'type' => 'any',
                                        ],
                                    ],
                                    'hugepage' => [
                                        '$ref' => '#/components/schemas/Hugepage',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'containerd_config' => [
                                '$ref' => '#/components/schemas/containerd_config',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SyncClusterNodePool' => [
            'path' => '/clusters/{ClusterId}/sync_nodepools',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeClusterAttachScripts' => [
            'path' => '/clusters/{ClusterId}/attachscript',
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
                    'name' => 'ClusterId',
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
                            'nodepool_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'format_disk' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'keep_instance_name' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'rds_instances' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'arch' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'options' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'expired' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'one_time_token' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateAutoscalingConfig' => [
            'path' => '/cluster/{ClusterId}/autoscale/config/',
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
                    'name' => 'ClusterId',
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
                            'cool_down_duration' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'unneeded_duration' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'utilization_threshold' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'gpu_utilization_threshold' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'scan_interval' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'scale_down_enabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'expander' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'skip_nodes_with_system_pods' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'skip_nodes_with_local_storage' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'daemonset_eviction_for_nodes' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'max_graceful_termination_sec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'min_replica_count' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'recycle_node_deletion_enabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'scale_up_from_zero' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'scaler_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'priorities' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
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
        'DescribeClusterNodes' => [
            'path' => '/clusters/{ClusterId}/nodes',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'instanceIds',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'nodepool_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'state',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteClusterNodes' => [
            'path' => '/clusters/{ClusterId}/nodes',
            'methods' => [
                'post',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'ClusterId',
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
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'drain_node' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'release_node' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'nodes' => [
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
        'AttachInstances' => [
            'path' => '/clusters/{ClusterId}/attach',
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
                    'name' => 'ClusterId',
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
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'instances' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'key_pair' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'password' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'format_disk' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'keep_instance_name' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'is_edge_worker' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'nodepool_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'image_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'cpu_policy' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'user_data' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'rds_instances' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'runtime' => [
                                '$ref' => '#/components/schemas/runtime',
                                'required' => false,
                            ],
                            'tags' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/tag',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'InstallClusterAddons' => [
            'path' => '/clusters/{ClusterId}/components/install',
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
                    'name' => 'ClusterId',
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
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'version' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'config' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UnInstallClusterAddons' => [
            'path' => '/clusters/{ClusterId}/components/uninstall',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'addons',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'name' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'cleanup_cloud_resources' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAddons' => [
            'path' => '/addons',
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
                    'name' => 'region_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'profile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_spec',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListClusterAddonInstances' => [
            'path' => '/clusters/{cluster_id}/addon_instances',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetClusterAddonInstance' => [
            'path' => '/clusters/{cluster_id}/addon_instances/{instance_name}',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instance_name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeAddon' => [
            'path' => '/addons/{addon_name}',
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
                    'name' => 'addon_name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'region_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'profile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_spec',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
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
            ],
        ],
        'ModifyClusterAddon' => [
            'path' => '/clusters/{cluster_id}/components/{component_id}/config',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'component_id',
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
                            'config' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpgradeClusterAddons' => [
            'path' => '/clusters/{ClusterId}/components/upgrade',
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
                    'name' => 'ClusterId',
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
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'component_name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'next_version' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'version' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'config' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'policy' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeUserPermission' => [
            'path' => '/permissions/users/{uid}',
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
                    'name' => 'uid',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GrantPermissions' => [
            'path' => '/permissions/users/{uid}',
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
                    'name' => 'uid',
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
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'cluster' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'is_custom' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'role_name' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'role_type' => [
                                    'type' => 'string',
                                    'required' => true,
                                ],
                                'namespace' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'is_ram_role' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateUserPermissions' => [
            'path' => '/permissions/users/{uid}/update',
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
                    'name' => 'uid',
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
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'object',
                            'required' => false,
                            'properties' => [
                                'cluster' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'is_custom' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                                'role_name' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'role_type' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'namespace' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'is_ram_role' => [
                                    'type' => 'boolean',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'mode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'enum' => [
                            'delete',
                            'patch',
                            'apply',
                        ],
                    ],
                ],
            ],
        ],
        'CheckServiceRole' => [
            'path' => '/ram/check-service-role',
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
                            'roles' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'name' => [
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
        'ScanClusterVuls' => [
            'path' => '/clusters/{cluster_id}/vuls/scan',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeClusterVuls' => [
            'path' => '/clusters/{cluster_id}/vuls',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateResourcesDeleteProtection' => [
            'path' => '/clusters/{ClusterId}/resources/protection',
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
                    'name' => 'ClusterId',
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
                            'namespace' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'resource_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'services',
                                    'namespaces',
                                ],
                            ],
                            'resources' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'enable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeResourcesDeleteProtection' => [
            'path' => '/clusters/{ClusterId}/resources/{ResourceType}/protection',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                        'enum' => [
                            'namespaces',
                            'services',
                        ],
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resources',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeployPolicyInstance' => [
            'path' => '/clusters/{cluster_id}/policies/{policy_name}',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'policy_name',
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
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'action' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'namespaces' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'parameters' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ModifyPolicyInstance' => [
            'path' => '/clusters/{cluster_id}/policies/{policy_name}',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'policy_name',
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
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'action' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'instance_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'namespaces' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'parameters' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeletePolicyInstance' => [
            'path' => '/clusters/{cluster_id}/policies/{policy_name}',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'policy_name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'instance_name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribePolicies' => [
            'path' => '/policies',
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
        'DescribePolicyDetails' => [
            'path' => '/policies/{policy_name}',
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
                    'name' => 'policy_name',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribePolicyGovernanceInCluster' => [
            'path' => '/clusters/{cluster_id}/policygovernance',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribePolicyInstances' => [
            'path' => '/clusters/{cluster_id}/policies',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'policy_name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'instance_name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribePolicyInstancesStatus' => [
            'path' => '/clusters/{cluster_id}/policies/status',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RunClusterCheck' => [
            'path' => '/clusters/{cluster_id}/checks',
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
                    'name' => 'cluster_id',
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
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'target' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'options' => [
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
        'ListClusterChecks' => [
            'path' => '/clusters/{cluster_id}/checks',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'target',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetClusterCheck' => [
            'path' => '/clusters/{cluster_id}/checks/{check_id}',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'check_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateClusterInspectConfig' => [
            'path' => '/clusters/{clusterId}/inspectConfig',
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
                    'name' => 'clusterId',
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
                            'enabled' => [
                                'type' => 'boolean',
                                'required' => true,
                            ],
                            'recurrence' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'disabledCheckItems' => [
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
        'UpdateClusterInspectConfig' => [
            'path' => '/clusters/{clusterId}/inspectConfig',
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
                    'name' => 'clusterId',
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
                            'enabled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'scheduleTime' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'disabledCheckItems' => [
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
        'GetClusterInspectConfig' => [
            'path' => '/clusters/{clusterId}/inspectConfig',
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
                    'name' => 'clusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'RunClusterInspect' => [
            'path' => '/clusters/{clusterId}/inspectReports',
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
                    'name' => 'clusterId',
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
                            'clientToken' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListClusterInspectReports' => [
            'path' => '/clusters/{clusterId}/inspectReports',
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
                    'name' => 'clusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetClusterInspectReportDetail' => [
            'path' => '/clusters/{clusterId}/inspectReports/{reportId}',
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
                    'name' => 'clusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'reportId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                [
                    'name' => 'category',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'targetType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'level',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'enableFilter',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DeleteClusterInspectConfig' => [
            'path' => '/clusters/{clusterId}/inspectConfig',
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
                    'name' => 'clusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateClusterDiagnosis' => [
            'path' => '/clusters/{cluster_id}/diagnosis',
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
                    'name' => 'cluster_id',
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
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'target' => [
                                'type' => 'object',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetClusterDiagnosisResult' => [
            'path' => '/clusters/{cluster_id}/diagnosis/{diagnosis_id}/result',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'diagnosis_id',
                    'in' => 'path',
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
        'GetClusterDiagnosisCheckItems' => [
            'path' => '/clusters/{cluster_id}/diagnosis/{diagnosis_id}/check_items',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'diagnosis_id',
                    'in' => 'path',
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
        'CreateTemplate' => [
            'path' => '/templates',
            'methods' => [
                'post',
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
                                'required' => true,
                            ],
                            'template' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'tags' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'template_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeTemplateAttribute' => [
            'path' => '/templates/{TemplateId}',
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
                    'name' => 'TemplateId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'template_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeTemplates' => [
            'path' => '/templates',
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
                    'name' => 'template_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_num',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'UpdateTemplate' => [
            'path' => '/templates/{TemplateId}',
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
                    'name' => 'TemplateId',
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
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'tags' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'template' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'template_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteTemplate' => [
            'path' => '/templates/{TemplateId}',
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
            'produces' => [
                'application/json',
            ],
            'parameters' => [
                [
                    'name' => 'TemplateId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CreateTrigger' => [
            'path' => '/clusters/{cluster_id}/triggers',
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
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'cluster_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'project_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'action' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
                [
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteTrigger' => [
            'path' => '/clusters/{cluster_id}/triggers/{Id}',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeTrigger' => [
            'path' => '/clusters/{cluster_id}/triggers',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'action',
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
                    'name' => 'resource_ids',
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
                    'name' => 'resource_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'region_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                            '$ref' => '#/components/schemas/tag',
                            'required' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'next_token',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'TagResources' => [
            'path' => '/tags',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'resource_ids' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'resource_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'region_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'tags' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/tag',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UntagResources' => [
            'path' => '/tags',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'region_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'resource_ids',
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
                    'name' => 'resource_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'tag_keys',
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
                    'name' => 'all',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ModifyClusterTags' => [
            'path' => '/clusters/{ClusterId}/tags',
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
                    'name' => 'ClusterId',
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
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/tag',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'StartAlert' => [
            'path' => '/alert/{ClusterId}/alert_rule/start',
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
                    'name' => 'ClusterId',
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
                            'alert_rule_group_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'alert_rule_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateContactGroupForAlert' => [
            'path' => '/alert/{ClusterId}/alert_rule/contact_groups',
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
                    'name' => 'ClusterId',
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
                            'alert_rule_group_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'contact_group_ids' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                ],
                            ],
                            'cr_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'namespace' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'StopAlert' => [
            'path' => '/alert/{ClusterId}/alert_rule/stop',
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
                    'name' => 'ClusterId',
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
                            'alert_rule_group_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'alert_rule_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAlertContact' => [
            'path' => '/alert/contacts',
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
            'parameters' => [
                [
                    'name' => 'contact_ids',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'DeleteAlertContactGroup' => [
            'path' => '/alert/contact_groups',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'contact_group_ids',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                            'required' => false,
                        ],
                    ],
                ],
            ],
        ],
        'UpdateControlPlaneLog' => [
            'path' => '/clusters/{ClusterId}/controlplanelog',
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
                    'name' => 'ClusterId',
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
                            'log_project' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'log_ttl' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'aliuid' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'components' => [
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
        'CheckControlPlaneLogEnable' => [
            'path' => '/clusters/{ClusterId}/controlplanelog',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetClusterAuditProject' => [
            'path' => '/clusters/{clusterid}/audit',
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
                    'name' => 'clusterid',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'UpdateClusterAuditLogConfig' => [
            'path' => '/clusters/{clusterid}/audit_log',
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
                    'name' => 'clusterid',
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
                            'sls_project_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'disable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DescribeEventsForRegion' => [
            'path' => '/regions/{region_id}/events',
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
                    'name' => 'cluster_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_number',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'region_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeEvents' => [
            'path' => '/events',
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
                    'name' => 'cluster_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_number',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeClusterEvents' => [
            'path' => '/clusters/{ClusterId}/events',
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
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'page_size',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'page_number',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'task_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeTaskInfo' => [
            'path' => '/tasks/{task_id}',
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
            'parameters' => [
                [
                    'name' => 'task_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PauseTask' => [
            'path' => '/tasks/{task_id}/pause',
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
                    'name' => 'task_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ResumeTask' => [
            'path' => '/tasks/{task_id}/resume',
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
                    'name' => 'task_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CancelTask' => [
            'path' => '/tasks/{task_id}/cancel',
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
                    'name' => 'task_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeClusterTasks' => [
            'path' => '/clusters/{cluster_id}/tasks',
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
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
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
                    'name' => 'page_number',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListOperationPlansForRegion' => [
            'path' => '/regions/{region_id}/operation/plans',
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
                    'name' => 'region_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'cluster_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'state',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'ListOperationPlans' => [
            'path' => '/operation/plans',
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
                    'name' => 'cluster_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CancelOperationPlan' => [
            'path' => '/operation/plans/{plan_id}',
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
                    'name' => 'plan_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetUpgradeStatus' => [
            'path' => '/api/v2/clusters/{ClusterId}/upgrade/status',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PauseClusterUpgrade' => [
            'path' => '/api/v2/clusters/{ClusterId}/upgrade/pause',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CancelClusterUpgrade' => [
            'path' => '/api/v2/clusters/{ClusterId}/upgrade/cancel',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'ResumeUpgradeCluster' => [
            'path' => '/api/v2/clusters/{ClusterId}/upgrade/resume',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeAddons' => [
            'path' => '/clusters/components/metadata',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'region',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'cluster_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_profile',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_spec',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'cluster_version',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeClusterAddonsVersion' => [
            'path' => '/clusters/{ClusterId}/components/version',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeClusterAddonInstance' => [
            'path' => '/clusters/{ClusterID}/components/{AddonName}/instance',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ClusterID',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'AddonName',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DescribeClusterAddonMetadata' => [
            'path' => '/clusters/{cluster_id}/components/{component_id}/metadata',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'cluster_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'component_id',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
            ],
        ],
        'DescribeClusterAddonsUpgradeStatus' => [
            'path' => '/clusters/{ClusterId}/components/upgradestatus',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'componentIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'array',
                        'required' => true,
                        'items' => [
                            'type' => 'string',
                            'required' => true,
                        ],
                    ],
                ],
            ],
        ],
        'DescribeExternalAgent' => [
            'path' => '/k8s/{ClusterId}/external/agent/deployment',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PrivateIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'AgentMode',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'CreateKubernetesTrigger' => [
            'path' => '/triggers',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'cluster_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'project_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'action' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ResumeComponentUpgrade' => [
            'path' => '/clusters/{clusterid}/components/{componentid}/resume',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'clusterid',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'componentid',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'PauseComponentUpgrade' => [
            'path' => '/clusters/{clusterid}/components/{componentid}/pause',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'clusterid',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'componentid',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'GetKubernetesTrigger' => [
            'path' => '/triggers/{ClusterId}',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'Namespace',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'action',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'DescribeClusters' => [
            'path' => '/clusters',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'clusterType',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resource_group_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                    ],
                ],
            ],
        ],
        'DescribeClusterV2UserKubeconfig' => [
            'path' => '/api/v2/k8s/{ClusterId}/user_config',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'PrivateIpAddress',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                    ],
                ],
                [
                    'name' => 'TemporaryDurationMinutes',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
        ],
        'DescribeClusterAddonUpgradeStatus' => [
            'path' => '/clusters/{ClusterId}/components/{ComponentId}/upgradestatus',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'ClusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'ComponentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'CancelComponentUpgrade' => [
            'path' => '/clusters/{clusterId}/components/{componentId}/cancel',
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
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'clusterId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'componentId',
                    'in' => 'path',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
        ],
        'DeleteKubernetesTrigger' => [
            'path' => '/triggers/revoke/{Id}',
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => true,
            'parameters' => [
                [
                    'name' => 'Id',
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
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cs.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cs.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cs.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-jva',
            'endpoint' => 'cs.cn-zhengzhou-jva.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'cs.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'cs.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cs.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cs.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-nanjing',
            'endpoint' => 'cs.cn-nanjing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fuzhou',
            'endpoint' => 'cs.cn-fuzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cs.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan',
            'endpoint' => 'cs.cn-heyuan.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'cs.cn-guangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'cs.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan-lr',
            'endpoint' => 'cs.cn-wuhan-lr.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cs.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'cs.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2',
            'endpoint' => 'cs.ap-northeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'cs.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'cs.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'cs.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'cs.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'cs.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'cs.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'cs.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'cs.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'cs.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'cs.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'cs.cn-hangzhou-finance.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'cs.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'cs.cn-shenzhen-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-7',
            'endpoint' => 'cs.ap-southeast-7.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'cs.cn-beijing-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-central-1',
            'endpoint' => 'cs.me-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-heyuan-acdr-1',
            'endpoint' => 'cs.cn-heyuan-acdr-1.aliyuncs.com',
        ],
        [
            'regionId' => 'na-south-1',
            'endpoint' => 'cs.na-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-southeast-1',
            'endpoint' => 'cs.us-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu-gic-1',
            'endpoint' => 'cs.cn-wulanchabu-gic-1.aliyuncs.com',
        ],
    ],
];