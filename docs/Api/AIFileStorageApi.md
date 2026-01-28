# QuantClient\AIFileStorageApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteFile()**](AIFileStorageApi.md#deleteFile) | **DELETE** /api/v3/organizations/{organisation}/ai/files/{fileId} | Delete File |
| [**getFile()**](AIFileStorageApi.md#getFile) | **GET** /api/v3/organizations/{organisation}/ai/files/{fileId} | Get File |
| [**listFiles()**](AIFileStorageApi.md#listFiles) | **GET** /api/v3/organizations/{organisation}/ai/files | List Files |
| [**uploadFile()**](AIFileStorageApi.md#uploadFile) | **POST** /api/v3/organizations/{organisation}/ai/files | Upload File to S3 |


## `deleteFile()`

```php
deleteFile($organisation, $file_id): \QuantClient\Model\DeleteFile200Response
```

Delete File

Deletes a file from S3 storage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIFileStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$file_id = 'file_id_example'; // string | The file ID

try {
    $result = $apiInstance->deleteFile($organisation, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIFileStorageApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **file_id** | **string**| The file ID | |

### Return type

[**\QuantClient\Model\DeleteFile200Response**](../Model/DeleteFile200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFile()`

```php
getFile($organisation, $file_id): \QuantClient\Model\GetFile200Response
```

Get File

Retrieves file metadata and a presigned download URL (valid for 1 hour).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIFileStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$file_id = 'file_id_example'; // string | The file ID

try {
    $result = $apiInstance->getFile($organisation, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIFileStorageApi->getFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **file_id** | **string**| The file ID | |

### Return type

[**\QuantClient\Model\GetFile200Response**](../Model/GetFile200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFiles()`

```php
listFiles($organisation, $filter, $limit, $cursor): \QuantClient\Model\ListFiles200Response
```

List Files

Lists files stored in S3 for this organization with optional metadata filtering and pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIFileStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$filter = {}; // string | JSON-encoded metadata filter. Supports exact match and array contains filters.
$limit = 50; // int | Maximum files to return
$cursor = 'cursor_example'; // string | Pagination cursor from previous response

try {
    $result = $apiInstance->listFiles($organisation, $filter, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIFileStorageApi->listFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **filter** | **string**| JSON-encoded metadata filter. Supports exact match and array contains filters. | [optional] |
| **limit** | **int**| Maximum files to return | [optional] [default to 50] |
| **cursor** | **string**| Pagination cursor from previous response | [optional] |

### Return type

[**\QuantClient\Model\ListFiles200Response**](../Model/ListFiles200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFile()`

```php
uploadFile($organisation, $upload_file_request): \QuantClient\Model\UploadFile201Response
```

Upload File to S3

Uploads a file to S3 storage for later retrieval.      *      * **Two Upload Modes:**      *      * 1. **Direct Upload (≤7MB):** Send base64-encoded content in request body.      *      * 2. **Presigned URL Upload (any size):** Set `requestUploadUrl: true` to get a presigned S3 PUT URL, then upload directly to S3.      *      * **Supported Content Types:**      * - Images: image/png, image/jpeg, image/gif, image/webp, image/svg+xml      * - Documents: application/pdf, text/plain, text/markdown, text/html      * - Code: text/javascript, application/json, text/css, text/yaml      * - Archives: application/zip, application/gzip      * - Video: video/mp4, video/webm (use presigned URL for large files)      *      * **Metadata:**      * Attach any custom metadata for filtering. `artifactType` is auto-populated from contentType if not provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIFileStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$upload_file_request = new \QuantClient\Model\UploadFileRequest(); // \QuantClient\Model\UploadFileRequest

try {
    $result = $apiInstance->uploadFile($organisation, $upload_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIFileStorageApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **upload_file_request** | [**\QuantClient\Model\UploadFileRequest**](../Model/UploadFileRequest.md)|  | |

### Return type

[**\QuantClient\Model\UploadFile201Response**](../Model/UploadFile201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
