# QuantClient\AIFilterPoliciesApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFilterPolicy()**](AIFilterPoliciesApi.md#createFilterPolicy) | **POST** /api/v3/organizations/{organisation}/ai/filter-policies | Create an AI filter policy for an organisation |
| [**deleteFilterPolicy()**](AIFilterPoliciesApi.md#deleteFilterPolicy) | **DELETE** /api/v3/organizations/{organisation}/ai/filter-policies/{policyId} | Delete a specific AI filter policy |
| [**disableFilterPolicy()**](AIFilterPoliciesApi.md#disableFilterPolicy) | **PUT** /api/v3/organizations/{organisation}/ai/filter-policies/{policyId}/disable | Disable a specific AI filter policy |
| [**enableFilterPolicy()**](AIFilterPoliciesApi.md#enableFilterPolicy) | **PUT** /api/v3/organizations/{organisation}/ai/filter-policies/{policyId}/enable | Enable a specific AI filter policy |
| [**getFilterPolicy()**](AIFilterPoliciesApi.md#getFilterPolicy) | **GET** /api/v3/organizations/{organisation}/ai/filter-policies/{policyId} | Get a specific AI filter policy |
| [**listFilterPolicies()**](AIFilterPoliciesApi.md#listFilterPolicies) | **GET** /api/v3/organizations/{organisation}/ai/filter-policies | List AI filter policies for an organisation |
| [**updateFilterPolicy()**](AIFilterPoliciesApi.md#updateFilterPolicy) | **PUT** /api/v3/organizations/{organisation}/ai/filter-policies/{policyId} | Update a specific AI filter policy |


## `createFilterPolicy()`

```php
createFilterPolicy($organisation, $create_filter_policy_request): object
```

Create an AI filter policy for an organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIFilterPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$create_filter_policy_request = new \QuantClient\Model\CreateFilterPolicyRequest(); // \QuantClient\Model\CreateFilterPolicyRequest

try {
    $result = $apiInstance->createFilterPolicy($organisation, $create_filter_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIFilterPoliciesApi->createFilterPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **create_filter_policy_request** | [**\QuantClient\Model\CreateFilterPolicyRequest**](../Model/CreateFilterPolicyRequest.md)|  | |

### Return type

**object**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFilterPolicy()`

```php
deleteFilterPolicy($organisation, $policy_id): object
```

Delete a specific AI filter policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIFilterPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$policy_id = 'policy_id_example'; // string

try {
    $result = $apiInstance->deleteFilterPolicy($organisation, $policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIFilterPoliciesApi->deleteFilterPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **policy_id** | **string**|  | |

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

## `disableFilterPolicy()`

```php
disableFilterPolicy($organisation, $policy_id): object
```

Disable a specific AI filter policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIFilterPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$policy_id = 'policy_id_example'; // string

try {
    $result = $apiInstance->disableFilterPolicy($organisation, $policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIFilterPoliciesApi->disableFilterPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **policy_id** | **string**|  | |

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

## `enableFilterPolicy()`

```php
enableFilterPolicy($organisation, $policy_id): object
```

Enable a specific AI filter policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIFilterPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$policy_id = 'policy_id_example'; // string

try {
    $result = $apiInstance->enableFilterPolicy($organisation, $policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIFilterPoliciesApi->enableFilterPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **policy_id** | **string**|  | |

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

## `getFilterPolicy()`

```php
getFilterPolicy($organisation, $policy_id): object
```

Get a specific AI filter policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIFilterPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$policy_id = 'policy_id_example'; // string

try {
    $result = $apiInstance->getFilterPolicy($organisation, $policy_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIFilterPoliciesApi->getFilterPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **policy_id** | **string**|  | |

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

## `listFilterPolicies()`

```php
listFilterPolicies($organisation): object
```

List AI filter policies for an organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIFilterPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->listFilterPolicies($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIFilterPoliciesApi->listFilterPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

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

## `updateFilterPolicy()`

```php
updateFilterPolicy($organisation, $policy_id, $update_filter_policy_request): object
```

Update a specific AI filter policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIFilterPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$policy_id = 'policy_id_example'; // string
$update_filter_policy_request = new \QuantClient\Model\UpdateFilterPolicyRequest(); // \QuantClient\Model\UpdateFilterPolicyRequest

try {
    $result = $apiInstance->updateFilterPolicy($organisation, $policy_id, $update_filter_policy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIFilterPoliciesApi->updateFilterPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **policy_id** | **string**|  | |
| **update_filter_policy_request** | [**\QuantClient\Model\UpdateFilterPolicyRequest**](../Model/UpdateFilterPolicyRequest.md)|  | |

### Return type

**object**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
