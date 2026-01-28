# # GetTask200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**task_id** | **string** |  | [optional]
**org_id** | **string** |  | [optional]
**task_list_id** | **string** |  | [optional]
**title** | **string** |  | [optional]
**description** | **string** |  | [optional]
**status** | **string** |  | [optional]
**assigned_agent_id** | **string** |  | [optional]
**created_by_agent_id** | **string** |  | [optional]
**depends_on** | **string[]** |  | [optional]
**metadata** | **object** |  | [optional]
**progress** | **float** |  | [optional]
**progress_message** | **string** |  | [optional]
**result** | **object** | Task result data when completed | [optional]
**error** | **string** | Error message if status is failed | [optional]
**retry_count** | **int** |  | [optional]
**max_retries** | **int** |  | [optional]
**created_at** | **int** | Unix timestamp in milliseconds | [optional]
**updated_at** | **int** | Unix timestamp in milliseconds | [optional]
**started_at** | **int** | When status changed to in_progress | [optional]
**completed_at** | **int** | When task completed/failed/cancelled | [optional]
**expires_at** | **int** | TTL timestamp for completed tasks | [optional]
**blocked_reason** | **string** | Reason task is blocked | [optional]
**blocked_by_task_ids** | **string[]** | Task IDs that are blocking this task | [optional]
**blocked_at** | **int** | When status changed to blocked | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
