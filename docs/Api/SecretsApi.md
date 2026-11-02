# QuantClient\SecretsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteEnvironmentSecret()**](SecretsApi.md#deleteEnvironmentSecret) | **DELETE** /api/v3/organizations/{api_organisation}/applications/{api_application}/environments/{api_environment}/secrets/{api_secret} | Delete a secret |
| [**listEnvironmentSecrets()**](SecretsApi.md#listEnvironmentSecrets) | **GET** /api/v3/organizations/{api_organisation}/applications/{api_application}/environments/{api_environment}/secrets | List the secret names for an environment |
| [**updateEnvironmentSecret()**](SecretsApi.md#updateEnvironmentSecret) | **PUT** /api/v3/organizations/{api_organisation}/applications/{api_application}/environments/{api_environment}/secrets/{api_secret} | Create or replace a secret |


## `deleteEnvironmentSecret()`

```php
deleteEnvironmentSecret($api_organisation, $api_application, $api_environment, $api_secret): \QuantClient\Model\DeleteEnvironmentSecret200Response
```

Delete a secret

Deletes the secret. The change takes effect on the next redeploy of the environment. A 200 with warnings means the deployed revision still references the secret and cannot start a replacement task until it is redeployed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_organisation = 'api_organisation_example'; // string | The organisation ID
$api_application = 'api_application_example'; // string | The application ID
$api_environment = 'api_environment_example'; // string | The environment ID
$api_secret = 'api_secret_example'; // string | The secret key

try {
    $result = $apiInstance->deleteEnvironmentSecret($api_organisation, $api_application, $api_environment, $api_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretsApi->deleteEnvironmentSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_organisation** | **string**| The organisation ID | |
| **api_application** | **string**| The application ID | |
| **api_environment** | **string**| The environment ID | |
| **api_secret** | **string**| The secret key | |

### Return type

[**\QuantClient\Model\DeleteEnvironmentSecret200Response**](../Model/DeleteEnvironmentSecret200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEnvironmentSecrets()`

```php
listEnvironmentSecrets($api_organisation, $api_application, $api_environment): \QuantClient\Model\SecretKey[]
```

List the secret names for an environment

Returns the names of the environment's secrets. Secret values are write-only and are never returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_organisation = test-org; // string | The organisation ID
$api_application = test-app; // string | The application ID
$api_environment = test-env; // string | The environment ID

try {
    $result = $apiInstance->listEnvironmentSecrets($api_organisation, $api_application, $api_environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretsApi->listEnvironmentSecrets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_organisation** | **string**| The organisation ID | |
| **api_application** | **string**| The application ID | |
| **api_environment** | **string**| The environment ID | |

### Return type

[**\QuantClient\Model\SecretKey[]**](../Model/SecretKey.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvironmentSecret()`

```php
updateEnvironmentSecret($api_organisation, $api_application, $api_environment, $api_secret, $update_environment_secret_request): \QuantClient\Model\SecretWriteResult
```

Create or replace a secret

Sets the secret value. The value is write-only: the response returns the key only. The change takes effect on the next redeploy of the environment. A name that already exists as an environment variable is refused with 409.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\SecretsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_organisation = test-org; // string | The organisation ID
$api_application = test-app; // string | The application ID
$api_environment = test-env; // string | The environment ID
$api_secret = DB_PASSWORD; // string | The secret key
$update_environment_secret_request = new \QuantClient\Model\UpdateEnvironmentSecretRequest(); // \QuantClient\Model\UpdateEnvironmentSecretRequest

try {
    $result = $apiInstance->updateEnvironmentSecret($api_organisation, $api_application, $api_environment, $api_secret, $update_environment_secret_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecretsApi->updateEnvironmentSecret: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api_organisation** | **string**| The organisation ID | |
| **api_application** | **string**| The application ID | |
| **api_environment** | **string**| The environment ID | |
| **api_secret** | **string**| The secret key | |
| **update_environment_secret_request** | [**\QuantClient\Model\UpdateEnvironmentSecretRequest**](../Model/UpdateEnvironmentSecretRequest.md)|  | |

### Return type

[**\QuantClient\Model\SecretWriteResult**](../Model/SecretWriteResult.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
