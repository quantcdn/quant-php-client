# # V2KvLedgerStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ledger** | [**\QuantClient\Model\V2KvLedger**](V2KvLedger.md) |  |
**instances** | [**\QuantClient\Model\V2KvLedgerInstance[]**](V2KvLedgerInstance.md) |  |
**last_digest_at** | **\DateTime** |  | [optional]
**retain_until** | **\DateTime** |  | [optional]
**mode_refused** | **int** |  | [optional]
**digest_mode_refused** | **int** |  | [optional]
**mode_retry_after** | **\DateTime** |  | [optional]
**anchor** | [**\QuantClient\Model\V2KvLedgerStatusAnchor**](V2KvLedgerStatusAnchor.md) |  |
**last_verify** | [**\QuantClient\Model\V2KvLedgerLastVerify**](V2KvLedgerLastVerify.md) |  | [optional]
**verify_progress** | **array<string,mixed>** | Present while a scheduled verify runs or is paused between daily runs. | [optional]
**forked** | **array<string,mixed>** | Present when the store table no longer matches its archive; appends are refused with LEDGER_FORKED. | [optional]
**next_cursor** | **string** | Pass as cursor for the next page of instances; null on the last page. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
