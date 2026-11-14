# # ListAIAgents200ResponseAgentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**group** | **string** |  | [optional]
**model_id** | **string** |  | [optional]
**temperature** | **float** |  | [optional]
**max_tokens** | **int** |  | [optional]
**allowed_tools** | **string[]** |  | [optional]
**assigned_skills** | **string[]** |  | [optional]
**long_context** | **bool** |  | [optional]
**reasoning_effort** | **string** | Reasoning effort (Anthropic effort). Must be one of the levels the model lists in capabilities.effortLevels. Unset uses the caller or model default. | [optional]
**guardrail_preset** | **string** |  | [optional]
**filter_policies** | **string[]** | Filter policy IDs applied to this agent&#39;s requests (organisation agents) | [optional]
**mcp_servers** | [**\QuantClient\Model\ListAIAgents200ResponseAgentsInnerMcpServersInner[]**](ListAIAgents200ResponseAgentsInnerMcpServersInner.md) | Attached MCP servers. A platform agent shows its organisation overlay&#39;s attachments. | [optional]
**is_global** | **bool** |  | [optional]
**has_overlay** | **bool** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
