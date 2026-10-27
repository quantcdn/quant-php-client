# # V2KvLedgerReceipt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** | collection:id |
**id** | **string** | ULID, a hyphen and the two-digit shard. Increases within a shard. |
**shard** | **string** |  |
**seq** | **int** | Sequence number of the entry on its shard. |
**at** | **int** | Epoch milliseconds (the ULID time of id). |
**hash** | **string** | SHA-256 hex of this entry. |
**prev_hash** | **string** | SHA-256 hex of the previous entry on the shard (the genesis hash for seq 1). |
**ledger** | **string** | The ledger name. |
**source** | [**\QuantClient\Model\V2KvLedgerProvenance**](V2KvLedgerProvenance.md) |  | [optional]
**replayed** | **bool** | Present only on a retry with the same idempotencyKey: this is the first receipt. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
