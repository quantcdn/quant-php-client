# # ResourceAttachment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_name** | **string** |  | [optional]
**env_name** | **string** |  | [optional]
**env_var_prefix** | **string** | Namespaces every injected variable, so MEDIA yields MEDIA_S3_BUCKET | [optional]
**access_key_id** | **string** | Object storage only. The secret half is written to the environment&#39;s secrets and never returned. | [optional]
**cache_user_id** | **string** | Cache only. This environment&#39;s own RBAC user, limited to its CACHE_PREFIX with FLUSHALL and FLUSHDB denied, so it cannot touch another environment&#39;s keys. | [optional]
**access_level** | **string** | Cache only. scoped: the environment holds its own RBAC user. admin: it holds the cache-wide credential and can read, write and flush every attached environment&#39;s keys. Absent on attachments made before access levels existed (treated as scoped). | [optional]
**injected_keys** | **string[]** | The exact variable names this attachment wrote, removed precisely on detach | [optional]
**created_at** | **\DateTime** |  | [optional]
**note** | **string** | When the credentials take effect | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
