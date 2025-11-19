# QuantClient\ProjectsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectsCreate()**](ProjectsApi.md#projectsCreate) | **POST** /api/v2/organizations/{organization}/projects | Create a new project |
| [**projectsDelete()**](ProjectsApi.md#projectsDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project} | Delete a project |
| [**projectsList()**](ProjectsApi.md#projectsList) | **GET** /api/v2/organizations/{organization}/projects | Retrieve all projects for an organization |
| [**projectsRead()**](ProjectsApi.md#projectsRead) | **GET** /api/v2/organizations/{organization}/projects/{project} | Get details of a single project |
| [**projectsUpdate()**](ProjectsApi.md#projectsUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project} | Update a project |


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
$organization = 'organization_example'; // string
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
| **organization** | **string**|  | |
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
$organization = 'organization_example'; // string
$project = 'project_example'; // string

try {
    $apiInstance->projectsDelete($organization, $project);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |

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
$organization = 'organization_example'; // string

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
| **organization** | **string**|  | |

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
$organization = 'organization_example'; // string
$project = 'project_example'; // string
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
| **organization** | **string**|  | |
| **project** | **string**|  | |
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
$organization = 'organization_example'; // string
$project = 'project_example'; // string
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
| **organization** | **string**|  | |
| **project** | **string**|  | |
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
