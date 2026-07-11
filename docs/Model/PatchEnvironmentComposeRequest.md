# # PatchEnvironmentComposeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**architecture** | **string** |  | [optional]
**task_cpu** | **string** |  | [optional]
**task_memory** | **string** |  | [optional]
**min_capacity** | **int** |  | [optional]
**max_capacity** | **int** |  | [optional]
**single_task_only** | **bool** | Forces single-task mode (max one running task). Omitted &#x3D; auto-detect from stateful containers. | [optional]
**startup_grace_period_seconds** | **int** | Seconds the load balancer waits after a task starts before an unhealthy health check can replace it. Default 120. | [optional]
**containers** | **object[]** |  | [optional]
**spot_configuration** | [**\QuantClient\Model\PatchEnvironmentComposeRequestSpotConfiguration**](PatchEnvironmentComposeRequestSpotConfiguration.md) |  | [optional]
**enable_cross_env_networking** | **bool** |  | [optional]
**enable_cross_app_networking** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
