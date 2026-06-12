# QuantClient\TokensApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tokensCreate()**](TokensApi.md#tokensCreate) | **POST** /api/v2/organizations/{organization}/tokens | Create a new API token scoped to this organization |
| [**tokensDelete()**](TokensApi.md#tokensDelete) | **DELETE** /api/v2/organizations/{organization}/tokens/{token_id} | Revoke an API token |
| [**tokensList()**](TokensApi.md#tokensList) | **GET** /api/v2/organizations/{organization}/tokens | List API tokens scoped to this organization |


## `tokensCreate()`

```php
tokensCreate($organization, $tokens_create_request): \QuantClient\Model\TokensCreate201Response
```

Create a new API token scoped to this organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$tokens_create_request = new \QuantClient\Model\TokensCreateRequest(); // \QuantClient\Model\TokensCreateRequest

try {
    $result = $apiInstance->tokensCreate($organization, $tokens_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **tokens_create_request** | [**\QuantClient\Model\TokensCreateRequest**](../Model/TokensCreateRequest.md)|  | |

### Return type

[**\QuantClient\Model\TokensCreate201Response**](../Model/TokensCreate201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensDelete()`

```php
tokensDelete($organization, $token_id): \QuantClient\Model\TokensDelete200Response
```

Revoke an API token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$token_id = 42; // int | Token ID to revoke

try {
    $result = $apiInstance->tokensDelete($organization, $token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **token_id** | **int**| Token ID to revoke | |

### Return type

[**\QuantClient\Model\TokensDelete200Response**](../Model/TokensDelete200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensList()`

```php
tokensList($organization): \QuantClient\Model\TokensList200ResponseInner[]
```

List API tokens scoped to this organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier

try {
    $result = $apiInstance->tokensList($organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->tokensList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |

### Return type

[**\QuantClient\Model\TokensList200ResponseInner[]**](../Model/TokensList200ResponseInner.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
