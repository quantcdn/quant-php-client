# # V2KvArchivePurge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purge_id** | **string** | OpenAPI schemas and path parameters for the retained ledger archive routes of deleted stores (A5). Shapes follow the backend contract C-1 (ArchiveStatus, DryRun, Purge, PurgeReceipt, manifest). The list uses the KV page envelope (data, next_cursor, has_more, page_end). | [optional]
**store** | **string** |  | [optional]
**state** | **string** | COMPLETE, RETAINED, BLOCKED and CANCELLED are final. RETAINED: a lock or the quiet period was found at the gate, nothing was deleted. BLOCKED: needs an operator. | [optional]
**requested_by** | **string** |  | [optional]
**requested_at** | **\DateTime** |  | [optional]
**reason** | **string** |  | [optional]
**updated_at** | **\DateTime** |  | [optional]
**completed_at** | **\DateTime** |  | [optional]
**retained_until** | **\DateTime** | On a RETAINED purge, the latest lock found. | [optional]
**counts** | [**\QuantClient\Model\V2KvArchivePurgeCounts**](V2KvArchivePurgeCounts.md) |  | [optional]
**last_error** | [**\QuantClient\Model\V2KvArchivePurgeLastError**](V2KvArchivePurgeLastError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
