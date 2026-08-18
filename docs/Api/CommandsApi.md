# QuantClient\CommandsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCommand()**](CommandsApi.md#createCommand) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/commands | Create a command for an environment |
| [**getCommand()**](CommandsApi.md#getCommand) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/commands/{command} | Get a command |
| [**listCommands()**](CommandsApi.md#listCommands) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/commands | Get all commands for an environment |


## `createCommand()`

```php
createCommand($organisation, $application, $environment, $create_command_request): \QuantClient\Model\Command
```

Create a command for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID
$create_command_request = new \QuantClient\Model\CreateCommandRequest(); // \QuantClient\Model\CreateCommandRequest

try {
    $result = $apiInstance->createCommand($organisation, $application, $environment, $create_command_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->createCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **create_command_request** | [**\QuantClient\Model\CreateCommandRequest**](../Model/CreateCommandRequest.md)|  | |

### Return type

[**\QuantClient\Model\Command**](../Model/Command.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommand()`

```php
getCommand($organisation, $application, $environment, $command): \QuantClient\Model\Command
```

Get a command

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID
$command = test-cmd; // string | The command run ID

try {
    $result = $apiInstance->getCommand($organisation, $application, $environment, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->getCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **command** | **string**| The command run ID | |

### Return type

[**\QuantClient\Model\Command**](../Model/Command.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCommands()`

```php
listCommands($organisation, $application, $environment)
```

Get all commands for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CommandsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID

try {
    $apiInstance->listCommands($organisation, $application, $environment);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->listCommands: ', $e->getMessage(), PHP_EOL;
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
