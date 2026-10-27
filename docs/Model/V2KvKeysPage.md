# # V2KvKeysPage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | [**\QuantClient\Model\V2KvEntry[]**](V2KvEntry.md) |  |
**next_cursor** | **string** | Signed; valid 24 hours; bound to the store and the query. Null on the last page. |
**has_more** | **bool** |  |
**page_end** | [**\QuantClient\Model\V2KvPageEnd**](V2KvPageEnd.md) |  |
**indexed** | **bool** | Present when collection or index was sent. True for an indexed query on a format 2 store. | [optional]
**ledger** | **string** | Present on a ledger list (the collection of a ledger): the ledger name. | [optional]
**hidden_ledger_collections** | **int** | Present when ledger rows were left out because the role does not have ledger_read: the number of ledger collections hidden from this page. | [optional]
**notice** | **string** | Present with hidden_ledger_collections. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
