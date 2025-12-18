# QuantClient\OrganizationsApi

Organization management and settings

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**organizationsList()**](OrganizationsApi.md#organizationsList) | **GET** /api/v2/organizations | Retrieve all organizations |
| [**organizationsRead()**](OrganizationsApi.md#organizationsRead) | **GET** /api/v2/organizations/{organization} | Get details of a single organization |


## `organizationsList()`

```php
organizationsList(): \QuantClient\Model\OrganizationsList200ResponseInner[]
```

Retrieve all organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->organizationsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\QuantClient\Model\OrganizationsList200ResponseInner[]**](../Model/OrganizationsList200ResponseInner.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `organizationsRead()`

```php
organizationsRead($organization): \QuantClient\Model\V2Organization
```

Get details of a single organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier

try {
    $result = $apiInstance->organizationsRead($organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->organizationsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |

### Return type

[**\QuantClient\Model\V2Organization**](../Model/V2Organization.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
