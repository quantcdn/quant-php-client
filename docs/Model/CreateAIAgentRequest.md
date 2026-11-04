# # CreateAIAgentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**description** | **string** |  |
**group** | **string** |  | [optional]
**system_prompt** | **string** |  |
**temperature** | **float** |  | [optional]
**model_id** | **string** |  |
**max_tokens** | **int** |  | [optional]
**allowed_tools** | **string[]** |  | [optional]
**allowed_collections** | **string[]** |  | [optional]
**assigned_skills** | **string[]** | Skill IDs to assign to this agent | [optional]
**created_by** | **string** | User identifier who created the agent | [optional]
**long_context** | **bool** | Enable 1M context window support | [optional]
**reasoning_effort** | **string** | Reasoning effort (Anthropic effort). Must be one of the levels the model lists in capabilities.effortLevels. Unset uses the caller or model default. | [optional]
**guardrail_preset** | **string** | Guardrail preset name | [optional]
**mcp_servers** | [**\QuantClient\Model\CreateAIAgentRequestMcpServersInner[]**](CreateAIAgentRequestMcpServersInner.md) | Registered MCP servers to attach. The agent gets the tools of each server in dashboard chat and in QuantCode. On update, an empty array removes every attachment. | [optional]
**filter_policies** | **string[]** | Filter policy IDs to apply to this agent&#39;s inference requests | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
