# QuantClient\ResourcesApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachOrgResource()**](ResourcesApi.md#attachOrgResource) | **POST** /api/v3/organizations/{organisation}/resources/{resource}/attachments | Attach a resource to an application environment |
| [**createOrgResource()**](ResourcesApi.md#createOrgResource) | **POST** /api/v3/organizations/{organisation}/resources | Create a shared resource |
| [**deleteCiRunnerPoolCache()**](ResourcesApi.md#deleteCiRunnerPoolCache) | **DELETE** /api/v3/organizations/{organisation}/resources/{resource}/cache | Delete build cache entries of a CI runner pool |
| [**deleteOrgResource()**](ResourcesApi.md#deleteOrgResource) | **DELETE** /api/v3/organizations/{organisation}/resources/{resource} | Delete a shared resource |
| [**detachOrgResource()**](ResourcesApi.md#detachOrgResource) | **DELETE** /api/v3/organizations/{organisation}/resources/{resource}/attachments/{application}/{environment} | Detach a resource from an application environment |
| [**getCiRunnerPoolCacheStats()**](ResourcesApi.md#getCiRunnerPoolCacheStats) | **GET** /api/v3/organizations/{organisation}/resources/{resource}/cache/stats | Get build cache statistics of a CI runner pool |
| [**getOrgResource()**](ResourcesApi.md#getOrgResource) | **GET** /api/v3/organizations/{organisation}/resources/{resource} | Get a shared resource and its attachments |
| [**getOrgResourceCredentials()**](ResourcesApi.md#getOrgResourceCredentials) | **GET** /api/v3/organizations/{organisation}/resources/{resource}/credentials | Get a cache&#39;s administrative credential |
| [**listCiRunnerPoolCache()**](ResourcesApi.md#listCiRunnerPoolCache) | **GET** /api/v3/organizations/{organisation}/resources/{resource}/cache | List the build cache entries of a CI runner pool |
| [**listOrgResources()**](ResourcesApi.md#listOrgResources) | **GET** /api/v3/organizations/{organisation}/resources | List an organisation&#39;s shared resources |
| [**purgeOrgResource()**](ResourcesApi.md#purgeOrgResource) | **POST** /api/v3/organizations/{organisation}/resources/{resource}/purge | Purge keys from a cache |


## `attachOrgResource()`

```php
attachOrgResource($organisation, $resource, $attach_org_resource_request): \QuantClient\Model\ResourceAttachment
```

Attach a resource to an application environment

Object storage credentials are written immediately and take effect on the environment's next deploy. Cache variables are rendered at the next deploy, so a cache may be attached while it is still provisioning. An environment accepts one attachment per resource type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$resource = res-abc123; // string | The resource ID
$attach_org_resource_request = new \QuantClient\Model\AttachOrgResourceRequest(); // \QuantClient\Model\AttachOrgResourceRequest

try {
    $result = $apiInstance->attachOrgResource($organisation, $resource, $attach_org_resource_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->attachOrgResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **resource** | **string**| The resource ID | |
| **attach_org_resource_request** | [**\QuantClient\Model\AttachOrgResourceRequest**](../Model/AttachOrgResourceRequest.md)|  | |

### Return type

[**\QuantClient\Model\ResourceAttachment**](../Model/ResourceAttachment.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrgResource()`

```php
createOrgResource($organisation, $create_org_resource_request): \QuantClient\Model\OrgResource
```

Create a shared resource

Object storage is provisioned synchronously and returns status available. A Valkey cache is asynchronous and returns status provisioning; poll the show endpoint until it reports available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$create_org_resource_request = new \QuantClient\Model\CreateOrgResourceRequest(); // \QuantClient\Model\CreateOrgResourceRequest

try {
    $result = $apiInstance->createOrgResource($organisation, $create_org_resource_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->createOrgResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **create_org_resource_request** | [**\QuantClient\Model\CreateOrgResourceRequest**](../Model/CreateOrgResourceRequest.md)|  | |

### Return type

[**\QuantClient\Model\OrgResource**](../Model/OrgResource.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCiRunnerPoolCache()`

```php
deleteCiRunnerPoolCache($organisation, $resource, $ci_cache_delete_request): \QuantClient\Model\CiCacheDeleteResult
```

Delete build cache entries of a CI runner pool

Deletes the part of the pool's build cache that the body names: one entry (repoId, ref, version and key), one version of a ref (repoId, ref, version), one ref (repoId, ref), one repository (repoId) or, with exactly {\"all\": true}, the whole cache. A missing or empty body is refused. Only the named scope is deleted; a delete is permanent, and a later job saves a new entry. A large delete stops after about 12 seconds and returns complete false with what it deleted so far; send the same request again until complete is true. complete false means: send the same request again. If a call returns complete false with deletedEntries 0, stop and try again later, because a storage call failed, timed out or refused objects. After a 502 the delete may still be running on the platform; the request is idempotent, so a client can send the same request again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$resource = cr-0123456789abcdef; // string | The CI runner pool resource ID
$ci_cache_delete_request = {"repoId":123456,"ref":"refs/heads/main","version":"a1b2c3","key":"node-cache-Linux-x64-npm-abc"}; // \QuantClient\Model\CiCacheDeleteRequest

try {
    $result = $apiInstance->deleteCiRunnerPoolCache($organisation, $resource, $ci_cache_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->deleteCiRunnerPoolCache: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **resource** | **string**| The CI runner pool resource ID | |
| **ci_cache_delete_request** | [**\QuantClient\Model\CiCacheDeleteRequest**](../Model/CiCacheDeleteRequest.md)|  | |

### Return type

[**\QuantClient\Model\CiCacheDeleteResult**](../Model/CiCacheDeleteResult.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrgResource()`

```php
deleteOrgResource($organisation, $resource, $force)
```

Delete a shared resource

Deletes the resource and its contents. This cannot be undone. A resource with live attachments is rejected unless force is set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$resource = res-abc123; // string | The resource ID
$force = True; // bool | Delete even if the resource is attached or in an error state

try {
    $apiInstance->deleteOrgResource($organisation, $resource, $force);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->deleteOrgResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **resource** | **string**| The resource ID | |
| **force** | **bool**| Delete even if the resource is attached or in an error state | [optional] |

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

## `detachOrgResource()`

```php
detachOrgResource($organisation, $resource, $application, $environment)
```

Detach a resource from an application environment

Removes the injected credentials and redeploys the environment so that it stops referencing them, which interrupts the environment briefly. The resource and its contents are not deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$resource = res-abc123; // string | The resource ID
$application = test-app; // string | The application ID
$environment = production; // string | The environment ID

try {
    $apiInstance->detachOrgResource($organisation, $resource, $application, $environment);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->detachOrgResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **resource** | **string**| The resource ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |

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

## `getCiRunnerPoolCacheStats()`

```php
getCiRunnerPoolCacheStats($organisation, $resource, $days): \QuantClient\Model\CiCacheStats
```

Get build cache statistics of a CI runner pool

Sums of the pool's build cache hits, misses, saves and bytes over the last days days. hitRate is hits / (hits + misses), or null when both are 0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$resource = cr-0123456789abcdef; // string | The CI runner pool resource ID
$days = 7; // int

try {
    $result = $apiInstance->getCiRunnerPoolCacheStats($organisation, $resource, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getCiRunnerPoolCacheStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **resource** | **string**| The CI runner pool resource ID | |
| **days** | **int**|  | [optional] [default to 7] |

### Return type

[**\QuantClient\Model\CiCacheStats**](../Model/CiCacheStats.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgResource()`

```php
getOrgResource($organisation, $resource): \QuantClient\Model\OrgResource
```

Get a shared resource and its attachments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$resource = res-abc123; // string | The resource ID

try {
    $result = $apiInstance->getOrgResource($organisation, $resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getOrgResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **resource** | **string**| The resource ID | |

### Return type

[**\QuantClient\Model\OrgResource**](../Model/OrgResource.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrgResourceCredentials()`

```php
getOrgResourceCredentials($organisation, $resource): \QuantClient\Model\GetOrgResourceCredentials200Response
```

Get a cache's administrative credential

Cache resources only. Returns the cache-wide user (every key, every command, including FLUSHDB) with host and port. Environments attached to the cache use their own scoped users; this credential is for operators who genuinely need unrestricted access. Every read is audit-logged against the requesting user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$resource = vk-sessions; // string | The resource ID

try {
    $result = $apiInstance->getOrgResourceCredentials($organisation, $resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->getOrgResourceCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **resource** | **string**| The resource ID | |

### Return type

[**\QuantClient\Model\GetOrgResourceCredentials200Response**](../Model/GetOrgResourceCredentials200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCiRunnerPoolCache()`

```php
listCiRunnerPoolCache($organisation, $resource, $repo_id, $ref, $cursor): \QuantClient\Model\CiCacheList
```

List the build cache entries of a CI runner pool

Lists the GitHub Actions cache entries of a CI runner pool, in storage order (repository id, then ref, version and key). totalBytes and entryCount cover every entry that matches the filter, not only this page; on a very large cache the count stops after about 10 seconds and totalsComplete is false. A page holds at most 500 entries; pass nextCursor as cursor, with the same filter, until it is null. repo is null when no repository name is recorded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$resource = cr-0123456789abcdef; // string | The CI runner pool resource ID
$repo_id = 56; // int | Only the entries of this GitHub repository id.
$ref = refs/heads/main; // string | Only the entries saved by this git ref. Needs repoId. Must start with refs/ and be a valid git ref name without %.
$cursor = 'cursor_example'; // string | Opaque nextCursor from the previous page of the same filter.

try {
    $result = $apiInstance->listCiRunnerPoolCache($organisation, $resource, $repo_id, $ref, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->listCiRunnerPoolCache: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **resource** | **string**| The CI runner pool resource ID | |
| **repo_id** | **int**| Only the entries of this GitHub repository id. | [optional] |
| **ref** | **string**| Only the entries saved by this git ref. Needs repoId. Must start with refs/ and be a valid git ref name without %. | [optional] |
| **cursor** | **string**| Opaque nextCursor from the previous page of the same filter. | [optional] |

### Return type

[**\QuantClient\Model\CiCacheList**](../Model/CiCacheList.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listOrgResources()`

```php
listOrgResources($organisation): \QuantClient\Model\OrgResource[]
```

List an organisation's shared resources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID

try {
    $result = $apiInstance->listOrgResources($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->listOrgResources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\OrgResource[]**](../Model/OrgResource.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purgeOrgResource()`

```php
purgeOrgResource($organisation, $resource, $purge_org_resource_request): \QuantClient\Model\PurgeOrgResource200Response
```

Purge keys from a cache

Cache resources only. scope environment deletes that environment's keys, using the CACHE_PREFIX recorded on its attachment rather than anything in the request. scope all flushes every key for every attached environment and requires confirm=true. A large environment purge may return complete=false with a cursor to resume.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$resource = vk-sessions; // string | The resource ID
$purge_org_resource_request = new \QuantClient\Model\PurgeOrgResourceRequest(); // \QuantClient\Model\PurgeOrgResourceRequest

try {
    $result = $apiInstance->purgeOrgResource($organisation, $resource, $purge_org_resource_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->purgeOrgResource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **resource** | **string**| The resource ID | |
| **purge_org_resource_request** | [**\QuantClient\Model\PurgeOrgResourceRequest**](../Model/PurgeOrgResourceRequest.md)|  | |

### Return type

[**\QuantClient\Model\PurgeOrgResource200Response**](../Model/PurgeOrgResource200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
