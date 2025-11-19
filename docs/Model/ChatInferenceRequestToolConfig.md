# # ChatInferenceRequestToolConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tools** | [**\QuantClient\Model\ChatInferenceRequestToolConfigToolsInner[]**](ChatInferenceRequestToolConfigToolsInner.md) |  | [optional]
**auto_execute** | **bool** | When true, backend automatically executes tools and feeds results back to AI. For async tools (e.g., image generation), returns executionId for polling. Security: Use allowedTools to whitelist which tools can auto-execute. | [optional] [default to false]
**allowed_tools** | **string[]** | Whitelist of tool names that can be auto-executed. Required when autoExecute is true for security. Example: [&#39;get_weather&#39;, &#39;generate_image&#39;] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
