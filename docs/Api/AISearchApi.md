# QuantClient\AISearchApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiSearchChat()**](AISearchApi.md#aiSearchChat) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/chat | RAG chat with AI Search content |
| [**aiSearchDeletePages()**](AISearchApi.md#aiSearchDeletePages) | **DELETE** /api/v3/organisations/{organisation}/projects/{project}/ai-search/pages | Delete pages by URLs or patterns |
| [**aiSearchDisable()**](AISearchApi.md#aiSearchDisable) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/disable | Disable AI Search for a project |
| [**aiSearchEnable()**](AISearchApi.md#aiSearchEnable) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/enable | Enable AI Search for a project |
| [**aiSearchGetCrawl()**](AISearchApi.md#aiSearchGetCrawl) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/crawls/{jobId} | Get AI Search ingest job status |
| [**aiSearchGetCrawlPages()**](AISearchApi.md#aiSearchGetCrawlPages) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/crawls/{jobId}/pages | Get per-page ingest results for a crawl job |
| [**aiSearchGetSettings()**](AISearchApi.md#aiSearchGetSettings) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/settings | Get AI Search public access and rate limit settings |
| [**aiSearchIngestPages()**](AISearchApi.md#aiSearchIngestPages) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/pages | Ingest pages into the AI Search index |
| [**aiSearchListCrawls()**](AISearchApi.md#aiSearchListCrawls) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/crawls | List AI Search ingest jobs |
| [**aiSearchListPages()**](AISearchApi.md#aiSearchListPages) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/pages | List indexed pages with cursor pagination |
| [**aiSearchPurgeIndex()**](AISearchApi.md#aiSearchPurgeIndex) | **DELETE** /api/v3/organisations/{organisation}/projects/{project}/ai-search/index | Purge the entire AI Search index |
| [**aiSearchSearch()**](AISearchApi.md#aiSearchSearch) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/search | Semantic search across the AI Search index |
| [**aiSearchStatus()**](AISearchApi.md#aiSearchStatus) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search | Get AI Search status for a project |
| [**aiSearchTopQueries()**](AISearchApi.md#aiSearchTopQueries) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/top-queries | Get the most popular AI Search queries |
| [**aiSearchTriggerCrawl()**](AISearchApi.md#aiSearchTriggerCrawl) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/crawls | Trigger a crawler run that ingests into AI Search |
| [**aiSearchUpdateSettings()**](AISearchApi.md#aiSearchUpdateSettings) | **PUT** /api/v3/organisations/{organisation}/projects/{project}/ai-search/settings | Update AI Search public access and rate limit settings |
| [**aiSearchUsage()**](AISearchApi.md#aiSearchUsage) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/usage | Get usage statistics for the AI Search site |


## `aiSearchChat()`

```php
aiSearchChat($organisation, $project, $ai_search_chat_request)
```

RAG chat with AI Search content

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$ai_search_chat_request = new \QuantClient\Model\AiSearchChatRequest(); // \QuantClient\Model\AiSearchChatRequest

try {
    $apiInstance->aiSearchChat($organisation, $project, $ai_search_chat_request);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **ai_search_chat_request** | [**\QuantClient\Model\AiSearchChatRequest**](../Model/AiSearchChatRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSearchDeletePages()`

```php
aiSearchDeletePages($organisation, $project, $ai_search_delete_pages_request)
```

Delete pages by URLs or patterns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$ai_search_delete_pages_request = new \QuantClient\Model\AiSearchDeletePagesRequest(); // \QuantClient\Model\AiSearchDeletePagesRequest

try {
    $apiInstance->aiSearchDeletePages($organisation, $project, $ai_search_delete_pages_request);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchDeletePages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **ai_search_delete_pages_request** | [**\QuantClient\Model\AiSearchDeletePagesRequest**](../Model/AiSearchDeletePagesRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSearchDisable()`

```php
aiSearchDisable($organisation, $project)
```

Disable AI Search for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string

try {
    $apiInstance->aiSearchDisable($organisation, $project);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchDisable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |

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

## `aiSearchEnable()`

```php
aiSearchEnable($organisation, $project, $ai_search_enable_request)
```

Enable AI Search for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$ai_search_enable_request = new \QuantClient\Model\AiSearchEnableRequest(); // \QuantClient\Model\AiSearchEnableRequest

try {
    $apiInstance->aiSearchEnable($organisation, $project, $ai_search_enable_request);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchEnable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **ai_search_enable_request** | [**\QuantClient\Model\AiSearchEnableRequest**](../Model/AiSearchEnableRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSearchGetCrawl()`

```php
aiSearchGetCrawl($organisation, $project, $job_id)
```

Get AI Search ingest job status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$job_id = 'job_id_example'; // string

try {
    $apiInstance->aiSearchGetCrawl($organisation, $project, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchGetCrawl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **job_id** | **string**|  | |

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

## `aiSearchGetCrawlPages()`

```php
aiSearchGetCrawlPages($organisation, $project, $job_id, $limit, $status_code, $processing_status)
```

Get per-page ingest results for a crawl job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$job_id = 'job_id_example'; // string
$limit = 56; // int
$status_code = 56; // int
$processing_status = 'processing_status_example'; // string

try {
    $apiInstance->aiSearchGetCrawlPages($organisation, $project, $job_id, $limit, $status_code, $processing_status);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchGetCrawlPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **job_id** | **string**|  | |
| **limit** | **int**|  | [optional] |
| **status_code** | **int**|  | [optional] |
| **processing_status** | **string**|  | [optional] |

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

## `aiSearchGetSettings()`

```php
aiSearchGetSettings($organisation, $project)
```

Get AI Search public access and rate limit settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string

try {
    $apiInstance->aiSearchGetSettings($organisation, $project);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchGetSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |

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

## `aiSearchIngestPages()`

```php
aiSearchIngestPages($organisation, $project, $ai_search_ingest_pages_request)
```

Ingest pages into the AI Search index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$ai_search_ingest_pages_request = new \QuantClient\Model\AiSearchIngestPagesRequest(); // \QuantClient\Model\AiSearchIngestPagesRequest

try {
    $apiInstance->aiSearchIngestPages($organisation, $project, $ai_search_ingest_pages_request);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchIngestPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **ai_search_ingest_pages_request** | [**\QuantClient\Model\AiSearchIngestPagesRequest**](../Model/AiSearchIngestPagesRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSearchListCrawls()`

```php
aiSearchListCrawls($organisation, $project, $limit)
```

List AI Search ingest jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$limit = 56; // int

try {
    $apiInstance->aiSearchListCrawls($organisation, $project, $limit);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchListCrawls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **limit** | **int**|  | [optional] |

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

## `aiSearchListPages()`

```php
aiSearchListPages($organisation, $project, $limit, $cursor, $search)
```

List indexed pages with cursor pagination

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$limit = 56; // int
$cursor = 'cursor_example'; // string
$search = 'search_example'; // string

try {
    $apiInstance->aiSearchListPages($organisation, $project, $limit, $cursor, $search);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchListPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **limit** | **int**|  | [optional] |
| **cursor** | **string**|  | [optional] |
| **search** | **string**|  | [optional] |

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

## `aiSearchPurgeIndex()`

```php
aiSearchPurgeIndex($organisation, $project)
```

Purge the entire AI Search index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string

try {
    $apiInstance->aiSearchPurgeIndex($organisation, $project);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchPurgeIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |

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

## `aiSearchSearch()`

```php
aiSearchSearch($organisation, $project, $ai_search_search_request)
```

Semantic search across the AI Search index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$ai_search_search_request = new \QuantClient\Model\AiSearchSearchRequest(); // \QuantClient\Model\AiSearchSearchRequest

try {
    $apiInstance->aiSearchSearch($organisation, $project, $ai_search_search_request);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **ai_search_search_request** | [**\QuantClient\Model\AiSearchSearchRequest**](../Model/AiSearchSearchRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSearchStatus()`

```php
aiSearchStatus($organisation, $project)
```

Get AI Search status for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string

try {
    $apiInstance->aiSearchStatus($organisation, $project);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |

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

## `aiSearchTopQueries()`

```php
aiSearchTopQueries($organisation, $project, $range, $limit)
```

Get the most popular AI Search queries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$range = '30d'; // string
$limit = 56; // int

try {
    $apiInstance->aiSearchTopQueries($organisation, $project, $range, $limit);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchTopQueries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **range** | **string**|  | [optional] [default to &#39;30d&#39;] |
| **limit** | **int**|  | [optional] |

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

## `aiSearchTriggerCrawl()`

```php
aiSearchTriggerCrawl($organisation, $project, $ai_search_trigger_crawl_request)
```

Trigger a crawler run that ingests into AI Search

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$ai_search_trigger_crawl_request = new \QuantClient\Model\AiSearchTriggerCrawlRequest(); // \QuantClient\Model\AiSearchTriggerCrawlRequest

try {
    $apiInstance->aiSearchTriggerCrawl($organisation, $project, $ai_search_trigger_crawl_request);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchTriggerCrawl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **ai_search_trigger_crawl_request** | [**\QuantClient\Model\AiSearchTriggerCrawlRequest**](../Model/AiSearchTriggerCrawlRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSearchUpdateSettings()`

```php
aiSearchUpdateSettings($organisation, $project, $ai_search_update_settings_request)
```

Update AI Search public access and rate limit settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$ai_search_update_settings_request = new \QuantClient\Model\AiSearchUpdateSettingsRequest(); // \QuantClient\Model\AiSearchUpdateSettingsRequest

try {
    $apiInstance->aiSearchUpdateSettings($organisation, $project, $ai_search_update_settings_request);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchUpdateSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **ai_search_update_settings_request** | [**\QuantClient\Model\AiSearchUpdateSettingsRequest**](../Model/AiSearchUpdateSettingsRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiSearchUsage()`

```php
aiSearchUsage($organisation, $project, $range)
```

Get usage statistics for the AI Search site

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$project = 'project_example'; // string
$range = '30d'; // string

try {
    $apiInstance->aiSearchUsage($organisation, $project, $range);
} catch (Exception $e) {
    echo 'Exception when calling AISearchApi->aiSearchUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **project** | **string**|  | |
| **range** | **string**|  | [optional] [default to &#39;30d&#39;] |

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
