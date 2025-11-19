# QuantClient\BackupManagementApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBackup()**](BackupManagementApi.md#createBackup) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{type} | Create a backup for an environment |
| [**deleteBackup()**](BackupManagementApi.md#deleteBackup) | **DELETE** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{type}/{backupId} | Delete a backup |
| [**downloadBackup()**](BackupManagementApi.md#downloadBackup) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{type}/{backupId}/download | Generate a download URL for a backup |
| [**listBackups()**](BackupManagementApi.md#listBackups) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{type} | List backups for an environment |


## `createBackup()`

```php
createBackup($organisation, $application, $environment, $type, $create_backup_request): \QuantClient\Model\CreateBackup202Response
```

Create a backup for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\BackupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$application = 'application_example'; // string | The application ID
$environment = 'environment_example'; // string | The environment ID
$type = 'type_example'; // string | The backup type
$create_backup_request = new \QuantClient\Model\CreateBackupRequest(); // \QuantClient\Model\CreateBackupRequest

try {
    $result = $apiInstance->createBackup($organisation, $application, $environment, $type, $create_backup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupManagementApi->createBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **type** | **string**| The backup type | |
| **create_backup_request** | [**\QuantClient\Model\CreateBackupRequest**](../Model/CreateBackupRequest.md)|  | [optional] |

### Return type

[**\QuantClient\Model\CreateBackup202Response**](../Model/CreateBackup202Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBackup()`

```php
deleteBackup($organisation, $application, $environment, $type, $backup_id): \QuantClient\Model\DeleteBackup200Response
```

Delete a backup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\BackupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$application = 'application_example'; // string | The application ID
$environment = 'environment_example'; // string | The environment ID
$type = 'type_example'; // string | The backup type
$backup_id = 'backup_id_example'; // string | The backup ID

try {
    $result = $apiInstance->deleteBackup($organisation, $application, $environment, $type, $backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupManagementApi->deleteBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **type** | **string**| The backup type | |
| **backup_id** | **string**| The backup ID | |

### Return type

[**\QuantClient\Model\DeleteBackup200Response**](../Model/DeleteBackup200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadBackup()`

```php
downloadBackup($organisation, $application, $environment, $type, $backup_id): \QuantClient\Model\DownloadBackup200Response
```

Generate a download URL for a backup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\BackupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$application = 'application_example'; // string | The application ID
$environment = 'environment_example'; // string | The environment ID
$type = 'type_example'; // string | The backup type
$backup_id = 'backup_id_example'; // string | The backup ID

try {
    $result = $apiInstance->downloadBackup($organisation, $application, $environment, $type, $backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupManagementApi->downloadBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **type** | **string**| The backup type | |
| **backup_id** | **string**| The backup ID | |

### Return type

[**\QuantClient\Model\DownloadBackup200Response**](../Model/DownloadBackup200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBackups()`

```php
listBackups($organisation, $application, $environment, $type, $order, $limit, $created_before, $created_after, $status, $next_token): \QuantClient\Model\ListBackups200Response
```

List backups for an environment

Retrieves a list of backups (database or filesystem) for the environment with status, size, and metadata. Supports filtering and ordering via query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\BackupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$application = 'application_example'; // string | The application ID
$environment = 'environment_example'; // string | The environment ID
$type = 'type_example'; // string | The backup type
$order = 'desc'; // string | Sort order for backups by creation date (asc = oldest first, desc = newest first)
$limit = 50; // int | Maximum number of backups to return (max 100)
$created_before = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only return backups created before this ISO 8601 timestamp (e.g., 2025-01-01T00:00:00Z)
$created_after = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Only return backups created after this ISO 8601 timestamp (e.g., 2024-12-01T00:00:00Z)
$status = 'status_example'; // string | Filter backups by status
$next_token = 'next_token_example'; // string | Token for retrieving the next page of results

try {
    $result = $apiInstance->listBackups($organisation, $application, $environment, $type, $order, $limit, $created_before, $created_after, $status, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupManagementApi->listBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **type** | **string**| The backup type | |
| **order** | **string**| Sort order for backups by creation date (asc &#x3D; oldest first, desc &#x3D; newest first) | [optional] [default to &#39;desc&#39;] |
| **limit** | **int**| Maximum number of backups to return (max 100) | [optional] [default to 50] |
| **created_before** | **\DateTime**| Only return backups created before this ISO 8601 timestamp (e.g., 2025-01-01T00:00:00Z) | [optional] |
| **created_after** | **\DateTime**| Only return backups created after this ISO 8601 timestamp (e.g., 2024-12-01T00:00:00Z) | [optional] |
| **status** | **string**| Filter backups by status | [optional] |
| **next_token** | **string**| Token for retrieving the next page of results | [optional] |

### Return type

[**\QuantClient\Model\ListBackups200Response**](../Model/ListBackups200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
