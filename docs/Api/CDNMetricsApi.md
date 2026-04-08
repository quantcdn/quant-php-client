# QuantClient\CDNMetricsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDailyMetrics()**](CDNMetricsApi.md#getDailyMetrics) | **GET** /v2/organizations/{organization}/projects/{project}/metrics/daily | Get daily metrics |
| [**getHourlyMetrics()**](CDNMetricsApi.md#getHourlyMetrics) | **GET** /v2/organizations/{organization}/projects/{project}/metrics/hourly | Get hourly metrics |
| [**getMonthlyMetrics()**](CDNMetricsApi.md#getMonthlyMetrics) | **GET** /v2/organizations/{organization}/projects/{project}/metrics/monthly | Get monthly metrics |


## `getDailyMetrics()`

```php
getDailyMetrics($organization, $project, $domain, $metrics, $timestamp_format): \QuantClient\Model\V2MetricsResponse
```

Get daily metrics

Returns the last 30 days of daily metrics data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CDNMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$domain = 'domain_example'; // string | Filter by domain ID or domain name
$metrics = array('metrics_example'); // string[] | Metrics to return (default: hits, bytes). Use the /metrics/available endpoint to list all metrics by category.
$timestamp_format = 'iso8601'; // string | Timestamp format in response

try {
    $result = $apiInstance->getDailyMetrics($organization, $project, $domain, $metrics, $timestamp_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CDNMetricsApi->getDailyMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **domain** | **string**| Filter by domain ID or domain name | [optional] |
| **metrics** | [**string[]**](../Model/string.md)| Metrics to return (default: hits, bytes). Use the /metrics/available endpoint to list all metrics by category. | [optional] |
| **timestamp_format** | **string**| Timestamp format in response | [optional] [default to &#39;iso8601&#39;] |

### Return type

[**\QuantClient\Model\V2MetricsResponse**](../Model/V2MetricsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHourlyMetrics()`

```php
getHourlyMetrics($organization, $project, $domain, $metrics, $timestamp_format): \QuantClient\Model\V2MetricsResponse
```

Get hourly metrics

Returns the last hour of minute-by-minute metrics data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CDNMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$domain = 'domain_example'; // string | Filter by domain ID or domain name
$metrics = array('metrics_example'); // string[] | Metrics to return (default: hits, bytes). Use the /metrics/available endpoint to list all metrics by category.
$timestamp_format = 'iso8601'; // string | Timestamp format in response

try {
    $result = $apiInstance->getHourlyMetrics($organization, $project, $domain, $metrics, $timestamp_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CDNMetricsApi->getHourlyMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **domain** | **string**| Filter by domain ID or domain name | [optional] |
| **metrics** | [**string[]**](../Model/string.md)| Metrics to return (default: hits, bytes). Use the /metrics/available endpoint to list all metrics by category. | [optional] |
| **timestamp_format** | **string**| Timestamp format in response | [optional] [default to &#39;iso8601&#39;] |

### Return type

[**\QuantClient\Model\V2MetricsResponse**](../Model/V2MetricsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMonthlyMetrics()`

```php
getMonthlyMetrics($organization, $project, $domain, $metrics, $timestamp_format): \QuantClient\Model\V2MetricsResponse
```

Get monthly metrics

Returns the last 12 months of monthly metrics data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CDNMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$domain = 'domain_example'; // string | Filter by domain ID or domain name
$metrics = array('metrics_example'); // string[] | Metrics to return (default: hits, bytes). Use the /metrics/available endpoint to list all metrics by category.
$timestamp_format = 'iso8601'; // string | Timestamp format in response

try {
    $result = $apiInstance->getMonthlyMetrics($organization, $project, $domain, $metrics, $timestamp_format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CDNMetricsApi->getMonthlyMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **domain** | **string**| Filter by domain ID or domain name | [optional] |
| **metrics** | [**string[]**](../Model/string.md)| Metrics to return (default: hits, bytes). Use the /metrics/available endpoint to list all metrics by category. | [optional] |
| **timestamp_format** | **string**| Timestamp format in response | [optional] [default to &#39;iso8601&#39;] |

### Return type

[**\QuantClient\Model\V2MetricsResponse**](../Model/V2MetricsResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
