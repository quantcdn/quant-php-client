# # V2KvIndexRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Unique in the store. |
**collection** | **string** | A collection, or a pattern where * as one whole segment matches exactly one segment (customer:*:world). At most 512 UTF-8 bytes. |
**fields** | **string[]** | Top-level fields of a plaintext JSON object value (0-3). A unique index needs at least one. A field that a ledger on the collection marks as personal cannot be indexed (INDEX_FIELD_ENCRYPTED). | [optional]
**sort_by** | **string** | Optional single sort field. | [optional]
**unique** | **bool** | One key per value. Enables KV_indexes_lookup. Not allowed on a ledger collection (LEDGER_INDEX_KIND). | [optional] [default to false]
**count** | **bool** | Keeps a live count per value. Enables KV_indexes_count. Not allowed on a ledger collection (LEDGER_INDEX_KIND) or on items with a ttl (COUNT_WITH_TTL). | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
