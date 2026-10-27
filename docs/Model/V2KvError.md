# # V2KvError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **bool** | Always true. |
**message** | **string** |  |
**code** | **string** |  |
**retryable** | **bool** | True when the same request can be sent again safely. |
**key** | **string** | CONFLICT: the key the condition named. | [optional]
**current_version** | **string** | CONFLICT: the current version, when the key exists and has not expired. | [optional]
**reason** | **string** | CONFLICT: why the condition failed. LEDGER_COLLECTION_NOT_EMPTY, LEDGER_RETAINED, LEDGER_FORKED: the cause. | [optional]
**retain_until** | **\DateTime** | LEDGER_RETAINED: when the archive retention ends. | [optional]
**active_after** | **\DateTime** | LEDGER_NOT_READY: when the PENDING ledger can become ACTIVE. | [optional]
**collection** | **string** | LEDGER_RETAINED (unarchived): the collection with unarchived entries. | [optional]
**shard** | **string** | LEDGER_RETAINED (unarchived): the shard with unarchived entries. | [optional]
**operation** | **int** | transact: the index of the failing operation. | [optional]
**index** | **string** | UNIQUE_VIOLATION: the unique index. | [optional]
**existing_key** | **string** | UNIQUE_VIOLATION: the key that holds the value. | [optional]
**ledgers** | [**\QuantClient\Model\V2KvErrorLedgersInner[]**](V2KvErrorLedgersInner.md) | LEDGER_PRESENT (store delete): the ledgers that block the delete. | [optional]
**hint** | **string** | What to do next, when the KV service gives a hint. | [optional]
**state** | **string** | The current state of the store, index, ledger or export, when the error names it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
