# QuantClient\SSHAccessApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSshAccessCredentials()**](SSHAccessApi.md#getSshAccessCredentials) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/ssh-access | Get SSH access credentials for an environment |


## `getSshAccessCredentials()`

```php
getSshAccessCredentials($organisation, $application, $environment): \QuantClient\Model\GetSshAccessCredentials200Response
```

Get SSH access credentials for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\SSHAccessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$application = 'application_example'; // string | The application name
$environment = 'environment_example'; // string | The environment name

try {
    $result = $apiInstance->getSshAccessCredentials($organisation, $application, $environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SSHAccessApi->getSshAccessCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **application** | **string**| The application name | |
| **environment** | **string**| The environment name | |

### Return type

[**\QuantClient\Model\GetSshAccessCredentials200Response**](../Model/GetSshAccessCredentials200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
