# # GetEnvironmentLogs200ResponsePagination

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**limit** | **int** | Page size that was applied | [optional]
**has_more** | **bool** | True when another page is available | [optional]
**next_token** | **string** | Token for the next page. Present only when hasMore is true. | [optional]
**total** | **int** | Total events in the time range. Present only when includeTotal&#x3D;true. | [optional]
**total_pages** | **int** | ceil(total / limit). Present only when includeTotal&#x3D;true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
