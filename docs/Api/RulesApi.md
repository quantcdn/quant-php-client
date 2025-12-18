# QuantClient\RulesApi

Edge rules (redirects, authentication, proxies, etc.)

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rulesAuthCreate()**](RulesApi.md#rulesAuthCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/auth | Create an authentication rule |
| [**rulesAuthDelete()**](RulesApi.md#rulesAuthDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/auth/{rule} | Delete an authentication rule |
| [**rulesAuthList()**](RulesApi.md#rulesAuthList) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/auth | List authentication rules |
| [**rulesAuthRead()**](RulesApi.md#rulesAuthRead) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/auth/{rule} | Get details of an authentication rule |
| [**rulesAuthUpdate()**](RulesApi.md#rulesAuthUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/auth/{rule} | Update an authentication rule |
| [**rulesBotChallengeCreate()**](RulesApi.md#rulesBotChallengeCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/bot-challenge | Create a bot challenge rule |
| [**rulesBotChallengeDelete()**](RulesApi.md#rulesBotChallengeDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/bot-challenge/{rule} | Delete a bot challenge rule |
| [**rulesBotChallengeList()**](RulesApi.md#rulesBotChallengeList) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/bot-challenge | List bot challenge rules |
| [**rulesBotChallengeRead()**](RulesApi.md#rulesBotChallengeRead) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/bot-challenge/{rule} | Get details of a bot challenge rule |
| [**rulesBotChallengeUpdate()**](RulesApi.md#rulesBotChallengeUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/bot-challenge/{rule} | Update a bot challenge rule |
| [**rulesContentFilterCreate()**](RulesApi.md#rulesContentFilterCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/content-filter | Create a content filter rule |
| [**rulesContentFilterDelete()**](RulesApi.md#rulesContentFilterDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/content-filter/{rule} | Delete a content filter rule |
| [**rulesContentFilterList()**](RulesApi.md#rulesContentFilterList) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/content-filter | List content filter rules |
| [**rulesContentFilterRead()**](RulesApi.md#rulesContentFilterRead) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/content-filter/{rule} | Get details of a content filter rule |
| [**rulesContentFilterUpdate()**](RulesApi.md#rulesContentFilterUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/content-filter/{rule} | Update a content filter rule |
| [**rulesCustomResponseCreate()**](RulesApi.md#rulesCustomResponseCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/custom-response | Create a custom response rule |
| [**rulesCustomResponseDelete()**](RulesApi.md#rulesCustomResponseDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/custom-response/{rule} | Delete a custom response rule |
| [**rulesCustomResponseList()**](RulesApi.md#rulesCustomResponseList) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/custom-response | List custom response rules |
| [**rulesCustomResponseRead()**](RulesApi.md#rulesCustomResponseRead) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/custom-response/{rule} | Get details of a custom response rule |
| [**rulesCustomResponseUpdate()**](RulesApi.md#rulesCustomResponseUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/custom-response/{rule} | Update a custom response rule |
| [**rulesFunctionCreate()**](RulesApi.md#rulesFunctionCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/function | Create an edge function rule |
| [**rulesFunctionDelete()**](RulesApi.md#rulesFunctionDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/function/{rule} | Delete an edge function rule |
| [**rulesFunctionList()**](RulesApi.md#rulesFunctionList) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/function | List edge function rules |
| [**rulesFunctionRead()**](RulesApi.md#rulesFunctionRead) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/function/{rule} | Get details of an edge function rule |
| [**rulesFunctionUpdate()**](RulesApi.md#rulesFunctionUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/function/{rule} | Update an edge function rule |
| [**rulesHeadersCreate()**](RulesApi.md#rulesHeadersCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/headers | Create a header rule |
| [**rulesHeadersDelete()**](RulesApi.md#rulesHeadersDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/headers/{rule} | Delete a header rule |
| [**rulesHeadersList()**](RulesApi.md#rulesHeadersList) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/headers | List header rules |
| [**rulesHeadersRead()**](RulesApi.md#rulesHeadersRead) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/headers/{rule} | Get details of a header rule |
| [**rulesHeadersUpdate()**](RulesApi.md#rulesHeadersUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/headers/{rule} | Update a header rule |
| [**rulesProxyCreate()**](RulesApi.md#rulesProxyCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/proxy | Create a proxy rule |
| [**rulesProxyDelete()**](RulesApi.md#rulesProxyDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/proxy/{rule} | Delete a proxy rule |
| [**rulesProxyList()**](RulesApi.md#rulesProxyList) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/proxy | List proxy rules |
| [**rulesProxyRead()**](RulesApi.md#rulesProxyRead) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/proxy/{rule} | Get details of a proxy rule |
| [**rulesProxyUpdate()**](RulesApi.md#rulesProxyUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/proxy/{rule} | Update a proxy rule |
| [**rulesRedirectCreate()**](RulesApi.md#rulesRedirectCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/redirect | Create a redirect rule |
| [**rulesRedirectDelete()**](RulesApi.md#rulesRedirectDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/redirect/{rule} | Delete a redirect rule |
| [**rulesRedirectList()**](RulesApi.md#rulesRedirectList) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/redirect | List redirect rules |
| [**rulesRedirectRead()**](RulesApi.md#rulesRedirectRead) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/redirect/{rule} | Get details of a redirect rule |
| [**rulesRedirectUpdate()**](RulesApi.md#rulesRedirectUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/redirect/{rule} | Update a redirect rule |
| [**rulesServeStaticCreate()**](RulesApi.md#rulesServeStaticCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/serve-static | Create a serve static rule |
| [**rulesServeStaticDelete()**](RulesApi.md#rulesServeStaticDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/serve-static/{rule} | Delete a serve static rule |
| [**rulesServeStaticList()**](RulesApi.md#rulesServeStaticList) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/serve-static | List serve static rules |
| [**rulesServeStaticRead()**](RulesApi.md#rulesServeStaticRead) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/serve-static/{rule} | Get details of a serve static rule |
| [**rulesServeStaticUpdate()**](RulesApi.md#rulesServeStaticUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/serve-static/{rule} | Update a serve static rule |


## `rulesAuthCreate()`

```php
rulesAuthCreate($organization, $project, $v2_rule_auth_request): \QuantClient\Model\V2RuleAuth
```

Create an authentication rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$v2_rule_auth_request = new \QuantClient\Model\V2RuleAuthRequest(); // \QuantClient\Model\V2RuleAuthRequest

try {
    $result = $apiInstance->rulesAuthCreate($organization, $project, $v2_rule_auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesAuthCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_rule_auth_request** | [**\QuantClient\Model\V2RuleAuthRequest**](../Model/V2RuleAuthRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleAuth**](../Model/V2RuleAuth.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesAuthDelete()`

```php
rulesAuthDelete($organization, $project, $rule)
```

Delete an authentication rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $apiInstance->rulesAuthDelete($organization, $project, $rule);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesAuthDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

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

## `rulesAuthList()`

```php
rulesAuthList($organization, $project): \QuantClient\Model\V2RuleAuth[]
```

List authentication rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier

try {
    $result = $apiInstance->rulesAuthList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesAuthList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |

### Return type

[**\QuantClient\Model\V2RuleAuth[]**](../Model/V2RuleAuth.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesAuthRead()`

```php
rulesAuthRead($organization, $project, $rule): \QuantClient\Model\V2RuleAuth
```

Get details of an authentication rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $result = $apiInstance->rulesAuthRead($organization, $project, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesAuthRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

### Return type

[**\QuantClient\Model\V2RuleAuth**](../Model/V2RuleAuth.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesAuthUpdate()`

```php
rulesAuthUpdate($organization, $project, $rule, $v2_rule_auth_request): \QuantClient\Model\V2RuleAuth
```

Update an authentication rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier
$v2_rule_auth_request = new \QuantClient\Model\V2RuleAuthRequest(); // \QuantClient\Model\V2RuleAuthRequest

try {
    $result = $apiInstance->rulesAuthUpdate($organization, $project, $rule, $v2_rule_auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesAuthUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |
| **v2_rule_auth_request** | [**\QuantClient\Model\V2RuleAuthRequest**](../Model/V2RuleAuthRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleAuth**](../Model/V2RuleAuth.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesBotChallengeCreate()`

```php
rulesBotChallengeCreate($organization, $project, $v2_rule_bot_challenge_request): \QuantClient\Model\V2RuleBotChallenge
```

Create a bot challenge rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$v2_rule_bot_challenge_request = new \QuantClient\Model\V2RuleBotChallengeRequest(); // \QuantClient\Model\V2RuleBotChallengeRequest

try {
    $result = $apiInstance->rulesBotChallengeCreate($organization, $project, $v2_rule_bot_challenge_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesBotChallengeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_rule_bot_challenge_request** | [**\QuantClient\Model\V2RuleBotChallengeRequest**](../Model/V2RuleBotChallengeRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleBotChallenge**](../Model/V2RuleBotChallenge.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesBotChallengeDelete()`

```php
rulesBotChallengeDelete($organization, $project, $rule)
```

Delete a bot challenge rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $apiInstance->rulesBotChallengeDelete($organization, $project, $rule);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesBotChallengeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

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

## `rulesBotChallengeList()`

```php
rulesBotChallengeList($organization, $project): \QuantClient\Model\V2RuleBotChallenge[]
```

List bot challenge rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier

try {
    $result = $apiInstance->rulesBotChallengeList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesBotChallengeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |

### Return type

[**\QuantClient\Model\V2RuleBotChallenge[]**](../Model/V2RuleBotChallenge.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesBotChallengeRead()`

```php
rulesBotChallengeRead($organization, $project, $rule): \QuantClient\Model\V2RuleBotChallenge
```

Get details of a bot challenge rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $result = $apiInstance->rulesBotChallengeRead($organization, $project, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesBotChallengeRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

### Return type

[**\QuantClient\Model\V2RuleBotChallenge**](../Model/V2RuleBotChallenge.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesBotChallengeUpdate()`

```php
rulesBotChallengeUpdate($organization, $project, $rule, $v2_rule_bot_challenge_request): \QuantClient\Model\V2RuleBotChallenge
```

Update a bot challenge rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier
$v2_rule_bot_challenge_request = new \QuantClient\Model\V2RuleBotChallengeRequest(); // \QuantClient\Model\V2RuleBotChallengeRequest

try {
    $result = $apiInstance->rulesBotChallengeUpdate($organization, $project, $rule, $v2_rule_bot_challenge_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesBotChallengeUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |
| **v2_rule_bot_challenge_request** | [**\QuantClient\Model\V2RuleBotChallengeRequest**](../Model/V2RuleBotChallengeRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleBotChallenge**](../Model/V2RuleBotChallenge.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesContentFilterCreate()`

```php
rulesContentFilterCreate($organization, $project, $v2_rule_content_filter_request): \QuantClient\Model\V2RuleContentFilter
```

Create a content filter rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$v2_rule_content_filter_request = new \QuantClient\Model\V2RuleContentFilterRequest(); // \QuantClient\Model\V2RuleContentFilterRequest

try {
    $result = $apiInstance->rulesContentFilterCreate($organization, $project, $v2_rule_content_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesContentFilterCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_rule_content_filter_request** | [**\QuantClient\Model\V2RuleContentFilterRequest**](../Model/V2RuleContentFilterRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleContentFilter**](../Model/V2RuleContentFilter.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesContentFilterDelete()`

```php
rulesContentFilterDelete($organization, $project, $rule)
```

Delete a content filter rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $apiInstance->rulesContentFilterDelete($organization, $project, $rule);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesContentFilterDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

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

## `rulesContentFilterList()`

```php
rulesContentFilterList($organization, $project): \QuantClient\Model\V2RuleContentFilter[]
```

List content filter rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier

try {
    $result = $apiInstance->rulesContentFilterList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesContentFilterList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |

### Return type

[**\QuantClient\Model\V2RuleContentFilter[]**](../Model/V2RuleContentFilter.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesContentFilterRead()`

```php
rulesContentFilterRead($organization, $project, $rule): \QuantClient\Model\V2RuleContentFilter
```

Get details of a content filter rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $result = $apiInstance->rulesContentFilterRead($organization, $project, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesContentFilterRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

### Return type

[**\QuantClient\Model\V2RuleContentFilter**](../Model/V2RuleContentFilter.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesContentFilterUpdate()`

```php
rulesContentFilterUpdate($organization, $project, $rule, $v2_rule_content_filter_request): \QuantClient\Model\V2RuleContentFilter
```

Update a content filter rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier
$v2_rule_content_filter_request = new \QuantClient\Model\V2RuleContentFilterRequest(); // \QuantClient\Model\V2RuleContentFilterRequest

try {
    $result = $apiInstance->rulesContentFilterUpdate($organization, $project, $rule, $v2_rule_content_filter_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesContentFilterUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |
| **v2_rule_content_filter_request** | [**\QuantClient\Model\V2RuleContentFilterRequest**](../Model/V2RuleContentFilterRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleContentFilter**](../Model/V2RuleContentFilter.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesCustomResponseCreate()`

```php
rulesCustomResponseCreate($organization, $project, $v2_rule_custom_response_request): \QuantClient\Model\V2RuleCustomResponse
```

Create a custom response rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$v2_rule_custom_response_request = new \QuantClient\Model\V2RuleCustomResponseRequest(); // \QuantClient\Model\V2RuleCustomResponseRequest

try {
    $result = $apiInstance->rulesCustomResponseCreate($organization, $project, $v2_rule_custom_response_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesCustomResponseCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_rule_custom_response_request** | [**\QuantClient\Model\V2RuleCustomResponseRequest**](../Model/V2RuleCustomResponseRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleCustomResponse**](../Model/V2RuleCustomResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesCustomResponseDelete()`

```php
rulesCustomResponseDelete($organization, $project, $rule)
```

Delete a custom response rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $apiInstance->rulesCustomResponseDelete($organization, $project, $rule);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesCustomResponseDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

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

## `rulesCustomResponseList()`

```php
rulesCustomResponseList($organization, $project): \QuantClient\Model\V2RuleCustomResponse[]
```

List custom response rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier

try {
    $result = $apiInstance->rulesCustomResponseList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesCustomResponseList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |

### Return type

[**\QuantClient\Model\V2RuleCustomResponse[]**](../Model/V2RuleCustomResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesCustomResponseRead()`

```php
rulesCustomResponseRead($organization, $project, $rule): \QuantClient\Model\V2RuleCustomResponse
```

Get details of a custom response rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $result = $apiInstance->rulesCustomResponseRead($organization, $project, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesCustomResponseRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

### Return type

[**\QuantClient\Model\V2RuleCustomResponse**](../Model/V2RuleCustomResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesCustomResponseUpdate()`

```php
rulesCustomResponseUpdate($organization, $project, $rule, $v2_rule_custom_response_request): \QuantClient\Model\V2RuleCustomResponse
```

Update a custom response rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier
$v2_rule_custom_response_request = new \QuantClient\Model\V2RuleCustomResponseRequest(); // \QuantClient\Model\V2RuleCustomResponseRequest

try {
    $result = $apiInstance->rulesCustomResponseUpdate($organization, $project, $rule, $v2_rule_custom_response_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesCustomResponseUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |
| **v2_rule_custom_response_request** | [**\QuantClient\Model\V2RuleCustomResponseRequest**](../Model/V2RuleCustomResponseRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleCustomResponse**](../Model/V2RuleCustomResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesFunctionCreate()`

```php
rulesFunctionCreate($organization, $project, $v2_rule_function_request): \QuantClient\Model\V2RuleFunction
```

Create an edge function rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$v2_rule_function_request = new \QuantClient\Model\V2RuleFunctionRequest(); // \QuantClient\Model\V2RuleFunctionRequest

try {
    $result = $apiInstance->rulesFunctionCreate($organization, $project, $v2_rule_function_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesFunctionCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_rule_function_request** | [**\QuantClient\Model\V2RuleFunctionRequest**](../Model/V2RuleFunctionRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleFunction**](../Model/V2RuleFunction.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesFunctionDelete()`

```php
rulesFunctionDelete($organization, $project, $rule)
```

Delete an edge function rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $apiInstance->rulesFunctionDelete($organization, $project, $rule);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesFunctionDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

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

## `rulesFunctionList()`

```php
rulesFunctionList($organization, $project): \QuantClient\Model\V2RuleFunction[]
```

List edge function rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier

try {
    $result = $apiInstance->rulesFunctionList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesFunctionList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |

### Return type

[**\QuantClient\Model\V2RuleFunction[]**](../Model/V2RuleFunction.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesFunctionRead()`

```php
rulesFunctionRead($organization, $project, $rule): \QuantClient\Model\V2RuleFunction
```

Get details of an edge function rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $result = $apiInstance->rulesFunctionRead($organization, $project, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesFunctionRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

### Return type

[**\QuantClient\Model\V2RuleFunction**](../Model/V2RuleFunction.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesFunctionUpdate()`

```php
rulesFunctionUpdate($organization, $project, $rule, $v2_rule_function_request): \QuantClient\Model\V2RuleFunction
```

Update an edge function rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier
$v2_rule_function_request = new \QuantClient\Model\V2RuleFunctionRequest(); // \QuantClient\Model\V2RuleFunctionRequest

try {
    $result = $apiInstance->rulesFunctionUpdate($organization, $project, $rule, $v2_rule_function_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesFunctionUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |
| **v2_rule_function_request** | [**\QuantClient\Model\V2RuleFunctionRequest**](../Model/V2RuleFunctionRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleFunction**](../Model/V2RuleFunction.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesHeadersCreate()`

```php
rulesHeadersCreate($organization, $project, $v2_rule_header_request): \QuantClient\Model\V2RuleHeader
```

Create a header rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$v2_rule_header_request = new \QuantClient\Model\V2RuleHeaderRequest(); // \QuantClient\Model\V2RuleHeaderRequest

try {
    $result = $apiInstance->rulesHeadersCreate($organization, $project, $v2_rule_header_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesHeadersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_rule_header_request** | [**\QuantClient\Model\V2RuleHeaderRequest**](../Model/V2RuleHeaderRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleHeader**](../Model/V2RuleHeader.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesHeadersDelete()`

```php
rulesHeadersDelete($organization, $project, $rule)
```

Delete a header rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $apiInstance->rulesHeadersDelete($organization, $project, $rule);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesHeadersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

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

## `rulesHeadersList()`

```php
rulesHeadersList($organization, $project): \QuantClient\Model\V2RuleHeader[]
```

List header rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier

try {
    $result = $apiInstance->rulesHeadersList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesHeadersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |

### Return type

[**\QuantClient\Model\V2RuleHeader[]**](../Model/V2RuleHeader.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesHeadersRead()`

```php
rulesHeadersRead($organization, $project, $rule): \QuantClient\Model\V2RuleHeader
```

Get details of a header rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $result = $apiInstance->rulesHeadersRead($organization, $project, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesHeadersRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

### Return type

[**\QuantClient\Model\V2RuleHeader**](../Model/V2RuleHeader.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesHeadersUpdate()`

```php
rulesHeadersUpdate($organization, $project, $rule, $v2_rule_header_request): \QuantClient\Model\V2RuleHeader
```

Update a header rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier
$v2_rule_header_request = new \QuantClient\Model\V2RuleHeaderRequest(); // \QuantClient\Model\V2RuleHeaderRequest

try {
    $result = $apiInstance->rulesHeadersUpdate($organization, $project, $rule, $v2_rule_header_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesHeadersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |
| **v2_rule_header_request** | [**\QuantClient\Model\V2RuleHeaderRequest**](../Model/V2RuleHeaderRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleHeader**](../Model/V2RuleHeader.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesProxyCreate()`

```php
rulesProxyCreate($organization, $project, $v2_rule_proxy_request): \QuantClient\Model\V2RuleProxy
```

Create a proxy rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string
$v2_rule_proxy_request = new \QuantClient\Model\V2RuleProxyRequest(); // \QuantClient\Model\V2RuleProxyRequest

try {
    $result = $apiInstance->rulesProxyCreate($organization, $project, $v2_rule_proxy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesProxyCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |
| **v2_rule_proxy_request** | [**\QuantClient\Model\V2RuleProxyRequest**](../Model/V2RuleProxyRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleProxy**](../Model/V2RuleProxy.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesProxyDelete()`

```php
rulesProxyDelete($organization, $project, $rule)
```

Delete a proxy rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string
$rule = 'rule_example'; // string

try {
    $apiInstance->rulesProxyDelete($organization, $project, $rule);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesProxyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |
| **rule** | **string**|  | |

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

## `rulesProxyList()`

```php
rulesProxyList($organization, $project): \QuantClient\Model\V2RuleProxy[]
```

List proxy rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string

try {
    $result = $apiInstance->rulesProxyList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesProxyList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |

### Return type

[**\QuantClient\Model\V2RuleProxy[]**](../Model/V2RuleProxy.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesProxyRead()`

```php
rulesProxyRead($organization, $project, $rule): \QuantClient\Model\V2RuleProxy
```

Get details of a proxy rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string
$rule = 'rule_example'; // string

try {
    $result = $apiInstance->rulesProxyRead($organization, $project, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesProxyRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |
| **rule** | **string**|  | |

### Return type

[**\QuantClient\Model\V2RuleProxy**](../Model/V2RuleProxy.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesProxyUpdate()`

```php
rulesProxyUpdate($organization, $project, $rule, $v2_rule_proxy_request): \QuantClient\Model\V2RuleProxy
```

Update a proxy rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string
$rule = 'rule_example'; // string
$v2_rule_proxy_request = new \QuantClient\Model\V2RuleProxyRequest(); // \QuantClient\Model\V2RuleProxyRequest

try {
    $result = $apiInstance->rulesProxyUpdate($organization, $project, $rule, $v2_rule_proxy_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesProxyUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |
| **rule** | **string**|  | |
| **v2_rule_proxy_request** | [**\QuantClient\Model\V2RuleProxyRequest**](../Model/V2RuleProxyRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleProxy**](../Model/V2RuleProxy.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesRedirectCreate()`

```php
rulesRedirectCreate($organization, $project, $v2_rule_redirect_request): \QuantClient\Model\V2RuleRedirect
```

Create a redirect rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string
$v2_rule_redirect_request = new \QuantClient\Model\V2RuleRedirectRequest(); // \QuantClient\Model\V2RuleRedirectRequest

try {
    $result = $apiInstance->rulesRedirectCreate($organization, $project, $v2_rule_redirect_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesRedirectCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |
| **v2_rule_redirect_request** | [**\QuantClient\Model\V2RuleRedirectRequest**](../Model/V2RuleRedirectRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleRedirect**](../Model/V2RuleRedirect.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesRedirectDelete()`

```php
rulesRedirectDelete($organization, $project, $rule)
```

Delete a redirect rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string
$rule = 'rule_example'; // string

try {
    $apiInstance->rulesRedirectDelete($organization, $project, $rule);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesRedirectDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |
| **rule** | **string**|  | |

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

## `rulesRedirectList()`

```php
rulesRedirectList($organization, $project): \QuantClient\Model\V2RuleRedirect[]
```

List redirect rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string

try {
    $result = $apiInstance->rulesRedirectList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesRedirectList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |

### Return type

[**\QuantClient\Model\V2RuleRedirect[]**](../Model/V2RuleRedirect.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesRedirectRead()`

```php
rulesRedirectRead($organization, $project, $rule): \QuantClient\Model\V2RuleRedirect
```

Get details of a redirect rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string
$rule = 'rule_example'; // string

try {
    $result = $apiInstance->rulesRedirectRead($organization, $project, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesRedirectRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |
| **rule** | **string**|  | |

### Return type

[**\QuantClient\Model\V2RuleRedirect**](../Model/V2RuleRedirect.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesRedirectUpdate()`

```php
rulesRedirectUpdate($organization, $project, $rule, $v2_rule_redirect_request): \QuantClient\Model\V2RuleRedirect
```

Update a redirect rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string
$project = 'project_example'; // string
$rule = 'rule_example'; // string
$v2_rule_redirect_request = new \QuantClient\Model\V2RuleRedirectRequest(); // \QuantClient\Model\V2RuleRedirectRequest

try {
    $result = $apiInstance->rulesRedirectUpdate($organization, $project, $rule, $v2_rule_redirect_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesRedirectUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**|  | |
| **project** | **string**|  | |
| **rule** | **string**|  | |
| **v2_rule_redirect_request** | [**\QuantClient\Model\V2RuleRedirectRequest**](../Model/V2RuleRedirectRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleRedirect**](../Model/V2RuleRedirect.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesServeStaticCreate()`

```php
rulesServeStaticCreate($organization, $project, $v2_rule_serve_static_request): \QuantClient\Model\V2RuleServeStatic
```

Create a serve static rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$v2_rule_serve_static_request = new \QuantClient\Model\V2RuleServeStaticRequest(); // \QuantClient\Model\V2RuleServeStaticRequest

try {
    $result = $apiInstance->rulesServeStaticCreate($organization, $project, $v2_rule_serve_static_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesServeStaticCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_rule_serve_static_request** | [**\QuantClient\Model\V2RuleServeStaticRequest**](../Model/V2RuleServeStaticRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleServeStatic**](../Model/V2RuleServeStatic.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesServeStaticDelete()`

```php
rulesServeStaticDelete($organization, $project, $rule)
```

Delete a serve static rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $apiInstance->rulesServeStaticDelete($organization, $project, $rule);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesServeStaticDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

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

## `rulesServeStaticList()`

```php
rulesServeStaticList($organization, $project): \QuantClient\Model\V2RuleServeStatic[]
```

List serve static rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier

try {
    $result = $apiInstance->rulesServeStaticList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesServeStaticList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |

### Return type

[**\QuantClient\Model\V2RuleServeStatic[]**](../Model/V2RuleServeStatic.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesServeStaticRead()`

```php
rulesServeStaticRead($organization, $project, $rule): \QuantClient\Model\V2RuleServeStatic
```

Get details of a serve static rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier

try {
    $result = $apiInstance->rulesServeStaticRead($organization, $project, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesServeStaticRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |

### Return type

[**\QuantClient\Model\V2RuleServeStatic**](../Model/V2RuleServeStatic.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rulesServeStaticUpdate()`

```php
rulesServeStaticUpdate($organization, $project, $rule, $v2_rule_serve_static_request): \QuantClient\Model\V2RuleServeStatic
```

Update a serve static rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');



$apiInstance = new QuantClient\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = 'organization_example'; // string | Organization identifier
$project = 'project_example'; // string | Project identifier
$rule = 'rule_example'; // string | Rule identifier
$v2_rule_serve_static_request = new \QuantClient\Model\V2RuleServeStaticRequest(); // \QuantClient\Model\V2RuleServeStaticRequest

try {
    $result = $apiInstance->rulesServeStaticUpdate($organization, $project, $rule, $v2_rule_serve_static_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->rulesServeStaticUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **rule** | **string**| Rule identifier | |
| **v2_rule_serve_static_request** | [**\QuantClient\Model\V2RuleServeStaticRequest**](../Model/V2RuleServeStaticRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2RuleServeStatic**](../Model/V2RuleServeStatic.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
