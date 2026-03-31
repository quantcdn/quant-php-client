# QuantClient\VectorDatabaseApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listVectorDocuments()**](VectorDatabaseApi.md#listVectorDocuments) | **GET** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId}/documents | List Documents in Collection |


## `listVectorDocuments()`

```php
listVectorDocuments($organisation, $collection_id, $key, $limit, $offset)
```

List Documents in Collection

Lists documents in a collection with pagination. Supports filtering by document key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\VectorDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$collection_id = 'collection_id_example'; // string
$key = 'key_example'; // string | Filter by document key
$limit = 50; // int
$offset = 0; // int

try {
    $apiInstance->listVectorDocuments($organisation, $collection_id, $key, $limit, $offset);
} catch (Exception $e) {
    echo 'Exception when calling VectorDatabaseApi->listVectorDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**|  | |
| **collection_id** | **string**|  | |
| **key** | **string**| Filter by document key | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **offset** | **int**|  | [optional] [default to 0] |

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
