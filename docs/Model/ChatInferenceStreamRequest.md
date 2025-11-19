# # ChatInferenceStreamRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**messages** | [**\QuantClient\Model\ChatInferenceStreamRequestMessagesInner[]**](ChatInferenceStreamRequestMessagesInner.md) | Array of chat messages. Content can be a simple string or an array of content blocks for multimodal input. |
**model_id** | **string** | Model ID. Use Nova models for multimodal support. |
**temperature** | **float** |  | [optional] [default to 0.7]
**max_tokens** | **int** |  | [optional] [default to 1024]
**top_p** | **float** |  | [optional]
**system_prompt** | **string** | Optional custom system prompt. When tools are enabled, this is prepended with tool usage guidance. | [optional]
**stop_sequences** | **string[]** | Custom stop sequences | [optional]
**response_format** | [**\QuantClient\Model\ChatInferenceRequestResponseFormat**](ChatInferenceRequestResponseFormat.md) |  | [optional]
**tool_config** | [**\QuantClient\Model\ChatInferenceRequestToolConfig**](ChatInferenceRequestToolConfig.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
