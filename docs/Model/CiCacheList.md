# # CiCacheList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total_bytes** | **int** | Size of every entry that matches the filter (partial when totalsComplete is false). |
**entry_count** | **int** | Number of entries that match the filter (partial when totalsComplete is false). |
**totals_complete** | **bool** | false when the count stopped at its time limit (about 10 seconds) on a very large cache; totalBytes and entryCount then cover only the part counted. |
**entries** | [**\QuantClient\Model\CiCacheEntry[]**](CiCacheEntry.md) |  |
**next_cursor** | **string** | Opaque. Pass as cursor, with the same filter, for the next page; null on the last page. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
