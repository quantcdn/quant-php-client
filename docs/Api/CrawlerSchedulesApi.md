# QuantClient\CrawlerSchedulesApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**crawlerSchedulesAdd()**](CrawlerSchedulesApi.md#crawlerSchedulesAdd) | **POST** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/schedules | Add a new schedule |
| [**crawlerSchedulesDelete()**](CrawlerSchedulesApi.md#crawlerSchedulesDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/schedules/{crawler_schedule} | Delete a schedule |
| [**crawlerSchedulesEdit()**](CrawlerSchedulesApi.md#crawlerSchedulesEdit) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/schedules/{crawler_schedule} | Edit a schedule |
| [**crawlerSchedulesList()**](CrawlerSchedulesApi.md#crawlerSchedulesList) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/schedules | List schedules for a crawler |
| [**crawlerSchedulesShow()**](CrawlerSchedulesApi.md#crawlerSchedulesShow) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/schedules/{crawler_schedule} | Show a specific schedule |


## `crawlerSchedulesAdd()`

```php
crawlerSchedulesAdd($organization, $project, $crawler, $v2_crawler_schedule_request): \QuantClient\Model\V2CrawlerSchedule
```

Add a new schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlerSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$crawler = 'crawler_example'; // string | Crawler identifier
$v2_crawler_schedule_request = new \QuantClient\Model\V2CrawlerScheduleRequest(); // \QuantClient\Model\V2CrawlerScheduleRequest

try {
    $result = $apiInstance->crawlerSchedulesAdd($organization, $project, $crawler, $v2_crawler_schedule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlerSchedulesApi->crawlerSchedulesAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **crawler** | **string**| Crawler identifier | |
| **v2_crawler_schedule_request** | [**\QuantClient\Model\V2CrawlerScheduleRequest**](../Model/V2CrawlerScheduleRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2CrawlerSchedule**](../Model/V2CrawlerSchedule.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crawlerSchedulesDelete()`

```php
crawlerSchedulesDelete($organization, $project, $crawler, $crawler_schedule)
```

Delete a schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlerSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$crawler = 'crawler_example'; // string | Crawler identifier
$crawler_schedule = 'crawler_schedule_example'; // string | Crawler schedule identifier

try {
    $apiInstance->crawlerSchedulesDelete($organization, $project, $crawler, $crawler_schedule);
} catch (Exception $e) {
    echo 'Exception when calling CrawlerSchedulesApi->crawlerSchedulesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **crawler** | **string**| Crawler identifier | |
| **crawler_schedule** | **string**| Crawler schedule identifier | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crawlerSchedulesEdit()`

```php
crawlerSchedulesEdit($organization, $project, $crawler, $crawler_schedule, $v2_crawler_schedule_request): \QuantClient\Model\V2CrawlerSchedule
```

Edit a schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlerSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$crawler = 'crawler_example'; // string | Crawler identifier
$crawler_schedule = 'crawler_schedule_example'; // string | Crawler schedule identifier
$v2_crawler_schedule_request = new \QuantClient\Model\V2CrawlerScheduleRequest(); // \QuantClient\Model\V2CrawlerScheduleRequest

try {
    $result = $apiInstance->crawlerSchedulesEdit($organization, $project, $crawler, $crawler_schedule, $v2_crawler_schedule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlerSchedulesApi->crawlerSchedulesEdit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **crawler** | **string**| Crawler identifier | |
| **crawler_schedule** | **string**| Crawler schedule identifier | |
| **v2_crawler_schedule_request** | [**\QuantClient\Model\V2CrawlerScheduleRequest**](../Model/V2CrawlerScheduleRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2CrawlerSchedule**](../Model/V2CrawlerSchedule.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crawlerSchedulesList()`

```php
crawlerSchedulesList($organization, $project, $crawler): \QuantClient\Model\V2CrawlerSchedule[]
```

List schedules for a crawler

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlerSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string
$crawler = 'crawler_example'; // string

try {
    $result = $apiInstance->crawlerSchedulesList($organization, $project, $crawler);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlerSchedulesApi->crawlerSchedulesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |
| **crawler** | **string**|  | |

### Return type

[**\QuantClient\Model\V2CrawlerSchedule[]**](../Model/V2CrawlerSchedule.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crawlerSchedulesShow()`

```php
crawlerSchedulesShow($organization, $project, $crawler, $crawler_schedule): \QuantClient\Model\V2CrawlerSchedule
```

Show a specific schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlerSchedulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$crawler = 'crawler_example'; // string | Crawler identifier
$crawler_schedule = 'crawler_schedule_example'; // string | Crawler schedule identifier

try {
    $result = $apiInstance->crawlerSchedulesShow($organization, $project, $crawler, $crawler_schedule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlerSchedulesApi->crawlerSchedulesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **crawler** | **string**| Crawler identifier | |
| **crawler_schedule** | **string**| Crawler schedule identifier | |

### Return type

[**\QuantClient\Model\V2CrawlerSchedule**](../Model/V2CrawlerSchedule.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
