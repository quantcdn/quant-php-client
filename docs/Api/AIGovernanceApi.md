# QuantClient\AIGovernanceApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGovernanceConfig()**](AIGovernanceApi.md#getGovernanceConfig) | **GET** /api/v3/organizations/{organisation}/ai/governance | Get AI governance configuration for an organisation |
| [**getGovernanceSpend()**](AIGovernanceApi.md#getGovernanceSpend) | **GET** /api/v3/organizations/{organisation}/ai/governance/spend | Get AI spend summary for an organisation |
| [**updateGovernanceConfig()**](AIGovernanceApi.md#updateGovernanceConfig) | **PUT** /api/v3/organizations/{organisation}/ai/governance | Update AI governance configuration for an organisation |


## `getGovernanceConfig()`

```php
getGovernanceConfig($organisation): \QuantClient\Model\GetGovernanceConfig200Response
```

Get AI governance configuration for an organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIGovernanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->getGovernanceConfig($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIGovernanceApi->getGovernanceConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\GetGovernanceConfig200Response**](../Model/GetGovernanceConfig200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGovernanceSpend()`

```php
getGovernanceSpend($organisation): \QuantClient\Model\GetGovernanceSpend200Response
```

Get AI spend summary for an organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIGovernanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->getGovernanceSpend($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIGovernanceApi->getGovernanceSpend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\GetGovernanceSpend200Response**](../Model/GetGovernanceSpend200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGovernanceConfig()`

```php
updateGovernanceConfig($organisation, $update_governance_config_request): \QuantClient\Model\UpdateGovernanceConfig200Response
```

Update AI governance configuration for an organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIGovernanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$update_governance_config_request = new \QuantClient\Model\UpdateGovernanceConfigRequest(); // \QuantClient\Model\UpdateGovernanceConfigRequest

try {
    $result = $apiInstance->updateGovernanceConfig($organisation, $update_governance_config_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIGovernanceApi->updateGovernanceConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **update_governance_config_request** | [**\QuantClient\Model\UpdateGovernanceConfigRequest**](../Model/UpdateGovernanceConfigRequest.md)|  | |

### Return type

[**\QuantClient\Model\UpdateGovernanceConfig200Response**](../Model/UpdateGovernanceConfig200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
