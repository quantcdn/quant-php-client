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
**guardrail_preset** | **string** | Guardrail preset | [optional]
**version** | **int** | Current version for optimistic concurrency | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
