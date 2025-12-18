# QuantClient\ComposeApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEnvironmentCompose()**](ComposeApi.md#getEnvironmentCompose) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/compose | Get the compose file for an environment |
| [**patchEnvironmentCompose()**](ComposeApi.md#patchEnvironmentCompose) | **PATCH** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/compose | Partially Update Environment Compose Definition |
| [**validateCompose()**](ComposeApi.md#validateCompose) | **POST** /api/v3/organizations/{organisation}/compose/validate | Validate a compose file |


## `getEnvironmentCompose()`

```php
getEnvironmentCompose($organisation, $application, $environment): \QuantClient\Model\Compose
```

Get the compose file for an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ComposeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID

try {
    $result = $apiInstance->getEnvironmentCompose($organisation, $application, $environment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposeApi->getEnvironmentCompose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |

### Return type

[**\QuantClient\Model\Compose**](../Model/Compose.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchEnvironmentCompose()`

```php
patchEnvironmentCompose($organisation, $application, $environment, $patch_environment_compose_request): \QuantClient\Model\PatchEnvironmentCompose202Response
```

Partially Update Environment Compose Definition

Partially updates top-level fields of the environment's compose definition, such as architecture, task-level CPU/Memory, or min/max scaling capacity. Only fields included in the request body are modified. The 'containers' array, if provided, REPLACES the existing containers array; if omitted, the existing containers are NOT modified by this PATCH operation. (For modifying individual containers, use PATCH /containers/{containerName}). This triggers a validation, registers a new task definition, and updates the service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ComposeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$application = test-app; // string | The application ID
$environment = test-env; // string | The environment ID
$patch_environment_compose_request = new \QuantClient\Model\PatchEnvironmentComposeRequest(); // \QuantClient\Model\PatchEnvironmentComposeRequest | Partial compose definition updates. All fields are optional.

try {
    $result = $apiInstance->patchEnvironmentCompose($organisation, $application, $environment, $patch_environment_compose_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposeApi->patchEnvironmentCompose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **application** | **string**| The application ID | |
| **environment** | **string**| The environment ID | |
| **patch_environment_compose_request** | [**\QuantClient\Model\PatchEnvironmentComposeRequest**](../Model/PatchEnvironmentComposeRequest.md)| Partial compose definition updates. All fields are optional. | |

### Return type

[**\QuantClient\Model\PatchEnvironmentCompose202Response**](../Model/PatchEnvironmentCompose202Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateCompose()`

```php
validateCompose($organisation, $validate_compose_request, $image_suffix): \QuantClient\Model\ValidateCompose200Response
```

Validate a compose file

Accepts a docker-compose.yml file content, translates it into the internal compose definition format, and validates it. Quant Cloud provides comprehensive support for standard Docker Compose features including commands, entrypoints, health checks, dependencies, volume mounts, resource limits, and more. For detailed documentation on supported features and examples, see: https://docs.quantcdn.io/introduction-to-quant-cloud/importing-docker-compose/. Supports image tag suffixing via the imageSuffix query parameter or by sending a JSON wrapper with yamlContent and imageSuffix fields. When provided, internal image tags are transformed to {containerName}-{suffix} format (e.g., 'nginx-feature-xyz').

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\ComposeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = test-org; // string | The organisation ID
$validate_compose_request = new \QuantClient\Model\ValidateComposeRequest(); // \QuantClient\Model\ValidateComposeRequest | The docker-compose.yml file content. Can be sent as raw YAML string or as a JSON wrapper containing both yamlContent (string) and imageSuffix (string) fields. Query parameter imageSuffix takes precedence if both are provided.
$image_suffix = pr-456; // string | Optional. Image tag suffix to apply during translation. Transforms internal image tags to consistent '{containerName}-{suffix}' format (e.g., 'nginx-pr-456'). External images are left unchanged. Useful for feature branch deployments.

try {
    $result = $apiInstance->validateCompose($organisation, $validate_compose_request, $image_suffix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComposeApi->validateCompose: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **validate_compose_request** | [**\QuantClient\Model\ValidateComposeRequest**](../Model/ValidateComposeRequest.md)| The docker-compose.yml file content. Can be sent as raw YAML string or as a JSON wrapper containing both yamlContent (string) and imageSuffix (string) fields. Query parameter imageSuffix takes precedence if both are provided. | |
| **image_suffix** | **string**| Optional. Image tag suffix to apply during translation. Transforms internal image tags to consistent &#39;{containerName}-{suffix}&#39; format (e.g., &#39;nginx-pr-456&#39;). External images are left unchanged. Useful for feature branch deployments. | [optional] |

### Return type

[**\QuantClient\Model\ValidateCompose200Response**](../Model/ValidateCompose200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
