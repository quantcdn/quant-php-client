# QuantClient\ScalingPolicyApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteScalingPolicy()**](ScalingPolicyApi.md#deleteScalingPolicy) | **DELETE** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/scaling-policies/{policyName} | Delete the scaling policy for an environment |
| [**getScalingPolicies()**](ScalingPolicyApi.md#getScalingPolicies) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/scaling-policies | Get the scaling policies for an environment |
| [**updateScalingPolicy()**](ScalingPolicyApi.md#updateScalingPolicy) | **PUT** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/scaling-policies | Update the scaling policy for an environment |


## `deleteScalingPolicy()`

```php
deleteScalingPolicy($organisation, $application, $environment, $policy_name)
```

Delete the scaling policy for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ScalingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$application = 'application_example'; // string | The application ID
$environment = 'environment_example'; // string | The environment ID
$policy_name = 'policy_name_example'; // string | The policy name

try {
    $apiInstance->deleteScalingPolicy($organisation, $application, $environment, $policy_name);
} catch (Exception $e) {
    echo 'Exception when calling ScalingPolicyApi->deleteScalingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **policy_name** | **string**| The policy name | |

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

## `getScalingPolicies()`

```php
getScalingPolicies($organisation, $application, $environment)
```

Get the scaling policies for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ScalingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$application = 'application_example'; // string | The application ID
$environment = 'environment_example'; // string | The environment ID

try {
    $apiInstance->getScalingPolicies($organisation, $application, $environment);
} catch (Exception $e) {
    echo 'Exception when calling ScalingPolicyApi->getScalingPolicies: ', $e->getMessage(), PHP_EOL;
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

## `updateScalingPolicy()`

```php
updateScalingPolicy($organisation, $application, $environment, $scaling_policy)
```

Update the scaling policy for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ScalingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$application = 'application_example'; // string | The application ID
$environment = 'environment_example'; // string | The environment ID
$scaling_policy = new \QuantClient\Model\ScalingPolicy(); // \QuantClient\Model\ScalingPolicy

try {
    $apiInstance->updateScalingPolicy($organisation, $application, $environment, $scaling_policy);
} catch (Exception $e) {
    echo 'Exception when calling ScalingPolicyApi->updateScalingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **scaling_policy** | [**\QuantClient\Model\ScalingPolicy**](../Model/ScalingPolicy.md)|  | |

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
