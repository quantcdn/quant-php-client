# # EnvironmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**env_name** | **string** | Environment name |
**status** | **string** | Environment status | [optional] [readonly]
**running_count** | **int** | Number of running tasks | [optional] [readonly]
**desired_count** | **int** | Desired number of tasks | [optional] [readonly]
**min_capacity** | **int** | Minimum capacity for autoscaling | [optional]
**max_capacity** | **int** | Maximum capacity for autoscaling | [optional]
**public_ip_address** | **string** | Public IP address for SSH access | [optional] [readonly]
**deployment_status** | **string** | Current deployment status | [optional] [readonly]
**deployment_failure_type** | **string** | Type of deployment failure | [optional] [readonly]
**deployment_failure_reason** | **string** | Reason for deployment failure | [optional] [readonly]
**task_definition** | **object** | ECS task definition details | [optional] [readonly]
**service** | **object** | ECS service details | [optional] [readonly]
**load_balancer** | **object** | Load balancer configuration | [optional] [readonly]
**security_group** | **object** | Security group configuration | [optional] [readonly]
**subnet** | **object** | Subnet configuration | [optional] [readonly]
**vpc** | **object** | VPC configuration | [optional] [readonly]
**container_names** | **string[]** | Container name list | [optional] [readonly]
**volumes** | [**\QuantClient\Model\Volume[]**](Volume.md) | Persistent storage volumes | [optional] [readonly]
**cron** | [**\QuantClient\Model\Cron[]**](Cron.md) | Scheduled cron jobs | [optional] [readonly]
**alb_routing** | **object** | ALB routing configuration | [optional] [readonly]
**created_at** | **\DateTime** | Creation timestamp | [optional] [readonly]
**updated_at** | **\DateTime** | Last update timestamp | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
