# # QueryVectorCollectionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | Natural language search query (mutually exclusive with vector) | [optional]
**vector** | **float[]** | Pre-computed embedding vector (mutually exclusive with query). Array length must match collection dimension. | [optional]
**limit** | **int** | Maximum number of results to return | [optional] [default to 5]
**threshold** | **float** | Minimum similarity score (0-1, higher &#x3D; more relevant) | [optional] [default to 0.7]
**include_embeddings** | **bool** | Include embedding vectors in response (for debugging) | [optional] [default to false]
**filter** | [**\QuantClient\Model\QueryVectorCollectionRequestFilter**](QueryVectorCollectionRequestFilter.md) |  | [optional]
**list_by_metadata** | **bool** | If true, skip semantic search and return all documents matching the filter. Requires filter. Supports cursor pagination. | [optional] [default to false]
**cursor** | **string** | Pagination cursor for listByMetadata mode. Use nextCursor from previous response. Opaque format - do not construct manually. | [optional]
**sort_by** | **string** | Field to sort by in listByMetadata mode | [optional] [default to 'created_at']
**sort_order** | **string** | Sort direction in listByMetadata mode | [optional] [default to 'desc']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
