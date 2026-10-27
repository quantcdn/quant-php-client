# # V2KvLedgerAdminDeclareRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Unique in the store. |
**collection** | **string** | A collection name, or a pattern where * as a whole segment matches exactly one segment. Must not overlap another ledger. At most 512 UTF-8 bytes; every concrete collection appended to the ledger is at most 512 bytes too. |
**chains** | **int** | Parallel hash chains (shards) per collection. |
**retention_days** | **int** | S3 Object Lock retention of the archive, in days. The ledger cannot be dropped before it ends. |
**lock_mode** | **string** | S3 Object Lock mode of the archive. governance can become compliance later, never back. |
**personal_fields** | **string[]** | Top-level value fields that are encrypted per data subject, so a shred (KV_ledgers_shred) can erase them. Needs subjectField (else 400 LEDGER_SUBJECT_REQUIRED). Any field name except at. An index cannot use a personal field (400 INDEX_FIELD_ENCRYPTED). | [optional]
**subject_field** | **string** | The top-level value field that names the data subject. It is not a personal field. May be set without personal fields; such a ledger is pseudonymised and can be shredded. $subject and $subjectTag are reserved value field names. | [optional]
**subject_mode** | **string** | How the subject field is stored. pseudonym (the default): a random token, and after a shred nobody can link the remaining entries to the person. clear: the value as written; after a shred the id and the activity stay. Needs subjectField. Cannot change. | [optional]
**subject_case** | **string** | exact (the default): ids that differ in case are different subjects. fold: case is ignored; use it for email addresses and usernames. Needs subjectField. Cannot change. | [optional]
**anchor** | [**\QuantClient\Model\V2KvLedgerAnchor**](V2KvLedgerAnchor.md) |  | [optional]
**writer_policy** | [**\QuantClient\Model\V2KvLedgerAdminWriterPolicy**](V2KvLedgerAdminWriterPolicy.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
