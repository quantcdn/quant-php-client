# # UploadFileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** | Base64-encoded file content (for direct upload). Required unless using requestUploadUrl. | [optional]
**request_upload_url** | **bool** | Set to true to get a presigned S3 upload URL instead of uploading directly. | [optional] [default to false]
**size** | **int** | File size in bytes. Optional but recommended for presigned uploads. | [optional]
**filename** | **string** | Original filename | [optional]
**content_type** | **string** | MIME type of the file |
**metadata** | **array<string,mixed>** | Custom metadata for filtering. Any fields allowed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
