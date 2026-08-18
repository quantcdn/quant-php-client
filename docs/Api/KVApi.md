# QuantClient\KVApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**kVCreate()**](KVApi.md#kVCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv | Add a kv store |
| [**kVDelete()**](KVApi.md#kVDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id} | Delete a kv store |
| [**kVItemsCreate()**](KVApi.md#kVItemsCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items | Add an item to a kv store |
| [**kVItemsDelete()**](KVApi.md#kVItemsDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key} | Delete an item from a kv store |
| [**kVItemsList()**](KVApi.md#kVItemsList) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items | List items in a kv store |
| [**kVItemsShow()**](KVApi.md#kVItemsShow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key} | Get an item from a kv store |
| [**kVItemsUpdate()**](KVApi.md#kVItemsUpdate) | **PUT** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key} | Update an item in a kv store |
| [**kVLinkToProject()**](KVApi.md#kVLinkToProject) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/link | Link a KV store to another project |
| [**kVList()**](KVApi.md#kVList) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv | List key-value stores |
| [**kVShow()**](KVApi.md#kVShow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id} | Get a kv store |
| [**kVUnlinkFromProject()**](KVApi.md#kVUnlinkFromProject) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/link | Unlink a KV store from this project |


## `kVCreate()`

```php
kVCreate($organization, $project, $v2_store_request): \QuantClient\Model\V2Store
```

Add a kv store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$v2_store_request = new \QuantClient\Model\V2StoreRequest(); // \QuantClient\Model\V2StoreRequest

try {
    $result = $apiInstance->kVCreate($organization, $project, $v2_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_store_request** | [**\QuantClient\Model\V2StoreRequest**](../Model/V2StoreRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2Store**](../Model/V2Store.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVDelete()`

```php
kVDelete($organization, $project, $store_id)
```

Delete a kv store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string

try {
    $apiInstance->kVDelete($organization, $project, $store_id);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsCreate()`

```php
kVItemsCreate($organization, $project, $store_id, $v2_store_item_request): \QuantClient\Model\KVItemsCreate200Response
```

Add an item to a kv store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$v2_store_item_request = new \QuantClient\Model\V2StoreItemRequest(); // \QuantClient\Model\V2StoreItemRequest

try {
    $result = $apiInstance->kVItemsCreate($organization, $project, $store_id, $v2_store_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **v2_store_item_request** | [**\QuantClient\Model\V2StoreItemRequest**](../Model/V2StoreItemRequest.md)|  | |

### Return type

[**\QuantClient\Model\KVItemsCreate200Response**](../Model/KVItemsCreate200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsDelete()`

```php
kVItemsDelete($organization, $project, $store_id, $key): \QuantClient\Model\KVItemsDelete200Response
```

Delete an item from a kv store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->kVItemsDelete($organization, $project, $store_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **key** | **string**|  | |

### Return type

[**\QuantClient\Model\KVItemsDelete200Response**](../Model/KVItemsDelete200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsList()`

```php
kVItemsList($organization, $project, $store_id, $cursor, $limit, $search, $include_values): \QuantClient\Model\V2StoreItemsListResponse
```

List items in a kv store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$cursor = 'cursor_example'; // string | Cursor for pagination
$limit = 10; // int | Number of items to return
$search = 'search_example'; // string | Search filter for keys
$include_values = false; // bool | Include values in the response. Secret values will be redacted as '[ENCRYPTED]' for security.

try {
    $result = $apiInstance->kVItemsList($organization, $project, $store_id, $cursor, $limit, $search, $include_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **cursor** | **string**| Cursor for pagination | [optional] |
| **limit** | **int**| Number of items to return | [optional] [default to 10] |
| **search** | **string**| Search filter for keys | [optional] |
| **include_values** | **bool**| Include values in the response. Secret values will be redacted as &#39;[ENCRYPTED]&#39; for security. | [optional] [default to false] |

### Return type

[**\QuantClient\Model\V2StoreItemsListResponse**](../Model/V2StoreItemsListResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsShow()`

```php
kVItemsShow($organization, $project, $store_id, $key): \QuantClient\Model\KVItemsShow200Response
```

Get an item from a kv store

Retrieves an item from the KV store. **Security Note:** If the item was stored as a secret (secret=true), the value will be redacted and returned as '[ENCRYPTED]' for security. Secrets should be accessed directly via the Quant Cloud platform KVStore abstraction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->kVItemsShow($organization, $project, $store_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **key** | **string**|  | |

### Return type

[**\QuantClient\Model\KVItemsShow200Response**](../Model/KVItemsShow200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsUpdate()`

```php
kVItemsUpdate($organization, $project, $store_id, $key, $v2_store_item_update_request): \QuantClient\Model\KVItemsCreate200Response
```

Update an item in a kv store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$key = 'key_example'; // string
$v2_store_item_update_request = new \QuantClient\Model\V2StoreItemUpdateRequest(); // \QuantClient\Model\V2StoreItemUpdateRequest

try {
    $result = $apiInstance->kVItemsUpdate($organization, $project, $store_id, $key, $v2_store_item_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **key** | **string**|  | |
| **v2_store_item_update_request** | [**\QuantClient\Model\V2StoreItemUpdateRequest**](../Model/V2StoreItemUpdateRequest.md)|  | |

### Return type

[**\QuantClient\Model\KVItemsCreate200Response**](../Model/KVItemsCreate200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLinkToProject()`

```php
kVLinkToProject($organization, $project, $store_id, $kv_link_to_project_request): \QuantClient\Model\KVLinkToProject200Response
```

Link a KV store to another project

Share a KV store from the source project with a target project. The store will be accessible in the target project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Source project identifier
$store_id = store-123; // string | KV store identifier
$kv_link_to_project_request = new \QuantClient\Model\KVLinkToProjectRequest(); // \QuantClient\Model\KVLinkToProjectRequest

try {
    $result = $apiInstance->kVLinkToProject($organization, $project, $store_id, $kv_link_to_project_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLinkToProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Source project identifier | |
| **store_id** | **string**| KV store identifier | |
| **kv_link_to_project_request** | [**\QuantClient\Model\KVLinkToProjectRequest**](../Model/KVLinkToProjectRequest.md)|  | |

### Return type

[**\QuantClient\Model\KVLinkToProject200Response**](../Model/KVLinkToProject200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVList()`

```php
kVList($organization, $project): \QuantClient\Model\V2Store[]
```

List key-value stores

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier

try {
    $result = $apiInstance->kVList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |

### Return type

[**\QuantClient\Model\V2Store[]**](../Model/V2Store.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVShow()`

```php
kVShow($organization, $project, $store_id): \QuantClient\Model\V2Store
```

Get a kv store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string

try {
    $result = $apiInstance->kVShow($organization, $project, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |

### Return type

[**\QuantClient\Model\V2Store**](../Model/V2Store.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVUnlinkFromProject()`

```php
kVUnlinkFromProject($organization, $project, $store_id): \QuantClient\Model\KVLinkToProject200Response
```

Unlink a KV store from this project

Remove access to a linked KV store from this project. The store must be linked (not owned by this project).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = store-123; // string | KV store identifier

try {
    $result = $apiInstance->kVUnlinkFromProject($organization, $project, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVUnlinkFromProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store identifier | |

### Return type

[**\QuantClient\Model\KVLinkToProject200Response**](../Model/KVLinkToProject200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
