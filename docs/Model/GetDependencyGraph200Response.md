# # GetDependencyGraph200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**task_list_id** | **string** |  | [optional]
**task_count** | **int** |  | [optional]
**roots** | **string[]** | Task IDs with no dependencies | [optional]
**leaves** | **string[]** | Task IDs with no dependents | [optional]
**graph** | **object** | Adjacency list with task summaries, dependsOn, and dependents arrays | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
