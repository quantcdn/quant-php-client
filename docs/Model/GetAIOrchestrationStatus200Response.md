# # GetAIOrchestrationStatus200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orchestration_id** | **string** | Unique orchestration identifier |
**status** | **string** | Current orchestration status |
**tool_count** | **int** | Total number of async tools in this orchestration |
**completed_tools** | **int** | Number of tools that have completed | [optional]
**result** | **string** | AI-synthesized response combining all tool results (only present when status&#x3D;complete) | [optional]
**tools** | [**\QuantClient\Model\GetAIOrchestrationStatus200ResponseToolsInner[]**](GetAIOrchestrationStatus200ResponseToolsInner.md) | Status of individual tool executions | [optional]
**error** | **string** | Error message (only present when status&#x3D;failed) | [optional]
**created_at** | **\DateTime** | When orchestration was created |
**completed_at** | **\DateTime** | When orchestration completed (if status in complete or failed) | [optional]
**duration** | **int** | Seconds from creation to completion (present only once completed) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
