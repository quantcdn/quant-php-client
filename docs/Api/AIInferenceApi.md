# QuantClient\AIInferenceApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**chatInference()**](AIInferenceApi.md#chatInference) | **POST** /api/v3/organizations/{organisation}/ai/chat | Chat inference via API Gateway (buffered responses) with multimodal support |
| [**chatInferenceStream()**](AIInferenceApi.md#chatInferenceStream) | **POST** /api/v3/organizations/{organisation}/ai/chat/stream | Chat inference via streaming endpoint (true HTTP streaming) with multimodal support |
| [**embeddings()**](AIInferenceApi.md#embeddings) | **POST** /api/v3/organizations/{organisation}/ai/embeddings | Generate text embeddings for semantic search and RAG applications |
| [**getDurableExecutionStatus()**](AIInferenceApi.md#getDurableExecutionStatus) | **GET** /api/v3/organizations/{organisation}/ai/chat/executions/{identifier} | Get Durable Execution Status |
| [**imageGeneration()**](AIInferenceApi.md#imageGeneration) | **POST** /api/v3/organizations/{organisation}/ai/image-generation | Generate images with Amazon Nova Canvas |
| [**submitToolCallback()**](AIInferenceApi.md#submitToolCallback) | **POST** /api/v3/organizations/{organisation}/ai/chat/callback | Submit Client Tool Results (Callback) |


## `chatInference()`

```php
chatInference($organisation, $chat_inference_request): \QuantClient\Model\ChatInference200Response
```

Chat inference via API Gateway (buffered responses) with multimodal support

Sends requests to the AI API Gateway endpoint which buffers responses. Supports text, images, videos, and documents via base64 encoding.      *      * **Execution Modes:**      * - **Sync Mode** (default): Standard JSON response, waits for completion (200 response)      * - **Async Mode**: Set `async: true` for long-running tasks with polling (202 response)      *      * **Async/Durable Mode (`async: true`):**      * - Returns immediately with `requestId` and `pollUrl` (HTTP 202)      * - Uses AWS Lambda Durable Functions for long-running inference      * - Supports client-executed tools via `waiting_callback` state      * - Poll `/ai/chat/executions/{requestId}` for status      * - Submit client tool results via `/ai/chat/callback`      * - Ideal for complex prompts, large contexts, or client-side tools      *      * **Multimodal Support:**      * - **Text**: Simple string content      * - **Images**: Base64-encoded PNG, JPEG, GIF, WebP (up to 25MB)      * - **Videos**: Base64-encoded MP4, MOV, WebM, etc. (up to 25MB)      * - **Documents**: Base64-encoded PDF, DOCX, CSV, etc. (up to 25MB)      *      * **Supported Models (Multimodal):**      * - **Claude 4.5 Series**: Sonnet 4.5, Haiku 4.5, Opus 4.5 (images, up to 20 per request)      * - **Claude 3.5 Series**: Sonnet v1/v2 (images, up to 20 per request)      * - **Amazon Nova**: Lite, Pro, Micro (images, videos, documents)      *      * **Usage Tips:**      * - Use base64 encoding for images/videos < 5-10MB      * - Place media before text prompts for best results      * - Label multiple media files (e.g., 'Image 1:', 'Image 2:')      * - Maximum 25MB total payload size      *      * **Response Patterns:**      * - **Text-only**: Returns simple text response when no tools requested      * - **Single tool**: Returns `toolUse` object when AI requests one tool      * - **Multiple tools**: Returns `toolUse` array when AI requests multiple tools      * - **Auto-execute sync**: Automatically executes tool and returns final text response      * - **Auto-execute async**: Returns toolUse with `executionId` and `status` for polling

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIInferenceApi(
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
    echo 'Exception when calling AIInferenceApi->chatInference: ', $e->getMessage(), PHP_EOL;
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

Streams responses from the AI streaming subdomain using Server-Sent Events (SSE). Tokens are streamed in real-time as they are generated.      *      * **Execution Modes:**      * - **Streaming Mode** (default): Real-time SSE token-by-token responses      * - **Async Mode**: Set `async: true` for long-running tasks with polling (202 response)      *      * **Async/Durable Mode (`async: true`):**      * - Returns immediately with `requestId` and `pollUrl` (HTTP 202)      * - Uses AWS Lambda Durable Functions for long-running inference      * - Supports client-executed tools via `waiting_callback` state      * - Poll `/ai/chat/executions/{requestId}` for status      * - Submit client tool results via `/ai/chat/callback`      *      * **Multimodal Support:**      * - **Text**: Simple string content      * - **Images**: Base64-encoded PNG, JPEG, GIF, WebP (up to 25MB)      * - **Videos**: Base64-encoded MP4, MOV, WebM, etc. (up to 25MB)      * - **Documents**: Base64-encoded PDF, DOCX, CSV, etc. (up to 25MB)      *      * **Supported Models (Multimodal):**      * - **Claude 4.5 Series**: Sonnet 4.5, Haiku 4.5, Opus 4.5 (images, up to 20 per request)      * - **Claude 3.5 Series**: Sonnet v1/v2 (images, up to 20 per request)      * - **Amazon Nova**: Lite, Pro, Micro (images, videos, documents)      *      * **Usage Tips:**      * - Use base64 encoding for images/videos < 5-10MB      * - Place media before text prompts for best results      * - Label multiple media files (e.g., 'Image 1:', 'Image 2:')      * - Maximum 25MB total payload size      * - Streaming works with all content types (text, image, video, document)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIInferenceApi(
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
    echo 'Exception when calling AIInferenceApi->chatInferenceStream: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: `text/event-stream`, `application/json`

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


$apiInstance = new QuantClient\Api\AIInferenceApi(
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
    echo 'Exception when calling AIInferenceApi->embeddings: ', $e->getMessage(), PHP_EOL;
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

## `getDurableExecutionStatus()`

```php
getDurableExecutionStatus($organisation, $identifier): \QuantClient\Model\GetDurableExecutionStatus200Response
```

Get Durable Execution Status

Poll the status of an async/durable chat execution.      *      * **When to use:** After starting chat inference with `async: true`, poll this endpoint      * to check execution status and retrieve results when complete.      *      * **Identifier:** Accepts either:      * - `requestId` (recommended): The short ID returned from the async request      * - `executionArn`: The full AWS Lambda durable execution ARN (must be URL-encoded)      *      * **Statuses:**      * - `pending`: Execution is starting (retry shortly)      * - `running`: Execution is in progress      * - `waiting_callback`: Execution paused, waiting for client tool results      * - `complete`: Execution finished successfully      * - `failed`: Execution failed with error      *      * **Client Tool Callback:**      * When status is `waiting_callback`, submit tool results via `POST /ai/chat/callback`.      *      * **Polling Recommendations:**      * - Start with 1 second delay, exponential backoff up to 30 seconds      * - Stop polling after 15 minutes (consider failed)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIInferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$identifier = XkdVWiEfSwMEPrw=; // string | Either the requestId from async response, or full executionArn (URL-encoded)

try {
    $result = $apiInstance->getDurableExecutionStatus($organisation, $identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIInferenceApi->getDurableExecutionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **identifier** | **string**| Either the requestId from async response, or full executionArn (URL-encoded) | |

### Return type

[**\QuantClient\Model\GetDurableExecutionStatus200Response**](../Model/GetDurableExecutionStatus200Response.md)

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


$apiInstance = new QuantClient\Api\AIInferenceApi(
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
    echo 'Exception when calling AIInferenceApi->imageGeneration: ', $e->getMessage(), PHP_EOL;
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

## `submitToolCallback()`

```php
submitToolCallback($organisation, $submit_tool_callback_request): \QuantClient\Model\SubmitToolCallback200Response
```

Submit Client Tool Results (Callback)

Submit tool execution results to resume a suspended durable execution.      *      * **When to use:** When polling the execution status returns `waiting_callback`, use this endpoint      * to submit the results of client-executed tools. The execution will then resume.      *      * **Flow:**      * 1. Start async chat with client-executed tools (`autoExecute: []` or tools not in autoExecute list)      * 2. Poll status until `waiting_callback`      * 3. Execute tools locally using `pendingTools` from status response      * 4. Submit results here with the `callbackId`      * 5. Poll status until `complete`      *      * **Important:** Each `callbackId` can only be used once. After submission, poll the execution      * status to see the updated state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIInferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$submit_tool_callback_request = new \QuantClient\Model\SubmitToolCallbackRequest(); // \QuantClient\Model\SubmitToolCallbackRequest

try {
    $result = $apiInstance->submitToolCallback($organisation, $submit_tool_callback_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIInferenceApi->submitToolCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **submit_tool_callback_request** | [**\QuantClient\Model\SubmitToolCallbackRequest**](../Model/SubmitToolCallbackRequest.md)|  | |

### Return type

[**\QuantClient\Model\SubmitToolCallback200Response**](../Model/SubmitToolCallback200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
