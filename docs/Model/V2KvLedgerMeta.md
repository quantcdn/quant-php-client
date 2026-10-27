# # V2KvLedgerMeta

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The ledger name. | [optional]
**id** | **string** | A ULID, a hyphen and the two-digit shard. |
**shard** | **string** |  |
**seq** | **int** | The sequence number in the shard. |
**at** | **int** | Server time, epoch milliseconds. |
**hash** | **string** |  |
**prev_hash** | **string** | The hash of the previous entry in the same shard. |
**source** | [**\QuantClient\Model\V2KvLedgerProvenance**](V2KvLedgerProvenance.md) |  | [optional]
**subject** | **string** | Present when the ledger has a subjectField: what the subject field holds. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
