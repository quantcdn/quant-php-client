# # OaiChatCompletionsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model** | **string** | A model id from GET /oai/v1/models |
**messages** | [**\QuantClient\Model\OaiChatCompletionsRequestMessagesInner[]**](OaiChatCompletionsRequestMessagesInner.md) |  |
**stream** | **bool** | Stream the response as SSE chat.completion.chunk events | [optional] [default to false]
**max_tokens** | **int** |  | [optional]
**temperature** | **float** |  | [optional]
**top_p** | **float** |  | [optional]
**tools** | **object[]** | OpenAI function tool definitions | [optional]
**tool_choice** | **mixed** | auto | none | required | {type:function, function:{name}} | [optional]
**stream_options** | **object** | {include_usage: true} to emit a final usage chunk when streaming | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
