# # V2KvLedgerErasureShredResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ledger** | **string** |  |
**entries** | [**\QuantClient\Model\V2KvLedgerReceipt[]**](V2KvLedgerReceipt.md) | The shred entry of each collection that holds the subject (empty for alreadyShredded, a DROPPED ledger and a forked store). |
**shredded_at** | **\DateTime** | When the key was destroyed (the first shred for alreadyShredded). |
**fully_erased_after** | **\DateTime** | shreddedAt + 35 days: after this time no backup of the key remains. |
**already_shredded** | **bool** | Present only when the subject was shredded before this call and this call wrote nothing. | [optional]
**ledger_forked** | **bool** | Present only when the store is forked: the key is destroyed and no shred entry is recorded. | [optional]
**shred_id** | **string** | The id of the erasure record (the same on every repeat). | [optional]
**subject_ref** | **string** | The pseudonym of the subject in the erasure records and receipts. |
**ref_key_version** | **int** | The version of the reference key that made subjectRef. |
**receipt** | [**\QuantClient\Model\V2KvLedgerErasureSignedShredReceipt**](V2KvLedgerErasureSignedShredReceipt.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
