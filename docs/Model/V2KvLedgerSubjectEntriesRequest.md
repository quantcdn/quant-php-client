# # V2KvLedgerSubjectEntriesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject_id** | [**\QuantClient\Model\V2KvLedgerSubjectId**](V2KvLedgerSubjectId.md) |  |
**collection** | **string** | Read only this collection of the ledger. | [optional]
**since** | **\DateTime** | Only entries at or after this time. | [optional]
**until** | **\DateTime** | Only entries before this time. | [optional]
**limit** | **int** | Entries per page, 1 to 1000. The default is 100. | [optional]
**next_token** | **string** | The nextToken of the previous page. | [optional]
**personal** | **string** | sealed (the default): personal fields read \&quot;[PERSONAL]\&quot; and the subject field shows the subject token. decrypted: personal fields in clear; needs the ledger_reveal permission and is logged as kv.ledger.reveal. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
