# # V2StoreItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | Item key |
**value** | **string** | Item value (can be JSON string) |
**secret** | **bool** | Store as secret with KMS encryption. Secrets cannot be retrieved via GET operations (returns [ENCRYPTED]). Ideal for API keys, passwords, and credentials. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
