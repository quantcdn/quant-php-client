# QuantClient\SubscriptionApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSubscriptionCloudUsage()**](SubscriptionApi.md#getSubscriptionCloudUsage) | **GET** /api/v3/organizations/{organisation}/subscription/cloud-usage | Cloud-app cost breakdown for the subscription page |


## `getSubscriptionCloudUsage()`

```php
getSubscriptionCloudUsage($organisation, $month)
```

Cloud-app cost breakdown for the subscription page

Per-project compute/database/storage cost breakdown with spot discount, for the requested month and the month before it. Mirrors the subscription page's Cloud Apps card.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$month = 'month_example'; // string | YYYY-MM, defaults to current month

try {
    $apiInstance->getSubscriptionCloudUsage($organisation, $month);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->getSubscriptionCloudUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **month** | **string**| YYYY-MM, defaults to current month | [optional] |

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
