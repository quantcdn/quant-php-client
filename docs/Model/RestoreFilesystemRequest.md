# # RestoreFilesystemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backup_id** | **string** | The backup ID to restore (must match path param) |
**acknowledge_dataloss** | **bool** | Must be true. tar extraction overwrites same-named files in the target EFS in place; pre-existing files not in the archive are preserved. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
