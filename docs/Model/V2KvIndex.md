# # V2KvIndex

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**collection** | **string** |  |
**fields** | **string[]** |  |
**sort_by** | **string** |  | [optional]
**unique** | **bool** |  | [optional]
**count** | **bool** |  | [optional]
**slot** | **int** | The secondary index slot that serves the index. |
**state** | **string** |  |
**created_at** | **\DateTime** |  |
**error** | **string** | FAILED only: the code of the first problem the build found. | [optional]
**conflicts** | **string[]** | FAILED only: up to 20 keys (16 KiB) that caused the failure, without duplicates. | [optional]
**job** | [**\QuantClient\Model\V2KvIndexJob**](V2KvIndexJob.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
