# # OrgResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_name** | **string** |  | [optional]
**resource_id** | **string** |  | [optional]
**type** | **string** |  | [optional]
**name** | **string** |  | [optional]
**status** | **string** | creating and updating apply to a CI runner pool | [optional]
**scope** | **string** | org for resources managed by these endpoints. app rows are compatibility records for an application-managed cache and cannot be mutated here. | [optional]
**config** | **object** | Type-specific settings: dataStorageMaxGb for a cache, and a CiRunnerPoolConfig for a CI runner pool. | [optional]
**physical** | **object** | Provisioned detail: bucket and region for object storage, cache identifier and endpoint for a cache. Not returned for a CI runner pool. | [optional]
**effective_cache_residency** | **string** | CI runner pool only (absent on other types): the cache residency the pool runs with. It is config.cacheResidency when set; otherwise allow-github for a pool that accepts public repositories, and au-only for every other pool. | [optional] [readonly]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
