# # OrgResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**org_name** | **string** |  | [optional]
**resource_id** | **string** |  | [optional]
**type** | **string** |  | [optional]
**name** | **string** |  | [optional]
**status** | **string** |  | [optional]
**scope** | **string** | org for resources managed by these endpoints. app rows are compatibility records for an application-managed cache and cannot be mutated here. | [optional]
**config** | **object** | Type-specific settings, such as dataStorageMaxGb for a cache | [optional]
**physical** | **object** | Provisioned detail: bucket and region for object storage, cache identifier and endpoint for a cache | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
