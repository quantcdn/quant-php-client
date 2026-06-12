# # SetScalingPolicyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metric** | **string** | Metric to track for scaling. |
**target_value** | **float** | Target value. Percentage for CPU/Memory; req/sec per task for RPS. |
**scale_in_cooldown_seconds** | **int** | Cooldown (seconds) before another scale-in can start. | [optional] [default to 300]
**scale_out_cooldown_seconds** | **int** | Cooldown (seconds) before another scale-out can start. | [optional] [default to 60]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
