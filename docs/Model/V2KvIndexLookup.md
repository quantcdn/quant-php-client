# # V2KvIndexLookup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** |  |
**value** | **mixed** | The stored JSON value (any JSON type). | [optional]
**status** | **string** |  |
**message** | **string** |  |
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**expires_at** | **int** | Epoch seconds. Absent when the key does not expire. | [optional]
**encrypted** | **bool** |  | [optional]
**version** | **string** | ULID, new on every write. Absent on ledger entries. | [optional]
**ledger** | [**\QuantClient\Model\V2KvLedgerMeta**](V2KvLedgerMeta.md) |  | [optional]
**personal** | **string[]** | Ledger entries only: the personal fields the portal replaced with [PERSONAL] (* &#x3D; the whole value). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
