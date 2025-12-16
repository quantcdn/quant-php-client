# QuantClient\AIVectorDatabaseApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVectorCollection()**](AIVectorDatabaseApi.md#createVectorCollection) | **POST** /api/v3/organizations/{organisation}/ai/vector-db/collections | Create Vector Database Collection |
| [**deleteVectorCollection()**](AIVectorDatabaseApi.md#deleteVectorCollection) | **DELETE** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId} | Delete Collection |
| [**getVectorCollection()**](AIVectorDatabaseApi.md#getVectorCollection) | **GET** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId} | Get Collection Details |
| [**listVectorCollections()**](AIVectorDatabaseApi.md#listVectorCollections) | **GET** /api/v3/organizations/{organisation}/ai/vector-db/collections | List Vector Database Collections |
| [**queryVectorCollection()**](AIVectorDatabaseApi.md#queryVectorCollection) | **POST** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId}/query | Semantic Search Query |
| [**uploadVectorDocuments()**](AIVectorDatabaseApi.md#uploadVectorDocuments) | **POST** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId}/documents | Upload Documents to Collection |


## `createVectorCollection()`

```php
createVectorCollection($organisation, $create_vector_collection_request): \QuantClient\Model\CreateVectorCollection201Response
```

Create Vector Database Collection

Creates a new vector database collection (knowledge base category) for semantic search. Collections store documents with embeddings for RAG (Retrieval Augmented Generation).      *      * **Use Cases:**      * - Product documentation ('docs')      * - Company policies ('policies')      * - Support knowledge base ('support')      * - Technical specifications ('specs')

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIVectorDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$create_vector_collection_request = new \QuantClient\Model\CreateVectorCollectionRequest(); // \QuantClient\Model\CreateVectorCollectionRequest

try {
    $result = $apiInstance->createVectorCollection($organisation, $create_vector_collection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIVectorDatabaseApi->createVectorCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **create_vector_collection_request** | [**\QuantClient\Model\CreateVectorCollectionRequest**](../Model/CreateVectorCollectionRequest.md)|  | |

### Return type

[**\QuantClient\Model\CreateVectorCollection201Response**](../Model/CreateVectorCollection201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVectorCollection()`

```php
deleteVectorCollection($organisation, $collection_id): \QuantClient\Model\DeleteVectorCollection200Response
```

Delete Collection

Deletes a vector database collection and all its documents. This action cannot be undone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIVectorDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$collection_id = 'collection_id_example'; // string | The collection ID

try {
    $result = $apiInstance->deleteVectorCollection($organisation, $collection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIVectorDatabaseApi->deleteVectorCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **collection_id** | **string**| The collection ID | |

### Return type

[**\QuantClient\Model\DeleteVectorCollection200Response**](../Model/DeleteVectorCollection200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVectorCollection()`

```php
getVectorCollection($organisation, $collection_id): \QuantClient\Model\GetVectorCollection200Response
```

Get Collection Details

Get detailed information about a specific vector database collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIVectorDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$collection_id = 'collection_id_example'; // string | The collection ID

try {
    $result = $apiInstance->getVectorCollection($organisation, $collection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIVectorDatabaseApi->getVectorCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **collection_id** | **string**| The collection ID | |

### Return type

[**\QuantClient\Model\GetVectorCollection200Response**](../Model/GetVectorCollection200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVectorCollections()`

```php
listVectorCollections($organisation): \QuantClient\Model\ListVectorCollections200Response
```

List Vector Database Collections

Lists all vector database collections (knowledge bases) for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIVectorDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->listVectorCollections($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIVectorDatabaseApi->listVectorCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\ListVectorCollections200Response**](../Model/ListVectorCollections200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryVectorCollection()`

```php
queryVectorCollection($organisation, $collection_id, $query_vector_collection_request): \QuantClient\Model\QueryVectorCollection200Response
```

Semantic Search Query

Performs semantic search on a collection using vector similarity. Returns the most relevant documents based on meaning, not keyword matching.      *      * **Use Cases:**      * - Find relevant documentation for user questions      * - Power RAG (Retrieval Augmented Generation) in AI assistants      * - Semantic search across knowledge bases

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIVectorDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$collection_id = 'collection_id_example'; // string | The collection ID
$query_vector_collection_request = new \QuantClient\Model\QueryVectorCollectionRequest(); // \QuantClient\Model\QueryVectorCollectionRequest

try {
    $result = $apiInstance->queryVectorCollection($organisation, $collection_id, $query_vector_collection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIVectorDatabaseApi->queryVectorCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **collection_id** | **string**| The collection ID | |
| **query_vector_collection_request** | [**\QuantClient\Model\QueryVectorCollectionRequest**](../Model/QueryVectorCollectionRequest.md)|  | |

### Return type

[**\QuantClient\Model\QueryVectorCollection200Response**](../Model/QueryVectorCollection200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadVectorDocuments()`

```php
uploadVectorDocuments($organisation, $collection_id, $upload_vector_documents_request): \QuantClient\Model\UploadVectorDocuments200Response
```

Upload Documents to Collection

Uploads documents to a vector database collection with automatic embedding generation. Documents are chunked (if needed), embedded using the collection's embedding model, and stored.      *      * **Supported Content:**      * - Plain text content      * - URLs to fetch content from      * - Markdown documents      *      * **Metadata:**      * Each document can include metadata (title, source_url, section, tags) that is returned with search results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIVectorDatabaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$collection_id = 'collection_id_example'; // string | The collection ID
$upload_vector_documents_request = new \QuantClient\Model\UploadVectorDocumentsRequest(); // \QuantClient\Model\UploadVectorDocumentsRequest

try {
    $result = $apiInstance->uploadVectorDocuments($organisation, $collection_id, $upload_vector_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIVectorDatabaseApi->uploadVectorDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **collection_id** | **string**| The collection ID | |
| **upload_vector_documents_request** | [**\QuantClient\Model\UploadVectorDocumentsRequest**](../Model/UploadVectorDocumentsRequest.md)|  | |

### Return type

[**\QuantClient\Model\UploadVectorDocuments200Response**](../Model/UploadVectorDocuments200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
