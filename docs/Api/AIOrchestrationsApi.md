# QuantClient\AIOrchestrationsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelOrchestration()**](AIOrchestrationsApi.md#cancelOrchestration) | **POST** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId}/cancel | Cancel Durable Orchestration |
| [**createOrchestration()**](AIOrchestrationsApi.md#createOrchestration) | **POST** /api/v3/organizations/{organisation}/ai/orchestrations | Create Durable Orchestration |
| [**deleteOrchestration()**](AIOrchestrationsApi.md#deleteOrchestration) | **DELETE** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId} | Delete Durable Orchestration |
| [**getOrchestration()**](AIOrchestrationsApi.md#getOrchestration) | **GET** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId} | Get Durable Orchestration |
| [**listOrchestrationBatches()**](AIOrchestrationsApi.md#listOrchestrationBatches) | **GET** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId}/batches | List Orchestration Batches |
| [**listOrchestrations()**](AIOrchestrationsApi.md#listOrchestrations) | **GET** /api/v3/organizations/{organisation}/ai/orchestrations | List Durable Orchestrations |
| [**pauseOrchestration()**](AIOrchestrationsApi.md#pauseOrchestration) | **POST** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId}/pause | Pause Durable Orchestration |
| [**resumeOrchestration()**](AIOrchestrationsApi.md#resumeOrchestration) | **POST** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId}/resume | Resume Durable Orchestration |
| [**startOrchestration()**](AIOrchestrationsApi.md#startOrchestration) | **POST** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId}/start | Start Durable Orchestration |


## `cancelOrchestration()`

```php
cancelOrchestration($organisation, $orchestration_id): object
```

Cancel Durable Orchestration

Cancel an orchestration permanently. Cannot be resumed. Any in-progress items will complete, but no new processing starts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIOrchestrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$orchestration_id = 'orchestration_id_example'; // string | Orchestration identifier

try {
    $result = $apiInstance->cancelOrchestration($organisation, $orchestration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIOrchestrationsApi->cancelOrchestration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **orchestration_id** | **string**| Orchestration identifier | |

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

## `createOrchestration()`

```php
createOrchestration($organisation, $create_orchestration_request): object
```

Create Durable Orchestration

Create a new durable orchestration for batch processing.      *      * **Input Sources:**      * - `static`: Process a fixed list of items      * - `task_query`: Process tasks matching a query      * - `generator`: AI generates items from a prompt      *      * **Stop Conditions:**      * - `all_complete`: Stop when all items processed      * - `max_iterations`: Stop after N iterations      * - `condition`: AI evaluates a prompt to decide      * - `manual`: Run until manually stopped      *      * **Auto-start:**      * By default, the orchestration starts immediately. Set `autoStart: false` to create in pending state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIOrchestrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$create_orchestration_request = new \QuantClient\Model\CreateOrchestrationRequest(); // \QuantClient\Model\CreateOrchestrationRequest

try {
    $result = $apiInstance->createOrchestration($organisation, $create_orchestration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIOrchestrationsApi->createOrchestration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **create_orchestration_request** | [**\QuantClient\Model\CreateOrchestrationRequest**](../Model/CreateOrchestrationRequest.md)|  | |

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

## `deleteOrchestration()`

```php
deleteOrchestration($organisation, $orchestration_id)
```

Delete Durable Orchestration

Delete an orchestration. Can only delete orchestrations in completed, failed, or cancelled status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIOrchestrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$orchestration_id = 'orchestration_id_example'; // string | Orchestration identifier

try {
    $apiInstance->deleteOrchestration($organisation, $orchestration_id);
} catch (Exception $e) {
    echo 'Exception when calling AIOrchestrationsApi->deleteOrchestration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **orchestration_id** | **string**| Orchestration identifier | |

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

## `getOrchestration()`

```php
getOrchestration($organisation, $orchestration_id): object
```

Get Durable Orchestration

Get orchestration details including status and progress.      *      * **Progress Tracking:**      * - `total`: Total items to process      * - `completed`: Successfully processed      * - `failed`: Failed processing      * - `pending`: Awaiting processing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIOrchestrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$orchestration_id = orch_1704067200_abc123xyz; // string | Orchestration identifier

try {
    $result = $apiInstance->getOrchestration($organisation, $orchestration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIOrchestrationsApi->getOrchestration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **orchestration_id** | **string**| Orchestration identifier | |

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

## `listOrchestrationBatches()`

```php
listOrchestrationBatches($organisation, $orchestration_id, $limit, $cursor): \QuantClient\Model\ListOrchestrationBatches200Response
```

List Orchestration Batches

Get history of batches processed by this orchestration. Returns paginated batch records with status and item counts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIOrchestrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$orchestration_id = 'orchestration_id_example'; // string | Orchestration identifier
$limit = 20; // int | Maximum number of batches to return
$cursor = 'cursor_example'; // string | Pagination cursor from previous response

try {
    $result = $apiInstance->listOrchestrationBatches($organisation, $orchestration_id, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIOrchestrationsApi->listOrchestrationBatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **orchestration_id** | **string**| Orchestration identifier | |
| **limit** | **int**| Maximum number of batches to return | [optional] [default to 20] |
| **cursor** | **string**| Pagination cursor from previous response | [optional] |

### Return type

[**\QuantClient\Model\ListOrchestrationBatches200Response**](../Model/ListOrchestrationBatches200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrchestrations()`

```php
listOrchestrations($organisation, $status, $limit, $cursor): \QuantClient\Model\ListOrchestrations200Response
```

List Durable Orchestrations

List durable orchestrations for an organization with optional filtering.      *      * **Note:** This is different from `/tools/orchestrations` which handles async tool execution      * polling. These durable orchestrations are for long-running batch processing loops.      *      * **Filter Options:**      * - `status`: Filter by orchestration status      * - `limit`: Max results (default 20, max 100)      * - `cursor`: Pagination cursor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIOrchestrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$status = 'status_example'; // string | Filter by orchestration status
$limit = 20; // int | Maximum number of results
$cursor = 'cursor_example'; // string | Pagination cursor from previous response

try {
    $result = $apiInstance->listOrchestrations($organisation, $status, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIOrchestrationsApi->listOrchestrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **status** | **string**| Filter by orchestration status | [optional] |
| **limit** | **int**| Maximum number of results | [optional] [default to 20] |
| **cursor** | **string**| Pagination cursor from previous response | [optional] |

### Return type

[**\QuantClient\Model\ListOrchestrations200Response**](../Model/ListOrchestrations200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pauseOrchestration()`

```php
pauseOrchestration($organisation, $orchestration_id): object
```

Pause Durable Orchestration

Pause a running orchestration. The current batch will complete, but no new batches will start. Can be resumed later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIOrchestrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$orchestration_id = 'orchestration_id_example'; // string | Orchestration identifier

try {
    $result = $apiInstance->pauseOrchestration($organisation, $orchestration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIOrchestrationsApi->pauseOrchestration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **orchestration_id** | **string**| Orchestration identifier | |

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

## `resumeOrchestration()`

```php
resumeOrchestration($organisation, $orchestration_id): object
```

Resume Durable Orchestration

Resume a paused orchestration. Processing continues from where it left off.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIOrchestrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$orchestration_id = 'orchestration_id_example'; // string | Orchestration identifier

try {
    $result = $apiInstance->resumeOrchestration($organisation, $orchestration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIOrchestrationsApi->resumeOrchestration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **orchestration_id** | **string**| Orchestration identifier | |

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

## `startOrchestration()`

```php
startOrchestration($organisation, $orchestration_id): object
```

Start Durable Orchestration

Start a pending orchestration. Only works on orchestrations created with `autoStart: false`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIOrchestrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$orchestration_id = 'orchestration_id_example'; // string | Orchestration identifier

try {
    $result = $apiInstance->startOrchestration($organisation, $orchestration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIOrchestrationsApi->startOrchestration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **orchestration_id** | **string**| Orchestration identifier | |

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
