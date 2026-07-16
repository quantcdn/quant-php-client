# QuantClient\OpenAICompatibilityApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oaiChatCompletions()**](OpenAICompatibilityApi.md#oaiChatCompletions) | **POST** /oai/v1/chat/completions | Create a chat completion (OpenAI-compatible) |
| [**oaiEmbeddings()**](OpenAICompatibilityApi.md#oaiEmbeddings) | **POST** /oai/v1/embeddings | Create embeddings (OpenAI-compatible) |
| [**oaiGetModel()**](OpenAICompatibilityApi.md#oaiGetModel) | **GET** /oai/v1/models/{model} | Retrieve a model (OpenAI-compatible) |
| [**oaiListModels()**](OpenAICompatibilityApi.md#oaiListModels) | **GET** /oai/v1/models | List available models (OpenAI-compatible) |


## `oaiChatCompletions()`

```php
oaiChatCompletions($oai_chat_completions_request): \QuantClient\Model\OaiChatCompletions200Response
```

Create a chat completion (OpenAI-compatible)

Drop-in replacement for OpenAI's POST /v1/chat/completions. Point any OpenAI SDK at base_url=https://<host>/oai/v1 and use a Quant API token (qc_...) as the api_key. Set `stream: true` to receive Server-Sent Events (chat.completion.chunk objects terminated by `data: [DONE]`); otherwise a single chat.completion object is returned. Supports tool/function calling and the standard tool_choice modes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\OpenAICompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oai_chat_completions_request = new \QuantClient\Model\OaiChatCompletionsRequest(); // \QuantClient\Model\OaiChatCompletionsRequest

try {
    $result = $apiInstance->oaiChatCompletions($oai_chat_completions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAICompatibilityApi->oaiChatCompletions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **oai_chat_completions_request** | [**\QuantClient\Model\OaiChatCompletionsRequest**](../Model/OaiChatCompletionsRequest.md)|  | |

### Return type

[**\QuantClient\Model\OaiChatCompletions200Response**](../Model/OaiChatCompletions200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oaiEmbeddings()`

```php
oaiEmbeddings($oai_embeddings_request): \QuantClient\Model\OaiEmbeddings200Response
```

Create embeddings (OpenAI-compatible)

Drop-in replacement for OpenAI's POST /v1/embeddings. Accepts a single string or an array of strings in `input` and returns a list of embedding objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\OpenAICompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oai_embeddings_request = new \QuantClient\Model\OaiEmbeddingsRequest(); // \QuantClient\Model\OaiEmbeddingsRequest

try {
    $result = $apiInstance->oaiEmbeddings($oai_embeddings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAICompatibilityApi->oaiEmbeddings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **oai_embeddings_request** | [**\QuantClient\Model\OaiEmbeddingsRequest**](../Model/OaiEmbeddingsRequest.md)|  | |

### Return type

[**\QuantClient\Model\OaiEmbeddings200Response**](../Model/OaiEmbeddings200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oaiGetModel()`

```php
oaiGetModel($model): \QuantClient\Model\OaiGetModel200Response
```

Retrieve a model (OpenAI-compatible)

Drop-in replacement for OpenAI's GET /v1/models/{model}.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\OpenAICompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = amazon.nova-micro-v1:0; // string

try {
    $result = $apiInstance->oaiGetModel($model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAICompatibilityApi->oaiGetModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **model** | **string**|  | |

### Return type

[**\QuantClient\Model\OaiGetModel200Response**](../Model/OaiGetModel200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oaiListModels()`

```php
oaiListModels(): \QuantClient\Model\OaiListModels200Response
```

List available models (OpenAI-compatible)

Drop-in replacement for OpenAI's GET /v1/models. Returns the model ids available to the organisation; pass one of these ids as `model` in chat/embeddings requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\OpenAICompatibilityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->oaiListModels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpenAICompatibilityApi->oaiListModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\QuantClient\Model\OaiListModels200Response**](../Model/OaiListModels200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
