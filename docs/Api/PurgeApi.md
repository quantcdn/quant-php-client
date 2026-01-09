# QuantClient\PurgeApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purgeCreate()**](PurgeApi.md#purgeCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/purge | Purge cache via URL or cache keys |


## `purgeCreate()`

```php
purgeCreate($organization, $project, $purge_create_request): string
```

Purge cache via URL or cache keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\PurgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$purge_create_request = new \QuantClient\Model\PurgeCreateRequest(); // \QuantClient\Model\PurgeCreateRequest

try {
    $result = $apiInstance->purgeCreate($organization, $project, $purge_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurgeApi->purgeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **purge_create_request** | [**\QuantClient\Model\PurgeCreateRequest**](../Model/PurgeCreateRequest.md)|  | |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
