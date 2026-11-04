# # UpsertAgentOverlayRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model_id** | **string** | Override the base agent&#39;s model | [optional]
**temperature** | **float** | Override temperature | [optional]
**max_tokens** | **int** | Override max tokens | [optional]
**disabled_skills** | **string[]** | Global skill IDs to exclude | [optional]
**additional_skills** | **string[]** | Org-owned skill IDs to add | [optional]
**additional_tools** | **string[]** | Tool names to add | [optional]
**disabled_tools** | **string[]** | Tool names to remove | [optional]
**system_prompt_append** | **string** | Text appended to base system prompt | [optional]
**allowed_collections** | **string[]** | Vector DB collections | [optional]
**mcp_servers** | [**\QuantClient\Model\CreateAIAgentRequestMcpServersInner[]**](CreateAIAgentRequestMcpServersInner.md) | Registered MCP servers to attach. The agent gets the tools of each server in dashboard chat and in QuantCode. The overlay PUT replaces the whole overlay: omit the field or send an empty array to remove every attachment. | [optional]
**guardrail_preset** | **string** | Guardrail preset | [optional]
**long_context** | **bool** | Force the 1M context window on (true) or off (false) for this organisation. Omit or null to use the platform default. | [optional]
**filter_policies** | **string[]** | Filter policy IDs applied to this agent&#39;s requests for this organisation, with any organisation-wide mandatory policies | [optional]
**reasoning_effort** | **string** | Override the reasoning effort. Must be one of the levels the effective model lists in capabilities.effortLevels. Omit or null to use the global agent value. | [optional]
**version** | **int** | Current version for optimistic concurrency | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
