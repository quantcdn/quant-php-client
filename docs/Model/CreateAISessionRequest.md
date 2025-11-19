# # CreateAISessionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | User identifier for this session |
**session_group** | **string** | Optional user-defined grouping identifier (e.g., app name, environment, tenant). Use any format that makes sense for your application. | [optional]
**metadata** | **array<string,mixed>** | Optional custom metadata for additional context | [optional]
**expiration_minutes** | **int** | Session expiration in minutes | [optional] [default to 60]
**initial_messages** | [**\QuantClient\Model\CreateAISessionRequestInitialMessagesInner[]**](CreateAISessionRequestInitialMessagesInner.md) | Initial conversation messages (e.g., system prompt) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
