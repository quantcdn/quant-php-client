# # Application

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_name** | **string** | Application name |
**organisation** | **string** | Organisation machine name |
**database** | [**\QuantClient\Model\ApplicationDatabase**](ApplicationDatabase.md) |  | [optional]
**filesystem** | [**\QuantClient\Model\ApplicationFilesystem**](ApplicationFilesystem.md) |  | [optional]
**cache** | [**\QuantClient\Model\ApplicationCache**](ApplicationCache.md) |  | [optional]
**compose_definition** | [**\QuantClient\Model\Compose**](Compose.md) |  | [optional]
**status** | **string** | Application status | [optional] [readonly]
**deployment_information** | [**\QuantClient\Model\ApplicationDeploymentInformationInner[]**](ApplicationDeploymentInformationInner.md) | Deployment history | [optional] [readonly]
**image_reference** | [**\QuantClient\Model\ApplicationImageReference**](ApplicationImageReference.md) |  | [optional]
**container_names** | **string[]** | List of container names | [optional] [readonly]
**min_capacity** | **int** | Minimum task count for auto-scaling | [optional]
**max_capacity** | **int** | Maximum task count for auto-scaling | [optional]
**desired_count** | **int** | Desired task count | [optional]
**running_count** | **int** | Currently running task count | [optional]
**environment_names** | **string[]** | List of environment names (read-only) | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
