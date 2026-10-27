# # V2KvLedgerArchive

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**objects** | [**\QuantClient\Model\V2KvLedgerArchiveObject[]**](V2KvLedgerArchiveObject.md) |  |
**digests** | [**\QuantClient\Model\V2KvLedgerArchiveDigest[]**](V2KvLedgerArchiveDigest.md) | First page (or digest_cursor pages) only. |
**timestamps** | [**\QuantClient\Model\V2KvLedgerArchiveFile[]**](V2KvLedgerArchiveFile.md) | RFC 3161 tokens and anchor binding files. First page (or digest_cursor pages) only. |
**digests_truncated** | **bool** | True when more than 2,000 digest files exist: continue with next_digest_cursor. | [optional]
**note** | **string** |  | [optional]
**next_cursor** | **string** | Pass as cursor for the next page of objects. |
**next_digest_cursor** | **string** | Pass as digest_cursor for the next page of digests. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
