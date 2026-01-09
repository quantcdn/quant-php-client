# QuantClient\AIMonitoringApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAIUsageStats()**](AIMonitoringApi.md#getAIUsageStats) | **GET** /api/v3/organizations/{organisation}/ai/usage | Get AI usage statistics |


## `getAIUsageStats()`

```php
getAIUsageStats($organisation, $month): \QuantClient\Model\GetAIUsageStats200Response
```

Get AI usage statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$month = 2025-10; // string | Month to retrieve statistics for (YYYY-MM format)

try {
    $result = $apiInstance->getAIUsageStats($organisation, $month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIMonitoringApi->getAIUsageStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **month** | **string**| Month to retrieve statistics for (YYYY-MM format) | [optional] |

### Return type

[**\QuantClient\Model\GetAIUsageStats200Response**](../Model/GetAIUsageStats200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
