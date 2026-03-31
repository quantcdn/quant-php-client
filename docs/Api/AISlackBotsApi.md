# QuantClient\AISlackBotsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSlackBot()**](AISlackBotsApi.md#createSlackBot) | **POST** /api/v3/organizations/{organisation}/ai/slack-bots | Create Slack Bot |
| [**deleteSlackBot()**](AISlackBotsApi.md#deleteSlackBot) | **DELETE** /api/v3/organizations/{organisation}/ai/slack-bots/{botId} | Delete Slack Bot |
| [**getSlackBot()**](AISlackBotsApi.md#getSlackBot) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/{botId} | Get Slack Bot |
| [**listSlackBots()**](AISlackBotsApi.md#listSlackBots) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots | List Slack Bots |
| [**searchSlackWorkspaceChannels()**](AISlackBotsApi.md#searchSlackWorkspaceChannels) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/{botId}/workspace/channels | Search Slack Workspace Channels |
| [**searchSlackWorkspaceUsers()**](AISlackBotsApi.md#searchSlackWorkspaceUsers) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/{botId}/workspace/users | Search Slack Workspace Users |
| [**updateSlackBot()**](AISlackBotsApi.md#updateSlackBot) | **PUT** /api/v3/organizations/{organisation}/ai/slack-bots/{botId} | Update Slack Bot |


## `createSlackBot()`

```php
createSlackBot($organisation, $create_slack_bot_request): \QuantClient\Model\CreateSlackBot201Response
```

Create Slack Bot

Creates a new Slack bot backed by an AI agent. The bot must be connected to a Slack workspace via OAuth before it can receive events.      *      * **Setup Types:**      * - `quant`: Quant-managed Slack app — uses shared OAuth credentials      * - `byo`: Bring Your Own — customer provides their own Slack app credentials

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

Permanently deletes a Slack bot and disconnects it from the workspace.

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

Retrieves details for a specific Slack bot including its configuration and connection status.

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

## `listSlackBots()`

```php
listSlackBots($organisation): \QuantClient\Model\ListSlackBots200Response
```

List Slack Bots

Lists all Slack bots configured for the organization. Each bot is backed by an AI agent and can be connected to a Slack workspace.

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

Updates a Slack bot's configuration. Only provided fields are updated.

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
