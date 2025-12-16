# # GetAIToolExecutionStatus200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**execution_id** | **string** |  |
**tool_name** | **string** |  |
**status** | **string** | Execution status: pending, running, complete, or failed |
**result** | [**\QuantClient\Model\GetAIToolExecutionStatus200ResponseResult**](GetAIToolExecutionStatus200ResponseResult.md) |  | [optional]
**error** | **string** | Error message (only present when status&#x3D;&#39;failed&#39;) | [optional]
**created_at** | **int** | Unix timestamp when execution was created |
**started_at** | **int** | Unix timestamp when execution started (if status &gt;&#x3D; &#39;running&#39;) | [optional]
**completed_at** | **int** | Unix timestamp when execution completed (if status in [&#39;complete&#39;, &#39;failed&#39;]) | [optional]
**duration** | **float** | Execution duration in seconds (if completed) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
