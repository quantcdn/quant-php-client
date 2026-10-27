# # V2KvEntryPutResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** |  |
**value** | **mixed** | The stored JSON value. | [optional]
**status** | **string** |  |
**message** | **string** |  |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**expires_at** | **int** | Epoch seconds. Absent without ttl. | [optional]
**version** | **string** | Format 2 stores only. The new version. | [optional]
**conditional** | **bool** | Format 2 stores. True when the write had ifAbsent or ifVersion. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
