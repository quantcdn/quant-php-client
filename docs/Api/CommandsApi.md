# QuantClient\CommandsApi

Execute commands in application containers

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCommand()**](CommandsApi.md#createCommand) | **POST** /api/v3/organizations/{organisation}/environments/{environment}/commands | Create a command for an environment |
| [**getCommand()**](CommandsApi.md#getCommand) | **GET** /api/v3/organizations/{organisation}/environments/{environment}/commands/{command} | Get a command |
| [**listCommands()**](CommandsApi.md#listCommands) | **GET** /api/v3/organizations/{organisation}/environments/{environment}/commands | Get all commands for an environment |


## `createCommand()`

```php
createCommand($organisation, $environment, $create_command_request): \QuantClient\Model\Command
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
$environment = test-env; // string | The environment ID
$create_command_request = new \QuantClient\Model\CreateCommandRequest(); // \QuantClient\Model\CreateCommandRequest

try {
    $result = $apiInstance->createCommand($organisation, $environment, $create_command_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->createCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
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
getCommand($organisation, $environment, $command): \QuantClient\Model\Command
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
$environment = test-env; // string | The environment ID
$command = test-cmd; // string | The command ID

try {
    $result = $apiInstance->getCommand($organisation, $environment, $command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->getCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **environment** | **string**| The environment ID | |
| **command** | **string**| The command ID | |

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
listCommands($organisation, $environment): \QuantClient\Model\Command
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
$environment = test-env; // string | The environment ID

try {
    $result = $apiInstance->listCommands($organisation, $environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandsApi->listCommands: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **environment** | **string**| The environment ID | |

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
