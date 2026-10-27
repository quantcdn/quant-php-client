# # V2KvTransactRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**idempotency_key** | **string** | A repeat of the same operations within 24 hours returns the first result with replayed true; other operations with the same key fail VALIDATION. Send it to make a lost-connection 503 retryable. | [optional]
**operations** | [**\QuantClient\Model\V2KvTransactOperation[]**](V2KvTransactOperation.md) | 1 to 25 operations on different keys. More than 25 is 400 LIMIT_EXCEEDED. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
