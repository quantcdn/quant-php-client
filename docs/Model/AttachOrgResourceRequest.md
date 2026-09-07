# # AttachOrgResourceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application** | **string** |  |
**environment** | **string** |  |
**env_var_prefix** | **string** | Namespaces every injected variable, so MEDIA yields MEDIA_S3_BUCKET | [optional]
**access_level** | **string** | Cache only. scoped injects an RBAC user limited to this environment&#39;s CACHE_PREFIX (plain and {hash-tag} forms) with FLUSHALL and FLUSHDB denied. admin injects the cache-wide credential for integrations that require FLUSHDB, such as Laravel Cache::flush() or the WordPress object cache without selective flush; it can read, write and flush every attached environment&#39;s keys. | [optional] [default to 'scoped']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
