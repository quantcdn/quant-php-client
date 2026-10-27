# # V2KvExport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ULID of the export. |
**phase** | **string** |  |
**requested_at** | **\DateTime** |  |
**updated_at** | **\DateTime** | Moves on every step. An export in progress whose updatedAt is older than 960 seconds can be resumed. |
**export_time** | **\DateTime** | The point in time the export reads. | [optional]
**completed_at** | **\DateTime** |  | [optional]
**item_count** | **int** |  | [optional]
**skipped** | [**\QuantClient\Model\V2KvExportSkipped**](V2KvExportSkipped.md) |  | [optional]
**size_bytes** | **int** | Total size of the compressed files. | [optional]
**parts** | **int** |  | [optional]
**expires_at** | **\DateTime** |  | [optional]
**error** | **string** |  | [optional]
**downloads** | [**\QuantClient\Model\V2KvExportDownload[]**](V2KvExportDownload.md) | Phase done only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
