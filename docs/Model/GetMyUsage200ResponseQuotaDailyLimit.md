# # GetMyUsage200ResponseQuotaDailyLimit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limit_cents** | **int** | The configured daily cap in US cents | [optional]
**used_percent** | **float** | Percentage of the cap consumed today (0–100+) | [optional]
**remaining_cents** | **int** | Cents remaining before the cap is hit; can be negative if overspent | [optional]
**resets_at** | **\DateTime** | UTC timestamp when the daily counter resets (always next UTC midnight) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
