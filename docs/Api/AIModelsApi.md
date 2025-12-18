# QuantClient\AIModelsApi



All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAIModel()**](AIModelsApi.md#getAIModel) | **GET** /api/v3/organizations/{organisation}/ai/models/{modelId} | Get AI Model Details |
| [**listAIModels()**](AIModelsApi.md#listAIModels) | **GET** /api/v3/organizations/{organisation}/ai/models | List available AI models for an organization |


## `getAIModel()`

```php
getAIModel($organisation, $model_id): \QuantClient\Model\GetAIModel200Response
```

Get AI Model Details

Retrieves detailed information about a specific Bedrock model from the catalog.      *      * **Features:**      * - Complete pricing breakdown (input/output per million tokens)      * - Context window and output token limits      * - Supported features (chat, vision, streaming, embeddings)      * - Model availability and deprecation status      * - Release date for version tracking      *      * **Example Model IDs:**      * - `amazon.nova-lite-v1:0` - Default multimodal model      * - `anthropic.claude-3-5-sonnet-20241022-v2:0` - Latest Claude      * - `amazon.titan-embed-text-v2:0` - Latest embeddings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\AIModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$model_id = amazon.nova-lite-v1:0; // string | The model identifier (e.g., amazon.nova-lite-v1:0)

try {
    $result = $apiInstance->getAIModel($organisation, $model_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIModelsApi->getAIModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **model_id** | **string**| The model identifier (e.g., amazon.nova-lite-v1:0) | |

### Return type

[**\QuantClient\Model\GetAIModel200Response**](../Model/GetAIModel200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAIModels()`

```php
listAIModels($organisation, $feature): \QuantClient\Model\ListAIModels200Response
```

List available AI models for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\AIModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$feature = embeddings; // string | Filter models by supported feature

try {
    $result = $apiInstance->listAIModels($organisation, $feature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIModelsApi->listAIModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **feature** | **string**| Filter models by supported feature | [optional] [default to &#39;all&#39;] |

### Return type

[**\QuantClient\Model\ListAIModels200Response**](../Model/ListAIModels200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
