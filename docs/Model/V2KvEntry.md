# # V2KvEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key** | **string** |  |
**value** | **mixed** | The stored JSON value (any JSON type), decrypted when it was stored as a secret. In a key list a secret value reads [ENCRYPTED]. | [optional]
**encrypted** | **bool** | True when the value was stored as a secret. | [optional]
**status** | **string** | Single-key reads only. | [optional]
**message** | **string** | Single-key reads only. | [optional]
**created_at** | **\DateTime** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**expires_at** | **int** | Epoch seconds when the key expires. Absent when the key does not expire. | [optional]
**version** | **string** | Format 2 stores only. A ULID, new on every write. Absent on ledger entries. | [optional]
**ledger** | [**\QuantClient\Model\V2KvLedgerMeta**](V2KvLedgerMeta.md) |  | [optional]
**personal** | **string[]** | Ledger entries only: the personal fields that read \&quot;[PERSONAL]\&quot;. [\&quot;*\&quot;] when the whole value is hidden (the ledger definition could not be read). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
