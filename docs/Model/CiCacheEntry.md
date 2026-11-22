# # CiCacheEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**repo_id** | **int** | GitHub repository id. |
**repo** | **string** | owner/name recorded for repoId, or null when none is recorded. |
**ref** | **string** | The git ref that saved the entry. A pull request saves to refs/pull/&lt;number&gt;/merge. |
**key** | **string** | The actions/cache key. |
**version** | **string** | The cache version (a hash of the paths and compression the job used). |
**size_bytes** | **int** |  |
**created_at** | **\DateTime** | When the entry was saved. Entries expire 14 days after they are saved. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
