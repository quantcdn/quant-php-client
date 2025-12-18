# QuantClient\CronApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCronJob()**](CronApi.md#createCronJob) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron | Create a new cron job |
| [**deleteCronJob()**](CronApi.md#deleteCronJob) | **DELETE** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron/{cron} | Delete a cron job |
| [**getCronJob()**](CronApi.md#getCronJob) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron/{cron} | Get a cron job |
| [**getCronRun()**](CronApi.md#getCronRun) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron/{cron}/runs/{run} | Get a cron run |
| [**listCronJobRuns()**](CronApi.md#listCronJobRuns) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron/{cron}/runs | Get all runs for a cron job |
| [**listCronJobs()**](CronApi.md#listCronJobs) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron | Get all cron jobs for an environment |
| [**updateCronJob()**](CronApi.md#updateCronJob) | **PATCH** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron/{cron} | Update a cron job |


## `createCronJob()`

```php
createCronJob($organisation, $application, $environment, $create_cron_job_request): \QuantClient\Model\Cron
```

Create a new cron job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CronApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID
$create_cron_job_request = new \QuantClient\Model\CreateCronJobRequest(); // \QuantClient\Model\CreateCronJobRequest

try {
    $result = $apiInstance->createCronJob($organisation, $application, $environment, $create_cron_job_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CronApi->createCronJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **create_cron_job_request** | [**\QuantClient\Model\CreateCronJobRequest**](../Model/CreateCronJobRequest.md)|  | |

### Return type

[**\QuantClient\Model\Cron**](../Model/Cron.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCronJob()`

```php
deleteCronJob($organisation, $application, $environment, $cron)
```

Delete a cron job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CronApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID
$cron = 'cron_example'; // string | The cron job ID

try {
    $apiInstance->deleteCronJob($organisation, $application, $environment, $cron);
} catch (Exception $e) {
    echo 'Exception when calling CronApi->deleteCronJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **cron** | **string**| The cron job ID | |

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

## `getCronJob()`

```php
getCronJob($organisation, $application, $environment, $cron): \QuantClient\Model\Cron
```

Get a cron job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CronApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID
$cron = 'cron_example'; // string | The cron job ID

try {
    $result = $apiInstance->getCronJob($organisation, $application, $environment, $cron);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CronApi->getCronJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **cron** | **string**| The cron job ID | |

### Return type

[**\QuantClient\Model\Cron**](../Model/Cron.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCronRun()`

```php
getCronRun($organisation, $application, $environment, $cron, $run): \QuantClient\Model\CronRun
```

Get a cron run

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CronApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID
$cron = test-cron; // string | The cron job ID
$run = 'run_example'; // string | The cron run ID

try {
    $result = $apiInstance->getCronRun($organisation, $application, $environment, $cron, $run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CronApi->getCronRun: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **cron** | **string**| The cron job ID | |
| **run** | **string**| The cron run ID | |

### Return type

[**\QuantClient\Model\CronRun**](../Model/CronRun.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCronJobRuns()`

```php
listCronJobRuns($organisation, $application, $environment, $cron): \QuantClient\Model\CronRun[]
```

Get all runs for a cron job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CronApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID
$cron = test-cron; // string | The cron job ID

try {
    $result = $apiInstance->listCronJobRuns($organisation, $application, $environment, $cron);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CronApi->listCronJobRuns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **cron** | **string**| The cron job ID | |

### Return type

[**\QuantClient\Model\CronRun[]**](../Model/CronRun.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCronJobs()`

```php
listCronJobs($organisation, $application, $environment): \QuantClient\Model\Cron
```

Get all cron jobs for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CronApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID

try {
    $result = $apiInstance->listCronJobs($organisation, $application, $environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CronApi->listCronJobs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |

### Return type

[**\QuantClient\Model\Cron**](../Model/Cron.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCronJob()`

```php
updateCronJob($organisation, $application, $environment, $cron, $update_cron_job_request): \QuantClient\Model\Cron
```

Update a cron job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\CronApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID
$cron = 'cron_example'; // string | The cron job ID
$update_cron_job_request = new \QuantClient\Model\UpdateCronJobRequest(); // \QuantClient\Model\UpdateCronJobRequest

try {
    $result = $apiInstance->updateCronJob($organisation, $application, $environment, $cron, $update_cron_job_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CronApi->updateCronJob: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **cron** | **string**| The cron job ID | |
| **update_cron_job_request** | [**\QuantClient\Model\UpdateCronJobRequest**](../Model/UpdateCronJobRequest.md)|  | |

### Return type

[**\QuantClient\Model\Cron**](../Model/Cron.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
