# # CronRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**run_id** | **string** |  | [optional]
**run_type** | **string** |  | [optional]
**command** | **string** |  | [optional]
**status** | **string** | FAILED_TO_START: the task could not be launched, so the command never ran (for example, the job targets a container that no longer exists). | [optional]
**error_message** | **string** | Why the run failed, in plain text. Set when the status is FAILED_TO_START. | [optional]
**start_time** | **\DateTime** |  | [optional]
**end_time** | **\DateTime** |  | [optional]
**exit_code** | **int** |  | [optional]
**output** | **string[]** |  | [optional]
**schedule_name** | **string** |  | [optional]
**target_container_name** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
