# # AiAuditRecordRow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Error message |
**error** | **bool** | Error flag |
**key** | **string** |  |
**date** | **\DateTime** |  |
**summary** | [**\QuantClient\Model\AiAuditRecordSummary**](AiAuditRecordSummary.md) |  |
**record** | **array<string,mixed>** | The stored record. prompt and response are present only when the record has promptStored or responseStored true. | [optional]
**omitted** | **string** | too-large: read the record with aiAuditRecordGet. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
