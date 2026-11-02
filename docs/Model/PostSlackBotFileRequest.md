# # PostSlackBotFileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** |  |
**thread_ts** | **string** | Absent: a root post | [optional]
**content** | **string** | The image, base64 (standard alphabet, no whitespace, no data: prefix). 1 byte to 4 MiB decoded. |
**filename** | **string** | Default screenshot.&lt;ext&gt;. The extension must match the image type (png, jpg, jpeg, gif, webp). | [optional]
**title** | **string** |  | [optional]
**alt_text** | **string** |  | [optional]
**text** | **string** | Caption. Same mention rules as a message. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
