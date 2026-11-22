# # CiValue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional]
**kind** | **string** |  | [optional]
**scope** | **string** |  | [optional]
**repo** | **string** | Lower-case owner/name. Present when scope is repo. | [optional]
**branches** | **string[]** | The branch rule. Absent when the value applies to every branch. | [optional]
**updated_at** | **\DateTime** |  | [optional]
**updated_by** | **string** |  | [optional]
**value** | **string** | Variables only. A secret value is never returned. | [optional]
**withheld_reason** | **string** | Present on a repository value that jobs do not get. repo_identity_unproven: the value was saved before values were bound to repository IDs, and its repository was created after the value was last saved. Save the value again to fix this. | [optional]
**withheld_at** | **\DateTime** | When the value was first withheld. Present with withheldReason. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
