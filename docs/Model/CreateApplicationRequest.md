# # CreateApplicationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_name** | **string** | Application name |
**compose_definition** | [**\QuantClient\Model\Compose**](Compose.md) |  |
**min_capacity** | **int** | Minimum task count for auto-scaling | [optional] [default to 1]
**max_capacity** | **int** | Maximum task count for auto-scaling | [optional] [default to 1]
**database** | [**\QuantClient\Model\CreateApplicationRequestDatabase**](CreateApplicationRequestDatabase.md) |  | [optional]
**filesystem** | [**\QuantClient\Model\CreateApplicationRequestFilesystem**](CreateApplicationRequestFilesystem.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
