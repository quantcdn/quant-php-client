# # V2KvLedgerPublicKey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**key_id** | **string** | The public id of the ledger signing key: the KMS key id (a UUID). It holds no account id or region. Documents signed before 2026-10-29 may name the full key ARN inside their signed json; a verifier matches the key id at the end of that ARN. |
**algorithm** | **string** |  |
**curve** | **string** |  |
**public_key_pem** | **string** | SubjectPublicKeyInfo, PEM. |
**keys** | [**\QuantClient\Model\V2KvLedgerPublicKeyKeysInner[]**](V2KvLedgerPublicKeyKeysInner.md) | Current and historical verification keys. Select by the signature keyId. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
