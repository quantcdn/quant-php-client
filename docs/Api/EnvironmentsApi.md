# QuantClient\EnvironmentsApi

Application environment management and configuration

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEnvironment()**](EnvironmentsApi.md#createEnvironment) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments | Create a new environment |
| [**deleteEnvironment()**](EnvironmentsApi.md#deleteEnvironment) | **DELETE** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment} | Delete an environment |
| [**getEnvironment()**](EnvironmentsApi.md#getEnvironment) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment} | Get a single environment |
| [**getEnvironmentLogs()**](EnvironmentsApi.md#getEnvironmentLogs) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/logs | Get the logs for an environment |
| [**getEnvironmentMetrics()**](EnvironmentsApi.md#getEnvironmentMetrics) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/metrics | Get the metrics for an environment |
| [**listEnvironments()**](EnvironmentsApi.md#listEnvironments) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments | Get all environments for an application |
| [**listSyncOperations()**](EnvironmentsApi.md#listSyncOperations) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/sync/{type} | List the sync operations for an environment |
| [**syncToEnvironment()**](EnvironmentsApi.md#syncToEnvironment) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/sync/{type} | Perform a sync operation from a source environment to the current environment |
| [**updateEnvironment()**](EnvironmentsApi.md#updateEnvironment) | **PUT** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment} | Update Environment Compose Definition |
| [**updateEnvironmentState()**](EnvironmentsApi.md#updateEnvironmentState) | **PUT** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/state | Update the state of an environment |


## `createEnvironment()`

```php
createEnvironment($organisation, $application, $create_environment_request): \QuantClient\Model\EnvironmentResponse
```

Create a new environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'test-org'; // string | The organisation ID
$application = 'test-app'; // string | The application ID
$create_environment_request = new \QuantClient\Model\CreateEnvironmentRequest(); // \QuantClient\Model\CreateEnvironmentRequest

try {
    $result = $apiInstance->createEnvironment($organisation, $application, $create_environment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->createEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **create_environment_request** | [**\QuantClient\Model\CreateEnvironmentRequest**](../Model/CreateEnvironmentRequest.md)|  | |

### Return type

[**\QuantClient\Model\EnvironmentResponse**](../Model/EnvironmentResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironment()`

```php
deleteEnvironment($organisation, $application, $environment)
```

Delete an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'test-org'; // string | The organisation ID
$application = 'test-app'; // string | The application ID
$environment = 'test-env'; // string | The environment ID

try {
    $apiInstance->deleteEnvironment($organisation, $application, $environment);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->deleteEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |

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

## `getEnvironment()`

```php
getEnvironment($organisation, $application, $environment): \QuantClient\Model\EnvironmentResponse
```

Get a single environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'test-org'; // string | The organisation ID
$application = 'test-app'; // string | The application ID
$environment = 'test-env'; // string | The environment ID

try {
    $result = $apiInstance->getEnvironment($organisation, $application, $environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |

### Return type

[**\QuantClient\Model\EnvironmentResponse**](../Model/EnvironmentResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentLogs()`

```php
getEnvironmentLogs($organisation, $application, $environment, $start_time, $end_time, $container_name, $filter_pattern, $limit, $next_token): \QuantClient\Model\GetEnvironmentLogs200Response
```

Get the logs for an environment

Retrieves logs from CloudWatch for the specified environment with optional filtering by time range, container, and pattern matching. Supports pagination via nextToken.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'test-org'; // string | The organisation ID
$application = 'test-app'; // string | The application ID
$environment = 'test-env'; // string | The environment ID
$start_time = ''start_time_example''; // string | Start time for log retrieval (ISO 8601 format or Unix timestamp)
$end_time = ''end_time_example''; // string | End time for log retrieval (ISO 8601 format or Unix timestamp)
$container_name = ''container_name_example''; // string | Filter logs by specific container name
$filter_pattern = ''filter_pattern_example''; // string | CloudWatch Logs filter pattern for searching log content
$limit = 56; // int | Maximum number of log entries to return per page
$next_token = ''next_token_example''; // string | Pagination token from previous response for retrieving next page of results

try {
    $result = $apiInstance->getEnvironmentLogs($organisation, $application, $environment, $start_time, $end_time, $container_name, $filter_pattern, $limit, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **start_time** | **string**| Start time for log retrieval (ISO 8601 format or Unix timestamp) | [optional] |
| **end_time** | **string**| End time for log retrieval (ISO 8601 format or Unix timestamp) | [optional] |
| **container_name** | **string**| Filter logs by specific container name | [optional] |
| **filter_pattern** | **string**| CloudWatch Logs filter pattern for searching log content | [optional] |
| **limit** | **int**| Maximum number of log entries to return per page | [optional] |
| **next_token** | **string**| Pagination token from previous response for retrieving next page of results | [optional] |

### Return type

[**\QuantClient\Model\GetEnvironmentLogs200Response**](../Model/GetEnvironmentLogs200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentMetrics()`

```php
getEnvironmentMetrics($organisation, $application, $environment, $start_time, $end_time, $period, $statistics, $container_name): object
```

Get the metrics for an environment

Retrieves CloudWatch metrics for the specified environment with optional filtering by time range, container, and metric configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'test-org'; // string | The organisation ID
$application = 'test-app'; // string | The application ID
$environment = 'test-env'; // string | The environment ID
$start_time = 56; // int | Start time for metrics retrieval (Unix timestamp in milliseconds)
$end_time = 56; // int | End time for metrics retrieval (Unix timestamp in milliseconds)
$period = 56; // int | Period in seconds for metric aggregation (e.g., 60 for 1 minute, 300 for 5 minutes)
$statistics = ''statistics_example''; // string | Comma-separated list of CloudWatch statistics (e.g., Average, Maximum, Minimum, Sum, SampleCount)
$container_name = ''container_name_example''; // string | Filter metrics by specific container name

try {
    $result = $apiInstance->getEnvironmentMetrics($organisation, $application, $environment, $start_time, $end_time, $period, $statistics, $container_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **start_time** | **int**| Start time for metrics retrieval (Unix timestamp in milliseconds) | [optional] |
| **end_time** | **int**| End time for metrics retrieval (Unix timestamp in milliseconds) | [optional] |
| **period** | **int**| Period in seconds for metric aggregation (e.g., 60 for 1 minute, 300 for 5 minutes) | [optional] |
| **statistics** | **string**| Comma-separated list of CloudWatch statistics (e.g., Average, Maximum, Minimum, Sum, SampleCount) | [optional] |
| **container_name** | **string**| Filter metrics by specific container name | [optional] |

### Return type

**object**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEnvironments()`

```php
listEnvironments($organisation, $application): \QuantClient\Model\EnvironmentSummary[]
```

Get all environments for an application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'test-org'; // string | The organisation ID
$application = 'test-app'; // string | The application ID

try {
    $result = $apiInstance->listEnvironments($organisation, $application);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->listEnvironments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |

### Return type

[**\QuantClient\Model\EnvironmentSummary[]**](../Model/EnvironmentSummary.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSyncOperations()`

```php
listSyncOperations($organisation, $application, $environment, $type): \QuantClient\Model\SyncOperation[]
```

List the sync operations for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'test-org'; // string | The organisation ID
$application = 'test-app'; // string | The application ID
$environment = 'test-env'; // string | The environment ID
$type = ''type_example''; // string | The sync type

try {
    $result = $apiInstance->listSyncOperations($organisation, $application, $environment, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->listSyncOperations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **type** | **string**| The sync type | |

### Return type

[**\QuantClient\Model\SyncOperation[]**](../Model/SyncOperation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncToEnvironment()`

```php
syncToEnvironment($organisation, $application, $environment, $type, $sync_to_environment_request): \QuantClient\Model\SyncOperation
```

Perform a sync operation from a source environment to the current environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'test-org'; // string | The organisation ID
$application = 'test-app'; // string | The application ID
$environment = 'test-env'; // string | The environment ID
$type = ''type_example''; // string | The sync type
$sync_to_environment_request = new \QuantClient\Model\SyncToEnvironmentRequest(); // \QuantClient\Model\SyncToEnvironmentRequest

try {
    $result = $apiInstance->syncToEnvironment($organisation, $application, $environment, $type, $sync_to_environment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->syncToEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **type** | **string**| The sync type | |
| **sync_to_environment_request** | [**\QuantClient\Model\SyncToEnvironmentRequest**](../Model/SyncToEnvironmentRequest.md)|  | |

### Return type

[**\QuantClient\Model\SyncOperation**](../Model/SyncOperation.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvironment()`

```php
updateEnvironment($organisation, $application, $environment, $update_environment_request)
```

Update Environment Compose Definition

Replaces the entire task definition for the environment based on the provided multi-container compose definition. This will create a new task definition revision and update the ECS service, triggering a redeployment. Optionally accepts minCapacity and maxCapacity at the root level for convenience.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = ''organisation_example''; // string | The organisation ID
$application = ''application_example''; // string | The application ID
$environment = ''environment_example''; // string | The environment ID
$update_environment_request = new \QuantClient\Model\UpdateEnvironmentRequest(); // \QuantClient\Model\UpdateEnvironmentRequest

try {
    $apiInstance->updateEnvironment($organisation, $application, $environment, $update_environment_request);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->updateEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **update_environment_request** | [**\QuantClient\Model\UpdateEnvironmentRequest**](../Model/UpdateEnvironmentRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvironmentState()`

```php
updateEnvironmentState($organisation, $application, $environment, $update_environment_state_request)
```

Update the state of an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'test-org'; // string | The organisation ID
$application = 'test-app'; // string | The application ID
$environment = 'test-env'; // string | The environment ID
$update_environment_state_request = new \QuantClient\Model\UpdateEnvironmentStateRequest(); // \QuantClient\Model\UpdateEnvironmentStateRequest

try {
    $apiInstance->updateEnvironmentState($organisation, $application, $environment, $update_environment_state_request);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->updateEnvironmentState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **update_environment_state_request** | [**\QuantClient\Model\UpdateEnvironmentStateRequest**](../Model/UpdateEnvironmentStateRequest.md)|  | |

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
