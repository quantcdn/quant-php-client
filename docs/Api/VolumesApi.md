# QuantClient\VolumesApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createVolume()**](VolumesApi.md#createVolume) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/volumes | Create a new volume |
| [**deleteVolume()**](VolumesApi.md#deleteVolume) | **DELETE** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/volumes/{volume} | Delete a volume |
| [**getVolume()**](VolumesApi.md#getVolume) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/volumes/{volume} | Get a volume |
| [**listVolumes()**](VolumesApi.md#listVolumes) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/volumes | Get all volumes for an environment |


## `createVolume()`

```php
createVolume($organisation, $application, $environment, $create_volume_request): \QuantClient\Model\Volume
```

Create a new volume

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\VolumesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$application = 'application_example'; // string | The application ID
$environment = 'environment_example'; // string | The environment ID
$create_volume_request = new \QuantClient\Model\CreateVolumeRequest(); // \QuantClient\Model\CreateVolumeRequest

try {
    $result = $apiInstance->createVolume($organisation, $application, $environment, $create_volume_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumesApi->createVolume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **create_volume_request** | [**\QuantClient\Model\CreateVolumeRequest**](../Model/CreateVolumeRequest.md)|  | |

### Return type

[**\QuantClient\Model\Volume**](../Model/Volume.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVolume()`

```php
deleteVolume($organisation, $application, $environment, $volume)
```

Delete a volume

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\VolumesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$application = 'application_example'; // string | The application ID
$environment = 'environment_example'; // string | The environment ID
$volume = 'volume_example'; // string | The volume ID

try {
    $apiInstance->deleteVolume($organisation, $application, $environment, $volume);
} catch (Exception $e) {
    echo 'Exception when calling VolumesApi->deleteVolume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **volume** | **string**| The volume ID | |

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

## `getVolume()`

```php
getVolume($organisation, $application, $environment, $volume): \QuantClient\Model\Volume
```

Get a volume

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\VolumesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$application = 'application_example'; // string | The application ID
$environment = 'environment_example'; // string | The environment ID
$volume = 'volume_example'; // string | The volume ID

try {
    $result = $apiInstance->getVolume($organisation, $application, $environment, $volume);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumesApi->getVolume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **volume** | **string**| The volume ID | |

### Return type

[**\QuantClient\Model\Volume**](../Model/Volume.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVolumes()`

```php
listVolumes($organisation, $application, $environment): \QuantClient\Model\Volume
```

Get all volumes for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\VolumesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$application = 'application_example'; // string | The application ID
$environment = 'environment_example'; // string | The environment ID

try {
    $result = $apiInstance->listVolumes($organisation, $application, $environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumesApi->listVolumes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |

### Return type

[**\QuantClient\Model\Volume**](../Model/Volume.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
