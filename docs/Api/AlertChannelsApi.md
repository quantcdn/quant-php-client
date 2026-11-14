# QuantClient\AlertChannelsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alertChannelsList()**](AlertChannelsApi.md#alertChannelsList) | **GET** /api/v3/organizations/{organisation}/projects/{project}/alert-channels | List the organisation&#39;s alert channels |


## `alertChannelsList()`

```php
alertChannelsList($organisation, $project): \QuantClient\Model\AlertChannelList
```

List the organisation's alert channels

Returns every alert channel of the organisation (channels are organisation-wide; the project segment lets a project-limited token call it). Each item has the ID, name, type and a masked hint only. Needs the alert-channels:read scope and the view_alert_channels permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AlertChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation machine name
$project = test-project; // string | The project machine name

try {
    $result = $apiInstance->alertChannelsList($organisation, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertChannelsApi->alertChannelsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **project** | **string**| The project machine name | |

### Return type

[**\QuantClient\Model\AlertChannelList**](../Model/AlertChannelList.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
