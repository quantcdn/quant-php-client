# # V2KvUpgradeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | start: preflight, copy and switch to format 2. rollback: copy back to format 1 after the switch. finalize: delete the format 1 table after retainUntil; no rollback is possible after it. resume: queue the current step again when the phase has not changed for more than 960 seconds. |
**dry_run** | **bool** | start only: run preflight and stop at phase checked. Must be a JSON boolean. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
