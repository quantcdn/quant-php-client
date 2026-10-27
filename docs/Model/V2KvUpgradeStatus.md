# # V2KvUpgradeStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phase** | **string** | The current upgrade phase. |
**dry_run** | **bool** |  |
**v1_table** | **string** |  |
**v2_table** | **string** |  |
**started_at** | **\DateTime** |  |
**frozen_at** | **\DateTime** | When writes were last frozen. | [optional]
**switched_at** | **\DateTime** |  | [optional]
**retain_until** | **\DateTime** | The format 1 table is kept until this time (14 days after the switch); finalize is allowed after it. | [optional]
**total** | **int** | Items counted by preflight. | [optional]
**copied** | **int** | Items copied so far. | [optional]
**invalid_keys** | **string[]** | Up to 20 keys that are not valid in format 2 (preflight). | [optional]
**oversize_keys** | **string[]** | Up to 20 keys whose items would exceed the 400 KB item limit in format 2 (preflight). | [optional]
**error** | **string** | Why the upgrade failed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
