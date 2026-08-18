# QuantClient\ScalingPolicyApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteScalingPolicy()**](ScalingPolicyApi.md#deleteScalingPolicy) | **DELETE** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/scaling-policies | Delete Scaling Policy |
| [**listScalingPolicies()**](ScalingPolicyApi.md#listScalingPolicies) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/scaling-policies | List Scaling Policies |
| [**upsertScalingPolicy()**](ScalingPolicyApi.md#upsertScalingPolicy) | **PUT** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/scaling-policies | Upsert Scaling Policy |


## `deleteScalingPolicy()`

```php
deleteScalingPolicy($organisation, $application, $environment, $metric, $policy_name)
```

Delete Scaling Policy

Deletes a specific scaling policy for the environment. Specify the metric type or policy name to delete a single policy. If neither is provided, all policies will be deleted.

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
$organisation = 'organisation_example'; // string
$application = 'application_example'; // string
$environment = 'environment_example'; // string
$metric = 'metric_example'; // string | Optional. Delete by metric type.
$policy_name = 'policy_name_example'; // string | Optional. Delete by exact policy name.

try {
    $apiInstance->deleteScalingPolicy($organisation, $application, $environment, $metric, $policy_name);
} catch (Exception $e) {
    echo 'Exception when calling ScalingPolicyApi->deleteScalingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **application** | **string**|  | |
| **environment** | **string**|  | |
| **metric** | **string**| Optional. Delete by metric type. | [optional] |
| **policy_name** | **string**| Optional. Delete by exact policy name. | [optional] |

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

## `listScalingPolicies()`

```php
listScalingPolicies($organisation, $application, $environment, $metric, $policy_name): \QuantClient\Model\ScalingPolicyListResponse
```

List Scaling Policies

Retrieves all active target tracking scaling policies for the environment. Returns an array of policies, each with its metric, target value, cooldowns, and resource label (if applicable).

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
$organisation = 'organisation_example'; // string
$application = 'application_example'; // string
$environment = 'environment_example'; // string
$metric = 'metric_example'; // string | Optional. Filter policies by metric type.
$policy_name = 'policy_name_example'; // string | Optional. Filter policies by exact policy name.

try {
    $result = $apiInstance->listScalingPolicies($organisation, $application, $environment, $metric, $policy_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScalingPolicyApi->listScalingPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **application** | **string**|  | |
| **environment** | **string**|  | |
| **metric** | **string**| Optional. Filter policies by metric type. | [optional] |
| **policy_name** | **string**| Optional. Filter policies by exact policy name. | [optional] |

### Return type

[**\QuantClient\Model\ScalingPolicyListResponse**](../Model/ScalingPolicyListResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertScalingPolicy()`

```php
upsertScalingPolicy($organisation, $application, $environment, $set_scaling_policy_request, $policy_name): \QuantClient\Model\GetScalingPolicyResponse
```

Upsert Scaling Policy

Creates or updates a target tracking scaling policy for the environment. Specify the metric type and target value. If a policy with the same metric or name exists, it will be updated. Optionally, provide a custom policy name via query.

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
$organisation = 'organisation_example'; // string
$application = 'application_example'; // string
$environment = 'environment_example'; // string
$set_scaling_policy_request = new \QuantClient\Model\SetScalingPolicyRequest(); // \QuantClient\Model\SetScalingPolicyRequest
$policy_name = 'policy_name_example'; // string | Optional. Specify a custom policy name to upsert.

try {
    $result = $apiInstance->upsertScalingPolicy($organisation, $application, $environment, $set_scaling_policy_request, $policy_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScalingPolicyApi->upsertScalingPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **application** | **string**|  | |
| **environment** | **string**|  | |
| **set_scaling_policy_request** | [**\QuantClient\Model\SetScalingPolicyRequest**](../Model/SetScalingPolicyRequest.md)|  | |
| **policy_name** | **string**| Optional. Specify a custom policy name to upsert. | [optional] |

### Return type

[**\QuantClient\Model\GetScalingPolicyResponse**](../Model/GetScalingPolicyResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
