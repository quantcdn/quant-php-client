# # PurgeCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cache_keys** | **string[]** | Cache keys to purge. Optional when urls is set. | [optional]
**urls** | **string[]** | URL paths to purge, each starting with a slash (for example /contact). Use /_* to purge the whole project. At most 100 per request; a single string is also accepted. The whole list is validated before any purge is sent. Optional when cache_keys is set. | [optional]
**scope** | **string** | Purge scope for cache_keys (project or org). Not used for urls. | [optional] [default to 'project']
**soft** | **bool** | Soft purge: mark cached content stale instead of removing it. When omitted, the purge is soft (true). Send false for a hard purge. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
