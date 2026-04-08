# # UpdateAIAgentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**group** | **string** |  | [optional]
**system_prompt** | **string** |  | [optional]
**temperature** | **float** |  | [optional]
**model_id** | **string** |  | [optional]
**max_tokens** | **int** |  | [optional]
**allowed_tools** | **string[]** |  | [optional]
**allowed_collections** | **string[]** |  | [optional]
**assigned_skills** | **string[]** | Skill IDs to assign to this agent | [optional]
**long_context** | **bool** | Enable 1M context window support | [optional]
**guardrail_preset** | **string** | Guardrail preset name | [optional]
**filter_policies** | **string[]** | Filter policy IDs to apply to this agent&#39;s inference requests | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
