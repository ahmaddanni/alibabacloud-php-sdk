<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'PDS',
        'product' => 'pds',
        'version' => '2022-03-01',
    ],
    'components' => [
        'schemas' => [
            'AccountAccessTokenResponse' => [
                'type' => 'object',
                'properties' => [
                    'access_token' => [
                        'type' => 'string',
                    ],
                    'refresh_token' => [
                        'type' => 'string',
                    ],
                    'expires_in' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'token_type' => [
                        'type' => 'string',
                    ],
                    'user_id' => [
                        'type' => 'string',
                    ],
                    'user_name' => [
                        'type' => 'string',
                    ],
                    'avatar' => [
                        'type' => 'string',
                    ],
                    'nick_name' => [
                        'type' => 'string',
                    ],
                    'default_drive_id' => [
                        'type' => 'string',
                    ],
                    'role' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'expire_time' => [
                        'type' => 'string',
                    ],
                    'is_first_login' => [
                        'type' => 'boolean',
                    ],
                    'device_id' => [
                        'type' => 'string',
                    ],
                    'device_name' => [
                        'type' => 'string',
                    ],
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'default_sbox_drive_id' => [
                        'type' => 'string',
                    ],
                    'state' => [
                        'type' => 'string',
                    ],
                    'exist_link' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LinkInfo',
                        ],
                    ],
                    'need_link' => [
                        'type' => 'boolean',
                    ],
                    'user_data' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'pin_setup' => [
                        'type' => 'boolean',
                    ],
                    'need_rp_verify' => [
                        'type' => 'boolean',
                    ],
                    'path_status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AccountLinkInfo' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'authentication_type' => [
                        'type' => 'string',
                    ],
                    'identity' => [
                        'type' => 'string',
                    ],
                    'extra' => [
                        'type' => 'string',
                    ],
                    'user_id' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'display_name' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'last_login_time' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'Activity' => [
                'type' => 'object',
                'properties' => [
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'activity_id' => [
                        'type' => 'string',
                    ],
                    'user_id' => [
                        'type' => 'string',
                    ],
                    'device' => [
                        'type' => 'string',
                    ],
                    'event_type' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'latest_event_time' => [
                        'type' => 'string',
                    ],
                    'resource_category' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'resource_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                    ],
                    'total_resource_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'AddStoryFile' => [
                'type' => 'object',
                'properties' => [
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'revision_id' => [
                        'type' => 'string',
                    ],
                    'error_code' => [
                        'type' => 'string',
                    ],
                    'error_message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Address' => [
                'type' => 'object',
                'properties' => [
                    'country' => [
                        'type' => 'string',
                    ],
                    'province' => [
                        'type' => 'string',
                    ],
                    'city' => [
                        'type' => 'string',
                    ],
                    'district' => [
                        'type' => 'string',
                    ],
                    'township' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AddressGroup' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                    'count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'cover_url' => [
                        'type' => 'string',
                    ],
                    'cover_file_id' => [
                        'type' => 'string',
                    ],
                    'address_detail' => [
                        '$ref' => '#/components/schemas/Address',
                    ],
                ],
            ],
            'Aggregation' => [
                'type' => 'object',
                'properties' => [
                    'field' => [
                        'type' => 'string',
                        'format' => 'byte',
                    ],
                    'operation' => [
                        'type' => 'string',
                        'format' => 'byte',
                    ],
                    'value' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'groups' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AggregationsGroup',
                            'required' => false,
                        ],
                    ],
                ],
            ],
            'AggregationsGroup' => [
                'type' => 'object',
                'properties' => [
                    'count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'value' => [
                        'type' => 'string',
                        'format' => 'byte',
                    ],
                ],
            ],
            'Album' => [
                'type' => 'object',
                'properties' => [
                    'album_id' => [
                        'type' => 'string',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'user_tags' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'file_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'cover_file' => [
                        '$ref' => '#/components/schemas/File',
                    ],
                    'base_face_file' => [
                        '$ref' => '#/components/schemas/File',
                    ],
                    'base_face_group_id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AlbumFile' => [
                'type' => 'object',
                'properties' => [
                    'album_id' => [
                        'type' => 'string',
                    ],
                    'joined_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'content_type' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'transhed_at' => [
                        'type' => 'string',
                    ],
                    'file_extension' => [
                        'type' => 'string',
                    ],
                    'mime_type' => [
                        'type' => 'string',
                    ],
                    'hidden' => [
                        'type' => 'boolean',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'starred' => [
                        'type' => 'boolean',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'user_meta' => [
                        'type' => 'string',
                    ],
                    'labels' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'upload_id' => [
                        'type' => 'string',
                    ],
                    'parent_file_id' => [
                        'type' => 'string',
                    ],
                    'crc64_hash' => [
                        'type' => 'string',
                    ],
                    'content_hash' => [
                        'type' => 'string',
                    ],
                    'content_hash_name' => [
                        'type' => 'string',
                    ],
                    'download_url' => [
                        'type' => 'string',
                    ],
                    'thumbnail' => [
                        'type' => 'string',
                    ],
                    'category' => [
                        'type' => 'string',
                    ],
                    'local_created_at' => [
                        'type' => 'string',
                    ],
                    'local_modified_at' => [
                        'type' => 'string',
                    ],
                    'revision_id' => [
                        'type' => 'string',
                    ],
                    'investigation_info' => [
                        '$ref' => '#/components/schemas/InvestigationInfo',
                    ],
                    'thumbnail_urls' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'image_media_metadata' => [
                        '$ref' => '#/components/schemas/ImageMediaMetadata',
                    ],
                    'ex_fields_info' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                    'object_uri' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'App' => [
                'type' => 'object',
                'properties' => [
                    'app_id' => [
                        'type' => 'string',
                    ],
                    'app_name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'redirect_uri' => [
                        'type' => 'string',
                    ],
                    'scope' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'app_secret' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'logo' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'provider' => [
                        'type' => 'string',
                    ],
                    'stage' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AppAccessStrategy' => [
                'type' => 'object',
                'properties' => [
                    'effect' => [
                        'type' => 'string',
                    ],
                    'except_app_id_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ArchiveFilesConfigResponse' => [
                'type' => 'object',
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AuditLog' => [
                'type' => 'object',
                'properties' => [
                    'log_id' => [
                        'type' => 'string',
                    ],
                    'acted_at' => [
                        'type' => 'string',
                    ],
                    'actor_id' => [
                        'type' => 'string',
                    ],
                    'actor_type' => [
                        'type' => 'string',
                    ],
                    'actor_name' => [
                        'type' => 'string',
                    ],
                    'action_category' => [
                        'type' => 'string',
                    ],
                    'action_type' => [
                        'type' => 'string',
                    ],
                    'object_id' => [
                        'type' => 'string',
                    ],
                    'object_name' => [
                        'type' => 'string',
                    ],
                    'file_path_type' => [
                        'type' => 'string',
                    ],
                    'detail' => [
                        '$ref' => '#/components/schemas/AuditLogDetail',
                    ],
                    'client_ip' => [
                        'type' => 'string',
                    ],
                    'client_type' => [
                        'type' => 'string',
                    ],
                    'client_version' => [
                        'type' => 'string',
                    ],
                    'client_device' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'AuditLogDetail' => [
                'type' => 'object',
                'properties' => [
                    'file_log_detail' => [
                        '$ref' => '#/components/schemas/FileLogDetail',
                    ],
                    'user_log_detail' => [
                        '$ref' => '#/components/schemas/UserLogDetail',
                    ],
                    'drive_log_detail' => [
                        '$ref' => '#/components/schemas/DriveLogDetail',
                    ],
                ],
            ],
            'BaseAlbumFileOperationResult' => [
                'type' => 'object',
                'properties' => [
                    'file' => [
                        '$ref' => '#/components/schemas/CommonFileItem',
                    ],
                    'is_succeed' => [
                        'type' => 'boolean',
                    ],
                    'error_code' => [
                        'type' => 'string',
                    ],
                    'error_message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BaseAssignmentResponse' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'identity' => [
                        '$ref' => '#/components/schemas/Identity',
                    ],
                    'role_id' => [
                        'type' => 'string',
                    ],
                    'manage_resource_type' => [
                        'type' => 'string',
                    ],
                    'manage_resource_id' => [
                        'type' => 'string',
                    ],
                    'associated_role_tag_id' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'disinherit_sub_group' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'BaseDomainResponse' => [
                'type' => 'object',
                'properties' => [
                    'parent_domain_id' => [
                        'type' => 'string',
                    ],
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'domain_name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'init_drive_enable' => [
                        'type' => 'boolean',
                    ],
                    'init_drive_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'size_quota' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'size_quota_used' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'used_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'published_app_access_strategy' => [
                        '$ref' => '#/components/schemas/AppAccessStrategy',
                    ],
                    'share_link_enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'BaseDriveResponse' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'drive_name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'owner_type' => [
                        'type' => 'string',
                    ],
                    'drive_type' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'used_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'total_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'store_id' => [
                        'type' => 'string',
                    ],
                    'relative_path' => [
                        'type' => 'string',
                    ],
                    'encrypt_mode' => [
                        'type' => 'string',
                    ],
                    'encrypt_data_access' => [
                        'type' => 'boolean',
                    ],
                    'action_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'permission' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/IDPermission',
                        ],
                    ],
                    'is_handover' => [
                        'type' => 'boolean',
                    ],
                    'category' => [
                        'type' => 'string',
                    ],
                    'path_status' => [
                        'type' => 'string',
                    ],
                    'delta_enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'BaseFileListInheritPermissionResponse' => [
                'type' => 'object',
                'properties' => [
                    'member' => [
                        '$ref' => '#/components/schemas/FilePermissionMember',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BaseFileUserPermissionResponse' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'identity' => [
                        '$ref' => '#/components/schemas/Identity',
                    ],
                    'role_id' => [
                        'type' => 'string',
                    ],
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'file_full_path' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'expire_time' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'disinherit_sub_group' => [
                        'type' => 'boolean',
                    ],
                    'can_access' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'BaseGroupResponse' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'group_id' => [
                        'type' => 'string',
                    ],
                    'group_name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'permission' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/IDPermission',
                        ],
                    ],
                    'is_sync' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'BaseRoleMemberResponse' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'identity' => [
                        '$ref' => '#/components/schemas/Identity',
                    ],
                    'identity_name' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'is_admin' => [
                        'type' => 'boolean',
                    ],
                    'assignment_list' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/BaseAssignmentResponse',
                        ],
                    ],
                    'subdomain_id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BaseUserResponse' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'user_id' => [
                        'type' => 'string',
                    ],
                    'avatar' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'email' => [
                        'type' => 'string',
                    ],
                    'nick_name' => [
                        'type' => 'string',
                    ],
                    'phone' => [
                        'type' => 'string',
                    ],
                    'phone_region' => [
                        'type' => 'string',
                    ],
                    'role' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'user_name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'default_drive_id' => [
                        'type' => 'string',
                    ],
                    'user_data' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                    'deny_change_password_by_self' => [
                        'type' => 'boolean',
                    ],
                    'need_change_password_next_login' => [
                        'type' => 'boolean',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'expired_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'permission' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/IDPermission',
                        ],
                    ],
                    'is_sync' => [
                        'type' => 'boolean',
                    ],
                    'default_location' => [
                        'type' => 'string',
                    ],
                    'last_login_time' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'path_status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'BenefitPkgDeliveryInfo' => [
                'type' => 'object',
                'properties' => [
                    'amount' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'is_permanent' => [
                        'type' => 'boolean',
                    ],
                    'expire_time' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CNameStatus' => [
                'type' => 'object',
                'properties' => [
                    'bingding_state' => [
                        'type' => 'string',
                    ],
                    'legal_state' => [
                        'type' => 'string',
                    ],
                    'remark' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CdnFileDownloadCallbackInfo' => [
                'type' => 'object',
                'required' => true,
                'properties' => [
                    'bucket' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'object' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'httpHeader.range' => [
                        'type' => 'string',
                    ],
                    'domain_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'user_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'drive_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'file_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'token' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'expire' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                ],
            ],
            'CertInfo' => [
                'type' => 'object',
                'properties' => [
                    'cert_name' => [
                        'type' => 'string',
                    ],
                    'cert_body' => [
                        'type' => 'string',
                    ],
                    'cert_privatekey' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ClearRecycleBinItem' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'task_id' => [
                        'type' => 'string',
                    ],
                    'async_task_id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CommonFileItem' => [
                'type' => 'object',
                'properties' => [
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'revision_id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CopyUserTagsDirective' => [
                'type' => 'object',
                'properties' => [
                    'directive' => [
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
            'CssCreateOrderParam' => [
                'type' => 'object',
                'properties' => [
                    'buyerId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'childId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'userId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'payerId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'bid' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'token' => [
                        'type' => 'string',
                    ],
                    'fromApp' => [
                        'type' => 'string',
                    ],
                    'skipChannel' => [
                        'type' => 'boolean',
                    ],
                    'createrNick' => [
                        'type' => 'string',
                    ],
                    'memo' => [
                        'type' => 'string',
                    ],
                    'agentId' => [
                        'type' => 'string',
                    ],
                    'commodities' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CssInstanceCommodity',
                        ],
                    ],
                    'promotionCode' => [
                        'type' => 'string',
                    ],
                    'planGroupId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'planId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'planInstanceId' => [
                        'type' => 'string',
                    ],
                    'cssAuthRequestParam' => [
                        'type' => 'any',
                    ],
                    'language' => [
                        'type' => 'string',
                    ],
                    'promotionInputParam' => [
                        'type' => 'any',
                    ],
                    'orderOrigin' => [
                        'type' => 'string',
                    ],
                    'marketType' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'umidToken' => [
                        'type' => 'string',
                    ],
                    'cilentIp' => [
                        'type' => 'string',
                    ],
                    'orderParams' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'autoPay' => [
                        'type' => 'boolean',
                    ],
                    'autoUseCoupon' => [
                        'type' => 'boolean',
                    ],
                    'transientAccess' => [
                        'type' => 'any',
                    ],
                    'certificate' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CssInstanceCommodity' => [
                'type' => 'object',
                'properties' => [
                    'planItemId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'commodityCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'specCode' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'duration' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'pricingCycle' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'quantity' => [
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                    ],
                    'orderType' => [
                        'type' => 'string',
                    ],
                    'chargeType' => [
                        'type' => 'string',
                    ],
                    'refundSpecCode' => [
                        'type' => 'string',
                    ],
                    'components' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CssInstanceComponent',
                        ],
                    ],
                    'orderParams' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'instanceId' => [
                        'type' => 'string',
                    ],
                    'activityId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'isFree' => [
                        'type' => 'boolean',
                    ],
                    'isSyncToSubscription' => [
                        'type' => 'boolean',
                    ],
                    'isPrePayPostCharge' => [
                        'type' => 'boolean',
                    ],
                    'isRenewChange' => [
                        'type' => 'boolean',
                    ],
                    'specifyStartDate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'specUpgradeOriginSpecCodes' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'upgradeInquireFinancialValue' => [
                        'type' => 'boolean',
                    ],
                    'aliyunProduceCode' => [
                        'type' => 'string',
                    ],
                    'redeemOrderType' => [
                        'type' => 'string',
                    ],
                    'redeemNoList' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'CssInstanceComponent' => [
                'type' => 'object',
                'properties' => [
                    'componentCode' => [
                        'type' => 'string',
                    ],
                    'componentName' => [
                        'type' => 'string',
                    ],
                    'globalKey' => [
                        'type' => 'string',
                    ],
                    'tag' => [
                        'type' => 'string',
                    ],
                    'instanceProperty' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CssInstanceProperty',
                        ],
                    ],
                    'moduleAttrStatus' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'CssInstanceProperty' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'code' => [
                        'type' => 'string',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'unit' => [
                        'type' => 'string',
                    ],
                    'globalKey' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CssProduce' => [
                'type' => 'object',
                'properties' => [
                    'buyerId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'childId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'userId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'payerId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'bid' => [
                        'type' => 'string',
                    ],
                    'requestId' => [
                        'type' => 'string',
                    ],
                    'token' => [
                        'type' => 'string',
                    ],
                    'fromApp' => [
                        'type' => 'string',
                    ],
                    'skipChannel' => [
                        'type' => 'boolean',
                    ],
                    'orderId' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'purchases' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CssPurchase',
                        ],
                    ],
                ],
            ],
            'CssPurchase' => [
                'type' => 'object',
                'properties' => [
                    'commodityCode' => [
                        'type' => 'string',
                    ],
                    'chargeType' => [
                        'type' => 'string',
                    ],
                    'startDate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'endDate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'gmtCreate' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'instanceComponents' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CssInstanceComponent',
                        ],
                    ],
                    'purchaseParams' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'instanceId' => [
                        'type' => 'string',
                    ],
                    'orderType' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'CustomSideLinkConfig' => [
                'type' => 'object',
                'properties' => [
                    'icon' => [
                        'type' => 'string',
                    ],
                    'text' => [
                        'type' => 'string',
                    ],
                    'link' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DataBoxPrivileges' => [
                'type' => 'object',
                'properties' => [
                    'feature_id' => [
                        'type' => 'string',
                    ],
                    'feature_attr_id' => [
                        'type' => 'string',
                    ],
                    'quota' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'DataCName' => [
                'type' => 'object',
                'properties' => [
                    'location' => [
                        'type' => 'string',
                    ],
                    'store_id' => [
                        'type' => 'string',
                    ],
                    'cname' => [
                        'type' => 'string',
                    ],
                    'cert_name' => [
                        'type' => 'string',
                    ],
                    'cert_expire_time' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'cname_type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Domain' => [
                'type' => 'object',
                'properties' => [
                    'parent_domain_id' => [
                        'type' => 'string',
                    ],
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'domain_name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'init_drive_enable' => [
                        'type' => 'boolean',
                    ],
                    'init_drive_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'size_quota' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'size_quota_used' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'user_count_quota' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'status' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'used_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'published_app_access_strategy' => [
                        '$ref' => '#/components/schemas/AppAccessStrategy',
                    ],
                    'sharable' => [
                        'type' => 'boolean',
                    ],
                    'data_hash_name' => [
                        'type' => 'string',
                    ],
                    'store_redundancy_type' => [
                        'type' => 'string',
                    ],
                    'system_drive_config' => [
                        '$ref' => '#/components/schemas/SystemDriveConfig',
                    ],
                ],
            ],
            'DomainAppConfig' => [
                'type' => 'object',
                'properties' => [
                    'same_name_file_upload_mode' => [
                        'type' => 'string',
                    ],
                    'web_client_download_mode' => [
                        'type' => 'string',
                    ],
                    'single_file_upload_size_limit' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'allow_upload_file_category_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'allow_upload_custom_file_ext_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'DomainBuildClientConfig' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'copyright' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DomainEndpoints' => [
                'type' => 'object',
                'properties' => [],
            ],
            'DomainSeniorConfig' => [
                'type' => 'object',
                'properties' => [
                    'home_page_bg_image_url' => [
                        'type' => 'string',
                    ],
                    'home_page_slogan' => [
                        'type' => 'string',
                    ],
                    'home_page_footer' => [
                        'type' => 'string',
                    ],
                    'home_page_footer2' => [
                        'type' => 'string',
                    ],
                    'csp_frame_ancestors' => [
                        'type' => 'string',
                    ],
                    'referer_enable' => [
                        'type' => 'boolean',
                    ],
                    'wx_txt_list' => [
                        '$ref' => '#/components/schemas/WxTrustedDomainConfig',
                    ],
                    'custom_login_appid' => [
                        'type' => 'string',
                    ],
                    'custom_login_url' => [
                        'type' => 'string',
                    ],
                    'custom_logout_url' => [
                        'type' => 'string',
                    ],
                    'custom_side_link_list' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/CustomSideLinkConfig',
                        ],
                    ],
                    'client_download_enable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Drive' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'drive_name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'owner_type' => [
                        'type' => 'string',
                    ],
                    'drive_type' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'used_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'total_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'DriveLogDetail' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'total_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'owner_id' => [
                        'type' => 'string',
                    ],
                    'owner_name' => [
                        'type' => 'string',
                    ],
                    'owner_type' => [
                        'type' => 'string',
                    ],
                    'update_to' => [
                        'type' => 'object',
                        'properties' => [
                            'name' => [
                                'type' => 'string',
                            ],
                            'total_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'owner_id' => [
                                'type' => 'string',
                            ],
                            'owner_name' => [
                                'type' => 'string',
                            ],
                            'owner_type' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'force_delete' => [
                        'type' => 'boolean',
                    ],
                    'handover_owner_name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ExternalMultiFileRevisionConfig' => [
                'type' => 'object',
                'properties' => [
                    'revision_merge_enabled' => [
                        'type' => 'boolean',
                    ],
                    'revision_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'revision_recycle_period' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'FaceGroup' => [
                'type' => 'object',
                'properties' => [
                    'group_id' => [
                        'type' => 'string',
                    ],
                    'group_name' => [
                        'type' => 'string',
                    ],
                    'image_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'group_cover_url' => [
                        'type' => 'string',
                    ],
                    'group_cover_file_id' => [
                        'type' => 'string',
                    ],
                    'group_cover_width' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'group_cover_height' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'group_cover_face_boundary' => [
                        'type' => 'object',
                        'properties' => [
                            'Width' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Height' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Top' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                            'Left' => [
                                'type' => 'integer',
                                'format' => 'int32',
                            ],
                        ],
                    ],
                    'remarks' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FaceThumbnail' => [
                'type' => 'object',
                'properties' => [
                    'face_id' => [
                        'type' => 'string',
                    ],
                    'face_group_id' => [
                        'type' => 'string',
                    ],
                    'face_thumbnail' => [
                        'type' => 'string',
                        'deprecated' => true,
                    ],
                ],
            ],
            'File' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'content_type' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'trashed_at' => [
                        'type' => 'string',
                    ],
                    'file_extension' => [
                        'type' => 'string',
                    ],
                    'hidden' => [
                        'type' => 'boolean',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'starred' => [
                        'type' => 'boolean',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'labels' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'upload_id' => [
                        'type' => 'string',
                    ],
                    'parent_file_id' => [
                        'type' => 'string',
                    ],
                    'crc64_hash' => [
                        'type' => 'string',
                    ],
                    'content_hash' => [
                        'type' => 'string',
                    ],
                    'content_hash_name' => [
                        'type' => 'string',
                    ],
                    'download_url' => [
                        'type' => 'string',
                    ],
                    'thumbnail' => [
                        'type' => 'string',
                    ],
                    'category' => [
                        'type' => 'string',
                    ],
                    'local_created_at' => [
                        'type' => 'string',
                    ],
                    'local_modified_at' => [
                        'type' => 'string',
                    ],
                    'revision_id' => [
                        'type' => 'string',
                    ],
                    'thumbnail_urls' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'image_media_metadata' => [
                        '$ref' => '#/components/schemas/ImageMediaMetadata',
                    ],
                    'user_tags' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'video_media_metadata' => [
                        '$ref' => '#/components/schemas/VideoMediaMetadata',
                    ],
                    'id_path' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'name_path' => [
                        'type' => 'string',
                    ],
                    'dir_size_info' => [
                        'type' => 'object',
                        'properties' => [
                            'dir_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'file_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'action_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'auto_delete_left_sec' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'FileDownloadCallbackInfo' => [
                'type' => 'object',
                'required' => false,
                'properties' => [
                    'bucket' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'object' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'httpHeader.range' => [
                        'type' => 'string',
                    ],
                    'domain_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'user_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'drive_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'file_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'FileIDInfo' => [
                'type' => 'object',
                'properties' => [
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FileLogDetail' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'parent_path' => [
                        'type' => 'string',
                    ],
                    'new_name' => [
                        'type' => 'string',
                    ],
                    'to_parent_path_type' => [
                        'type' => 'string',
                    ],
                    'to_parent_path' => [
                        'type' => 'string',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'decompress_file_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'rev_version' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'revision_id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'FilePermissionMember' => [
                'type' => 'object',
                'properties' => [
                    'identity' => [
                        '$ref' => '#/components/schemas/Identity',
                    ],
                    'role_id' => [
                        'type' => 'string',
                    ],
                    'expire_time' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'disinherit_sub_group' => [
                        'type' => 'boolean',
                    ],
                    'action_list' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'FileStreamInfo' => [
                'type' => 'object',
                'properties' => [
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'content_hash' => [
                        'type' => 'string',
                    ],
                    'content_hash_name' => [
                        'type' => 'string',
                    ],
                    'proof_code' => [
                        'type' => 'string',
                    ],
                    'proof_version' => [
                        'type' => 'string',
                    ],
                    'pre_hash' => [
                        'type' => 'string',
                    ],
                    'content_md5' => [
                        'type' => 'string',
                    ],
                    'part_info_list' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/UploadPartInfo',
                        ],
                    ],
                ],
            ],
            'FileTaskResultResponse' => [
                'type' => 'object',
                'properties' => [
                    'src_file' => [
                        '$ref' => '#/components/schemas/FileIDInfo',
                    ],
                    'rst_file' => [
                        '$ref' => '#/components/schemas/FileIDInfo',
                    ],
                    'err_code' => [
                        'type' => 'string',
                    ],
                    'message' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'GetOfficeEditUrlOption' => [
                'type' => 'object',
                'properties' => [
                    'copy' => [
                        'type' => 'boolean',
                    ],
                    'readonly' => [
                        'type' => 'boolean',
                    ],
                    'print' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'GetOfficeEditUrlWatermark' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'value' => [
                        'type' => 'string',
                    ],
                    'fillstyle' => [
                        'type' => 'string',
                    ],
                    'font' => [
                        'type' => 'string',
                    ],
                    'rotate' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'horizontal' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'vertical' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'GetOfficePreviewUrlOption' => [
                'type' => 'object',
                'properties' => [
                    'copy' => [
                        'type' => 'boolean',
                    ],
                    'print' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Group' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'group_id' => [
                        'type' => 'string',
                    ],
                    'group_name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updated_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'HotDriveFile' => [
                'type' => 'object',
                'properties' => [
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'revision_id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'category' => [
                        'type' => 'string',
                    ],
                    'action_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'count_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'action_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'HotKnowledgeBaseFile' => [
                'type' => 'object',
                'properties' => [
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'revision_id' => [
                        'type' => 'string',
                    ],
                    'knowledge_base_id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'category' => [
                        'type' => 'string',
                    ],
                    'action_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'count_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'action_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'IDPermission' => [
                'type' => 'object',
                'properties' => [
                    'permission' => [
                        '$ref' => '#/components/schemas/Permission',
                    ],
                    'disinherit_sub_group' => [
                        'type' => 'boolean',
                    ],
                    'expire_time' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'roles' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Identity' => [
                'type' => 'object',
                'properties' => [
                    'identity_type' => [
                        'type' => 'string',
                    ],
                    'identity_id' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'IdentityToBenefitPkgMapping' => [
                'type' => 'object',
                'properties' => [
                    'identity_type' => [
                        'type' => 'string',
                    ],
                    'identity_id' => [
                        'type' => 'string',
                    ],
                    'benefit_pkg_owner_id' => [
                        'type' => 'string',
                    ],
                    'benefit_pkg_id' => [
                        'type' => 'string',
                    ],
                    'benefit_pkg_type' => [
                        'type' => 'string',
                    ],
                    'benefit_pkg_name' => [
                        'type' => 'string',
                    ],
                    'benefit_pkg_priority' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'benefit_pkg_computation_rule' => [
                        'type' => 'string',
                    ],
                    'delivery_info_list' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/BenefitPkgDeliveryInfo',
                        ],
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ImageMediaMetadata' => [
                'type' => 'object',
                'properties' => [
                    'time' => [
                        'type' => 'string',
                    ],
                    'width' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'height' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'location' => [
                        'type' => 'string',
                    ],
                    'country' => [
                        'type' => 'string',
                    ],
                    'province' => [
                        'type' => 'string',
                    ],
                    'city' => [
                        'type' => 'string',
                    ],
                    'district' => [
                        'type' => 'string',
                    ],
                    'township' => [
                        'type' => 'string',
                    ],
                    'address_line' => [
                        'type' => 'string',
                    ],
                    'image_tags' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SystemTag',
                        ],
                    ],
                    'faces_thumbnail' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/FaceThumbnail',
                        ],
                    ],
                    'exif' => [
                        'type' => 'string',
                    ],
                    'image_quality' => [
                        '$ref' => '#/components/schemas/ImageQuality',
                    ],
                ],
            ],
            'ImageProcess' => [
                'type' => 'object',
                'properties' => [
                    'image_thumbnail_process' => [
                        'type' => 'string',
                    ],
                    'video_thumbnail_process' => [
                        'type' => 'string',
                    ],
                    'office_thumbnail_process' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'ImageQuality' => [
                'type' => 'object',
                'properties' => [
                    'overall_score' => [
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'ImageTag' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'cover_url' => [
                        'type' => 'string',
                    ],
                    'cover_file_id' => [
                        'type' => 'string',
                    ],
                    'cover_file_category' => [
                        'type' => 'string',
                    ],
                    'cover_tag_confidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'cover_overall_score' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'Int64Range' => [
                'type' => 'object',
                'properties' => [
                    'from' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'to' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'InvestigationInfo' => [
                'type' => 'object',
                'properties' => [
                    'status' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'suggestion' => [
                        'type' => 'string',
                    ],
                    'video_detail' => [
                        'type' => 'object',
                        'properties' => [
                            'block_frames' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'rate' => [
                                            'type' => 'number',
                                            'format' => 'double',
                                        ],
                                        'offset' => [
                                            'type' => 'integer',
                                            'format' => 'int64',
                                        ],
                                        'label' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'JWTPayload' => [
                'type' => 'object',
                'properties' => [
                    'auto_create' => [
                        'type' => 'boolean',
                    ],
                    'sub_type' => [
                        'type' => 'string',
                    ],
                    'iss' => [
                        'type' => 'string',
                    ],
                    'sub' => [
                        'type' => 'string',
                    ],
                    'aud' => [
                        'type' => 'string',
                    ],
                    'jti' => [
                        'type' => 'string',
                    ],
                    'exp' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'iat' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'nbf' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'KnowledgeBase' => [
                'type' => 'object',
                'properties' => [
                    'knowledge_base_id' => [
                        'type' => 'string',
                    ],
                    'owner_type' => [
                        'type' => 'string',
                    ],
                    'owner_id' => [
                        'type' => 'string',
                    ],
                    'owner_name' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'cover_uri' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'created_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'file_filter' => [
                        'type' => 'string',
                    ],
                    'link_rule_list' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/LinkRule',
                        ],
                    ],
                ],
            ],
            'KnowledgeCategory' => [
                'type' => 'object',
                'properties' => [
                    'knowledge_base_id' => [
                        'type' => 'string',
                    ],
                    'knowledge_base_name' => [
                        'type' => 'string',
                    ],
                    'parent_knowledge_category_id' => [
                        'type' => 'string',
                    ],
                    'knowledge_category_id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'keywords' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'owner_type' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updated_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'KnowledgeFile' => [
                'type' => 'object',
                'properties' => [
                    'knowledge_base_id' => [
                        'type' => 'string',
                    ],
                    'knowledge_category_id' => [
                        'type' => 'string',
                    ],
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'revision_id' => [
                        'type' => 'string',
                    ],
                    'joined_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'creator_id' => [
                        'type' => 'string',
                    ],
                    'file_image_time' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'file_created_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'file_updated_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'file_creator_id' => [
                        'type' => 'string',
                    ],
                    'file_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'file_category' => [
                        'type' => 'string',
                    ],
                    'file_name' => [
                        'type' => 'string',
                    ],
                    'file_name_path' => [
                        'type' => 'string',
                    ],
                    'file_last_modifier_id' => [
                        'type' => 'string',
                    ],
                    'file_last_modifier_type' => [
                        'type' => 'string',
                    ],
                    'drive_name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'KnowledgeFileItem' => [
                'type' => 'object',
                'properties' => [
                    'drive_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'file_id' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'LinkInfo' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'type' => 'string',
                    ],
                    'identity' => [
                        'type' => 'string',
                    ],
                    'extra' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'LinkRule' => [
                'type' => 'object',
                'properties' => [
                    'src_file_id' => [
                        'type' => 'string',
                    ],
                    'src_drive_id' => [
                        'type' => 'string',
                    ],
                    'link_type' => [
                        'type' => 'string',
                    ],
                    'src_file_name' => [
                        'type' => 'string',
                    ],
                    'src_drive_name' => [
                        'type' => 'string',
                    ],
                    'src_valid' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'LocationDateCluster' => [
                'type' => 'object',
                'properties' => [
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'cluster_id' => [
                        'type' => 'string',
                    ],
                    'title' => [
                        'type' => 'string',
                    ],
                    'level' => [
                        'type' => 'string',
                        'enum' => [
                            'country',
                            'province',
                            'city',
                            'district',
                            'township',
                        ],
                    ],
                    'address' => [
                        '$ref' => '#/components/schemas/Address',
                    ],
                    'start_time' => [
                        'type' => 'string',
                    ],
                    'end_time' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'custom_labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'MediaPlayInfoTemplate' => [
                'type' => 'object',
                'properties' => [
                    'template_id' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'url' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Membership' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'group_id' => [
                        'type' => 'string',
                    ],
                    'sub_group_id' => [
                        'type' => 'string',
                    ],
                    'user_id' => [
                        'type' => 'string',
                    ],
                    'member_type' => [
                        'type' => 'string',
                    ],
                    'member_role' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updated_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'NameCheckResult' => [
                'type' => 'object',
                'properties' => [
                    'exist_file_id' => [
                        'type' => 'string',
                    ],
                    'exist_file_type' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'OfficeEditConfig' => [
                'type' => 'object',
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'OfficePreviewConfig' => [
                'type' => 'object',
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'Permission' => [
                'type' => 'object',
                'properties' => [
                    'collection' => [
                        'type' => 'string',
                    ],
                    'resource_type' => [
                        'type' => 'string',
                    ],
                    'resource' => [
                        'type' => 'string',
                    ],
                    'identity_type' => [
                        'type' => 'string',
                    ],
                    'identity_id' => [
                        'type' => 'string',
                    ],
                    'action_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'action' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'effect' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updated_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'condition' => [
                        '$ref' => '#/components/schemas/PermissionCondition',
                    ],
                    'user_tags' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'PermissionCondition' => [
                'type' => 'object',
                'properties' => [
                    'ip_equals' => [
                        'type' => 'object',
                        'properties' => [
                            'client_ip' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'ip_not_equals' => [
                        'type' => 'object',
                        'properties' => [
                            'client_ip' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'string_like' => [
                        'type' => 'object',
                        'properties' => [
                            'vpc_id' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'string_not_like' => [
                        'type' => 'object',
                        'properties' => [
                            'vpc_id' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'PersonalRightsInfoResponse' => [
                'type' => 'object',
                'properties' => [
                    'spu_id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'title' => [
                        'type' => 'string',
                    ],
                    'icon' => [
                        'type' => 'string',
                    ],
                    'expires_time' => [
                        'type' => 'string',
                    ],
                    'is_expires' => [
                        'type' => 'boolean',
                    ],
                    'privileges' => [
                        'type' => 'array',
                        'required' => false,
                        'items' => [
                            '$ref' => '#/components/schemas/DataBoxPrivileges',
                        ],
                    ],
                    'history_latest_rights' => [
                        '$ref' => '#/components/schemas/PersonalRightsInfoResponse',
                    ],
                    'other_rights' => [
                        '$ref' => '#/components/schemas/PersonalRightsInfoResponse',
                    ],
                ],
            ],
            'PersonalSpaceInfo' => [
                'type' => 'object',
                'properties' => [
                    'used_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'total_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'ReceivedMsg' => [
                'type' => 'object',
                'properties' => [
                    'msg_id' => [
                        'type' => 'string',
                    ],
                    'msg_category' => [
                        'type' => 'string',
                    ],
                    'msg_sub_category' => [
                        'type' => 'string',
                    ],
                    'msg_content' => [
                        'type' => 'object',
                        'properties' => [
                            'msg_data' => [
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                        ],
                    ],
                    'msg_type' => [
                        'type' => 'string',
                    ],
                    'has_read' => [
                        'type' => 'boolean',
                    ],
                    'read_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'publish_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'RecentActedFile' => [
                'type' => 'object',
                'properties' => [
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'drive_name' => [
                        'type' => 'string',
                    ],
                    'drive_owner_id' => [
                        'type' => 'string',
                    ],
                    'drive_owner_type' => [
                        'type' => 'string',
                    ],
                    'drive_is_handover' => [
                        'type' => 'boolean',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'file_name' => [
                        'type' => 'string',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'category' => [
                        'type' => 'string',
                    ],
                    'thumbnail' => [
                        'type' => 'string',
                    ],
                    'trashed' => [
                        'type' => 'boolean',
                    ],
                    'deleted' => [
                        'type' => 'boolean',
                    ],
                    'action_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'RecycleBinConfig' => [
                'type' => 'object',
                'properties' => [
                    'auto_delete_enabled' => [
                        'type' => 'boolean',
                    ],
                    'auto_delete_keep_second' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'delete_trash_normal_file_disabled' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'RefundNoticeParam' => [
                'type' => 'object',
                'properties' => [
                    'refundType' => [
                        'type' => 'string',
                    ],
                    'orderIds' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'integer',
                            'format' => 'int64',
                        ],
                    ],
                    'instanceId' => [
                        'type' => 'string',
                    ],
                    'commodityCode' => [
                        'type' => 'string',
                    ],
                    'aliyunProduceCode' => [
                        'type' => 'string',
                    ],
                    'aliuid' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'newExpireTime' => [
                        'type' => 'any',
                    ],
                    'refundParamMap' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'Revision' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'revision_id' => [
                        'type' => 'string',
                    ],
                    'revision_name' => [
                        'type' => 'string',
                    ],
                    'revision_version' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'file_extension' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'keep_forever' => [
                        'type' => 'boolean',
                    ],
                    'revision_description' => [
                        'type' => 'string',
                    ],
                    'is_latest_version' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                    'crc64_hash' => [
                        'type' => 'string',
                    ],
                    'content_hash' => [
                        'type' => 'string',
                    ],
                    'content_hash_name' => [
                        'type' => 'string',
                    ],
                    'thumbnail' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                    'url' => [
                        'type' => 'string',
                    ],
                    'download_url' => [
                        'type' => 'string',
                    ],
                    'creator_id' => [
                        'type' => 'string',
                    ],
                    'creator_name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Role' => [
                'type' => 'object',
                'properties' => [
                    'role_id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'manage_resource_type' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updated_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'permissions' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Permission',
                        ],
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'SearchFromThirdPartyItem' => [
                'type' => 'object',
                'properties' => [
                    'authentication_type' => [
                        'type' => 'string',
                    ],
                    'identity' => [
                        'type' => 'string',
                    ],
                    'extra' => [
                        'type' => 'string',
                    ],
                    'others' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                ],
            ],
            'ShareLink' => [
                'type' => 'object',
                'properties' => [
                    'share_id' => [
                        'type' => 'string',
                    ],
                    'share_pwd' => [
                        'type' => 'string',
                    ],
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'expiration' => [
                        'type' => 'string',
                    ],
                    'expired' => [
                        'type' => 'boolean',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'share_name' => [
                        'type' => 'string',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'preview_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'save_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'download_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'report_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'video_preview_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'access_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'disable_preview' => [
                        'type' => 'boolean',
                    ],
                    'disable_save' => [
                        'type' => 'boolean',
                    ],
                    'disable_download' => [
                        'type' => 'boolean',
                    ],
                    'preview_limit' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'save_limit' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'download_limit' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'share_all_files' => [
                        'type' => 'boolean',
                    ],
                    'save_download_limit' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'office_editable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ShareLinkConfig' => [
                'type' => 'object',
                'properties' => [
                    'enable_share_link_office_edit' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'ShareLinkDetail' => [
                'type' => 'object',
                'properties' => [
                    'enable_office_editable' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'SimpleQuery' => [
                'type' => 'object',
                'properties' => [
                    'field' => [
                        'type' => 'string',
                        'format' => 'byte',
                    ],
                    'operation' => [
                        'type' => 'string',
                        'format' => 'byte',
                    ],
                    'sub_queries' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SimpleQuery',
                        ],
                    ],
                    'value' => [
                        'type' => 'string',
                        'format' => 'byte',
                    ],
                ],
            ],
            'SimpleStreamInfo' => [
                'type' => 'object',
                'properties' => [
                    'crc64_hash' => [
                        'type' => 'string',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'content_hash' => [
                        'type' => 'string',
                    ],
                    'content_hash_name' => [
                        'type' => 'string',
                    ],
                    'download_url' => [
                        'type' => 'string',
                    ],
                    'url' => [
                        'type' => 'string',
                    ],
                    'thumbnail' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Story' => [
                'type' => 'object',
                'properties' => [
                    'story_id' => [
                        'type' => 'string',
                    ],
                    'story_type' => [
                        'type' => 'string',
                    ],
                    'story_sub_type' => [
                        'type' => 'string',
                    ],
                    'story_name' => [
                        'type' => 'string',
                    ],
                    'story_start_time' => [
                        'type' => 'string',
                    ],
                    'story_end_time' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'face_group_ids' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'cover_file_id' => [
                        'type' => 'string',
                    ],
                    'cover_file_thumbnail_url' => [
                        'type' => 'string',
                    ],
                    'story_file_list' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/File',
                        ],
                    ],
                    'custom_labels' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                ],
            ],
            'SystemDriveConfig' => [
                'type' => 'object',
                'properties' => [
                    'enable' => [
                        'type' => 'boolean',
                    ],
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'resource_parent_file_id_map' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'SystemTag' => [
                'type' => 'object',
                'properties' => [
                    'confidence' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                    'parent_name' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'tag_level' => [
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'centric_score' => [
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'TimeRange' => [
                'type' => 'object',
                'properties' => [
                    'start' => [
                        'type' => 'string',
                    ],
                    'end' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'Token' => [
                'type' => 'object',
                'properties' => [
                    'access_token' => [
                        'type' => 'string',
                    ],
                    'refresh_token' => [
                        'type' => 'string',
                    ],
                    'expires_in' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'token_type' => [
                        'type' => 'string',
                    ],
                    'user_id' => [
                        'type' => 'string',
                    ],
                    'user_name' => [
                        'type' => 'string',
                    ],
                    'avatar' => [
                        'type' => 'string',
                    ],
                    'nick_name' => [
                        'type' => 'string',
                    ],
                    'default_drive_id' => [
                        'type' => 'string',
                    ],
                    'role' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'expire_time' => [
                        'type' => 'string',
                    ],
                    'is_first_login' => [
                        'type' => 'boolean',
                    ],
                    'device_name' => [
                        'type' => 'string',
                    ],
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'default_sbox_drive_id' => [
                        'type' => 'string',
                    ],
                    'user_data' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'pin_setup' => [
                        'type' => 'boolean',
                    ],
                    'need_rp_verify' => [
                        'type' => 'boolean',
                    ],
                    'state' => [
                        'type' => 'string',
                    ],
                    'exist_link' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LinkInfo',
                        ],
                    ],
                    'need_link' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
            'UncompressConfigResponse' => [
                'type' => 'object',
                'properties' => [
                    'enabled' => [
                        'type' => 'boolean',
                    ],
                    'version' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UncompressedFileInfo' => [
                'type' => 'object',
                'properties' => [
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'is_folder' => [
                        'type' => 'boolean',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updated_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'items' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/UncompressedFileInfo',
                        ],
                    ],
                ],
            ],
            'UploadFormInfo' => [
                'type' => 'object',
                'properties' => [
                    'bucket_name' => [
                        'type' => 'string',
                    ],
                    'oss_end_point' => [
                        'type' => 'string',
                    ],
                    'object_key' => [
                        'type' => 'string',
                    ],
                    'oss_access_key_id' => [
                        'type' => 'string',
                    ],
                    'oss_security_token' => [
                        'type' => 'string',
                    ],
                    'policy' => [
                        'type' => 'string',
                    ],
                    'signature' => [
                        'type' => 'string',
                    ],
                    'endpoint' => [
                        'type' => 'string',
                    ],
                    'form_data' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'UploadPartInfo' => [
                'type' => 'object',
                'properties' => [
                    'part_number' => [
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'part_size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'upload_url' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                    'internal_upload_url' => [
                        'type' => 'string',
                    ],
                    'etag' => [
                        'type' => 'string',
                    ],
                    'parallel_sha1_ctx' => [
                        'type' => 'object',
                        'properties' => [
                            'h' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                            ],
                            'part_offset' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'parallel_sha256_ctx' => [
                        'type' => 'object',
                        'properties' => [
                            'h' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'integer',
                                    'format' => 'int64',
                                ],
                            ],
                            'part_offset' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'User' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'user_id' => [
                        'type' => 'string',
                    ],
                    'avatar' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'updated_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'email' => [
                        'type' => 'string',
                    ],
                    'nick_name' => [
                        'type' => 'string',
                    ],
                    'phone' => [
                        'type' => 'string',
                    ],
                    'role' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'user_name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'default_drive_id' => [
                        'type' => 'string',
                    ],
                    'user_data' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                        ],
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'UserExtraItem' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'user_id' => [
                        'type' => 'string',
                    ],
                    'avatar' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'email' => [
                        'type' => 'string',
                    ],
                    'nick_name' => [
                        'type' => 'string',
                    ],
                    'phone' => [
                        'type' => 'string',
                    ],
                    'phone_region' => [
                        'type' => 'string',
                    ],
                    'role' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'user_name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'default_drive_id' => [
                        'type' => 'string',
                    ],
                    'user_data' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'any',
                        ],
                    ],
                    'deny_change_password_by_self' => [
                        'type' => 'boolean',
                    ],
                    'need_change_password_next_login' => [
                        'type' => 'boolean',
                    ],
                    'creator' => [
                        'type' => 'string',
                    ],
                    'expired_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'permission' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            '$ref' => '#/components/schemas/IDPermission',
                        ],
                    ],
                    'is_sync' => [
                        'type' => 'boolean',
                    ],
                    'default_location' => [
                        'type' => 'string',
                    ],
                    'last_login_time' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'path_status' => [
                        'type' => 'string',
                    ],
                    'default_drive' => [
                        '$ref' => '#/components/schemas/BaseDriveResponse',
                    ],
                    'parent_group' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/BaseDriveResponse',
                        ],
                    ],
                    'account' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/AccountLinkInfo',
                        ],
                    ],
                ],
            ],
            'UserLogDetail' => [
                'type' => 'object',
                'properties' => [
                    'phone' => [
                        'type' => 'string',
                    ],
                    'email' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'role_id' => [
                        'type' => 'string',
                    ],
                    'expired_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'update_to' => [
                        'type' => 'object',
                        'properties' => [
                            'phone' => [
                                'type' => 'string',
                            ],
                            'email' => [
                                'type' => 'string',
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                            'role_id' => [
                                'type' => 'string',
                            ],
                            'expired_at' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                ],
            ],
            'UserTag' => [
                'type' => 'object',
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
            'VideoMediaAudioStream' => [
                'type' => 'object',
                'properties' => [
                    'duration' => [
                        'type' => 'string',
                    ],
                    'bit_rate' => [
                        'type' => 'string',
                    ],
                    'code_name' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'VideoMediaMetadata' => [
                'type' => 'object',
                'properties' => [
                    'width' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'height' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'video_media_video_stream' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/VideoMediaVideoStream',
                        ],
                    ],
                    'video_media_audio_stream' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/VideoMediaAudioStream',
                        ],
                    ],
                ],
            ],
            'VideoMediaVideoStream' => [
                'type' => 'object',
                'properties' => [
                    'duration' => [
                        'type' => 'string',
                    ],
                    'bitrate' => [
                        'type' => 'string',
                    ],
                    'code_name' => [
                        'type' => 'string',
                    ],
                    'frame_count' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'VideoPreviewPlayInfo' => [
                'type' => 'object',
                'properties' => [
                    'category' => [
                        'type' => 'string',
                    ],
                    'meta' => [
                        'type' => 'object',
                        'properties' => [
                            'duration' => [
                                'type' => 'number',
                                'format' => 'double',
                            ],
                            'width' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'height' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'live_transcoding_task_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'template_id' => [
                                    'type' => 'string',
                                ],
                                'status' => [
                                    'type' => 'string',
                                ],
                                'url' => [
                                    'type' => 'string',
                                ],
                                'keep_original_resolution' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                    'quick_video_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'template_id' => [
                                    'type' => 'string',
                                ],
                                'status' => [
                                    'type' => 'string',
                                ],
                                'url' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'offline_video_transcoding_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'template_id' => [
                                    'type' => 'string',
                                ],
                                'status' => [
                                    'type' => 'string',
                                ],
                                'keep_original_resolution' => [
                                    'type' => 'boolean',
                                ],
                                'url' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'live_transcoding_subtitle_task_list' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/VideoPreviewSubtitleInfo',
                        ],
                    ],
                    'quick_video_subtitle_list' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/VideoPreviewSubtitleInfo',
                        ],
                    ],
                    'offline_video_transcoding_subtitle_list' => [
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/VideoPreviewSubtitleInfo',
                        ],
                    ],
                    'master_url' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'VideoPreviewPlayMeta' => [
                'type' => 'object',
                'properties' => [
                    'meta' => [
                        'type' => 'object',
                        'properties' => [
                            'duration' => [
                                'type' => 'number',
                                'format' => 'double',
                            ],
                            'width' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'height' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                        ],
                    ],
                    'live_transcoding_task_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'template_id' => [
                                    'type' => 'string',
                                ],
                                'status' => [
                                    'type' => 'string',
                                ],
                                'keep_original_resolution' => [
                                    'type' => 'boolean',
                                ],
                            ],
                        ],
                    ],
                    'category' => [
                        'type' => 'string',
                    ],
                    'quick_video_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'template_id' => [
                                    'type' => 'string',
                                ],
                                'status' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                    'offline_video_transcoding_list' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'template_id' => [
                                    'type' => 'string',
                                ],
                                'status' => [
                                    'type' => 'string',
                                ],
                                'keep_original_resolution' => [
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'VideoPreviewSubtitleInfo' => [
                'type' => 'object',
                'properties' => [
                    'language' => [
                        'type' => 'string',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'url' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'View' => [
                'type' => 'object',
                'properties' => [
                    'view_id' => [
                        'type' => 'string',
                    ],
                    'category' => [
                        'type' => 'string',
                    ],
                    'owner' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'file_count' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'ex_fields_info' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'ViewFile' => [
                'type' => 'object',
                'properties' => [
                    'domain_id' => [
                        'type' => 'string',
                    ],
                    'drive_id' => [
                        'type' => 'string',
                    ],
                    'file_id' => [
                        'type' => 'string',
                    ],
                    'name' => [
                        'type' => 'string',
                    ],
                    'type' => [
                        'type' => 'string',
                    ],
                    'content_type' => [
                        'type' => 'string',
                    ],
                    'created_at' => [
                        'type' => 'string',
                    ],
                    'updated_at' => [
                        'type' => 'string',
                    ],
                    'description' => [
                        'type' => 'string',
                    ],
                    'trashed_at' => [
                        'type' => 'string',
                    ],
                    'file_extension' => [
                        'type' => 'string',
                    ],
                    'hidden' => [
                        'type' => 'boolean',
                    ],
                    'size' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'starred' => [
                        'type' => 'boolean',
                    ],
                    'status' => [
                        'type' => 'string',
                    ],
                    'labels' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'upload_id' => [
                        'type' => 'string',
                    ],
                    'parent_file_id' => [
                        'type' => 'string',
                    ],
                    'crc64_hash' => [
                        'type' => 'string',
                    ],
                    'content_hash' => [
                        'type' => 'string',
                    ],
                    'content_hash_name' => [
                        'type' => 'string',
                    ],
                    'download_url' => [
                        'type' => 'string',
                    ],
                    'thumbnail' => [
                        'type' => 'string',
                    ],
                    'category' => [
                        'type' => 'string',
                    ],
                    'local_created_at' => [
                        'type' => 'string',
                    ],
                    'local_modified_at' => [
                        'type' => 'string',
                    ],
                    'revision_id' => [
                        'type' => 'string',
                    ],
                    'investigation_info' => [
                        'type' => 'object',
                        'properties' => [
                            'status' => [
                                'type' => 'integer',
                                'format' => 'int64',
                            ],
                            'suggestion' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                    'thumbnail_urls' => [
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                            'required' => false,
                        ],
                    ],
                    'view_id' => [
                        'type' => 'string',
                    ],
                    'joined_at' => [
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'file_revision_id' => [
                        'type' => 'string',
                    ],
                    'fields' => [
                        'type' => 'object',
                    ],
                ],
            ],
            'WatermarkEnableConfig' => [
                'type' => 'object',
                'properties' => [
                    'enable_doc_preview' => [
                        'type' => 'boolean',
                    ],
                    'display_access_user_name' => [
                        'type' => 'boolean',
                    ],
                    'display_shareLink_creator_name' => [
                        'type' => 'boolean',
                    ],
                    'display_custom_text' => [
                        'type' => 'string',
                    ],
                ],
            ],
            'WxTrustedDomainConfig' => [
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'type' => 'string',
                    ],
                    'content' => [
                        'type' => 'string',
                    ],
                    'show' => [
                        'type' => 'boolean',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateDomain' => [
            'path' => '/v2/domain/create',
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
                            'parent_domain_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'domain_name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'init_drive_enable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'init_drive_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'user_count_quota' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'size_quota' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'store_redundancy_type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDomain' => [
            'path' => '/v2/domain/get',
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
                            'domain_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'get_quota_used' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDomain' => [
            'path' => '/v2/domain/update',
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
                            'domain_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'domain_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'init_drive_enable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'init_drive_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'user_count_quota' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'size_quota' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'published_app_access_strategy' => [
                                '$ref' => '#/components/schemas/AppAccessStrategy',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDomains' => [
            'path' => '/v2/domain/list',
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
                            'parent_domain_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'service_code' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchDomains' => [
            'path' => '/v2/domain/search',
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
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'order_by' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDomain' => [
            'path' => '/v2/domain/delete',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'type' => 'object',
                        'required' => false,
                        'properties' => [
                            'domain_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'Authorize' => [
            'path' => '/v2/oauth/authorize',
            'methods' => [
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'domain_id',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'client_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'redirect_uri',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'scope',
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
                [
                    'name' => 'response_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
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
                    'name' => 'login_type',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'hide_consent',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'boolean',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'Token' => [
            'path' => '/v2/oauth/token',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'Anonymous' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'domain_id',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'grant_type',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'code',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'redirect_uri',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'client_id',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'client_secret',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'refresh_token',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'assertion',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetLinkInfoByUserId' => [
            'path' => '/v2/account/get_link_info_by_user_id',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'LinkAccount' => [
            'path' => '/v2/account/link',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'identity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetLinkInfo' => [
            'path' => '/v2/account/get_link_info',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'identity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UnLinkAccount' => [
            'path' => '/v2/account/unlink',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'identity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateGroup' => [
            'path' => '/v2/group/create',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'group_name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'is_root' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'parent_group_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateGroup' => [
            'path' => '/v2/group/update',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'group_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetGroup' => [
            'path' => '/v2/group/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListGroup' => [
            'path' => '/v2/group/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteGroup' => [
            'path' => '/v2/group/delete',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AddGroupMember' => [
            'path' => '/v2/group/add_member',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveGroupMember' => [
            'path' => '/v2/group/remove_member',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListGroupMember' => [
            'path' => '/v2/group/list_member',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateUser' => [
            'path' => '/v2/user/create',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 1024,
                            ],
                            'nick_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'enabled',
                                    'disabled',
                                ],
                            ],
                            'role' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'user',
                                    'admin',
                                    'superadmin',
                                    'subdomain_admin',
                                    'subdomain_super_admin',
                                ],
                            ],
                            'avatar' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'user_data' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'any',
                                ],
                            ],
                            'group_info_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'group_id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'user_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 1024,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ImportUser' => [
            'path' => '/v2/user/import',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'authentication_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'identity' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'authentication_display_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'extra' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'nick_name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'auto_create_drive' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'drive_total_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'parent_group_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateUser' => [
            'path' => '/v2/user/update',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 1024,
                            ],
                            'nick_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'enabled',
                                    'disabled',
                                ],
                            ],
                            'role' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'user',
                                    'admin',
                                    'superadmin',
                                    'subdomain_admin',
                                    'subdomain_super_admin',
                                ],
                            ],
                            'avatar' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 1024,
                            ],
                            'phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'user_data' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'group_info_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'group_id' => [
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
        'GetUser' => [
            'path' => '/v2/user/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListUser' => [
            'path' => '/v2/user/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchUser' => [
            'path' => '/v2/user/search',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'nick_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'nick_name_for_fuzzy' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'user_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 0,
                                'maxLength' => 128,
                            ],
                            'phone' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'email' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'role' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteUser' => [
            'path' => '/v2/user/delete',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateDrive' => [
            'path' => '/v2/drive/create',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_name' => [
                                'type' => 'string',
                                'required' => true,
                                'minLength' => 1,
                                'maxLength' => 1024,
                            ],
                            'owner' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'owner_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'user',
                                    'group',
                                ],
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
                            ],
                            'drive_type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [],
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'enabled',
                                    'disabled',
                                ],
                            ],
                            'total_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'default' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateDrive' => [
            'path' => '/v2/drive/update',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'drive_name' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 128,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'enabled',
                                    'disabled',
                                ],
                            ],
                            'total_size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'owner' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDrive' => [
            'path' => '/v2/drive/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDrive' => [
            'path' => '/v2/drive/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'exclusiveMinimum' => true,
                                'maximum' => '100',
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'owner' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'owner_type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'user',
                                    'group',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDefaultDrive' => [
            'path' => '/v2/drive/get_default_drive',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'user_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListMyDrives' => [
            'path' => '/v2/drive/list_my_drives',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'exclusiveMinimum' => true,
                                'maximum' => '100',
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchDrive' => [
            'path' => '/v2/drive/search',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '0',
                                'exclusiveMinimum' => true,
                                'maximum' => '100',
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'owner' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'owner_type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'user',
                                    'group',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteDrive' => [
            'path' => '/v2/drive/delete',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateFile' => [
            'path' => '/v2/file/create',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                                'minLength' => 1,
                                'maxLength' => 1024,
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'file',
                                    'folder',
                                ],
                            ],
                            'parent_file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                                'pattern' => '^[0-9]*$',
                            ],
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'size' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'content_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'part_info_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'part_number' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'parallel_sha1_ctx' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'h' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                                'part_offset' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                        'content_md5' => [
                                            'type' => 'string',
                                            'deprecated' => false,
                                            'required' => false,
                                        ],
                                    ],
                                ],
                            ],
                            'user_tags' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    '$ref' => '#/components/schemas/UserTag',
                                    'required' => false,
                                ],
                            ],
                            'hidden' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
                            ],
                            'content_hash' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'content_hash_name' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'sha1',
                                ],
                            ],
                            'pre_hash' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'check_name_mode' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'ignore',
                                    'auto_rename',
                                    'refuse',
                                ],
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'local_created_at' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'local_modified_at' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'image_media_metadata' => [
                                '$ref' => '#/components/schemas/ImageMediaMetadata',
                                'required' => false,
                            ],
                            'video_media_metadata' => [
                                '$ref' => '#/components/schemas/VideoMediaMetadata',
                                'required' => false,
                            ],
                            'parallel_upload' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'custom_updated_at' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'custom_created_at' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteFile' => [
            'path' => '/v2/file/delete',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                                'pattern' => '^[0-9]*$',
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateFile' => [
            'path' => '/v2/file/update',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 102,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                                'maxLength' => 1024,
                            ],
                            'labels' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'maxItems' => 100,
                            ],
                            'check_name_mode' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'ignore',
                                    'auto_rename',
                                    'refuse',
                                ],
                            ],
                            'local_modified_at' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'hidden' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'starred' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchFile' => [
            'path' => '/v2/file/search',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'query' => [
                                'type' => 'string',
                                'required' => true,
                                'maxLength' => 4096,
                            ],
                            'order_by' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'name',
                                    'type',
                                    'created_at',
                                    'updated_at',
                                    'size',
                                    'image_time',
                                    'last_access_at',
                                    'custom_type',
                                    'custom_field_1',
                                    'custom_field_2',
                                    'image_overall_score',
                                ],
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '100',
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'return_total_count' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'recursive' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'thumbnail_processes' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    '$ref' => '#/components/schemas/ImageProcess',
                                ],
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListFile' => [
            'path' => '/v2/file/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'parent_file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'uploading',
                                    'available',
                                ],
                            ],
                            'order_by' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'order_direction' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'ASC',
                                    'DESC',
                                ],
                            ],
                            'category' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'image',
                                    'video',
                                    'audio',
                                    'doc',
                                    'app',
                                    'zip',
                                    'others',
                                ],
                            ],
                            'type' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'file',
                                    'folder',
                                ],
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'thumbnail_processes' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    '$ref' => '#/components/schemas/ImageProcess',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetFile' => [
            'path' => '/v2/file/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '10',
                                'maximum' => '14400',
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'thumbnail_processes' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    '$ref' => '#/components/schemas/ImageProcess',
                                ],
                            ],
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DownloadFile' => [
            'path' => '/v2/file/download',
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
                [
                    'BearerToken' => [],
                ],
            ],
            'consumes' => [
                'application/x-www-form-urlencoded',
            ],
            'produces' => [
                'application/octet-stream',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'domain_id',
                    'in' => 'host',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'share_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'drive_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'file_id',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
                [
                    'name' => 'image_thumbnail_process',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'video_thumbnail_process',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'office_thumbnail_process',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
        ],
        'GetUploadUrl' => [
            'path' => '/v2/file/get_upload_url',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'upload_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'part_info_list' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'part_number' => [
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                        ],
                                        'parallel_sha1_ctx' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'h' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                                'part_offset' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'required' => false,
                                                ],
                                            ],
                                        ],
                                        'content_md5' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'content_type' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                        'parallel_sha256_ctx' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'properties' => [
                                                'h' => [
                                                    'type' => 'array',
                                                    'required' => false,
                                                    'items' => [
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'required' => false,
                                                    ],
                                                ],
                                                'part_offset' => [
                                                    'type' => 'integer',
                                                    'format' => 'int64',
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
        ],
        'ListUploadedParts' => [
            'path' => '/v2/file/list_uploaded_parts',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'part_number_marker' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'upload_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CompleteFile' => [
            'path' => '/v2/file/complete',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'upload_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'crc64_hash' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'MoveFile' => [
            'path' => '/v2/file/move',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'to_parent_file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'check_name_mode' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'ignore',
                                    'auto_rename',
                                    'refuse',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CopyFile' => [
            'path' => '/v2/file/copy',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'to_drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'to_parent_file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'auto_rename' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDownloadUrl' => [
            'path' => '/v2/file/get_download_url',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 1024,
                            ],
                            'expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '115200',
                            ],
                            'response_content_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FilePutUserTags' => [
            'path' => '/v2/file/put_usertags',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'user_tags' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'key' => [
                                            'type' => 'string',
                                            'required' => true,
                                            'pattern' => '^[^#]+$',
                                        ],
                                        'value' => [
                                            'type' => 'string',
                                            'required' => false,
                                            'pattern' => '^[^#]+$',
                                        ],
                                    ],
                                ],
                                'minItems' => 1,
                                'maxItems' => 1000,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FileDeleteUserTags' => [
            'path' => '/v2/file/delete_usertags',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'key_list' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'string',
                                    'required' => true,
                                    'pattern' => '^[^#]+$',
                                ],
                                'minItems' => 1,
                                'maxItems' => 1000,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'VideoDRMLicense' => [
            'path' => '/v2/file/video_drm_license',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drmType' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'licenseRequest' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeleteRevision' => [
            'path' => '/v2/file/revision/delete',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'revision_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateRevision' => [
            'path' => '/v2/file/revision/update',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'revision_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'keep_forever' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'revision_description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RestoreRevision' => [
            'path' => '/v2/file/revision/restore',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'revision_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListRevision' => [
            'path' => '/v2/file/revision/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '200',
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetRevision' => [
            'path' => '/v2/file/revision/get',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'revision_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ScanFile' => [
            'path' => '/v2/file/scan',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '1',
                                'maximum' => '100',
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListDelta' => [
            'path' => '/v2/file/list_delta',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sync_root_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'cursor' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'DeltaGetLastCursor' => [
            'path' => '/v2/file/get_last_cursor',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'sync_root_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListReceivedFile' => [
            'path' => '/v2/file/list_received_file',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListMyGroupDrive' => [
            'path' => '/v2/drive/list_my_group_drive',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'drive_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FileRemovePermission' => [
            'path' => '/v2/file/remove_permission',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_list' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => true,
                                    'properties' => [
                                        'identity' => [
                                            '$ref' => '#/components/schemas/Identity',
                                            'required' => true,
                                        ],
                                        'role_id' => [
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
        'FileAddPermission' => [
            'path' => '/v2/file/add_permission',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'member_list' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    '$ref' => '#/components/schemas/FilePermissionMember',
                                    'required' => false,
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'FileListPermission' => [
            'path' => '/v2/file/list_permission',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAssignment' => [
            'path' => '/v2/role/list_assignment',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'manage_resource_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'manage_resource_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AssignRole' => [
            'path' => '/v2/role/assign',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'identity' => [
                                '$ref' => '#/components/schemas/Identity',
                                'required' => true,
                            ],
                            'role_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'manage_resource_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'manage_resource_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CancelAssignRole' => [
            'path' => '/v2/role/cancel_assign',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'identity' => [
                                '$ref' => '#/components/schemas/Identity',
                                'required' => true,
                            ],
                            'role_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'manage_resource_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'manage_resource_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateShareLink' => [
            'path' => '/v2/share_link/create',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'share_all_files' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'file_id_list' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'user_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'share_pwd' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'expiration' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'share_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'disable_preview' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'disable_save' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'disable_download' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'preview_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'save_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'download_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'require_login' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'office_editable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'creatable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'creatable_file_id_list' => [
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
        'UpdateShareLink' => [
            'path' => '/v2/share_link/update',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'share_pwd' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'expiration' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'description' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'share_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'status' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'preview_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'save_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'download_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'report_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'video_preview_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'disable_preview' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'disable_save' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'disable_download' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'preview_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'save_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'download_limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'office_editable' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchShareLink' => [
            'path' => '/v2/share_link/search',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'return_total_count' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'order_by' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'order_direction' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'creators' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'query' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CancelShareLink' => [
            'path' => '/v2/share_link/cancel',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListShareLink' => [
            'path' => '/v2/share_link/list',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'creator' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'order_by' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'order_direction' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'include_cancelled' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetShareLink' => [
            'path' => '/v2/share_link/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetShareLinkByAnonymous' => [
            'path' => '/v2/share_link/get_by_anonymous',
            'methods' => [
                'post',
            ],
            'schemes' => [
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'domain_id',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetShareLinkToken' => [
            'path' => '/v2/share_link/get_share_token',
            'methods' => [
                'post',
            ],
            'schemes' => [
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
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'domain_id',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'share_pwd' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'TrashFile' => [
            'path' => '/v2/recyclebin/trash',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ClearRecyclebin' => [
            'path' => '/v2/recyclebin/clear',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListRecyclebin' => [
            'path' => '/v2/recyclebin/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'fields' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'thumbnail_processes' => [
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    '$ref' => '#/components/schemas/ImageProcess',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RestoreFile' => [
            'path' => '/v2/recyclebin/restore',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateFacegroup' => [
            'path' => '/v2/image/update_facegroup_info',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'group_name' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                            'group_cover_face_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'remarks' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListTags' => [
            'path' => '/v2/image/list_tags',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'image_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'video_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListAddressGroups' => [
            'path' => '/v2/image/list_address_groups',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'image_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'video_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListFacegroups' => [
            'path' => '/v2/image/list_facegroups',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'remarks' => [
                                'type' => 'string',
                                'required' => false,
                                'minLength' => 1,
                                'maxLength' => 128,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'return_total_count' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchAddressGroups' => [
            'path' => '/v2/image/search_address_groups',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'tl_geo_point' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'br_geo_point' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'address_level' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'address_names' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'minItems' => 1,
                                'maxItems' => 10,
                            ],
                            'image_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'video_thumbnail_process' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveFaceGroupFile' => [
            'path' => '/v2/albums/unassign_facegroup_item',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'face_group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateStory' => [
            'path' => '/v2/image/create_story',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'TimeMemory',
                                    'PeopleMemory',
                                    'TagMemory',
                                    'TravelMemory',
                                ],
                            ],
                            'story_sub_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_start_time' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_end_time' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'min_image_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '1',
                            ],
                            'max_image_count' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'maximum' => '100',
                            ],
                            'custom_labels' => [
                                'type' => 'object',
                                'deprecated' => true,
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'address' => [
                                '$ref' => '#/components/schemas/Address',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateCustomizedStory' => [
            'path' => '/v2/image/create_customized_story',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_sub_type' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_name' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_cover' => [
                                'type' => 'object',
                                'required' => true,
                                'properties' => [
                                    'file_id' => [
                                        'type' => 'string',
                                        'required' => true,
                                    ],
                                    'revision_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'story_files' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'file_id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'revision_id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'minItems' => 1,
                            ],
                            'custom_labels' => [
                                'type' => 'object',
                                'deprecated' => true,
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
        'SearchStories' => [
            'path' => '/v2/image/find_stories',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_type' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'story_start_time_range' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'start' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'end' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'story_end_time_range' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'start' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'end' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'create_time_range' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'start' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'end' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                ],
                            ],
                            'face_group_ids' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'custom_labels' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'with_empty_stories' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'sort' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'CreateTime',
                                    'StoryName',
                                    'StoryStartTime',
                                    'StoryEndTime',
                                ],
                            ],
                            'order' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'asc',
                                    'desc',
                                ],
                            ],
                            'cover_image_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'cover_video_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                                'minimum' => '10',
                                'maximum' => '86400',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetStory' => [
            'path' => '/v2/image/get_story',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'cover_image_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'cover_video_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'image_url_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'image_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'video_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'deprecated' => true,
                                'required' => false,
                                'minimum' => '10',
                                'maximum' => '86400',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateStory' => [
            'path' => '/v2/image/update_story',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'custom_labels' => [
                                'type' => 'object',
                                'deprecated' => true,
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                ],
                            ],
                            'cover' => [
                                'type' => 'object',
                                'required' => false,
                                'properties' => [
                                    'file_id' => [
                                        'type' => 'string',
                                        'required' => false,
                                    ],
                                    'revision_id' => [
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
        'DeleteStory' => [
            'path' => '/v2/image/delete_story',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'AddStoryFiles' => [
            'path' => '/v2/image/add_story_files',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'files' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'file_id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'revision_id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'maxItems' => 100,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'RemoveStoryFiles' => [
            'path' => '/v2/image/remove_story_files',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'story_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'files' => [
                                'type' => 'array',
                                'required' => false,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'file_id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'revision_id' => [
                                            'type' => 'string',
                                            'required' => false,
                                        ],
                                    ],
                                ],
                                'maxItems' => 100,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateSimilarImageClusterTask' => [
            'path' => '/v2/image/create_similar_image_cluster_task',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetTaskStatus' => [
            'path' => '/v2/image/get_task_status',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'task_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'SearchSimilarImageClusters' => [
            'path' => '/v2/image/query_similar_image_clusters',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'marker' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'limit' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '0',
                                'maximum' => '100',
                            ],
                            'order' => [
                                'type' => 'string',
                                'required' => false,
                                'enum' => [
                                    'desc',
                                    'asc',
                                ],
                            ],
                            'image_thumbnail_process' => [
                                'type' => 'string',
                                'deprecated' => true,
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetAsyncTask' => [
            'path' => '/v2/async_task/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'async_task_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetVideoPreviewPlayMeta' => [
            'path' => '/v2/file/get_video_preview_play_meta',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetVideoPreviewPlayInfo' => [
            'path' => '/v2/file/get_video_preview_play_info',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'share_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'drive_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'category' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'template_id' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'get_without_url' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            're_transcode' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                            'get_master_url' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'CreateIdentityToBenefitPkgMapping' => [
            'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/create',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'identity_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'user',
                                ],
                            ],
                            'identity_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'benefit_pkg_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'amount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'expire_time' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'UpdateIdentityToBenefitPkgMapping' => [
            'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/update',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'identity_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'user',
                                ],
                            ],
                            'identity_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'benefit_pkg_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'amount' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                            'expire_time' => [
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetIdentityToBenefitPkgMapping' => [
            'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/get',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'identity_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'user',
                                ],
                            ],
                            'identity_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'benefit_pkg_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'ListIdentityToBenefitPkgMapping' => [
            'path' => '/v2/benefit/identity_to_benefit_pkg_mapping/list',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'identity_type' => [
                                'type' => 'string',
                                'required' => true,
                                'enum' => [
                                    'user',
                                ],
                            ],
                            'identity_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'include_expired' => [
                                'type' => 'boolean',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'InvestigateFile' => [
            'path' => '/v2/csi/investigate_file',
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
                    'name' => 'domain_id',
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
                            'drive_file_ids' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'drive_id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'file_id' => [
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
        'CsiGetFileInfo' => [
            'path' => '/v2/csi/get_file_info',
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
                    'name' => 'domain_id',
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
                            'drive_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'file_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'url_expire_sec' => [
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'minimum' => '10',
                                'maximum' => '14400',
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'Batch' => [
            'path' => '/v2/batch',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                            'resource' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'requests' => [
                                'type' => 'array',
                                'required' => true,
                                'items' => [
                                    'type' => 'object',
                                    'required' => false,
                                    'properties' => [
                                        'id' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'method' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'url' => [
                                            'type' => 'string',
                                            'required' => true,
                                        ],
                                        'body' => [
                                            'type' => 'object',
                                            'required' => false,
                                            'additionalProperties' => [
                                                'type' => 'any',
                                            ],
                                        ],
                                        'headers' => [
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
        'AuditLogExport' => [
            'path' => '/v2/audit_log/export',
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
                [
                    'BearerToken' => [],
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
                    'name' => 'domain_id',
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
                            'query' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'order_by' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'file_name' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                            'language' => [
                                'type' => 'string',
                                'required' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
        'GetDomainQuota' => [
            'path' => '/v2/domain/get_quota',
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
            'parameters' => [],
        ],
        'GroupUpdateName' => [
            'path' => '/v2/group/update_name',
            'methods' => [
                'post',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'BearerToken' => [],
                ],
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
                    'name' => 'domain_id',
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
                        'properties' => [
                            'group_id' => [
                                'type' => 'string',
                                'required' => true,
                            ],
                            'name' => [
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cn-shenzhen.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cn-beijing.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'cn-zhangjiakou.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cn-hangzhou.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cn-shanghai.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ap-southeast-1.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'cn-guangzhou',
            'endpoint' => 'cn-guangzhou.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'cn-hongkong.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'us-west-1.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'eu-central-1.admin.aliyunpds.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'ap-southeast-5.admin.aliyunpds.com',
        ],
    ],
];