# QuantClient\ResourcesApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachOrgResource()**](ResourcesApi.md#attachOrgResource) | **POST** /api/v3/organizations/{organisation}/resources/{resource}/attachments | Attach a resource to an application environment |
| [**createOrgResource()**](ResourcesApi.md#createOrgResource) | **POST** /api/v3/organizations/{organisation}/resources | Create a shared resource |
| [**deleteOrgResource()**](ResourcesApi.md#deleteOrgResource) | **DELETE** /api/v3/organizations/{organisation}/resources/{resource} | Delete a shared resource |
| [**detachOrgResource()**](ResourcesApi.md#detachOrgResource) | **DELETE** /api/v3/organizations/{organisation}/resources/{resource}/attachments/{application}/{environment} | Detach a resource from an application environment |
| [**getOrgResource()**](ResourcesApi.md#getOrgResource) | **GET** /api/v3/organizations/{organisation}/resources/{resource} | Get a shared resource and its attachments |
| [**listOrgResources()**](ResourcesApi.md#listOrgResources) | **GET** /api/v3/organizations/{organisation}/resources | List an organisation&#39;s shared resources |


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
