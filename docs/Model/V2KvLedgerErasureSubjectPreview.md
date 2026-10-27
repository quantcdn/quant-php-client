# # V2KvLedgerErasureSubjectPreview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ledger** | **string** |  |
**subject_ref** | **string** | The reference that the erasure records and receipts use for this subject. The answer never carries the subject id. |
**ref_key_version** | **int** | The version of the reference key that made subjectRef. |
**found** | **bool** |  |
**key_state** | **string** | live: a shred would destroy the key. shredded: the subject is already shredded. |
**shredded_at** | **\DateTime** | Present only when keyState is shredded. | [optional]
**complete** | **bool** | True when every collection was counted to its end. Even then each count means at least N (eventual reads). |
**entries** | **int** | The total of the collection counts. Present only when keyState is live. | [optional]
**collections** | [**\QuantClient\Model\V2KvLedgerErasureSubjectPreviewCollectionsInner[]**](V2KvLedgerErasureSubjectPreviewCollectionsInner.md) | Every collection that holds the subject, in name order. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
