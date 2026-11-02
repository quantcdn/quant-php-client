# # AiAuditRecordSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Error message |
**error** | **bool** | Error flag |
**record_type** | **string** | inference for a record without recordType; tool_denied, tool_proposal, tool_decision, tool_outcome, slack_bot_api, audit_access, ...; unknown for an unreadable object |
**timestamp** | **\DateTime** |  | [optional]
**user_id** | **string** |  | [optional]
**token_id** | **string** |  | [optional]
**model_id** | **string** |  | [optional]
**interface** | **string** |  | [optional]
**tools** | **string[]** |  |
**decision** | **string** |  | [optional]
**outcome** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
