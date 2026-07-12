# QuantClient\AIApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAIUsageStats()**](AIApi.md#getAIUsageStats) | **GET** /api/v3/organizations/{organisation}/ai/usage | Organisation AI usage breakdown (subscription page parity) |


## `getAIUsageStats()`

```php
getAIUsageStats($organisation, $month, $group_by, $include, $user_id, $token_id)
```

Organisation AI usage breakdown (subscription page parity)

AI usage from the subscription page's source (cloud-api monthly-usage). Parameterized by month, groupBy (model|user|token) and optional daily series. NOTE: as of API 4.19.0 this endpoint requires the update_subscription permission + subscription:read scope (previously use_ai_services + ai:use). For per-caller spend use /ai/usage/me.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$month = 'month_example'; // string | YYYY-MM, defaults to current month
$group_by = 'model'; // string
$include = 'include_example'; // string | Set to 'daily' to append a 30-day series
$user_id = 'user_id_example'; // string | Scope the daily series to a user
$token_id = 'token_id_example'; // string | Scope the daily series to a token

try {
    $apiInstance->getAIUsageStats($organisation, $month, $group_by, $include, $user_id, $token_id);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->getAIUsageStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **month** | **string**| YYYY-MM, defaults to current month | [optional] |
| **group_by** | **string**|  | [optional] [default to &#39;model&#39;] |
| **include** | **string**| Set to &#39;daily&#39; to append a 30-day series | [optional] |
| **user_id** | **string**| Scope the daily series to a user | [optional] |
| **token_id** | **string**| Scope the daily series to a token | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
