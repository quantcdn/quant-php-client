# # V2KvLedgerInstance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collection** | **string** |  |
**shard** | **string** |  |
**head_seq** | **int** | Sequence number of the last entry. |
**head_at** | **int** | Epoch ms of the last entry. | [optional]
**archived_seq** | **int** | Last sequence number in the archive. |
**archive_lag_seconds** | **int** | Age of the oldest unarchived entry; 0 when up to date. |
**broken** | **array<string,mixed>** | Set when the archive worker found a chain fault (seq, reason, at). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
