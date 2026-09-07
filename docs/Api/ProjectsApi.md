# QuantClient\ProjectsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProjectLogs()**](ProjectsApi.md#getProjectLogs) | **GET** /api/v2/organizations/{organization}/projects/{project}/logs | Get CDN access logs for a project |
| [**projectsCreate()**](ProjectsApi.md#projectsCreate) | **POST** /api/v2/organizations/{organization}/projects | Create a new project |
| [**projectsDelete()**](ProjectsApi.md#projectsDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project} | Delete a project |
| [**projectsList()**](ProjectsApi.md#projectsList) | **GET** /api/v2/organizations/{organization}/projects | Retrieve all projects for an organization |
| [**projectsRead()**](ProjectsApi.md#projectsRead) | **GET** /api/v2/organizations/{organization}/projects/{project} | Get details of a single project |
| [**projectsUpdate()**](ProjectsApi.md#projectsUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project} | Update a project |


## `getProjectLogs()`

```php
getProjectLogs($organization, $project, $limit, $start_time, $end_time, $filter, $domain, $next_token): \QuantClient\Model\GetProjectLogs200Response
```

Get CDN access logs for a project

Retrieves CloudFront access log entries for an AWS-platform project. Results are always scoped to the project; the optional filter can only narrow them. Entries are returned oldest first; pass nextToken from the previous response to fetch the next page. Logs are retained for 30 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | The organization machine name
$project = test-project; // string | The project machine name
$limit = 100; // int | Maximum number of log entries to return per page (default 100)
$start_time = 2024-11-16T00:00:00Z; // string | Start of the time range. ISO 8601 or Unix epoch milliseconds.
$end_time = 2024-11-16T23:59:59Z; // string | End of the time range. ISO 8601 or Unix epoch milliseconds.
$filter = $.status_code = 404; // string | CloudWatch JSON filter expression AND-ed with the project constraint, e.g. $.status_code = 404. Outer braces are optional; nested braces are rejected.
$domain = www.example.com; // string | Only return entries for this domain
$next_token = 'next_token_example'; // string | Opaque pagination token from the previous response. Pass back unchanged to fetch the next page.

try {
    $result = $apiInstance->getProjectLogs($organization, $project, $limit, $start_time, $end_time, $filter, $domain, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProjectLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| The organization machine name | |
| **project** | **string**| The project machine name | |
| **limit** | **int**| Maximum number of log entries to return per page (default 100) | [optional] [default to 100] |
| **start_time** | **string**| Start of the time range. ISO 8601 or Unix epoch milliseconds. | [optional] |
| **end_time** | **string**| End of the time range. ISO 8601 or Unix epoch milliseconds. | [optional] |
| **filter** | **string**| CloudWatch JSON filter expression AND-ed with the project constraint, e.g. $.status_code &#x3D; 404. Outer braces are optional; nested braces are rejected. | [optional] |
| **domain** | **string**| Only return entries for this domain | [optional] |
| **next_token** | **string**| Opaque pagination token from the previous response. Pass back unchanged to fetch the next page. | [optional] |

### Return type

[**\QuantClient\Model\GetProjectLogs200Response**](../Model/GetProjectLogs200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsCreate()`

```php
projectsCreate($organization, $v2_project_request): \QuantClient\Model\V2Project
```

Create a new project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$v2_project_request = new \QuantClient\Model\V2ProjectRequest(); // \QuantClient\Model\V2ProjectRequest

try {
    $result = $apiInstance->projectsCreate($organization, $v2_project_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **v2_project_request** | [**\QuantClient\Model\V2ProjectRequest**](../Model/V2ProjectRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2Project**](../Model/V2Project.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsDelete()`

```php
projectsDelete($organization, $project)
```

Delete a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier

try {
    $apiInstance->projectsDelete($organization, $project);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDelete: ', $e->getMessage(), PHP_EOL;
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

## `projectsList()`

```php
projectsList($organization): \QuantClient\Model\V2Project[]
```

Retrieve all projects for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier

try {
    $result = $apiInstance->projectsList($organization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |

### Return type

[**\QuantClient\Model\V2Project[]**](../Model/V2Project.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsRead()`

```php
projectsRead($organization, $project, $with_token): \QuantClient\Model\V2Project
```

Get details of a single project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$with_token = false; // bool

try {
    $result = $apiInstance->projectsRead($organization, $project, $with_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **with_token** | **bool**|  | [default to false] |

### Return type

[**\QuantClient\Model\V2Project**](../Model/V2Project.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsUpdate()`

```php
projectsUpdate($organization, $project, $v2_project_request): \QuantClient\Model\V2Project
```

Update a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$v2_project_request = new \QuantClient\Model\V2ProjectRequest(); // \QuantClient\Model\V2ProjectRequest

try {
    $result = $apiInstance->projectsUpdate($organization, $project, $v2_project_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_project_request** | [**\QuantClient\Model\V2ProjectRequest**](../Model/V2ProjectRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2Project**](../Model/V2Project.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
