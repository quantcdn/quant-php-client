# QuantClient\ContainersApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listContainers()**](ContainersApi.md#listContainers) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/containers | Get the containers in an environment |
| [**updateContainer()**](ContainersApi.md#updateContainer) | **PUT** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/containers/{container} | Update a container in an environment |


## `listContainers()`

```php
listContainers($organisation, $application, $environment)
```

Get the containers in an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID

try {
    $apiInstance->listContainers($organisation, $application, $environment);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->listContainers: ', $e->getMessage(), PHP_EOL;
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

## `updateContainer()`

```php
updateContainer($organisation, $application, $environment, $container, $container2): \QuantClient\Model\Container
```

Update a container in an environment

Updates one container in the environment's compose definition and redeploys the environment. The fields in the request body replace the same fields of the container. Fields that the request body omits keep their current values. Other containers and the task-level settings do not change. To clear a field, send it as null. The container name in the body must match the name in the path: a container cannot be renamed. Container updates to one environment run one at a time. A compose change made at the same moment through another endpoint can still overwrite this update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ContainersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID
$container = app; // string | The container name
$container2 = new \QuantClient\Model\Container(); // \QuantClient\Model\Container

try {
    $result = $apiInstance->updateContainer($organisation, $application, $environment, $container, $container2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContainersApi->updateContainer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **container** | **string**| The container name | |
| **container2** | [**\QuantClient\Model\Container**](../Model/Container.md)|  | |

### Return type

[**\QuantClient\Model\Container**](../Model/Container.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
