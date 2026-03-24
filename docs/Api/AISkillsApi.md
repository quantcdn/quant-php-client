# QuantClient\AISkillsApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSkill()**](AISkillsApi.md#createSkill) | **POST** /api/v3/organizations/{organisation}/ai/skills | Create Inline Skill |
| [**deleteSkill()**](AISkillsApi.md#deleteSkill) | **DELETE** /api/v3/organizations/{organisation}/ai/skills/{skillId} | Delete Skill |
| [**deleteSkillCollection()**](AISkillsApi.md#deleteSkillCollection) | **DELETE** /api/v3/organizations/{organisation}/ai/skills/collections/{namespace} | Delete Skill Collection |
| [**getSkill()**](AISkillsApi.md#getSkill) | **GET** /api/v3/organizations/{organisation}/ai/skills/{skillId} | Get Skill Details |
| [**importSkill()**](AISkillsApi.md#importSkill) | **POST** /api/v3/organizations/{organisation}/ai/skills/import | Import Skill from External Source |
| [**importSkillCollection()**](AISkillsApi.md#importSkillCollection) | **POST** /api/v3/organizations/{organisation}/ai/skills/import-collection | Import Skill Collection from GitHub |
| [**listSkillCollections()**](AISkillsApi.md#listSkillCollections) | **GET** /api/v3/organizations/{organisation}/ai/skills/collections | List Skill Collections |
| [**listSkills()**](AISkillsApi.md#listSkills) | **GET** /api/v3/organizations/{organisation}/ai/skills | List Organization&#39;s Skills |
| [**syncSkill()**](AISkillsApi.md#syncSkill) | **POST** /api/v3/organizations/{organisation}/ai/skills/{skillId}/sync | Sync Skill from Source |
| [**syncSkillCollection()**](AISkillsApi.md#syncSkillCollection) | **POST** /api/v3/organizations/{organisation}/ai/skills/collections/{namespace}/sync | Sync Skill Collection |
| [**updateSkill()**](AISkillsApi.md#updateSkill) | **PUT** /api/v3/organizations/{organisation}/ai/skills/{skillId} | Update Skill |


## `createSkill()`

```php
createSkill($organisation, $create_skill_request): \QuantClient\Model\CreateSkill201Response
```

Create Inline Skill

Creates a new skill with inline content. Use this for custom skills      * that are defined directly in your organization.      *      * **Trigger Conditions:**      * - Natural language description of when to use the skill      * - Used by AI to determine when to suggest or apply the skill      * - Example: 'When the user asks about code review or security analysis'

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$create_skill_request = new \QuantClient\Model\CreateSkillRequest(); // \QuantClient\Model\CreateSkillRequest

try {
    $result = $apiInstance->createSkill($organisation, $create_skill_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISkillsApi->createSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **create_skill_request** | [**\QuantClient\Model\CreateSkillRequest**](../Model/CreateSkillRequest.md)|  | |

### Return type

[**\QuantClient\Model\CreateSkill201Response**](../Model/CreateSkill201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSkill()`

```php
deleteSkill($organisation, $skill_id): \QuantClient\Model\DeleteSkill200Response
```

Delete Skill

Permanently deletes a skill. This will also remove it from any agents that have it assigned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$skill_id = 'skill_id_example'; // string | The skill ID

try {
    $result = $apiInstance->deleteSkill($organisation, $skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISkillsApi->deleteSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **skill_id** | **string**| The skill ID | |

### Return type

[**\QuantClient\Model\DeleteSkill200Response**](../Model/DeleteSkill200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSkillCollection()`

```php
deleteSkillCollection($organisation, $namespace): \QuantClient\Model\DeleteSkillCollection200Response
```

Delete Skill Collection

Permanently deletes all skills in the specified namespace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$namespace = 'namespace_example'; // string | Collection namespace

try {
    $result = $apiInstance->deleteSkillCollection($organisation, $namespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISkillsApi->deleteSkillCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **namespace** | **string**| Collection namespace | |

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

## `getSkill()`

```php
getSkill($organisation, $skill_id): \QuantClient\Model\GetSkill200Response
```

Get Skill Details

Retrieves full details of a skill including its content, source information, and metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$skill_id = 'skill_id_example'; // string | The skill ID

try {
    $result = $apiInstance->getSkill($organisation, $skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISkillsApi->getSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **skill_id** | **string**| The skill ID | |

### Return type

[**\QuantClient\Model\GetSkill200Response**](../Model/GetSkill200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importSkill()`

```php
importSkill($organisation, $import_skill_request): \QuantClient\Model\ImportSkill201Response
```

Import Skill from External Source

Imports a skill from an external source like skills.sh registry or GitHub repository.      *      * **Supported Sources:**      * - `skills.sh`: Import from the skills.sh community registry      * - `github`: Import from a GitHub repository (public or private)      *      * **Version Control:**      * - Skills can be pinned to specific versions      * - Use the sync endpoint to update to latest version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$import_skill_request = new \QuantClient\Model\ImportSkillRequest(); // \QuantClient\Model\ImportSkillRequest

try {
    $result = $apiInstance->importSkill($organisation, $import_skill_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISkillsApi->importSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **import_skill_request** | [**\QuantClient\Model\ImportSkillRequest**](../Model/ImportSkillRequest.md)|  | |

### Return type

[**\QuantClient\Model\ImportSkill201Response**](../Model/ImportSkill201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importSkillCollection()`

```php
importSkillCollection($organisation, $import_skill_collection_request): \QuantClient\Model\ImportSkillCollection201Response
```

Import Skill Collection from GitHub

Discovers all skill directories under a given path in a GitHub repository      * and imports each as a skill within the specified namespace. Each subdirectory must contain a SKILL.md file.      *      * **Namespace:** Used for grouping and slash-command invocation (e.g., `/superpowers:brainstorming`).      *      * **Idempotent:** If a skill with the same namespace + name already exists, it is updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$import_skill_collection_request = new \QuantClient\Model\ImportSkillCollectionRequest(); // \QuantClient\Model\ImportSkillCollectionRequest

try {
    $result = $apiInstance->importSkillCollection($organisation, $import_skill_collection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISkillsApi->importSkillCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **import_skill_collection_request** | [**\QuantClient\Model\ImportSkillCollectionRequest**](../Model/ImportSkillCollectionRequest.md)|  | |

### Return type

[**\QuantClient\Model\ImportSkillCollection201Response**](../Model/ImportSkillCollection201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSkillCollections()`

```php
listSkillCollections($organisation): \QuantClient\Model\ListSkillCollections200Response
```

List Skill Collections

Lists distinct namespaces (collections) for the organization, with skill counts and skill names for each collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID

try {
    $result = $apiInstance->listSkillCollections($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISkillsApi->listSkillCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |

### Return type

[**\QuantClient\Model\ListSkillCollections200Response**](../Model/ListSkillCollections200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSkills()`

```php
listSkills($organisation, $tag, $namespace, $limit): \QuantClient\Model\ListSkills200Response
```

List Organization's Skills

Lists all skills available to the organization. Skills are reusable prompts,      * workflows, or instructions that can be assigned to agents or invoked directly.      *      * **Skill Sources:**      * - `inline`: Created directly via the API      * - `skills.sh`: Imported from skills.sh registry      * - `github`: Imported from a GitHub repository      * - `local`: Uploaded from local file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$tag = 'tag_example'; // string | Filter skills by tag
$namespace = 'namespace_example'; // string | Filter skills by collection namespace (e.g. 'superpowers')
$limit = 50; // int | Maximum number of skills to return

try {
    $result = $apiInstance->listSkills($organisation, $tag, $namespace, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISkillsApi->listSkills: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **tag** | **string**| Filter skills by tag | [optional] |
| **namespace** | **string**| Filter skills by collection namespace (e.g. &#39;superpowers&#39;) | [optional] |
| **limit** | **int**| Maximum number of skills to return | [optional] [default to 50] |

### Return type

[**\QuantClient\Model\ListSkills200Response**](../Model/ListSkills200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncSkill()`

```php
syncSkill($organisation, $skill_id): \QuantClient\Model\ImportSkill201Response
```

Sync Skill from Source

Re-fetches skill content from its original source.      * Only applicable to skills imported from external sources (skills.sh, github).      * Inline skills cannot be synced.      *      * **Version Behavior:**      * - If version is pinned, fetches that specific version      * - If no version specified, fetches latest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$skill_id = 'skill_id_example'; // string | The skill ID

try {
    $result = $apiInstance->syncSkill($organisation, $skill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISkillsApi->syncSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **skill_id** | **string**| The skill ID | |

### Return type

[**\QuantClient\Model\ImportSkill201Response**](../Model/ImportSkill201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncSkillCollection()`

```php
syncSkillCollection($organisation, $namespace): \QuantClient\Model\SyncSkillCollection200Response
```

Sync Skill Collection

Re-syncs all skills in a namespace from their GitHub source. Detects new      * skills added to the repository and flags skills removed from the source. Does NOT auto-delete removed skills.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$namespace = 'namespace_example'; // string | Collection namespace

try {
    $result = $apiInstance->syncSkillCollection($organisation, $namespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISkillsApi->syncSkillCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **namespace** | **string**| Collection namespace | |

### Return type

[**\QuantClient\Model\SyncSkillCollection200Response**](../Model/SyncSkillCollection200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSkill()`

```php
updateSkill($organisation, $skill_id, $update_skill_request): \QuantClient\Model\UpdateSkill200Response
```

Update Skill

Updates an existing skill. For imported skills, this updates      * local overrides (name, tags, triggerCondition) but not the source content.      * Use the sync endpoint to update source content.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AISkillsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$skill_id = 'skill_id_example'; // string | The skill ID
$update_skill_request = new \QuantClient\Model\UpdateSkillRequest(); // \QuantClient\Model\UpdateSkillRequest

try {
    $result = $apiInstance->updateSkill($organisation, $skill_id, $update_skill_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AISkillsApi->updateSkill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **skill_id** | **string**| The skill ID | |
| **update_skill_request** | [**\QuantClient\Model\UpdateSkillRequest**](../Model/UpdateSkillRequest.md)|  | |

### Return type

[**\QuantClient\Model\UpdateSkill200Response**](../Model/UpdateSkill200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
