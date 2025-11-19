# QuantClient\AIServicesApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**chatInference()**](AIServicesApi.md#chatInference) | **POST** /api/v3/organizations/{organisation}/ai/chat | Chat inference via API Gateway (buffered responses) with multimodal support |
| [**chatInferenceStream()**](AIServicesApi.md#chatInferenceStream) | **POST** /api/v3/organizations/{organisation}/ai/chat/stream | Chat inference via streaming endpoint (true HTTP streaming) with multimodal support |
| [**createAISession()**](AIServicesApi.md#createAISession) | **POST** /api/v3/organizations/{organisation}/ai/sessions | Create a new chat session with multi-tenant isolation |
| [**deleteAISession()**](AIServicesApi.md#deleteAISession) | **DELETE** /api/v3/organizations/{organisation}/ai/sessions/{sessionId} | Delete a chat session |
| [**embeddings()**](AIServicesApi.md#embeddings) | **POST** /api/v3/organizations/{organisation}/ai/embeddings | Generate text embeddings for semantic search and RAG applications |
| [**getAIConfig()**](AIServicesApi.md#getAIConfig) | **GET** /api/v3/organizations/{organisation}/ai/config | Get AI configuration for an organization |
| [**getAISession()**](AIServicesApi.md#getAISession) | **GET** /api/v3/organizations/{organisation}/ai/sessions/{sessionId} | Get a specific chat session |
| [**getAIUsageStats()**](AIServicesApi.md#getAIUsageStats) | **GET** /api/v3/organizations/{organisation}/ai/usage | Get AI usage statistics |
| [**getToolExecutionStatus()**](AIServicesApi.md#getToolExecutionStatus) | **GET** /api/v3/organizations/{organisation}/ai/tools/executions/{executionId} | Get async tool execution status and result |
| [**imageGeneration()**](AIServicesApi.md#imageGeneration) | **POST** /api/v3/organizations/{organisation}/ai/image-generation | Generate images with Amazon Nova Canvas |
| [**listAIModels()**](AIServicesApi.md#listAIModels) | **GET** /api/v3/organizations/{organisation}/ai/models | List available AI models for an organization |
| [**listAISessions()**](AIServicesApi.md#listAISessions) | **GET** /api/v3/organizations/{organisation}/ai/sessions | List chat sessions with multi-tenant filtering |
| [**listAIToolNames()**](AIServicesApi.md#listAIToolNames) | **GET** /api/v3/organizations/{organisation}/ai/tools/names | List tool names only (lightweight response) |
| [**listAITools()**](AIServicesApi.md#listAITools) | **GET** /api/v3/organizations/{organisation}/ai/tools | List available built-in tools for function calling |
| [**listToolExecutions()**](AIServicesApi.md#listToolExecutions) | **GET** /api/v3/organizations/{organisation}/ai/tools/executions | List tool executions for monitoring and debugging |
| [**updateAIConfig()**](AIServicesApi.md#updateAIConfig) | **PUT** /api/v3/organizations/{organisation}/ai/config | Update AI configuration for an organization |


## `chatInference()`

```php
chatInference($organisation, $chat_inference_request): \QuantClient\Model\ChatInference200Response
```

Chat inference via API Gateway (buffered responses) with multimodal support

Sends requests to the AI API Gateway endpoint which buffers responses. Supports text, images, videos, and documents via base64 encoding.      *      * **Multimodal Support:**      * - **Text**: Simple string content      * - **Images**: Base64-encoded PNG, JPEG, GIF, WebP (up to 25MB)      * - **Videos**: Base64-encoded MP4, MOV, WebM, etc. (up to 25MB)      * - **Documents**: Base64-encoded PDF, DOCX, CSV, etc. (up to 25MB)      *      * **Supported Models:**      * - Amazon Nova Lite, Micro, Pro (all support multimodal)      * - Claude models (text only)      *      * **Usage Tips:**      * - Use base64 encoding for images/videos < 5-10MB      * - Place media before text prompts for best results      * - Label multiple media files (e.g., 'Image 1:', 'Image 2:')      * - Maximum 25MB total payload size      *      * **Response Patterns:**      * - **Text-only**: Returns simple text response when no tools requested      * - **Single tool**: Returns `toolUse` object when AI requests one tool      * - **Multiple tools**: Returns `toolUse` array when AI requests multiple tools      * - **Auto-execute sync**: Automatically executes tool and returns final text response      * - **Auto-execute async**: Returns toolUse with `executionId` and `status` for polling

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$chat_inference_request = new \QuantClient\Model\ChatInferenceRequest(); // \QuantClient\Model\ChatInferenceRequest | Chat request with optional multimodal content blocks

try {
    $result = $apiInstance->chatInference($organisation, $chat_inference_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->chatInference: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **chat_inference_request** | [**\QuantClient\Model\ChatInferenceRequest**](../Model/ChatInferenceRequest.md)| Chat request with optional multimodal content blocks | |

### Return type

[**\QuantClient\Model\ChatInference200Response**](../Model/ChatInference200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `chatInferenceStream()`

```php
chatInferenceStream($organisation, $chat_inference_stream_request): string
```

Chat inference via streaming endpoint (true HTTP streaming) with multimodal support

Streams responses from the AI streaming subdomain using Server-Sent Events (SSE). Tokens are streamed in real-time as they are generated.      *      * **Multimodal Support:**      * - **Text**: Simple string content      * - **Images**: Base64-encoded PNG, JPEG, GIF, WebP (up to 25MB)      * - **Videos**: Base64-encoded MP4, MOV, WebM, etc. (up to 25MB)      * - **Documents**: Base64-encoded PDF, DOCX, CSV, etc. (up to 25MB)      *      * **Supported Models:**      * - Amazon Nova Lite, Micro, Pro (all support multimodal)      * - Claude models (text only)      *      * **Usage Tips:**      * - Use base64 encoding for images/videos < 5-10MB      * - Place media before text prompts for best results      * - Label multiple media files (e.g., 'Image 1:', 'Image 2:')      * - Maximum 25MB total payload size      * - Streaming works with all content types (text, image, video, document)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$chat_inference_stream_request = new \QuantClient\Model\ChatInferenceStreamRequest(); // \QuantClient\Model\ChatInferenceStreamRequest | Chat request with optional multimodal content blocks

try {
    $result = $apiInstance->chatInferenceStream($organisation, $chat_inference_stream_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->chatInferenceStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **chat_inference_stream_request** | [**\QuantClient\Model\ChatInferenceStreamRequest**](../Model/ChatInferenceStreamRequest.md)| Chat request with optional multimodal content blocks | |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `text/event-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAISession()`

```php
createAISession($organisation, $create_ai_session_request): \QuantClient\Model\CreateAISession201Response
```

Create a new chat session with multi-tenant isolation

Creates an AI session with automatic expiration (60 min default, 24h max). Sessions are isolated by organization. Use userId to identify the user creating the session. Use sessionGroup for logical grouping. Use metadata for additional custom data. Filter sessions by userId or sessionGroup when listing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$create_ai_session_request = new \QuantClient\Model\CreateAISessionRequest(); // \QuantClient\Model\CreateAISessionRequest

try {
    $result = $apiInstance->createAISession($organisation, $create_ai_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->createAISession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **create_ai_session_request** | [**\QuantClient\Model\CreateAISessionRequest**](../Model/CreateAISessionRequest.md)|  | |

### Return type

[**\QuantClient\Model\CreateAISession201Response**](../Model/CreateAISession201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAISession()`

```php
deleteAISession($organisation, $session_id): \QuantClient\Model\DeleteAISession200Response
```

Delete a chat session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$session_id = 'session_id_example'; // string | The session ID

try {
    $result = $apiInstance->deleteAISession($organisation, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->deleteAISession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **session_id** | **string**| The session ID | |

### Return type

[**\QuantClient\Model\DeleteAISession200Response**](../Model/DeleteAISession200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `embeddings()`

```php
embeddings($organisation, $embeddings_request): \QuantClient\Model\Embeddings200Response
```

Generate text embeddings for semantic search and RAG applications

Generates vector embeddings for text content using embedding models. Used for semantic search, document similarity, and RAG applications.      *      * **Features:**      * - Single text or batch processing (up to 100 texts)      * - Configurable dimensions (256, 512, 1024, 8192 for Titan v2)      * - Optional normalization to unit length      * - Usage tracking for billing      *      * **Use Cases:**      * - Semantic search across documents      * - Similarity matching for content recommendations      * - RAG (Retrieval-Augmented Generation) pipelines      * - Clustering and classification      *      * **Available Embedding Models:**      * - amazon.titan-embed-text-v2:0 (default, supports 256-8192 dimensions)      * - amazon.titan-embed-text-v1:0 (1536 dimensions fixed)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$embeddings_request = {"input":"The Australian government announced new climate policy","modelId":"amazon.titan-embed-text-v2:0","dimensions":1024,"normalize":true}; // \QuantClient\Model\EmbeddingsRequest | Embedding request with single or multiple texts

try {
    $result = $apiInstance->embeddings($organisation, $embeddings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->embeddings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **embeddings_request** | [**\QuantClient\Model\EmbeddingsRequest**](../Model/EmbeddingsRequest.md)| Embedding request with single or multiple texts | |

### Return type

[**\QuantClient\Model\Embeddings200Response**](../Model/Embeddings200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAIConfig()`

```php
getAIConfig($organisation): \QuantClient\Model\GetAIConfig200Response
```

Get AI configuration for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->getAIConfig($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->getAIConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\GetAIConfig200Response**](../Model/GetAIConfig200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAISession()`

```php
getAISession($organisation, $session_id): \QuantClient\Model\GetAISession200Response
```

Get a specific chat session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$session_id = 'session_id_example'; // string | The session ID

try {
    $result = $apiInstance->getAISession($organisation, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->getAISession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **session_id** | **string**| The session ID | |

### Return type

[**\QuantClient\Model\GetAISession200Response**](../Model/GetAISession200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAIUsageStats()`

```php
getAIUsageStats($organisation, $month): \QuantClient\Model\GetAIUsageStats200Response
```

Get AI usage statistics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$month = 2025-10; // string | Month to retrieve statistics for (YYYY-MM format)

try {
    $result = $apiInstance->getAIUsageStats($organisation, $month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->getAIUsageStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **month** | **string**| Month to retrieve statistics for (YYYY-MM format) | [optional] |

### Return type

[**\QuantClient\Model\GetAIUsageStats200Response**](../Model/GetAIUsageStats200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getToolExecutionStatus()`

```php
getToolExecutionStatus($organisation, $execution_id): \QuantClient\Model\GetToolExecutionStatus200Response
```

Get async tool execution status and result

Retrieves the status and result of an async tool execution. Used for polling long-running tools like image generation.      *      * **Async Tool Execution Pattern:**      * This endpoint enables a polling pattern for long-running tools that would otherwise hit API Gateway's 30-second timeout.      *      * **Flow:**      * 1. AI requests tool use (e.g., `generate_image`)      * 2. Chat API returns `toolUse` with execution tracking info      * 3. Client starts polling this endpoint with the `executionId`      * 4. When `status === 'complete'`, retrieve `result` and send back to AI      * 5. AI incorporates result into final response      *      * **Status Values:**      * - `pending`: Tool execution queued, not yet started      * - `running`: Tool is currently executing      * - `complete`: Tool execution finished successfully, `result` available      * - `failed`: Tool execution failed, `error` available      *      * **Polling Recommendations:**      * - Poll every 2-3 seconds for image generation      * - Exponential backoff for other tools (start 1s, max 5s)      * - Stop polling after 5 minutes (consider failed)      * - Auto-cleanup after 24 hours (TTL)      *      * **Use Cases:**      * - Image generation (10-15s typical runtime)      * - Video processing      * - Large file uploads/downloads      * - Complex database queries      * - External API calls with high latency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$execution_id = exec_0123456789abcdef0123456789abcdef; // string | Tool execution identifier

try {
    $result = $apiInstance->getToolExecutionStatus($organisation, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->getToolExecutionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **execution_id** | **string**| Tool execution identifier | |

### Return type

[**\QuantClient\Model\GetToolExecutionStatus200Response**](../Model/GetToolExecutionStatus200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imageGeneration()`

```php
imageGeneration($organisation, $image_generation_request): \QuantClient\Model\ImageGeneration200Response
```

Generate images with Amazon Nova Canvas

Generates images using Amazon Nova Canvas image generation model.      *      * **Region Restriction:** Nova Canvas is ONLY available in:      * - `us-east-1` (US East, N. Virginia)      * - `ap-northeast-1` (Asia Pacific, Tokyo)      * - `eu-west-1` (Europe, Ireland)      * ❌ NOT available in `ap-southeast-2` (Sydney)      *      * **Supported Task Types:**      * - **TEXT_IMAGE**: Basic text-to-image generation      * - **TEXT_IMAGE with Conditioning**: Layout-guided generation using edge detection or segmentation      * - **COLOR_GUIDED_GENERATION**: Generate images with specific color palettes      * - **IMAGE_VARIATION**: Create variations of existing images      * - **INPAINTING**: Fill masked areas in images      * - **OUTPAINTING**: Extend images beyond their borders      * - **BACKGROUND_REMOVAL**: Remove backgrounds from images      * - **VIRTUAL_TRY_ON**: Try on garments/objects on people      *      * **Quality Options:**      * - **standard**: Faster generation, lower cost      * - **premium**: Higher quality, slower generation      *      * **Timeout:** Image generation can take up to 5 minutes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$image_generation_request = {"taskType":"TEXT_IMAGE","textToImageParams":{"text":"A serene mountain landscape at sunset with snow-capped peaks","negativeText":"blurry, low quality, distorted","style":"PHOTOREALISM"},"imageGenerationConfig":{"width":1024,"height":1024,"quality":"premium","numberOfImages":1,"cfgScale":7},"region":"us-east-1"}; // \QuantClient\Model\ImageGenerationRequest | Image generation request

try {
    $result = $apiInstance->imageGeneration($organisation, $image_generation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->imageGeneration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **image_generation_request** | [**\QuantClient\Model\ImageGenerationRequest**](../Model/ImageGenerationRequest.md)| Image generation request | |

### Return type

[**\QuantClient\Model\ImageGeneration200Response**](../Model/ImageGeneration200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new QuantClient\Api\AIServicesApi(
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
    echo 'Exception when calling AIServicesApi->listAIModels: ', $e->getMessage(), PHP_EOL;
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

## `listAISessions()`

```php
listAISessions($organisation, $user_id, $session_group, $limit, $offset, $model): \QuantClient\Model\ListAISessions200ResponseInner[]
```

List chat sessions with multi-tenant filtering

Lists active sessions for an organization with flexible filtering options.      *      * **Query Combinations:**      * 1. By Organization (default): Returns all sessions in the organization      * 2. By Organization + Group: `?sessionGroup=drupal-prod` - Sessions in a specific group      * 3. By User: `?userId=user-123` - All sessions for a user      * 4. By User + Group: `?userId=user-123&sessionGroup=drupal-prod` - User's sessions in a specific group      *      * **Use Cases:**      * - List user's conversations in a specific app/environment      * - Admin view of all sessions in a customer/tenant group      * - User profile showing all AI conversations across apps

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$user_id = user-12345; // string | Filter sessions by user ID
$session_group = drupal-production; // string | Filter by session group. Returns only sessions matching the specified group.
$limit = 50; // int | Maximum number of sessions to return (default 50, max 100)
$offset = 56; // int | Offset for pagination
$model = 'model_example'; // string | Filter by model ID

try {
    $result = $apiInstance->listAISessions($organisation, $user_id, $session_group, $limit, $offset, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->listAISessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **user_id** | **string**| Filter sessions by user ID | [optional] |
| **session_group** | **string**| Filter by session group. Returns only sessions matching the specified group. | [optional] |
| **limit** | **int**| Maximum number of sessions to return (default 50, max 100) | [optional] [default to 50] |
| **offset** | **int**| Offset for pagination | [optional] |
| **model** | **string**| Filter by model ID | [optional] |

### Return type

[**\QuantClient\Model\ListAISessions200ResponseInner[]**](../Model/ListAISessions200ResponseInner.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAIToolNames()`

```php
listAIToolNames($organisation): \QuantClient\Model\ListAIToolNames200Response
```

List tool names only (lightweight response)

Retrieves just the names of available built-in tools. Useful for quick validation or UI dropdown population without the full tool specifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->listAIToolNames($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->listAIToolNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\ListAIToolNames200Response**](../Model/ListAIToolNames200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAITools()`

```php
listAITools($organisation): \QuantClient\Model\ListAITools200Response
```

List available built-in tools for function calling

Retrieves all available built-in tools that can be used with function calling. These tools can be included in `toolConfig` when making AI inference requests.      *      * **Available Built-in Tools:**      * - `get_weather`: Get current weather for a location using Open-Meteo API      * - `calculate`: Perform basic mathematical calculations (add, subtract, multiply, divide)      * - `search_web`: Search the web for information (mock implementation)      * - `generate_image`: Generate images with Amazon Nova Canvas (async execution, 10-15s typical runtime)      *      * **Use Cases:**      * - Discover available tools dynamically without hardcoding      * - Get complete tool specifications including input schemas      * - Build UI for tool selection      * - Validate tool names before sending requests      *      * **Dynamic Tool Discovery:**      * This endpoint enables clients to:      * 1. Fetch all available tools on page load      * 2. Display tool capabilities to users      * 3. Filter tools based on user permissions      * 4. Use `allowedTools` whitelist for security      *      * **Alternative Endpoint:**      * - `GET /ai/tools/names` - Returns only tool names (faster, lighter response)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->listAITools($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->listAITools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\ListAITools200Response**](../Model/ListAITools200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listToolExecutions()`

```php
listToolExecutions($organisation, $status, $limit): \QuantClient\Model\ListToolExecutions200Response
```

List tool executions for monitoring and debugging

Lists recent async tool executions for an organization. Useful for debugging, monitoring, and building admin UIs.      *      * **Query Patterns:**      * - All recent executions: `GET /ai/tools/executions`      * - Filter by status: `GET /ai/tools/executions?status=running`      * - Limit results: `GET /ai/tools/executions?limit=20`      *      * **Results:**      * - Ordered by creation time (newest first)      * - Limited to 50 by default (configurable via `limit` parameter)      * - Only shows executions not yet expired (24h TTL)      *      * **Use Cases:**      * - Monitor all active tool executions      * - Debug failed executions      * - Build admin dashboards      * - Track tool usage patterns      * - Audit async operations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$status = 'status_example'; // string | Filter by execution status
$limit = 50; // int | Maximum number of executions to return

try {
    $result = $apiInstance->listToolExecutions($organisation, $status, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->listToolExecutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **status** | **string**| Filter by execution status | [optional] |
| **limit** | **int**| Maximum number of executions to return | [optional] [default to 50] |

### Return type

[**\QuantClient\Model\ListToolExecutions200Response**](../Model/ListToolExecutions200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAIConfig()`

```php
updateAIConfig($organisation, $update_ai_config_request)
```

Update AI configuration for an organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$update_ai_config_request = new \QuantClient\Model\UpdateAIConfigRequest(); // \QuantClient\Model\UpdateAIConfigRequest

try {
    $apiInstance->updateAIConfig($organisation, $update_ai_config_request);
} catch (Exception $e) {
    echo 'Exception when calling AIServicesApi->updateAIConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **update_ai_config_request** | [**\QuantClient\Model\UpdateAIConfigRequest**](../Model/UpdateAIConfigRequest.md)|  | |

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
