# QuantClient\HeadersApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**headersCreate()**](HeadersApi.md#headersCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/custom-headers | Create or update custom headers |
| [**headersDelete()**](HeadersApi.md#headersDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/custom-headers | Delete custom headers |
| [**headersList()**](HeadersApi.md#headersList) | **GET** /api/v2/organizations/{organization}/projects/{project}/custom-headers | List custom headers for a project |


## `headersCreate()`

```php
headersCreate($organization, $project, $v2_custom_header_request): array<string,string>
```

Create or update custom headers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\HeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string
$v2_custom_header_request = new \QuantClient\Model\V2CustomHeaderRequest(); // \QuantClient\Model\V2CustomHeaderRequest

try {
    $result = $apiInstance->headersCreate($organization, $project, $v2_custom_header_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeadersApi->headersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |
| **v2_custom_header_request** | [**\QuantClient\Model\V2CustomHeaderRequest**](../Model/V2CustomHeaderRequest.md)|  | |

### Return type

**array<string,string>**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headersDelete()`

```php
headersDelete($organization, $project, $v2_custom_header_request)
```

Delete custom headers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\HeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string
$v2_custom_header_request = new \QuantClient\Model\V2CustomHeaderRequest(); // \QuantClient\Model\V2CustomHeaderRequest

try {
    $apiInstance->headersDelete($organization, $project, $v2_custom_header_request);
} catch (Exception $e) {
    echo 'Exception when calling HeadersApi->headersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |
| **v2_custom_header_request** | [**\QuantClient\Model\V2CustomHeaderRequest**](../Model/V2CustomHeaderRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headersList()`

```php
headersList($organization, $project): array<string,string>
```

List custom headers for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\HeadersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string

try {
    $result = $apiInstance->headersList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HeadersApi->headersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |

### Return type

**array<string,string>**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
