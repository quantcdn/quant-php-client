# # EmbeddingsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**input** | [**\QuantClient\Model\EmbeddingsRequestInput**](EmbeddingsRequestInput.md) |  |
**model_id** | **string** | Embedding model to use | [optional] [default to 'amazon.titan-embed-text-v2:0']
**dimensions** | **int** | Output embedding dimensions. Titan v2 supports: 256, 512, 1024, 8192 | [optional] [default to self::DIMENSIONS_NUMBER_1024]
**normalize** | **bool** | Normalize embeddings to unit length (magnitude &#x3D; 1.0) | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
