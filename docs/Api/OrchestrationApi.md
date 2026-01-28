# QuantClient\OrchestrationApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAIOrchestrationStatus()**](OrchestrationApi.md#getAIOrchestrationStatus) | **GET** /api/v3/organizations/{organisation}/ai/tools/orchestrations/{orchestrationId} | Get Orchestration Status |


## `getAIOrchestrationStatus()`

```php
getAIOrchestrationStatus($organisation, $orchestration_id): \QuantClient\Model\GetAIOrchestrationStatus200Response
```

Get Orchestration Status

Retrieves the status and synthesized result of a multi-tool orchestration.      *      * **Orchestration Pattern:**      * When the AI requests multiple async tools simultaneously, an orchestration is created      * to track all tool executions and synthesize their results into a single coherent response.      *      * **Flow:**      * 1. AI requests multiple async tools (e.g., image generation + web search)      * 2. Chat API creates orchestration and returns orchestrationId      * 3. Tool Orchestrator Lambda polls all async tools      * 4. When all tools complete, Orchestrator synthesizes results using AI      * 5. Client polls this endpoint and receives final synthesized response      *      * **Status Values:**      * - pending: Orchestration created, tools not yet started      * - polling: Orchestrator is actively polling async tools      * - synthesizing: All tools complete, AI is synthesizing response      * - complete: Orchestration finished, synthesizedResponse available      * - failed: Orchestration failed, error available      *      * **Polling Recommendations:**      * - Poll every 2 seconds      * - Maximum poll time: 10 minutes      * - Orchestrator handles tool polling internally      *      * **Benefits over individual polling:**      * - Single poll endpoint for multiple async tools      * - AI synthesizes all results into coherent response      * - Answers the original user question, not just tool summaries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\OrchestrationApi(
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
    echo 'Exception when calling OrchestrationApi->getAIOrchestrationStatus: ', $e->getMessage(), PHP_EOL;
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
