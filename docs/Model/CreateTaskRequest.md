# # CreateTaskRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Task title |
**description** | **string** | Detailed task description | [optional]
**task_list_id** | **string** | Task list ID for grouping related tasks (implicit - lists are created automatically) | [optional]
**status** | **string** | Initial task status | [optional] [default to 'pending']
**assigned_agent_id** | **string** | Pre-assign task to specific agent | [optional]
**created_by_agent_id** | **string** | Agent ID that created this task | [optional]
**depends_on** | **string[]** | Task IDs that must complete before this task can start | [optional]
**metadata** | **object** | Flexible JSON metadata for task-specific data | [optional]
**max_retries** | **int** | Maximum retry attempts on failure | [optional] [default to 3]
**blocked_reason** | **string** | Reason task is blocked (when status is blocked) | [optional]
**blocked_by_task_ids** | **string[]** | Task IDs that are blocking this task | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
