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
**environment** | [**\QuantClient\Model\CreateApplicationRequestEnvironmentInner[]**](CreateApplicationRequestEnvironmentInner.md) | Optional. Initial environment variables for the production environment. | [optional]
**metadata** | **array<string,string>** | Free-form key/value metadata. Maximum 50 pairs. Keys are 1-128 characters, values 0-256 characters. Letters, digits, space and + - &#x3D; . _ : / @ only. Keys starting with &#39;quant:&#39; are reserved. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
