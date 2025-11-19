# # WafConfigThresholdsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Threshold type | [optional]
**rps** | **int** | Requests per second limit (for ip/header) | [optional]
**hits** | **int** | Hit count limit (for waf_hit_by_ip) | [optional]
**minutes** | **int** | Time window in minutes (for waf_hit_by_ip) | [optional]
**cooldown** | **int** | Cooldown period in seconds | [optional]
**mode** | **string** | Threshold enforcement mode | [optional] [default to 'disabled']
**value** | **string** | Header name (for header type) | [optional]
**notify_slack** | **string** | Slack webhook for this threshold | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
