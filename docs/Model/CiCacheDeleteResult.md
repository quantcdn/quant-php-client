# # CiCacheDeleteResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deleted_entries** | **int** |  |
**deleted_bytes** | **int** |  |
**complete** | **bool** | false when the delete stopped at its time limit (about 12 seconds), a storage call failed or timed out, or storage refused some objects. false means: send the same request again until it is true. If a call returns false with deletedEntries 0, stop and try again later, because a storage call failed, timed out or refused objects. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
