# # CiCacheDeleteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**all** | **bool** | true clears the whole cache of the pool. Must be the only field. | [optional]
**repo_id** | **int** | GitHub repository id. A digit string is also accepted. | [optional]
**ref** | **string** | Git ref; starts with refs/, a valid git ref name without %. | [optional]
**version** | **string** |  | [optional]
**key** | **string** | The exact cache key. Deletes only that entry, not keys that start with it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
