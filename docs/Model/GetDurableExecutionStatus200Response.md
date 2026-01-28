# # GetDurableExecutionStatus200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_id** | **string** |  | [optional]
**execution_arn** | **string** |  | [optional]
**status** | **string** |  | [optional]
**aws_status** | **string** | Raw AWS Step Functions status | [optional]
**callback_id** | **string** | Present when status is waiting_callback - use with /chat/callback | [optional]
**pending_tools** | [**\QuantClient\Model\GetDurableExecutionStatus200ResponsePendingToolsInner[]**](GetDurableExecutionStatus200ResponsePendingToolsInner.md) | Present when status is waiting_callback - tools waiting for results | [optional]
**result** | [**\QuantClient\Model\GetDurableExecutionStatus200ResponseResult**](GetDurableExecutionStatus200ResponseResult.md) |  | [optional]
**error** | [**\QuantClient\Model\GetDurableExecutionStatus200ResponseError**](GetDurableExecutionStatus200ResponseError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
