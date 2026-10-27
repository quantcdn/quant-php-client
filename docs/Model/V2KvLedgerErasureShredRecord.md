# # V2KvLedgerErasureShredRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The shredId. |
**subject_ref** | **string** | The subject reference (never the subject id). |
**shredded_at** | **\DateTime** |  |
**fully_erased_after** | **\DateTime** |  |
**entries** | **int** | The number of shred entries recorded. |
**reason** | **string** |  |
**authority** | **string** |  |
**requested_by** | **string** |  |
**ledger_forked** | **bool** |  | [optional]
**supersedes** | **string** |  | [optional]
**ref_key_version** | **int** | The version of the reference key that made subjectRef. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
