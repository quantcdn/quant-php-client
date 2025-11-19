# # Application

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_name** | **string** | Application name |
**organisation** | **string** | Organisation machine name |
**database** | [**\QuantClient\Model\ApplicationDatabase**](ApplicationDatabase.md) |  | [optional]
**filesystem** | [**\QuantClient\Model\ApplicationFilesystem**](ApplicationFilesystem.md) |  | [optional]
**compose_definition** | [**\QuantClient\Model\Compose**](Compose.md) |  | [optional]
**status** | **string** | Application status | [optional]
**deployment_information** | [**\QuantClient\Model\ApplicationDeploymentInformationInner[]**](ApplicationDeploymentInformationInner.md) | Deployment history | [optional]
**image_reference** | [**\QuantClient\Model\ApplicationImageReference**](ApplicationImageReference.md) |  | [optional]
**container_names** | **string[]** | List of container names | [optional]
**min_capacity** | **int** | Minimum task count for auto-scaling | [optional]
**max_capacity** | **int** | Maximum task count for auto-scaling | [optional]
**desired_count** | **int** | Desired task count | [optional]
**running_count** | **int** | Currently running task count | [optional]
**environments** | [**\QuantClient\Model\ApplicationEnvironmentsInner[]**](ApplicationEnvironmentsInner.md) | List of environments | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
