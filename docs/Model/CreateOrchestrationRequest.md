# # CreateOrchestrationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Orchestration name |
**description** | **string** | Optional description | [optional]
**agent_id** | **string** | Agent to process items | [optional]
**tool_id** | **string** | Tool to execute for items | [optional]
**workflow_id** | **string** | Workflow to run for items | [optional]
**input_source** | [**\QuantClient\Model\CreateOrchestrationRequestInputSource**](CreateOrchestrationRequestInputSource.md) |  |
**batch_size** | **int** | Items per batch | [optional] [default to 10]
**concurrency** | **int** | Concurrent items within a batch | [optional] [default to 1]
**stop_condition** | [**\QuantClient\Model\CreateOrchestrationRequestStopCondition**](CreateOrchestrationRequestStopCondition.md) |  | [optional]
**assigned_skills** | **string[]** | Skill IDs to assign | [optional]
**auto_start** | **bool** | Whether to start immediately | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
