# # V2KvLedgerAppendRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collection** | **string** | A concrete collection (no *) that a declared ledger covers. At most 512 UTF-8 bytes. |
**value** | **array<string,mixed>** | The entry, a JSON object (not a list). At most 350,000 bytes as JSON. Top-level at is reserved (the KV service sets it) and $event is reserved for shred entries; a top-level field whose value is an object with a $enc or $shredded key fails VALIDATION. When the ledger has personal fields, value must hold the subject field (else LEDGER_SUBJECT_REQUIRED). |
**idempotency_key** | **string** | Optional. A retry with the same key and the same collection and value within 24 hours returns the first receipt with replayed true and appends nothing. The same key with another collection or value fails VALIDATION. A key is unique within the store; derive one key per append. Send it to make a lost-connection 503 retryable. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
