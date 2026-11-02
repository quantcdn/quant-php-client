# # V2KvLedgerErasureShredReceiptDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**json** | **string** | The RFC 8785 (JCS) text of the receipt that was signed. |
**signature** | **string** | Base64 DER ECDSA P-256 signature over the SHA-256 of the UTF-8 bytes of json. |
**key_id** | **string** | The public id of the ledger signing key: the KMS key id (a UUID). It holds no account id or region. Documents signed before 2026-10-29 may name the full key ARN inside their signed json; a verifier matches the key id at the end of that ARN. |
**algorithm** | **string** |  |
**receipt** | [**\QuantClient\Model\V2KvLedgerErasureShredReceiptBody**](V2KvLedgerErasureShredReceiptBody.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
