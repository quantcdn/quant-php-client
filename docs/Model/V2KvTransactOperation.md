# # V2KvTransactOperation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**key** | **string** |  |
**version** | **string** | check only: the key must have this version and not be expired. | [optional]
**value** | **mixed** | set only. Any JSON value. | [optional]
**secret** | **bool** | set only. Encrypt the value. | [optional]
**ttl** | **int** | set only. Seconds (60 to 31,536,000). | [optional]
**if_absent** | **bool** | set only. | [optional]
**if_version** | **string** | set and delete. | [optional]
**amount** | **int** | increment only. Nonzero. | [optional] [default to 1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
