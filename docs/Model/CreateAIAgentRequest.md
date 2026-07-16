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
**guardrail_preset** | **string** | Guardrail preset name | [optional]
**filter_policies** | **string[]** | Filter policy IDs to apply to this agent&#39;s inference requests | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
