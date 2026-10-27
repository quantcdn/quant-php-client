# # V2KvArchiveStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store** | **string** |  | [optional]
**status** | **string** | purged: the latest purge is COMPLETE. purging: a purge is not final. blocked: the latest purge is BLOCKED. retained: a lock or the quiet period is in the future. eligible: otherwise. | [optional]
**deleted_at** | **\DateTime** |  | [optional]
**earliest_purge_at** | **\DateTime** |  | [optional]
**retained_until** | **\DateTime** |  | [optional]
**source** | **string** |  | [optional]
**project** | **string** |  | [optional]
**purge** | [**\QuantClient\Model\V2KvArchivePurge**](V2KvArchivePurge.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
