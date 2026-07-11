# # Compose

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**containers** | [**\QuantClient\Model\Container[]**](Container.md) |  | [optional]
**architecture** | **string** | CPU architecture (X86_64 or ARM64) | [optional]
**task_cpu** | **int** | Task-level CPU units (e.g., 256, 512, 1024) | [optional]
**task_memory** | **int** | Task-level memory in MB | [optional]
**min_capacity** | **int** | Minimum number of instances | [optional]
**max_capacity** | **int** | Maximum number of instances | [optional]
**single_task_only** | **bool** | Optional. Forces single-task mode for data-safe applications (max one running task). When true: capacity is locked to 1. When false: explicitly allows scaling. When omitted: the platform auto-detects stateful containers and enables single-task mode if found. | [optional]
**startup_grace_period_seconds** | **int** | Optional. Seconds the load balancer waits after a task starts before an unhealthy health check can replace it (applied as the ECS service&#39;s healthCheckGracePeriodSeconds when a load balancer is attached). Raise for apps that are slow to boot, e.g. run migrations on startup. Tasks that become healthy sooner still enter service immediately. Defaults to 120 when omitted. | [optional] [default to 120]
**spot_configuration** | [**\QuantClient\Model\SpotConfiguration**](SpotConfiguration.md) |  | [optional]
**enable_cross_env_networking** | **bool** | Optional. Enable cross-environment networking within the same application. When false (default): Uses shared security group for complete isolation (most secure). When true: Uses app-specific security group to enable communication between environments of the same application (e.g., staging can connect to production database). Note: If enableCrossAppNetworking is true, this setting is overridden. | [optional] [default to false]
**enable_cross_app_networking** | **bool** | Optional. Enable cross-application networking within the same organization. When false (default): Uses shared/app-specific security group based on enableCrossEnvNetworking. When true: Uses org-specific security group to enable container-to-container communication with ALL applications in the same organization via service discovery (microservices architecture). This setting takes priority over enableCrossEnvNetworking. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
