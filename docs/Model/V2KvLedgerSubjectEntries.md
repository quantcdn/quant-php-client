# # V2KvLedgerSubjectEntries

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ledger** | **string** |  |
**subject_state** | **string** |  |
**entries** | [**\QuantClient\Model\V2KvEntry[]**](V2KvEntry.md) | Empty when subjectState is shredded. |
**complete** | **bool** | False when the time budget ended first: send the request again with nextToken. |
**next_token** | **string** | Present when more entries remain. | [optional]
**shreds** | **string[]** | Present when subjectState is shredded: the shred ids (KV_ledgers_shreds_receipt). | [optional]
**earlier_generations_shredded** | **int** | The number of earlier key generations of this subject that were shredded. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
