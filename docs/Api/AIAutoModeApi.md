# QuantClient\AIAutoModeApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAutoMode()**](AIAutoModeApi.md#deleteAutoMode) | **DELETE** /api/v3/organizations/{organisation}/ai/auto-mode | Remove the auto mode setting for an organisation |
| [**getAutoMode()**](AIAutoModeApi.md#getAutoMode) | **GET** /api/v3/organizations/{organisation}/ai/auto-mode | Get the auto mode setting for an organisation |
| [**updateAutoMode()**](AIAutoModeApi.md#updateAutoMode) | **PUT** /api/v3/organizations/{organisation}/ai/auto-mode | Save the auto mode setting for an organisation |


## `deleteAutoMode()`

```php
deleteAutoMode($organisation): \QuantClient\Model\DeleteAutoMode200Response
```

Remove the auto mode setting for an organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAutoModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->deleteAutoMode($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAutoModeApi->deleteAutoMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\DeleteAutoMode200Response**](../Model/DeleteAutoMode200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoMode()`

```php
getAutoMode($organisation): \QuantClient\Model\GetAutoMode200Response
```

Get the auto mode setting for an organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAutoModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->getAutoMode($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAutoModeApi->getAutoMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\GetAutoMode200Response**](../Model/GetAutoMode200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutoMode()`

```php
updateAutoMode($organisation, $ai_auto_mode_input): \QuantClient\Model\UpdateAutoMode200Response
```

Save the auto mode setting for an organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAutoModeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$ai_auto_mode_input = new \QuantClient\Model\AIAutoModeInput(); // \QuantClient\Model\AIAutoModeInput

try {
    $result = $apiInstance->updateAutoMode($organisation, $ai_auto_mode_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAutoModeApi->updateAutoMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **ai_auto_mode_input** | [**\QuantClient\Model\AIAutoModeInput**](../Model/AIAutoModeInput.md)|  | |

### Return type

[**\QuantClient\Model\UpdateAutoMode200Response**](../Model/UpdateAutoMode200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
