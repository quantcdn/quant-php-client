# # V2KvLedgerListItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**collection** | **string** | A collection, or a pattern where * is one whole segment. |
**chains** | **int** |  |
**retention_days** | **int** |  |
**lock_mode** | **string** |  |
**personal_fields** | **string[]** |  |
**subject_field** | **string** |  | [optional]
**subject_mode** | **string** | Present when subjectField is set. | [optional]
**subject_case** | **string** | Present when subjectField is set. | [optional]
**anchor** | [**\QuantClient\Model\V2KvLedgerAnchor**](V2KvLedgerAnchor.md) |  |
**writer_policy** | [**\QuantClient\Model\V2KvLedgerAdminWriterPolicy**](V2KvLedgerAdminWriterPolicy.md) |  | [optional]
**state** | **string** | PENDING for 75 seconds after a declare, then ACTIVE or FAILED. DROPPED after KV_ledgers_delete. |
**created_at** | **\DateTime** |  |
**active_after** | **\DateTime** | When a PENDING ledger is checked again and becomes ACTIVE or FAILED. |
**definition_hash** | **string** | Hex SHA-256 of the canonical (RFC 8785) definition. |
**updated_at** | **\DateTime** |  | [optional]
**error** | **string** | FAILED only: why the ledger failed. | [optional]
**dropped_at** | **\DateTime** |  | [optional]
**summary** | [**\QuantClient\Model\V2KvLedgerSummary**](V2KvLedgerSummary.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
