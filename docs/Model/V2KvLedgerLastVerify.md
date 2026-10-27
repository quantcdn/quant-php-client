# # V2KvLedgerLastVerify

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The verification record; KV_ledgers_verifications_report returns it signed. | [optional]
**at** | **\DateTime** |  |
**started_at** | **\DateTime** |  |
**duration_ms** | **int** |  | [optional]
**ok** | **bool** |  |
**entries** | **int** |  |
**shards_failed** | **int** |  |
**complete** | **bool** |  |
**pages** | **int** |  | [optional]
**trigger** | **string** |  |
**scope** | [**\QuantClient\Model\V2KvLedgerLastVerifyScope**](V2KvLedgerLastVerifyScope.md) |  |
**first_failure** | [**\QuantClient\Model\V2KvLedgerFailure**](V2KvLedgerFailure.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
