# # QueryVectorCollection200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**results** | [**\QuantClient\Model\QueryVectorCollection200ResponseResultsInner[]**](QueryVectorCollection200ResponseResultsInner.md) |  | [optional]
**query** | **string** | Original query text (null if vector or metadata search was used) | [optional]
**search_mode** | **string** | Search mode used: text (query provided), vector (pre-computed), metadata (listByMetadata) | [optional]
**filter** | **object** | Filter that was applied (if any) | [optional]
**count** | **int** | Number of results returned | [optional]
**execution_time_ms** | **int** | Query execution time in milliseconds | [optional]
**collection_id** | **string** |  | [optional]
**has_more** | **bool** | True if more results available (listByMetadata mode only) | [optional]
**next_cursor** | **string** | Cursor for next page. Pass as cursor param to continue. Null when no more results. Only in listByMetadata mode. | [optional]
**pagination** | [**\QuantClient\Model\QueryVectorCollection200ResponsePagination**](QueryVectorCollection200ResponsePagination.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
