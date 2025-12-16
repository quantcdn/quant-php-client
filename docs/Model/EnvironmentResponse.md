# # EnvironmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**env_name** | **string** | Environment name |
**status** | **string** | Environment status | [optional]
**running_count** | **int** | Number of running tasks | [optional]
**desired_count** | **int** | Desired number of tasks | [optional]
**min_capacity** | **int** | Minimum capacity for autoscaling | [optional]
**max_capacity** | **int** | Maximum capacity for autoscaling | [optional]
**public_ip_address** | **string** | Public IP address for SSH access | [optional]
**deployment_status** | **string** | Current deployment status. FAILED indicates the most recent deployment did not complete successfully. | [optional]
**deployment_failure_type** | **string** | Type of deployment failure when deploymentStatus is FAILED (e.g., &#39;ECS_DEPLOYMENT_CIRCUIT_BREAKER&#39;, &#39;IMAGE_PULL_ERROR&#39;) | [optional]
**deployment_failure_reason** | **string** | Human-readable explanation of why the deployment failed. Contains details such as wrong image architecture, missing image, or container startup errors. | [optional]
**task_definition** | **object** | ECS task definition details | [optional]
**service** | **object** | ECS service details | [optional]
**load_balancer** | **object** | Load balancer configuration | [optional]
**security_group** | **object** | Security group configuration | [optional]
**subnet** | **object** | Subnet configuration | [optional]
**vpc** | **object** | VPC configuration | [optional]
**containers** | **object[]** | Container configurations | [optional]
**volumes** | [**\QuantClient\Model\Volume[]**](Volume.md) | Persistent storage volumes | [optional]
**cron** | [**\QuantClient\Model\Cron[]**](Cron.md) | Scheduled cron jobs | [optional]
**alb_routing** | **object** | ALB routing configuration | [optional]
**created_at** | **\DateTime** | Creation timestamp | [optional]
**updated_at** | **\DateTime** | Last update timestamp | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
