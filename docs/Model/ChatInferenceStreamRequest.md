# # ChatInferenceStreamRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**messages** | [**\QuantClient\Model\ChatInferenceStreamRequestMessagesInner[]**](ChatInferenceStreamRequestMessagesInner.md) | Array of chat messages. Content can be a simple string or an array of content blocks for multimodal input. |
**model_id** | **string** | Model ID. Use Nova models for multimodal support. |
**temperature** | **float** |  | [optional] [default to 0.7]
**max_tokens** | **int** | Max tokens. Claude 4.5 supports up to 64k. | [optional] [default to 4096]
**top_p** | **float** |  | [optional]
**system_prompt** | **string** | Optional custom system prompt. When tools are enabled, this is prepended with tool usage guidance. | [optional]
**stop_sequences** | **string[]** | Custom stop sequences | [optional]
**response_format** | [**\QuantClient\Model\ChatInferenceRequestResponseFormat**](ChatInferenceRequestResponseFormat.md) |  | [optional]
**tool_config** | [**\QuantClient\Model\ChatInferenceRequestToolConfig**](ChatInferenceRequestToolConfig.md) |  | [optional]
**session_id** | **string** | Optional session ID for conversation continuity. Omit to use stateless mode, include to continue an existing session. | [optional]
**async** | **bool** | Enable async/durable execution mode. When true, returns 202 with pollUrl instead of streaming. Use for long-running inference, client-executed tools, or operations &gt;30 seconds. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
