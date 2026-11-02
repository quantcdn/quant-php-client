# # CreateSlackInteractionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** |  |
**thread_ts** | **string** |  | [optional]
**text** | **string** |  |
**actions** | [**\QuantClient\Model\CreateSlackInteractionRequestActionsInner[]**](CreateSlackInteractionRequestActionsInner.md) |  |
**response_mode** | **string** |  | [optional]
**expires_in_seconds** | **int** |  | [optional] [default to 3600]
**allowed_users** | **string[]** |  | [optional]
**metadata** | **object** | Opaque caller data, at most 4096 bytes of canonical JSON | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
