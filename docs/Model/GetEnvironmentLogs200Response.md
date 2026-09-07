# # GetEnvironmentLogs200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**log_events** | [**\QuantClient\Model\GetEnvironmentLogs200ResponseLogEventsInner[]**](GetEnvironmentLogs200ResponseLogEventsInner.md) | Array of log events | [optional]
**log_group_name** | **string** | CloudWatch log group the events were read from | [optional]
**pagination** | [**\QuantClient\Model\GetEnvironmentLogs200ResponsePagination**](GetEnvironmentLogs200ResponsePagination.md) |  | [optional]
**next_token** | **string** | Same as pagination.nextToken; kept for backward compatibility | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
