# QuantClient\CIValuesApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCiValue()**](CIValuesApi.md#deleteCiValue) | **DELETE** /api/v3/organizations/{organisation}/ci/values/{name} | Delete a CI secret or variable |
| [**listCiValues()**](CIValuesApi.md#listCiValues) | **GET** /api/v3/organizations/{organisation}/ci/values | List the CI secrets and variables |
| [**putCiValue()**](CIValuesApi.md#putCiValue) | **PUT** /api/v3/organizations/{organisation}/ci/values/{name} | Create or replace a CI secret or variable |


## `deleteCiValue()`

```php
deleteCiValue($organisation, $name, $repo)
```

Delete a CI secret or variable

Deletes one value. It answers 204 also when the value does not exist. Needs the cloud:write scope and the delete_applications permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CIValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$name = DEPLOY_KEY; // string | The name, such as DEPLOY_KEY
$repo = acme/web; // string | Delete the repository's value of this name. Leave out for the organisation's value. Lower-cased by the server.

try {
    $apiInstance->deleteCiValue($organisation, $name, $repo);
} catch (Exception $e) {
    echo 'Exception when calling CIValuesApi->deleteCiValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **name** | **string**| The name, such as DEPLOY_KEY | |
| **repo** | **string**| Delete the repository&#39;s value of this name. Leave out for the organisation&#39;s value. Lower-cased by the server. | [optional] |

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

## `listCiValues()`

```php
listCiValues($organisation, $repo): \QuantClient\Model\ListCiValues200Response
```

List the CI secrets and variables

Returns the organisation's CI values and, without the repo filter, every repository's values. A variable carries its value. A secret never does. Quant gives the values to CI jobs on the organisation's runner pools. A workflow reads a secret as `${{ secrets.NAME }}` and a variable as `${{ vars.NAME }}`. Needs the cloud:read scope and the CI runners feature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CIValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$repo = acme/web; // string | Only the organisation's values and this repository's values. Lower-cased by the server.

try {
    $result = $apiInstance->listCiValues($organisation, $repo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CIValuesApi->listCiValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **repo** | **string**| Only the organisation&#39;s values and this repository&#39;s values. Lower-cased by the server. | [optional] |

### Return type

[**\QuantClient\Model\ListCiValues200Response**](../Model/ListCiValues200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCiValue()`

```php
putCiValue($organisation, $name, $put_ci_value_request): \QuantClient\Model\CiValueWriteResult
```

Create or replace a CI secret or variable

Sets one value for the organisation, or for one repository when repo is set. The value is write-only for a secret: the response never carries it. The backend validates the name, the value and the limits and answers 400 with a message. Needs the cloud:write scope and the delete_applications permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CIValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$name = DEPLOY_KEY; // string | The name, such as DEPLOY_KEY
$put_ci_value_request = new \QuantClient\Model\PutCiValueRequest(); // \QuantClient\Model\PutCiValueRequest

try {
    $result = $apiInstance->putCiValue($organisation, $name, $put_ci_value_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CIValuesApi->putCiValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **name** | **string**| The name, such as DEPLOY_KEY | |
| **put_ci_value_request** | [**\QuantClient\Model\PutCiValueRequest**](../Model/PutCiValueRequest.md)|  | |

### Return type

[**\QuantClient\Model\CiValueWriteResult**](../Model/CiValueWriteResult.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
