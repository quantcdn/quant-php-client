# # ChatWithAIAgentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | The user&#39;s message to the agent |
**session_id** | **string** | Optional session ID to continue a conversation | [optional]
**user_id** | **string** | Optional user identifier for session isolation | [optional]
**stream** | **bool** | Whether to stream the response (SSE) | [optional] [default to false]
**async** | **bool** | Enable async/durable execution mode. When true, returns 202 with pollUrl. Use for long-running agent tasks. | [optional] [default to false]
**system** | **string** | Optional additional system prompt (appended to agent&#39;s configured prompt) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
