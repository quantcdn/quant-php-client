# # CreateEnvironmentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**env_name** | **string** | Environment name (e.g., &#39;staging&#39;, &#39;development&#39;) |
**min_capacity** | **int** | Minimum number of instances | [optional]
**max_capacity** | **int** | Maximum number of instances | [optional]
**clone_configuration_from** | **string** | Clone configuration from an existing environment | [optional]
**compose_definition** | [**\QuantClient\Model\Compose**](Compose.md) |  | [optional]
**image_suffix** | **string** | Optional image tag suffix for cloning | [optional]
**spot_configuration** | [**\QuantClient\Model\SpotConfiguration**](SpotConfiguration.md) |  | [optional]
**environment** | [**\QuantClient\Model\CreateEnvironmentRequestEnvironmentInner[]**](CreateEnvironmentRequestEnvironmentInner.md) | Environment variables to inject | [optional]
**merge_environment** | **bool** | Whether to merge environment variables with cloned ones (true) or replace them (false). Default: false | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
