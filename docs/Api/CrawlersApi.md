# QuantClient\CrawlersApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**crawlersCreate()**](CrawlersApi.md#crawlersCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/crawlers | Create a new crawler |
| [**crawlersDelete()**](CrawlersApi.md#crawlersDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler} | Delete a crawler |
| [**crawlersGetRunById()**](CrawlersApi.md#crawlersGetRunById) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/runs/{run_id} | Get a run by ID |
| [**crawlersGetRuns()**](CrawlersApi.md#crawlersGetRuns) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/runs | Get all runs for a crawler |
| [**crawlersList()**](CrawlersApi.md#crawlersList) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers | List crawlers for the project |
| [**crawlersRead()**](CrawlersApi.md#crawlersRead) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler} | Get details of a single crawler |
| [**crawlersRun()**](CrawlersApi.md#crawlersRun) | **POST** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/run | Run a crawler |
| [**crawlersUpdate()**](CrawlersApi.md#crawlersUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler} | Update a crawler |


## `crawlersCreate()`

```php
crawlersCreate($organization, $project, $v2_crawler_request): \QuantClient\Model\V2Crawler
```

Create a new crawler

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$v2_crawler_request = new \QuantClient\Model\V2CrawlerRequest(); // \QuantClient\Model\V2CrawlerRequest

try {
    $result = $apiInstance->crawlersCreate($organization, $project, $v2_crawler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlersApi->crawlersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_crawler_request** | [**\QuantClient\Model\V2CrawlerRequest**](../Model/V2CrawlerRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2Crawler**](../Model/V2Crawler.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crawlersDelete()`

```php
crawlersDelete($organization, $project, $crawler)
```

Delete a crawler

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$crawler = 00000000-0000-0000-0000-000000000000; // string | The UUID of the crawler

try {
    $apiInstance->crawlersDelete($organization, $project, $crawler);
} catch (Exception $e) {
    echo 'Exception when calling CrawlersApi->crawlersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **crawler** | **string**| The UUID of the crawler | |

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

## `crawlersGetRunById()`

```php
crawlersGetRunById($organization, $project, $crawler, $run_id): \QuantClient\Model\V2CrawlerRun
```

Get a run by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$crawler = 00000000-0000-0000-0000-000000000000; // string | Crawler identifier
$run_id = 1; // int | Run identifier

try {
    $result = $apiInstance->crawlersGetRunById($organization, $project, $crawler, $run_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlersApi->crawlersGetRunById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **crawler** | **string**| Crawler identifier | |
| **run_id** | **int**| Run identifier | |

### Return type

[**\QuantClient\Model\V2CrawlerRun**](../Model/V2CrawlerRun.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crawlersGetRuns()`

```php
crawlersGetRuns($organization, $project, $crawler): \QuantClient\Model\V2CrawlerRun[]
```

Get all runs for a crawler

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$crawler = 00000000-0000-0000-0000-000000000000; // string | Crawler identifier

try {
    $result = $apiInstance->crawlersGetRuns($organization, $project, $crawler);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlersApi->crawlersGetRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **crawler** | **string**| Crawler identifier | |

### Return type

[**\QuantClient\Model\V2CrawlerRun[]**](../Model/V2CrawlerRun.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crawlersList()`

```php
crawlersList($organization, $project)
```

List crawlers for the project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier

try {
    $apiInstance->crawlersList($organization, $project);
} catch (Exception $e) {
    echo 'Exception when calling CrawlersApi->crawlersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |

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

## `crawlersRead()`

```php
crawlersRead($organization, $project, $crawler): \QuantClient\Model\V2Crawler
```

Get details of a single crawler

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$crawler = 00000000-0000-0000-0000-000000000000; // string | The UUID of the crawler

try {
    $result = $apiInstance->crawlersRead($organization, $project, $crawler);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlersApi->crawlersRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **crawler** | **string**| The UUID of the crawler | |

### Return type

[**\QuantClient\Model\V2Crawler**](../Model/V2Crawler.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crawlersRun()`

```php
crawlersRun($organization, $project, $crawler, $crawlers_run_request): \QuantClient\Model\CrawlersRun200Response
```

Run a crawler

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$crawler = 00000000-0000-0000-0000-000000000000; // string | Crawler identifier
$crawlers_run_request = new \QuantClient\Model\CrawlersRunRequest(); // \QuantClient\Model\CrawlersRunRequest

try {
    $result = $apiInstance->crawlersRun($organization, $project, $crawler, $crawlers_run_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlersApi->crawlersRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **crawler** | **string**| Crawler identifier | |
| **crawlers_run_request** | [**\QuantClient\Model\CrawlersRunRequest**](../Model/CrawlersRunRequest.md)|  | [optional] |

### Return type

[**\QuantClient\Model\CrawlersRun200Response**](../Model/CrawlersRun200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `crawlersUpdate()`

```php
crawlersUpdate($organization, $project, $crawler, $v2_crawler_request): \QuantClient\Model\V2Crawler
```

Update a crawler

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CrawlersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$crawler = 00000000-0000-0000-0000-000000000000; // string | The UUID of the crawler
$v2_crawler_request = new \QuantClient\Model\V2CrawlerRequest(); // \QuantClient\Model\V2CrawlerRequest

try {
    $result = $apiInstance->crawlersUpdate($organization, $project, $crawler, $v2_crawler_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlersApi->crawlersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **crawler** | **string**| The UUID of the crawler | |
| **v2_crawler_request** | [**\QuantClient\Model\V2CrawlerRequest**](../Model/V2CrawlerRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2Crawler**](../Model/V2Crawler.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
