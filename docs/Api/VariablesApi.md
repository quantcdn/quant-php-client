# QuantClient\VariablesApi

Environment variable management

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bulkSetEnvironmentVariables()**](VariablesApi.md#bulkSetEnvironmentVariables) | **PUT** /api/v3/organizations/{api_organisation}/applications/{api_application}/environments/{api_environment}/variables | Bulk set/replace environment variables |
| [**deleteEnvironmentVariable()**](VariablesApi.md#deleteEnvironmentVariable) | **DELETE** /api/v3/organizations/{api_organisation}/applications/{api_application}/environments/{api_environment}/variables/{api_variable} | Delete a variable |
| [**listEnvironmentVariables()**](VariablesApi.md#listEnvironmentVariables) | **GET** /api/v3/organizations/{api_organisation}/applications/{api_application}/environments/{api_environment}/variables | Get all variables for an environment |
| [**updateEnvironmentVariable()**](VariablesApi.md#updateEnvironmentVariable) | **PUT** /api/v3/organizations/{api_organisation}/applications/{api_application}/environments/{api_environment}/variables/{api_variable} | Update a variable |


## `bulkSetEnvironmentVariables()`

```php
bulkSetEnvironmentVariables($api_organisation, $api_application, $api_environment, $bulk_set_environment_variables_request)
```

Bulk set/replace environment variables

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_organisation = test-org; // string | The organisation ID
$api_application = test-app; // string | The application ID
$api_environment = test-env; // string | The environment ID
$bulk_set_environment_variables_request = new \QuantClient\Model\BulkSetEnvironmentVariablesRequest(); // \QuantClient\Model\BulkSetEnvironmentVariablesRequest

try {
    $apiInstance->bulkSetEnvironmentVariables($api_organisation, $api_application, $api_environment, $bulk_set_environment_variables_request);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->bulkSetEnvironmentVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_organisation** | **string**| The organisation ID | |
| **api_application** | **string**| The application ID | |
| **api_environment** | **string**| The environment ID | |
| **bulk_set_environment_variables_request** | [**\QuantClient\Model\BulkSetEnvironmentVariablesRequest**](../Model/BulkSetEnvironmentVariablesRequest.md)|  | |

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

## `deleteEnvironmentVariable()`

```php
deleteEnvironmentVariable($api_organisation, $api_application, $api_environment, $api_variable)
```

Delete a variable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_organisation = 'api_organisation_example'; // string | The organisation ID
$api_application = 'api_application_example'; // string | The application ID
$api_environment = 'api_environment_example'; // string | The environment ID
$api_variable = 'api_variable_example'; // string | The variable key

try {
    $apiInstance->deleteEnvironmentVariable($api_organisation, $api_application, $api_environment, $api_variable);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->deleteEnvironmentVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_organisation** | **string**| The organisation ID | |
| **api_application** | **string**| The application ID | |
| **api_environment** | **string**| The environment ID | |
| **api_variable** | **string**| The variable key | |

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

## `listEnvironmentVariables()`

```php
listEnvironmentVariables($api_organisation, $api_application, $api_environment)
```

Get all variables for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_organisation = test-org; // string | The organisation ID
$api_application = test-app; // string | The application ID
$api_environment = test-env; // string | The environment ID

try {
    $apiInstance->listEnvironmentVariables($api_organisation, $api_application, $api_environment);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->listEnvironmentVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_organisation** | **string**| The organisation ID | |
| **api_application** | **string**| The application ID | |
| **api_environment** | **string**| The environment ID | |

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

## `updateEnvironmentVariable()`

```php
updateEnvironmentVariable($api_organisation, $api_application, $api_environment, $api_variable, $update_environment_variable_request)
```

Update a variable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\VariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_organisation = test-org; // string | The organisation ID
$api_application = test-app; // string | The application ID
$api_environment = test-env; // string | The environment ID
$api_variable = 'api_variable_example'; // string | The variable key
$update_environment_variable_request = new \QuantClient\Model\UpdateEnvironmentVariableRequest(); // \QuantClient\Model\UpdateEnvironmentVariableRequest

try {
    $apiInstance->updateEnvironmentVariable($api_organisation, $api_application, $api_environment, $api_variable, $update_environment_variable_request);
} catch (Exception $e) {
    echo 'Exception when calling VariablesApi->updateEnvironmentVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_organisation** | **string**| The organisation ID | |
| **api_application** | **string**| The application ID | |
| **api_environment** | **string**| The environment ID | |
| **api_variable** | **string**| The variable key | |
| **update_environment_variable_request** | [**\QuantClient\Model\UpdateEnvironmentVariableRequest**](../Model/UpdateEnvironmentVariableRequest.md)|  | |

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
