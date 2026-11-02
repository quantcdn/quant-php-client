# # Cron

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**schedule_expression** | **string** |  | [optional]
**command** | **string[]** |  | [optional]
**target_container_name** | **string** |  | [optional]
**is_enabled** | **bool** |  | [optional]
**last_run** | [**\QuantClient\Model\CronLastRun**](CronLastRun.md) | The newest run of the job. Null when the job has never run. Sent by the cron list. | [optional]
**consecutive_failures** | **int** | Failed runs (FAILED or FAILED_TO_START) from the newest run back to the first run that did not fail, counted over the latest 10 runs. 0 when the newest run did not fail. Sent by the cron list. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
