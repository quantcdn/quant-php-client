# QuantClient\IdleSleepApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getIdleSleep()**](IdleSleepApi.md#getIdleSleep) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/idle-sleep | Get Idle Sleep Setting |
| [**setIdleSleep()**](IdleSleepApi.md#setIdleSleep) | **PUT** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/idle-sleep | Set Idle Sleep Setting |


## `getIdleSleep()`

```php
getIdleSleep($organisation, $application, $environment): \QuantClient\Model\IdleSleepResponse
```

Get Idle Sleep Setting

Retrieves the idle sleep setting and the current sleep state for the environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\IdleSleepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$application = 'application_example'; // string
$environment = 'environment_example'; // string

try {
    $result = $apiInstance->getIdleSleep($organisation, $application, $environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdleSleepApi->getIdleSleep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **application** | **string**|  | |
| **environment** | **string**|  | |

### Return type

[**\QuantClient\Model\IdleSleepResponse**](../Model/IdleSleepResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setIdleSleep()`

```php
setIdleSleep($organisation, $application, $environment, $set_idle_sleep_request): \QuantClient\Model\IdleSleepResponse
```

Set Idle Sleep Setting

Enable or disable idle sleep. Only Fargate compute sleeps. Disabling a sleeping environment wakes it first; a 202 means it is still waking.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\IdleSleepApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$application = 'application_example'; // string
$environment = 'environment_example'; // string
$set_idle_sleep_request = new \QuantClient\Model\SetIdleSleepRequest(); // \QuantClient\Model\SetIdleSleepRequest

try {
    $result = $apiInstance->setIdleSleep($organisation, $application, $environment, $set_idle_sleep_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdleSleepApi->setIdleSleep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **application** | **string**|  | |
| **environment** | **string**|  | |
| **set_idle_sleep_request** | [**\QuantClient\Model\SetIdleSleepRequest**](../Model/SetIdleSleepRequest.md)|  | |

### Return type

[**\QuantClient\Model\IdleSleepResponse**](../Model/IdleSleepResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
