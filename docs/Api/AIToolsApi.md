# QuantClient\AIToolsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAIOrchestrationStatus()**](AIToolsApi.md#getAIOrchestrationStatus) | **GET** /api/v3/organizations/{organisation}/ai/tools/orchestrations/{orchestrationId} | Get Tool Orchestration Status (Async Tool Polling) |
| [**getAIToolExecutionStatus()**](AIToolsApi.md#getAIToolExecutionStatus) | **GET** /api/v3/organizations/{organisation}/ai/tools/executions/{executionId} | Get async tool execution status and result |
| [**listAIToolExecutions()**](AIToolsApi.md#listAIToolExecutions) | **GET** /api/v3/organizations/{organisation}/ai/tools/executions | List tool executions for monitoring and debugging |
| [**listAIToolNames()**](AIToolsApi.md#listAIToolNames) | **GET** /api/v3/organizations/{organisation}/ai/tools/names | List tool names only (lightweight response) |
| [**listAITools()**](AIToolsApi.md#listAITools) | **GET** /api/v3/organizations/{organisation}/ai/tools | List available built-in tools for function calling |


## `getAIOrchestrationStatus()`

```php
getAIOrchestrationStatus($organisation, $orchestration_id): \QuantClient\Model\GetAIOrchestrationStatus200Response
```

Get Tool Orchestration Status (Async Tool Polling)

Retrieves the status and synthesized result of a multi-tool async execution orchestration.      *      * **Note:** This endpoint is for async tool execution polling (`/tools/orchestrations`).      * For durable batch processing orchestrations, see `GET /orchestrations` endpoints.      *      * **Orchestration Pattern:**      * When the AI requests multiple async tools simultaneously, an orchestration is created      * to track all tool executions and synthesize their results into a single coherent response.      *      * **Flow:**      * 1. AI requests multiple async tools (e.g., image generation + web search)      * 2. Chat API creates orchestration and returns orchestrationId      * 3. Tool Orchestrator Lambda polls all async tools      * 4. When all tools complete, Orchestrator synthesizes results using AI      * 5. Client polls this endpoint and receives final synthesized response      *      * **Status Values:**      * - pending: Orchestration created, tools not yet started      * - polling: Orchestrator is actively polling async tools      * - synthesizing: All tools complete, AI is synthesizing response      * - complete: Orchestration finished, synthesizedResponse available      * - failed: Orchestration failed, error available      *      * **Polling Recommendations:**      * - Poll every 2 seconds      * - Maximum poll time: 10 minutes      * - Orchestrator handles tool polling internally      *      * **Benefits over individual polling:**      * - Single poll endpoint for multiple async tools      * - AI synthesizes all results into coherent response      * - Answers the original user question, not just tool summaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$orchestration_id = orch_abc123def456789012345678901234; // string | Orchestration identifier for aggregated async tool executions

try {
    $result = $apiInstance->getAIOrchestrationStatus($organisation, $orchestration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIToolsApi->getAIOrchestrationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **orchestration_id** | **string**| Orchestration identifier for aggregated async tool executions | |

### Return type

[**\QuantClient\Model\GetAIOrchestrationStatus200Response**](../Model/GetAIOrchestrationStatus200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAIToolExecutionStatus()`

```php
getAIToolExecutionStatus($organisation, $execution_id): \QuantClient\Model\GetAIToolExecutionStatus200Response
```

Get async tool execution status and result

Retrieves the status and result of an async tool execution. Used for polling long-running tools like image generation.      *      * **Async Tool Execution Pattern:**      * This endpoint enables a polling pattern for long-running tools that would otherwise hit API Gateway's 30-second timeout.      *      * **Flow:**      * 1. AI requests tool use (e.g., `generate_image`)      * 2. Chat API returns `toolUse` with execution tracking info      * 3. Client starts polling this endpoint with the `executionId`      * 4. When `status === 'complete'`, retrieve `result` and send back to AI      * 5. AI incorporates result into final response      *      * **Status Values:**      * - `pending`: Tool execution queued, not yet started      * - `running`: Tool is currently executing      * - `complete`: Tool execution finished successfully, `result` available      * - `failed`: Tool execution failed, `error` available      *      * **Polling Recommendations:**      * - Poll every 2-3 seconds for image generation      * - Exponential backoff for other tools (start 1s, max 5s)      * - Stop polling after 5 minutes (consider failed)      * - Auto-cleanup after 24 hours (TTL)      *      * **Use Cases:**      * - Image generation (10-15s typical runtime)      * - Video processing      * - Large file uploads/downloads      * - Complex database queries      * - External API calls with high latency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$execution_id = exec_0123456789abcdef0123456789abcdef; // string | Tool execution identifier

try {
    $result = $apiInstance->getAIToolExecutionStatus($organisation, $execution_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIToolsApi->getAIToolExecutionStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **execution_id** | **string**| Tool execution identifier | |

### Return type

[**\QuantClient\Model\GetAIToolExecutionStatus200Response**](../Model/GetAIToolExecutionStatus200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAIToolExecutions()`

```php
listAIToolExecutions($organisation, $status, $limit): \QuantClient\Model\ListAIToolExecutions200Response
```

List tool executions for monitoring and debugging

Lists recent async tool executions for an organization. Useful for debugging, monitoring, and building admin UIs.      *      * **Query Patterns:**      * - All recent executions: `GET /ai/tools/executions`      * - Filter by status: `GET /ai/tools/executions?status=running`      * - Limit results: `GET /ai/tools/executions?limit=20`      *      * **Results:**      * - Ordered by creation time (newest first)      * - Limited to 50 by default (configurable via `limit` parameter)      * - Only shows executions not yet expired (24h TTL)      *      * **Use Cases:**      * - Monitor all active tool executions      * - Debug failed executions      * - Build admin dashboards      * - Track tool usage patterns      * - Audit async operations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$status = 'status_example'; // string | Filter by execution status
$limit = 50; // int | Maximum number of executions to return

try {
    $result = $apiInstance->listAIToolExecutions($organisation, $status, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIToolsApi->listAIToolExecutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **status** | **string**| Filter by execution status | [optional] |
| **limit** | **int**| Maximum number of executions to return | [optional] [default to 50] |

### Return type

[**\QuantClient\Model\ListAIToolExecutions200Response**](../Model/ListAIToolExecutions200Response.md)

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


$apiInstance = new QuantClient\Api\AIToolsApi(
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
    echo 'Exception when calling AIToolsApi->listAIToolNames: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new QuantClient\Api\AIToolsApi(
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
    echo 'Exception when calling AIToolsApi->listAITools: ', $e->getMessage(), PHP_EOL;
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
