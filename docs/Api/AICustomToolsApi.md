# QuantClient\AICustomToolsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomTool()**](AICustomToolsApi.md#createCustomTool) | **POST** /api/v3/organizations/{organisation}/ai/custom-tools | Register Custom Edge Function Tool |
| [**deleteCustomTool()**](AICustomToolsApi.md#deleteCustomTool) | **DELETE** /api/v3/organizations/{organisation}/ai/custom-tools/{toolName} | Delete Custom Tool |
| [**listCustomTools()**](AICustomToolsApi.md#listCustomTools) | **GET** /api/v3/organizations/{organisation}/ai/custom-tools | List Custom Tools |


## `createCustomTool()`

```php
createCustomTool($organisation, $create_custom_tool_request): \QuantClient\Model\CreateCustomTool201Response
```

Register Custom Edge Function Tool

Registers a custom edge function as a tool that AI models can invoke. This enables customers to create their own tools backed by edge functions.      *      * **Edge Function Contract:**      * - Edge functions must accept POST requests with JSON payload      * - Expected request format: `{ 'toolName': '...', 'input': {...}, 'orgId': '...' }`      * - Must return JSON response with either `result` or `error` field      *      * **Async Tools:**      * Set `isAsync: true` for operations >5 seconds. The edge function should return `{ executionId: '...' }` and the AI will poll for completion.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AICustomToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$create_custom_tool_request = new \QuantClient\Model\CreateCustomToolRequest(); // \QuantClient\Model\CreateCustomToolRequest

try {
    $result = $apiInstance->createCustomTool($organisation, $create_custom_tool_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AICustomToolsApi->createCustomTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **create_custom_tool_request** | [**\QuantClient\Model\CreateCustomToolRequest**](../Model/CreateCustomToolRequest.md)|  | |

### Return type

[**\QuantClient\Model\CreateCustomTool201Response**](../Model/CreateCustomTool201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomTool()`

```php
deleteCustomTool($organisation, $tool_name): \QuantClient\Model\DeleteCustomTool200Response
```

Delete Custom Tool

Deletes a custom tool registration. The underlying edge function is not affected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AICustomToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$tool_name = 'tool_name_example'; // string | The tool name to delete

try {
    $result = $apiInstance->deleteCustomTool($organisation, $tool_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AICustomToolsApi->deleteCustomTool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **tool_name** | **string**| The tool name to delete | |

### Return type

[**\QuantClient\Model\DeleteCustomTool200Response**](../Model/DeleteCustomTool200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCustomTools()`

```php
listCustomTools($organisation): \QuantClient\Model\ListCustomTools200Response
```

List Custom Tools

Lists all registered custom edge function tools for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AICustomToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->listCustomTools($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AICustomToolsApi->listCustomTools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\ListCustomTools200Response**](../Model/ListCustomTools200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
