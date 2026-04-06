# # V2CrawlerSchedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Schedule ID |
**name** | **string** | Schedule name | [optional]
**crawler_config_id** | **int** | Crawler config ID |
**crawler_uuid** | **string** | Crawler UUID | [optional]
**project_id** | **int** | Project ID |
**crawler_last_run_id** | **int** | Last run ID |
**schedule_cron_string** | **string** | Standard Unix cron expression with 5 space-separated fields: minute, hour, day-of-month, month, day-of-week. Example: 0 2 * * * runs daily at 2 AM. |
**created_at** | **\DateTime** | Creation timestamp | [optional]
**updated_at** | **\DateTime** | Last update timestamp | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
