# # QueryVectorCollectionRequestFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exact** | **array<string,mixed>** | Exact match on metadata fields. Keys are metadata field names, values are expected values. | [optional]
**contains** | **array<string,string[]>** | Array contains filter for array metadata fields (like tags). Returns documents where the metadata array contains ANY of the specified values. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
