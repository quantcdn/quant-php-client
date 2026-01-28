# # UpdateTaskRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** |  | [optional]
**description** | **string** |  | [optional]
**task_list_id** | **string** | Move task to different list or remove from list (set null) | [optional]
**status** | **string** | Task status (triggers automatic timestamp updates) | [optional]
**assigned_agent_id** | **string** | Reassign task to different agent | [optional]
**depends_on** | **string[]** | Update task dependencies | [optional]
**metadata** | **object** | Update task metadata (replaces entire metadata object) | [optional]
**progress** | **float** | Progress from 0.0 to 1.0 | [optional]
**progress_message** | **string** | Human-readable progress message | [optional]
**result** | **object** | Task result data (set when completing task) | [optional]
**error** | **string** | Error message (set when task fails) | [optional]
**retry_count** | **int** | Update retry count | [optional]
**max_retries** | **int** | Update maximum retry attempts | [optional]
**blocked_reason** | **string** | Reason task is blocked (set when status is blocked) | [optional]
**blocked_by_task_ids** | **string[]** | Task IDs that are blocking this task | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
