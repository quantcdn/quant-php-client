# # V2KvLedgerProof

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** |  |
**entry** | [**\QuantClient\Model\V2KvLedgerProofEntry**](V2KvLedgerProofEntry.md) |  | [optional]
**hash** | **string** |  | [optional]
**source** | [**\QuantClient\Model\V2KvLedgerProvenance**](V2KvLedgerProvenance.md) |  | [optional]
**period** | **string** | Archive period label, YYYYMMDDTHHmmZ. | [optional]
**archive_key** | **string** |  | [optional]
**leaf_index** | **int** |  | [optional]
**tree_size** | **int** |  | [optional]
**merkle_root** | **string** |  | [optional]
**audit_path** | **string[]** |  | [optional]
**digest** | **array<string,mixed>** |  | [optional]
**digest_key** | **string** |  | [optional]
**signature** | **string** | Base64 DER ECDSA P-256 over SHA-256 of the digest bytes. | [optional]
**key_id** | **string** |  | [optional]
**digest_signed_at** | **\DateTime** |  | [optional]
**anchor** | [**\QuantClient\Model\V2KvLedgerProofAnchor**](V2KvLedgerProofAnchor.md) |  | [optional]
**anchor_unavailable** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
