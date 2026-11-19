# # TokensCreate201Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | The plain text token (shown once) | [optional]
**id** | **int** | Token ID | [optional]
**name** | **string** |  | [optional]
**scopes** | **string[]** |  | [optional]
**projects** | **int[]** |  | [optional]
**preset** | **string** |  | [optional]
**expires_at** | **\DateTime** |  | [optional]
**expiry_limited_by_parent** | **bool** | True when expires_at was cut to the expiry of the token that made this request. A token cannot create a token that expires after it. | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
