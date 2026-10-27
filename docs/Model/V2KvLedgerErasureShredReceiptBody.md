# # V2KvLedgerErasureShredReceiptBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**v** | **int** |  |
**type** | **string** |  |
**id** | **string** | The shredId. |
**org** | **string** |  |
**store** | **string** |  |
**ledger** | **string** |  |
**subject_ref** | **string** |  |
**ref_key_version** | **int** | The version of the reference key that made subjectRef. |
**shredded_at** | **\DateTime** |  |
**fully_erased_after** | **\DateTime** |  |
**reason** | **string** |  |
**authority** | **string** |  |
**requested_by** | **string** |  |
**entry_count** | **int** | The number of shred entries (0 for a forked store or a DROPPED ledger). |
**entries_sha256** | **string** | SHA-256 (hex) of the JCS of the shred entries, sorted by key. |
**entries** | [**\QuantClient\Model\V2KvLedgerErasureShredEntry[]**](V2KvLedgerErasureShredEntry.md) | Left out when the receipt would pass 300 KB: then KV_ledgers_shreds_entries serves them. | [optional]
**ledger_forked** | **bool** |  | [optional]
**supersedes** | **string** | The id of the forked record that this re-shred supersedes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
