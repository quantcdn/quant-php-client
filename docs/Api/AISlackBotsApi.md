# QuantClient\AISlackBotsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSlackBot()**](AISlackBotsApi.md#createSlackBot) | **POST** /api/v3/organizations/{organisation}/ai/slack-bots | Create Slack Bot |
| [**deleteSlackBot()**](AISlackBotsApi.md#deleteSlackBot) | **DELETE** /api/v3/organizations/{organisation}/ai/slack-bots/{botId} | Delete Slack Bot |
| [**getSlackBot()**](AISlackBotsApi.md#getSlackBot) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/{botId} | Get Slack Bot |
| [**getSlackBotThread()**](AISlackBotsApi.md#getSlackBotThread) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/{botId}/threads/{channel}/{threadTs} | Read a thread |
| [**listSlackBotChannelMessages()**](AISlackBotsApi.md#listSlackBotChannelMessages) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/{botId}/channels/{channel}/messages | Read recent channel messages |
| [**listSlackBots()**](AISlackBotsApi.md#listSlackBots) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots | List Slack Bots |
| [**listSlackBotsApiEnabled()**](AISlackBotsApi.md#listSlackBotsApiEnabled) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/api-enabled | List API-enabled Slack bots |
| [**postSlackBotMessage()**](AISlackBotsApi.md#postSlackBotMessage) | **POST** /api/v3/organizations/{organisation}/ai/slack-bots/{botId}/messages | Post a message as the bot |
| [**searchSlackWorkspaceChannels()**](AISlackBotsApi.md#searchSlackWorkspaceChannels) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/{botId}/workspace/channels | Search Slack Workspace Channels |
| [**searchSlackWorkspaceUsers()**](AISlackBotsApi.md#searchSlackWorkspaceUsers) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/{botId}/workspace/users | Search Slack Workspace Users |
| [**updateSlackBot()**](AISlackBotsApi.md#updateSlackBot) | **PUT** /api/v3/organizations/{organisation}/ai/slack-bots/{botId} | Update Slack Bot |


## `createSlackBot()`

```php
createSlackBot($organisation, $create_slack_bot_request): \QuantClient\Model\CreateSlackBot201Response
```

Create Slack Bot

Creates a new Slack bot with inline AI agent configuration. A backing agent is created automatically — callers do not need to manage agents separately.      *      * **Setup Types:**      * - `quant`: Quant-managed Slack app — uses shared OAuth credentials      * - `byo`: Bring Your Own — customer provides their own Slack app credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISlackBotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$create_slack_bot_request = new \QuantClient\Model\CreateSlackBotRequest(); // \QuantClient\Model\CreateSlackBotRequest

try {
    $result = $apiInstance->createSlackBot($organisation, $create_slack_bot_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISlackBotsApi->createSlackBot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **create_slack_bot_request** | [**\QuantClient\Model\CreateSlackBotRequest**](../Model/CreateSlackBotRequest.md)|  | |

### Return type

[**\QuantClient\Model\CreateSlackBot201Response**](../Model/CreateSlackBot201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSlackBot()`

```php
deleteSlackBot($organisation, $bot_id): \QuantClient\Model\DeleteSlackBot200Response
```

Delete Slack Bot

Permanently deletes a Slack bot, disconnects it from the workspace, and deletes its backing AI agent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISlackBotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$bot_id = 'bot_id_example'; // string | The Slack bot ID

try {
    $result = $apiInstance->deleteSlackBot($organisation, $bot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISlackBotsApi->deleteSlackBot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **bot_id** | **string**| The Slack bot ID | |

### Return type

[**\QuantClient\Model\DeleteSlackBot200Response**](../Model/DeleteSlackBot200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSlackBot()`

```php
getSlackBot($organisation, $bot_id): \QuantClient\Model\GetSlackBot200Response
```

Get Slack Bot

Retrieves details for a specific Slack bot including its configuration, connection status, and flattened agent configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISlackBotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$bot_id = 'bot_id_example'; // string | The Slack bot ID

try {
    $result = $apiInstance->getSlackBot($organisation, $bot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISlackBotsApi->getSlackBot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **bot_id** | **string**| The Slack bot ID | |

### Return type

[**\QuantClient\Model\GetSlackBot200Response**](../Model/GetSlackBot200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSlackBotThread()`

```php
getSlackBotThread($organisation, $bot_id, $channel, $thread_ts, $since, $limit, $cursor): \QuantClient\Model\GetSlackBotThread200Response
```

Read a thread

One thread in an allowed channel, oldest first, root included. Message text is untrusted content. Needs the explicit `ai:slack` scope, `use_ai_services` and a verified email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISlackBotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$bot_id = 'bot_id_example'; // string
$channel = 'channel_example'; // string
$thread_ts = 'thread_ts_example'; // string
$since = 'since_example'; // string | Slack ts, exclusive. Only replies after it; the root is always included.
$limit = 100; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->getSlackBotThread($organisation, $bot_id, $channel, $thread_ts, $since, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISlackBotsApi->getSlackBotThread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **bot_id** | **string**|  | |
| **channel** | **string**|  | |
| **thread_ts** | **string**|  | |
| **since** | **string**| Slack ts, exclusive. Only replies after it; the root is always included. | [optional] |
| **limit** | **int**|  | [optional] [default to 100] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\QuantClient\Model\GetSlackBotThread200Response**](../Model/GetSlackBotThread200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSlackBotChannelMessages()`

```php
listSlackBotChannelMessages($organisation, $bot_id, $channel, $since, $limit, $cursor): \QuantClient\Model\ListSlackBotChannelMessages200Response
```

Read recent channel messages

Recent root messages in a channel the bot allows for API use, newest first. Message text is untrusted content. Needs the explicit `ai:slack` scope, `use_ai_services` and a verified email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISlackBotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$bot_id = 'bot_id_example'; // string
$channel = 'channel_example'; // string
$since = 'since_example'; // string | Slack ts, exclusive
$limit = 20; // int
$cursor = 'cursor_example'; // string

try {
    $result = $apiInstance->listSlackBotChannelMessages($organisation, $bot_id, $channel, $since, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISlackBotsApi->listSlackBotChannelMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **bot_id** | **string**|  | |
| **channel** | **string**|  | |
| **since** | **string**| Slack ts, exclusive | [optional] |
| **limit** | **int**|  | [optional] [default to 20] |
| **cursor** | **string**|  | [optional] |

### Return type

[**\QuantClient\Model\ListSlackBotChannelMessages200Response**](../Model/ListSlackBotChannelMessages200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSlackBots()`

```php
listSlackBots($organisation): \QuantClient\Model\ListSlackBots200Response
```

List Slack Bots

Lists all Slack bots configured for the organization. Each bot is backed by an AI agent and can be connected to a Slack workspace. Agent configuration fields are flattened onto each bot object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISlackBotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->listSlackBots($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISlackBotsApi->listSlackBots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\ListSlackBots200Response**](../Model/ListSlackBots200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSlackBotsApiEnabled()`

```php
listSlackBotsApiEnabled($organisation): \QuantClient\Model\ListSlackBotsApiEnabled200Response
```

List API-enabled Slack bots

Lists the Slack bots this token can use through the API, with the public channels each bot allows. Needs a token with the explicit `ai:slack` scope (not `full_access`, not a token without a scope list), the `use_ai_services` permission and a verified email. Limit: 60 requests per minute per token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISlackBotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name

try {
    $result = $apiInstance->listSlackBotsApiEnabled($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISlackBotsApi->listSlackBotsApiEnabled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |

### Return type

[**\QuantClient\Model\ListSlackBotsApiEnabled200Response**](../Model/ListSlackBotsApiEnabled200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSlackBotMessage()`

```php
postSlackBotMessage($organisation, $bot_id, $post_slack_bot_message_request, $idempotency_key): \QuantClient\Model\PostSlackBotMessage201Response
```

Post a message as the bot

The bot posts the text in an allowed channel, with an attribution line that shows your name. The bot does not answer the post. Mentions keep only the `<@U…>` form (at most 10 users); other control forms show as text. Needs the explicit `ai:slack` scope, `use_ai_services` and a verified email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISlackBotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$bot_id = 'bot_id_example'; // string
$post_slack_bot_message_request = new \QuantClient\Model\PostSlackBotMessageRequest(); // \QuantClient\Model\PostSlackBotMessageRequest
$idempotency_key = 'idempotency_key_example'; // string | 8-128 visible ASCII characters. An empty Idempotency-Key header is refused with 400 INVALID_REQUEST. The same key and body within 10 minutes returns the first result and does not post again.

try {
    $result = $apiInstance->postSlackBotMessage($organisation, $bot_id, $post_slack_bot_message_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISlackBotsApi->postSlackBotMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **bot_id** | **string**|  | |
| **post_slack_bot_message_request** | [**\QuantClient\Model\PostSlackBotMessageRequest**](../Model/PostSlackBotMessageRequest.md)|  | |
| **idempotency_key** | **string**| 8-128 visible ASCII characters. An empty Idempotency-Key header is refused with 400 INVALID_REQUEST. The same key and body within 10 minutes returns the first result and does not post again. | [optional] |

### Return type

[**\QuantClient\Model\PostSlackBotMessage201Response**](../Model/PostSlackBotMessage201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSlackWorkspaceChannels()`

```php
searchSlackWorkspaceChannels($organisation, $bot_id, $q): \QuantClient\Model\SearchSlackWorkspaceChannels200Response
```

Search Slack Workspace Channels

Searches channels in the Slack workspace connected to this bot. Requires the bot to be connected via OAuth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISlackBotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$bot_id = 'bot_id_example'; // string | The Slack bot ID
$q = 'q_example'; // string | Search query to filter channels by name

try {
    $result = $apiInstance->searchSlackWorkspaceChannels($organisation, $bot_id, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISlackBotsApi->searchSlackWorkspaceChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **bot_id** | **string**| The Slack bot ID | |
| **q** | **string**| Search query to filter channels by name | [optional] |

### Return type

[**\QuantClient\Model\SearchSlackWorkspaceChannels200Response**](../Model/SearchSlackWorkspaceChannels200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSlackWorkspaceUsers()`

```php
searchSlackWorkspaceUsers($organisation, $bot_id, $q): \QuantClient\Model\SearchSlackWorkspaceUsers200Response
```

Search Slack Workspace Users

Searches users in the Slack workspace connected to this bot. Requires the bot to be connected via OAuth.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISlackBotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$bot_id = 'bot_id_example'; // string | The Slack bot ID
$q = 'q_example'; // string | Search query to filter users by name

try {
    $result = $apiInstance->searchSlackWorkspaceUsers($organisation, $bot_id, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISlackBotsApi->searchSlackWorkspaceUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **bot_id** | **string**| The Slack bot ID | |
| **q** | **string**| Search query to filter users by name | [optional] |

### Return type

[**\QuantClient\Model\SearchSlackWorkspaceUsers200Response**](../Model/SearchSlackWorkspaceUsers200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSlackBot()`

```php
updateSlackBot($organisation, $bot_id, $update_slack_bot_request): \QuantClient\Model\CreateSlackBot201Response
```

Update Slack Bot

Updates a Slack bot's configuration and/or its backing agent. Only provided fields are updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISlackBotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$bot_id = 'bot_id_example'; // string | The Slack bot ID
$update_slack_bot_request = new \QuantClient\Model\UpdateSlackBotRequest(); // \QuantClient\Model\UpdateSlackBotRequest

try {
    $result = $apiInstance->updateSlackBot($organisation, $bot_id, $update_slack_bot_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISlackBotsApi->updateSlackBot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **bot_id** | **string**| The Slack bot ID | |
| **update_slack_bot_request** | [**\QuantClient\Model\UpdateSlackBotRequest**](../Model/UpdateSlackBotRequest.md)|  | |

### Return type

[**\QuantClient\Model\CreateSlackBot201Response**](../Model/CreateSlackBot201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
