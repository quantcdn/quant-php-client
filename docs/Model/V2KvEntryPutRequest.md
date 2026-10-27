# # V2KvEntryPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **mixed** | Any JSON value. An empty object {} is stored as {}. |
**secret** | **bool** | Encrypt the value with KMS. Lists show [ENCRYPTED]. Not in a collection with an index on the value (INDEX_FIELD_ENCRYPTED). | [optional] [default to false]
**ttl** | **int** | Seconds until the key expires (60 to 31,536,000). A write without ttl removes any expiry. | [optional]
**if_absent** | **bool** | Format 2 only. Write only if the key is missing or expired (201). Not with ifVersion. | [optional]
**if_version** | **string** | Format 2 only. Write only if the current version is this one. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
