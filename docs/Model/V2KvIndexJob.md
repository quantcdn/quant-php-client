# # V2KvIndexJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phase** | **string** | settling: about 75 seconds before the backfill starts; scanning: the backfill reads existing items; cleaning: a drop removes index data; done: no work is left. |
**scanned** | **int** | Items the job has examined. If phase and scanned do not change for more than 960 seconds, call KV_indexes_resume. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
