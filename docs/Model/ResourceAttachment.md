# # ResourceAttachment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_name** | **string** |  | [optional]
**env_name** | **string** |  | [optional]
**env_var_prefix** | **string** | Namespaces every injected variable, so MEDIA yields MEDIA_S3_BUCKET | [optional]
**access_key_id** | **string** | Object storage only. The secret half is written to the environment&#39;s secrets and never returned. | [optional]
**injected_keys** | **string[]** | The exact variable names this attachment wrote, removed precisely on detach | [optional]
**created_at** | **\DateTime** |  | [optional]
**note** | **string** | When the credentials take effect | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
