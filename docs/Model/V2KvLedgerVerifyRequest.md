# # V2KvLedgerVerifyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collection** | **string** | One concrete collection of the ledger (no *). Absent: every collection. | [optional]
**since** | [**\QuantClient\Model\V2KvLedgerVerifyRequestSince**](V2KvLedgerVerifyRequestSince.md) |  | [optional]
**until** | [**\QuantClient\Model\V2KvLedgerVerifyRequestUntil**](V2KvLedgerVerifyRequestUntil.md) |  | [optional]
**cursor** | **string** | The next_cursor of the previous call (signed, bound to the range, lasts 24 hours). | [optional]
**max_entries** | **int** |  | [optional] [default to 10000]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
