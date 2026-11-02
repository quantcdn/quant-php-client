# # AiAuditRecordsPage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Error message |
**error** | **bool** | Error flag |
**org_id** | **string** |  |
**start_date** | **\DateTime** |  |
**end_date** | **\DateTime** |  |
**count** | **int** |  |
**records** | [**\QuantClient\Model\AiAuditRecordRow[]**](AiAuditRecordRow.md) |  |
**scanned** | **int** | Keys examined by this call |
**skipped_archived** | **int** | Records older than 365 days (archived) that this call left out |
**has_more** | **bool** |  |
**next_cursor** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
