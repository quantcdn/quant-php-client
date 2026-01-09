# QuantClient\AISessionsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAISession()**](AISessionsApi.md#createAISession) | **POST** /api/v3/organizations/{organisation}/ai/sessions | Create a new chat session with multi-tenant isolation |
| [**deleteAISession()**](AISessionsApi.md#deleteAISession) | **DELETE** /api/v3/organizations/{organisation}/ai/sessions/{sessionId} | Delete a chat session |
| [**extendAISession()**](AISessionsApi.md#extendAISession) | **PUT** /api/v3/organizations/{organisation}/ai/sessions/{sessionId}/extend | Extend Session Expiration |
| [**getAISession()**](AISessionsApi.md#getAISession) | **GET** /api/v3/organizations/{organisation}/ai/sessions/{sessionId} | Get a specific chat session |
| [**listAISessions()**](AISessionsApi.md#listAISessions) | **GET** /api/v3/organizations/{organisation}/ai/sessions | List chat sessions with multi-tenant filtering |
| [**updateAISession()**](AISessionsApi.md#updateAISession) | **PUT** /api/v3/organizations/{organisation}/ai/sessions/{sessionId} | Update Session |


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


$apiInstance = new QuantClient\Api\AISessionsApi(
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
    echo 'Exception when calling AISessionsApi->createAISession: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new QuantClient\Api\AISessionsApi(
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
    echo 'Exception when calling AISessionsApi->deleteAISession: ', $e->getMessage(), PHP_EOL;
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

## `extendAISession()`

```php
extendAISession($organisation, $session_id, $extend_ai_session_request): \QuantClient\Model\ExtendAISession200Response
```

Extend Session Expiration

Extends the expiration time of an active session. Useful for keeping long-running conversations alive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$session_id = 'session_id_example'; // string | The session ID
$extend_ai_session_request = new \QuantClient\Model\ExtendAISessionRequest(); // \QuantClient\Model\ExtendAISessionRequest

try {
    $result = $apiInstance->extendAISession($organisation, $session_id, $extend_ai_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISessionsApi->extendAISession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **session_id** | **string**| The session ID | |
| **extend_ai_session_request** | [**\QuantClient\Model\ExtendAISessionRequest**](../Model/ExtendAISessionRequest.md)|  | [optional] |

### Return type

[**\QuantClient\Model\ExtendAISession200Response**](../Model/ExtendAISession200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new QuantClient\Api\AISessionsApi(
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
    echo 'Exception when calling AISessionsApi->getAISession: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new QuantClient\Api\AISessionsApi(
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
    echo 'Exception when calling AISessionsApi->listAISessions: ', $e->getMessage(), PHP_EOL;
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

## `updateAISession()`

```php
updateAISession($organisation, $session_id, $update_ai_session_request): \QuantClient\Model\UpdateAISession200Response
```

Update Session

Updates session with new conversation messages and tracks token usage. Appends new messages to conversation history and updates session stats.      *      * **Typical Flow:**      * 1. Get session to retrieve conversation history      * 2. Call AI inference with full message history      * 3. Update session with new user + assistant messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISessionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$session_id = 'session_id_example'; // string | The session ID
$update_ai_session_request = new \QuantClient\Model\UpdateAISessionRequest(); // \QuantClient\Model\UpdateAISessionRequest

try {
    $result = $apiInstance->updateAISession($organisation, $session_id, $update_ai_session_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISessionsApi->updateAISession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **session_id** | **string**| The session ID | |
| **update_ai_session_request** | [**\QuantClient\Model\UpdateAISessionRequest**](../Model/UpdateAISessionRequest.md)|  | |

### Return type

[**\QuantClient\Model\UpdateAISession200Response**](../Model/UpdateAISession200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
