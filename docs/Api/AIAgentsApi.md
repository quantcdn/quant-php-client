# QuantClient\AIAgentsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**chatWithAIAgent()**](AIAgentsApi.md#chatWithAIAgent) | **POST** /api/v3/organizations/{organisation}/ai/agents/{agentId}/chat | Chat with AI Agent |
| [**createAIAgent()**](AIAgentsApi.md#createAIAgent) | **POST** /api/v3/organizations/{organisation}/ai/agents | Create AI Agent |
| [**deleteAIAgent()**](AIAgentsApi.md#deleteAIAgent) | **DELETE** /api/v3/organizations/{organisation}/ai/agents/{agentId} | Delete Agent |
| [**deleteAgentOverlay()**](AIAgentsApi.md#deleteAgentOverlay) | **DELETE** /api/v3/organizations/{organisation}/ai/agents/{agentId}/overlay | Delete Agent Overlay |
| [**getAIAgent()**](AIAgentsApi.md#getAIAgent) | **GET** /api/v3/organizations/{organisation}/ai/agents/{agentId} | Get Agent Details |
| [**getAgentOverlay()**](AIAgentsApi.md#getAgentOverlay) | **GET** /api/v3/organizations/{organisation}/ai/agents/{agentId}/overlay | Get Agent Overlay |
| [**listAIAgents()**](AIAgentsApi.md#listAIAgents) | **GET** /api/v3/organizations/{organisation}/ai/agents | List AI Agents |
| [**updateAIAgent()**](AIAgentsApi.md#updateAIAgent) | **PUT** /api/v3/organizations/{organisation}/ai/agents/{agentId} | Update Agent |
| [**upsertAgentOverlay()**](AIAgentsApi.md#upsertAgentOverlay) | **PUT** /api/v3/organizations/{organisation}/ai/agents/{agentId}/overlay | Upsert Agent Overlay |


## `chatWithAIAgent()`

```php
chatWithAIAgent($organisation, $agent_id, $chat_with_ai_agent_request): \QuantClient\Model\ChatWithAIAgent200Response
```

Chat with AI Agent

Initiates a chat session with a specific AI agent. The agent's configuration (system prompt, temperature, model, allowed tools) is automatically applied.      *      * **Key Features:**      * - **Session Management**: Automatic session creation and state tracking      * - **Multi-turn Conversations**: Full conversation history maintained server-side      * - Agent's system prompt is prepended to conversation      * - Only agent's allowed tools are available      * - All tools are auto-executed on cloud (no client confirmation needed)      * - Temperature and model from agent config      * - Supports sync, streaming, and async modes      *      * **Execution Modes:**      * - **Sync Mode** (default): Standard JSON response, waits for completion      * - **Streaming Mode**: Set `stream: true` for SSE token-by-token responses      * - **Async Mode**: Set `async: true` for long-running tasks with polling      *      * **Async/Durable Mode (`async: true`):**      * - Returns immediately with `requestId` and `pollUrl` (HTTP 202)      * - Uses AWS Lambda Durable Functions for long-running agent tasks      * - All tools are auto-executed on cloud (no `waiting_callback` state)      * - Poll `/ai/chat/executions/{requestId}` for status      * - Ideal for agents with slow tools (image generation, web search, etc.)      *      * **Session Support:**      * - Omit `sessionId` to create a new session automatically      * - Include `sessionId` to continue an existing conversation      * - Sessions expire after 60 minutes of inactivity      * - Sessions work in all modes (sync, streaming, async)      * - Use `/sessions/{sessionId}` to retrieve full conversation history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$agent_id = 'agent_id_example'; // string | The agent ID
$chat_with_ai_agent_request = new \QuantClient\Model\ChatWithAIAgentRequest(); // \QuantClient\Model\ChatWithAIAgentRequest

try {
    $result = $apiInstance->chatWithAIAgent($organisation, $agent_id, $chat_with_ai_agent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAgentsApi->chatWithAIAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **agent_id** | **string**| The agent ID | |
| **chat_with_ai_agent_request** | [**\QuantClient\Model\ChatWithAIAgentRequest**](../Model/ChatWithAIAgentRequest.md)|  | |

### Return type

[**\QuantClient\Model\ChatWithAIAgent200Response**](../Model/ChatWithAIAgent200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAIAgent()`

```php
createAIAgent($organisation, $create_ai_agent_request): \QuantClient\Model\CreateAIAgent201Response
```

Create AI Agent

Creates a new AI agent with specific configuration, system prompt, and tool permissions.      *      * **Agent Configuration:**      * - **System Prompt**: Instructions that guide the agent's behavior      * - **Model**: Which foundation model to use (e.g., 'amazon.nova-pro-v1:0')      * - **Temperature**: Creativity level (0-1)      * - **Allowed Tools**: Which tools the agent can auto-execute      * - **Allowed Collections**: Vector DB collections for RAG      * - **Group**: Optional categorization (e.g., 'development', 'compliance')      *      * **Auto-Execution:**      * All tools are automatically executed when an agent requests them (no client confirmation needed).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$create_ai_agent_request = new \QuantClient\Model\CreateAIAgentRequest(); // \QuantClient\Model\CreateAIAgentRequest

try {
    $result = $apiInstance->createAIAgent($organisation, $create_ai_agent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAgentsApi->createAIAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **create_ai_agent_request** | [**\QuantClient\Model\CreateAIAgentRequest**](../Model/CreateAIAgentRequest.md)|  | |

### Return type

[**\QuantClient\Model\CreateAIAgent201Response**](../Model/CreateAIAgent201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAIAgent()`

```php
deleteAIAgent($organisation, $agent_id): \QuantClient\Model\DeleteAIAgent200Response
```

Delete Agent

Permanently deletes an AI agent. This action cannot be undone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$agent_id = 'agent_id_example'; // string | The agent ID

try {
    $result = $apiInstance->deleteAIAgent($organisation, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAgentsApi->deleteAIAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **agent_id** | **string**| The agent ID | |

### Return type

[**\QuantClient\Model\DeleteAIAgent200Response**](../Model/DeleteAIAgent200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAgentOverlay()`

```php
deleteAgentOverlay($organisation, $agent_id): \QuantClient\Model\DeleteAgentOverlay200Response
```

Delete Agent Overlay

Removes the per-organisation overlay for a global agent, reverting it to platform defaults.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$agent_id = 'agent_id_example'; // string | Global agent identifier

try {
    $result = $apiInstance->deleteAgentOverlay($organisation, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAgentsApi->deleteAgentOverlay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **agent_id** | **string**| Global agent identifier | |

### Return type

[**\QuantClient\Model\DeleteAgentOverlay200Response**](../Model/DeleteAgentOverlay200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAIAgent()`

```php
getAIAgent($organisation, $agent_id): \QuantClient\Model\GetAIAgent200Response
```

Get Agent Details

Retrieves detailed configuration for a specific AI agent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$agent_id = 'agent_id_example'; // string | The agent ID

try {
    $result = $apiInstance->getAIAgent($organisation, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAgentsApi->getAIAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **agent_id** | **string**| The agent ID | |

### Return type

[**\QuantClient\Model\GetAIAgent200Response**](../Model/GetAIAgent200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgentOverlay()`

```php
getAgentOverlay($organisation, $agent_id): \QuantClient\Model\GetAgentOverlay200Response
```

Get Agent Overlay

Returns the per-organisation overlay for a global agent, plus base agent metadata for UI context. If no overlay exists the response contains `overlay: null`. Overlays can only be created for global agents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$agent_id = 'agent_id_example'; // string | Global agent identifier (e.g., 'quantgov-code')

try {
    $result = $apiInstance->getAgentOverlay($organisation, $agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAgentsApi->getAgentOverlay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **agent_id** | **string**| Global agent identifier (e.g., &#39;quantgov-code&#39;) | |

### Return type

[**\QuantClient\Model\GetAgentOverlay200Response**](../Model/GetAgentOverlay200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAIAgents()`

```php
listAIAgents($organisation, $group): \QuantClient\Model\ListAIAgents200Response
```

List AI Agents

Lists all AI agents for an organization. Agents are pre-configured AI assistants with specific system prompts, model settings, and tool permissions.      *      * **Features:**      * - Filter by group (e.g., 'development', 'compliance')      * - Organization-scoped      * - Returns agent configurations without execution history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$group = 'group_example'; // string | Optional group filter (e.g., 'development', 'compliance')

try {
    $result = $apiInstance->listAIAgents($organisation, $group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAgentsApi->listAIAgents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **group** | **string**| Optional group filter (e.g., &#39;development&#39;, &#39;compliance&#39;) | [optional] |

### Return type

[**\QuantClient\Model\ListAIAgents200Response**](../Model/ListAIAgents200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAIAgent()`

```php
updateAIAgent($organisation, $agent_id, $update_ai_agent_request): \QuantClient\Model\UpdateAIAgent200Response
```

Update Agent

Updates an existing AI agent configuration. All fields except agentId, organizationId, createdAt, and createdBy can be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$agent_id = 'agent_id_example'; // string | The agent ID
$update_ai_agent_request = new \QuantClient\Model\UpdateAIAgentRequest(); // \QuantClient\Model\UpdateAIAgentRequest

try {
    $result = $apiInstance->updateAIAgent($organisation, $agent_id, $update_ai_agent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAgentsApi->updateAIAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **agent_id** | **string**| The agent ID | |
| **update_ai_agent_request** | [**\QuantClient\Model\UpdateAIAgentRequest**](../Model/UpdateAIAgentRequest.md)|  | |

### Return type

[**\QuantClient\Model\UpdateAIAgent200Response**](../Model/UpdateAIAgent200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertAgentOverlay()`

```php
upsertAgentOverlay($organisation, $agent_id, $upsert_agent_overlay_request): \QuantClient\Model\UpsertAgentOverlay200Response
```

Upsert Agent Overlay

Creates or replaces the per-organisation overlay for a global agent. PUT is full replacement — omitted optional fields are removed. Include `version` from a prior GET to enable compare-and-swap (409 on conflict). Omit for last-writer-wins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$agent_id = 'agent_id_example'; // string | Global agent identifier
$upsert_agent_overlay_request = new \QuantClient\Model\UpsertAgentOverlayRequest(); // \QuantClient\Model\UpsertAgentOverlayRequest

try {
    $result = $apiInstance->upsertAgentOverlay($organisation, $agent_id, $upsert_agent_overlay_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAgentsApi->upsertAgentOverlay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **agent_id** | **string**| Global agent identifier | |
| **upsert_agent_overlay_request** | [**\QuantClient\Model\UpsertAgentOverlayRequest**](../Model/UpsertAgentOverlayRequest.md)|  | |

### Return type

[**\QuantClient\Model\UpsertAgentOverlay200Response**](../Model/UpsertAgentOverlay200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
