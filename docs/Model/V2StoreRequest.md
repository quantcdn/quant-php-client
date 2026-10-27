# # V2StoreRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Store name |
**format** | **int** | Store format. Format 1 is a plain key-value store. Format 2 enables indexes, ledgers, conditional writes, transactions and the cursor key list. The format is chosen when the store is created and cannot be changed by this request; omit the field for format 1. | [optional] [default to self::FORMAT_NUMBER_1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
