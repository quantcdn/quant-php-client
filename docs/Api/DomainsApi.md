# QuantClient\DomainsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsCreate()**](DomainsApi.md#domainsCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/domains | Add a new domain |
| [**domainsDelete()**](DomainsApi.md#domainsDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/domains/{domain} | Delete a domain |
| [**domainsList()**](DomainsApi.md#domainsList) | **GET** /api/v2/organizations/{organization}/projects/{project}/domains | List all domains for a project |
| [**domainsRead()**](DomainsApi.md#domainsRead) | **GET** /api/v2/organizations/{organization}/projects/{project}/domains/{domain} | Get details of a single domain |
| [**domainsRenew()**](DomainsApi.md#domainsRenew) | **POST** /api/v2/organizations/{organization}/projects/{project}/domains/{domain}/renew | Renew the SSL certificate for a domain |


## `domainsCreate()`

```php
domainsCreate($organization, $project, $v2_domain_request): \QuantClient\Model\V2Domain
```

Add a new domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$v2_domain_request = new \QuantClient\Model\V2DomainRequest(); // \QuantClient\Model\V2DomainRequest

try {
    $result = $apiInstance->domainsCreate($organization, $project, $v2_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_domain_request** | [**\QuantClient\Model\V2DomainRequest**](../Model/V2DomainRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2Domain**](../Model/V2Domain.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDelete()`

```php
domainsDelete($organization, $project, $domain)
```

Delete a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$domain = 'domain_example'; // string | Domain identifier

try {
    $apiInstance->domainsDelete($organization, $project, $domain);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **domain** | **string**| Domain identifier | |

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

## `domainsList()`

```php
domainsList($organization, $project): \QuantClient\Model\V2Domain[]
```

List all domains for a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier

try {
    $result = $apiInstance->domainsList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |

### Return type

[**\QuantClient\Model\V2Domain[]**](../Model/V2Domain.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsRead()`

```php
domainsRead($organization, $project, $domain): \QuantClient\Model\V2Domain
```

Get details of a single domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$domain = 'domain_example'; // string | Domain identifier

try {
    $result = $apiInstance->domainsRead($organization, $project, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **domain** | **string**| Domain identifier | |

### Return type

[**\QuantClient\Model\V2Domain**](../Model/V2Domain.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsRenew()`

```php
domainsRenew($organization, $project, $domain)
```

Renew the SSL certificate for a domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$domain = 'domain_example'; // string | Domain identifier

try {
    $apiInstance->domainsRenew($organization, $project, $domain);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->domainsRenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **domain** | **string**| Domain identifier | |

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
