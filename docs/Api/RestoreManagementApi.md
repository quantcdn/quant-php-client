# QuantClient\RestoreManagementApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRestoreStatus()**](RestoreManagementApi.md#getRestoreStatus) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/restores/{restoreId} | Get the status of a restore operation |
| [**restoreDatabase()**](RestoreManagementApi.md#restoreDatabase) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{backupId}/restore-database | Restore a database backup to a target environment |
| [**restoreFilesystem()**](RestoreManagementApi.md#restoreFilesystem) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{backupId}/restore-filesystem | Restore a filesystem backup to a target environment |


## `getRestoreStatus()`

```php
getRestoreStatus($organisation, $application, $environment, $restore_id): \QuantClient\Model\GetRestoreStatus200Response
```

Get the status of a restore operation

Returns the current status and metadata for a restore operation. Poll this endpoint to track progress.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\RestoreManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = staging; // string | The environment ID
$restore_id = restore-abc123; // string | The restore operation ID

try {
    $result = $apiInstance->getRestoreStatus($organisation, $application, $environment, $restore_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreManagementApi->getRestoreStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **restore_id** | **string**| The restore operation ID | |

### Return type

[**\QuantClient\Model\GetRestoreStatus200Response**](../Model/GetRestoreStatus200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreDatabase()`

```php
restoreDatabase($organisation, $application, $environment, $backup_id, $restore_database_request): \QuantClient\Model\RestoreDatabase202Response
```

Restore a database backup to a target environment

Initiates an async restore of a database backup into the specified target environment. The backup may originate from a different environment of the same application (cross-env restore). Returns 202 with a restoreId for status polling.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\RestoreManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = staging; // string | The TARGET environment ID to restore INTO
$backup_id = quant-gov-dashboard-staging-2025-09-19T21-50-27-145Z; // string | The backup ID to restore from
$restore_database_request = new \QuantClient\Model\RestoreDatabaseRequest(); // \QuantClient\Model\RestoreDatabaseRequest

try {
    $result = $apiInstance->restoreDatabase($organisation, $application, $environment, $backup_id, $restore_database_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreManagementApi->restoreDatabase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The TARGET environment ID to restore INTO | |
| **backup_id** | **string**| The backup ID to restore from | |
| **restore_database_request** | [**\QuantClient\Model\RestoreDatabaseRequest**](../Model/RestoreDatabaseRequest.md)|  | |

### Return type

[**\QuantClient\Model\RestoreDatabase202Response**](../Model/RestoreDatabase202Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `restoreFilesystem()`

```php
restoreFilesystem($organisation, $application, $environment, $backup_id, $restore_filesystem_request): \QuantClient\Model\RestoreFilesystem202Response
```

Restore a filesystem backup to a target environment

Initiates an async restore of a filesystem backup into the specified target environment. The backup may originate from a different environment of the same application (cross-env restore). Returns 202 with a restoreId for status polling.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\RestoreManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = staging; // string | The TARGET environment ID to restore INTO
$backup_id = quant-gov-dashboard-staging-2025-09-19T21-50-27-145Z; // string | The backup ID to restore from
$restore_filesystem_request = new \QuantClient\Model\RestoreFilesystemRequest(); // \QuantClient\Model\RestoreFilesystemRequest

try {
    $result = $apiInstance->restoreFilesystem($organisation, $application, $environment, $backup_id, $restore_filesystem_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreManagementApi->restoreFilesystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The TARGET environment ID to restore INTO | |
| **backup_id** | **string**| The backup ID to restore from | |
| **restore_filesystem_request** | [**\QuantClient\Model\RestoreFilesystemRequest**](../Model/RestoreFilesystemRequest.md)|  | |

### Return type

[**\QuantClient\Model\RestoreFilesystem202Response**](../Model/RestoreFilesystem202Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
