# QuantClient\AIVectorDatabaseApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVectorCollection()**](AIVectorDatabaseApi.md#createVectorCollection) | **POST** /api/v3/organizations/{organisation}/ai/vector-db/collections | Create Vector Database Collection |
| [**deleteVectorCollection()**](AIVectorDatabaseApi.md#deleteVectorCollection) | **DELETE** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId} | Delete Collection |
| [**deleteVectorDocuments()**](AIVectorDatabaseApi.md#deleteVectorDocuments) | **DELETE** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId}/documents | Delete Documents from Collection |
| [**getVectorCollection()**](AIVectorDatabaseApi.md#getVectorCollection) | **GET** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId} | Get Collection Details |
| [**listVectorCollections()**](AIVectorDatabaseApi.md#listVectorCollections) | **GET** /api/v3/organizations/{organisation}/ai/vector-db/collections | List Vector Database Collections |
| [**listVectorDocuments()**](AIVectorDatabaseApi.md#listVectorDocuments) | **GET** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId}/documents | List Documents in Collection |
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
deleteVectorCollection($organisation, $collection_id): \QuantClient\Model\DeleteSkillCollection200Response
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

[**\QuantClient\Model\DeleteSkillCollection200Response**](../Model/DeleteSkillCollection200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVectorDocuments()`

```php
deleteVectorDocuments($organisation, $collection_id, $delete_vector_documents_request): \QuantClient\Model\DeleteVectorDocuments200Response
```

Delete Documents from Collection

Delete documents from a collection. Supports three deletion modes:      *      * 1. **Purge All** - Set `purgeAll: true` to delete ALL documents in the collection      *      * 2. **By Document IDs** - Provide `documentIds` array with specific document UUIDs      *      * 3. **By Metadata** - Provide `metadata` object with `field` and `values` to delete documents where the metadata field matches any of the values      *      * **Drupal Integration:**      * When using with Drupal AI Search, use metadata deletion with:      * - `field: 'drupal_entity_id'` to delete all chunks for specific entities      * - `field: 'drupal_long_id'` to delete specific chunks

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
$organisation = 'organisation_example'; // string | Organisation machine name
$collection_id = 'collection_id_example'; // string | Collection UUID
$delete_vector_documents_request = new \QuantClient\Model\DeleteVectorDocumentsRequest(); // \QuantClient\Model\DeleteVectorDocumentsRequest

try {
    $result = $apiInstance->deleteVectorDocuments($organisation, $collection_id, $delete_vector_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIVectorDatabaseApi->deleteVectorDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| Organisation machine name | |
| **collection_id** | **string**| Collection UUID | |
| **delete_vector_documents_request** | [**\QuantClient\Model\DeleteVectorDocumentsRequest**](../Model/DeleteVectorDocumentsRequest.md)|  | |

### Return type

[**\QuantClient\Model\DeleteVectorDocuments200Response**](../Model/DeleteVectorDocuments200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
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


$apiInstance = new QuantClient\Api\AIVectorDatabaseApi(
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
    echo 'Exception when calling AIVectorDatabaseApi->listVectorDocuments: ', $e->getMessage(), PHP_EOL;
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

## `queryVectorCollection()`

```php
queryVectorCollection($organisation, $collection_id, $query_vector_collection_request): \QuantClient\Model\QueryVectorCollection200Response
```

Semantic Search Query

Performs semantic search on a collection using vector similarity. Returns the most relevant documents based on meaning, not keyword matching.      *      * **Three Search Modes:**      *      * 1. **Text Query** - Provide `query` string, server generates embedding      *    - Query text is embedded using the collection's embedding model      *    - Embeddings are cached for repeated queries      *      * 2. **Vector Query** - Provide pre-computed `vector` array      *    - Skip embedding generation (faster)      *    - Useful when you've already embedded the query elsewhere      *    - Vector dimension must match collection (e.g., 1024 for Titan v2)      *      * 3. **Metadata List** - Set `listByMetadata: true` with `filter`      *    - Skip semantic search entirely      *    - Return all documents matching the filter      *    - Supports cursor-based pagination for large datasets      *    - Results ordered by sortBy/sortOrder (default: created_at DESC)      *      * **Filtering:**      * - `filter.exact`: Exact match on metadata fields (AND logic)      * - `filter.contains`: Array contains filter for tags (ANY match)      * - Filters can be combined with semantic search or used alone with listByMetadata      *      * **Pagination (listByMetadata mode only):**      * - Use `cursor` from previous response's `nextCursor` to get next page      * - Uses keyset pagination for efficient traversal of large datasets      * - Control sort with `sortBy` and `sortOrder`      *      * **Use Cases:**      * - Find relevant documentation for user questions      * - Power RAG (Retrieval Augmented Generation) in AI assistants      * - Semantic search across knowledge bases      * - List all artifacts by building/worker/tag

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
