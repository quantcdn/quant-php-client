# # ChatWithAIAgentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | The user&#39;s message to the agent |
**session_id** | **string** | Optional session ID to continue a conversation | [optional]
**user_id** | **string** | Ignored by the API since 4.28.0; the portal sets the requester. | [optional]
**allowed_collections** | **string[]** | Ignored by the API since 4.28.0; the portal sets the requester. | [optional]
**stream** | **bool** | Whether to stream the response (SSE) | [optional] [default to false]
**async** | **bool** | Enable async/durable execution mode. When true, returns 202 with pollUrl. Use for long-running agent tasks. | [optional] [default to false]
**system** | **string** | Optional additional system prompt (appended to agent&#39;s configured prompt) | [optional]
**long_context** | **bool** | Per-request override to force 1M context window routing | [optional] [default to false]
**proposal_ids** | **string[]** | Tool approval proposal ids this turn relates to. Forwarded unchanged. | [optional]
**client_session_id** | **string** | Client session id used to scope tool approval grants. Forwarded unchanged. | [optional]
**max_tool_iterations** | **int** | Maximum tool auto-execution iterations for this request | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
