# QuantClient\KVApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**kVArchivesList()**](KVApi.md#kVArchivesList) | **GET** /api/v2/organizations/{organization}/kv/archives | List retained ledger archives |
| [**kVArchivesPurge()**](KVApi.md#kVArchivesPurge) | **POST** /api/v2/organizations/{organization}/kv/archives/{store_name}/purge | Dry run or start a purge of a retained archive |
| [**kVArchivesPurgeManifest()**](KVApi.md#kVArchivesPurgeManifest) | **GET** /api/v2/organizations/{organization}/kv/archives/{store_name}/purges/{purge_id}/manifest | Get the manifest of a purge |
| [**kVArchivesPurgeReceipt()**](KVApi.md#kVArchivesPurgeReceipt) | **GET** /api/v2/organizations/{organization}/kv/archives/{store_name}/purges/{purge_id}/receipt | Get the signed receipt of a purge |
| [**kVArchivesPurgeShow()**](KVApi.md#kVArchivesPurgeShow) | **GET** /api/v2/organizations/{organization}/kv/archives/{store_name}/purges/{purge_id} | Show one purge of an archive |
| [**kVArchivesShow()**](KVApi.md#kVArchivesShow) | **GET** /api/v2/organizations/{organization}/kv/archives/{store_name} | Show the archive of a deleted store |
| [**kVCreate()**](KVApi.md#kVCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv | Add a kv store |
| [**kVDelete()**](KVApi.md#kVDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id} | Delete a kv store |
| [**kVEntriesDelete()**](KVApi.md#kVEntriesDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key}/entry | Delete a key, optionally only at a version |
| [**kVEntriesPut()**](KVApi.md#kVEntriesPut) | **PUT** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key}/entry | Set a key, optionally only if absent or only at a version |
| [**kVEntriesShow()**](KVApi.md#kVEntriesShow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key}/entry | Get a key with its version and metadata |
| [**kVExportCreate()**](KVApi.md#kVExportCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/export | Start an export of the whole store to gzip JSON Lines files |
| [**kVExportResume()**](KVApi.md#kVExportResume) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/export/resume | Queue a stalled export step again |
| [**kVExportShow()**](KVApi.md#kVExportShow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/export | Get the latest export and, when done, its download links |
| [**kVIndexesCount()**](KVApi.md#kVIndexesCount) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/indexes/{index_name}/count | Count the keys that hold a value of a count index |
| [**kVIndexesCreate()**](KVApi.md#kVIndexesCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/indexes | Declare an index |
| [**kVIndexesDelete()**](KVApi.md#kVIndexesDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/indexes/{index_name} | Drop an index |
| [**kVIndexesList()**](KVApi.md#kVIndexesList) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/indexes | List the declared indexes of a store |
| [**kVIndexesLookup()**](KVApi.md#kVIndexesLookup) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/indexes/{index_name}/lookup | Get the key that holds a value of a unique index |
| [**kVIndexesResume()**](KVApi.md#kVIndexesResume) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/indexes/{index_name}/resume | Queue a stalled index job step again |
| [**kVIndexesShow()**](KVApi.md#kVIndexesShow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/indexes/{index_name} | Get one index with its state and job |
| [**kVItemsBatchGet()**](KVApi.md#kVItemsBatchGet) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/batch-get | Get up to 100 keys in one request |
| [**kVItemsCreate()**](KVApi.md#kVItemsCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items | Add an item to a kv store |
| [**kVItemsDelete()**](KVApi.md#kVItemsDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key} | Delete an item from a kv store |
| [**kVItemsIncrement()**](KVApi.md#kVItemsIncrement) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key}/increment | Atomically add to a numeric value |
| [**kVItemsList()**](KVApi.md#kVItemsList) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items | List items in a kv store |
| [**kVItemsPatch()**](KVApi.md#kVItemsPatch) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key} | Update an item in a kv store (PATCH alias of PUT) |
| [**kVItemsPurge()**](KVApi.md#kVItemsPurge) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items | Delete items in bulk by prefix and/or age |
| [**kVItemsShow()**](KVApi.md#kVItemsShow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key} | Get an item from a kv store |
| [**kVItemsTransact()**](KVApi.md#kVItemsTransact) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/transact | Run 1 to 25 operations as one transaction |
| [**kVItemsUpdate()**](KVApi.md#kVItemsUpdate) | **PUT** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key} | Update an item in a kv store |
| [**kVKeysList()**](KVApi.md#kVKeysList) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/keys | List keys with a cursor: by collection, prefix, filter, index or ledger time window |
| [**kVLedgersAppend()**](KVApi.md#kVLedgersAppend) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/append | Append an entry to a ledger |
| [**kVLedgersArchive()**](KVApi.md#kVLedgersArchive) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name}/archive | Get download links for the ledger archive, digests and anchor files |
| [**kVLedgersCreate()**](KVApi.md#kVLedgersCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers | Declare a ledger |
| [**kVLedgersDelete()**](KVApi.md#kVLedgersDelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name} | Drop a ledger |
| [**kVLedgersList()**](KVApi.md#kVLedgersList) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers | List the ledgers of a store |
| [**kVLedgersProof()**](KVApi.md#kVLedgersProof) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name}/proof | Get the inclusion proof of one ledger entry |
| [**kVLedgersPublicKey()**](KVApi.md#kVLedgersPublicKey) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/public-key | Get the public key that verifies ledger signatures |
| [**kVLedgersShow()**](KVApi.md#kVLedgersShow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name} | Get a ledger definition with its retention end and last verify |
| [**kVLedgersShred()**](KVApi.md#kVLedgersShred) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name}/shred | Shred a data subject (cannot be undone) |
| [**kVLedgersShredsEntries()**](KVApi.md#kVLedgersShredsEntries) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name}/shreds/{shred_id}/entries | List the shred entries of an erasure record |
| [**kVLedgersShredsList()**](KVApi.md#kVLedgersShredsList) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name}/shreds | List the erasure records of a ledger |
| [**kVLedgersShredsReceipt()**](KVApi.md#kVLedgersShredsReceipt) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name}/shreds/{shred_id}/receipt | Get the signed receipt of a shred |
| [**kVLedgersStatus()**](KVApi.md#kVLedgersStatus) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name}/status | Get the chains, archive lag, digest, anchor and verify state of a ledger |
| [**kVLedgersSubjectEntries()**](KVApi.md#kVLedgersSubjectEntries) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name}/subject-entries | List the ledger entries of one data subject |
| [**kVLedgersSubjectPreview()**](KVApi.md#kVLedgersSubjectPreview) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name}/subject-preview | Preview a shred of a data subject |
| [**kVLedgersUpdate()**](KVApi.md#kVLedgersUpdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name} | Raise a ledger |
| [**kVLedgersVerificationsReport()**](KVApi.md#kVLedgersVerificationsReport) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name}/verifications/{verification_id}/report | Get the signed report of one verification run |
| [**kVLedgersVerify()**](KVApi.md#kVLedgersVerify) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/ledgers/{ledger_name}/verify | Verify a ledger against its archive and signed digests |
| [**kVLinkToProject()**](KVApi.md#kVLinkToProject) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/link | Link a KV store to another project |
| [**kVList()**](KVApi.md#kVList) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv | List key-value stores |
| [**kVShow()**](KVApi.md#kVShow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id} | Get a kv store |
| [**kVUnlinkFromProject()**](KVApi.md#kVUnlinkFromProject) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/link | Unlink a KV store from this project |
| [**kVUpgradeCreate()**](KVApi.md#kVUpgradeCreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/upgrade | Start, roll back, finalize or resume a format 1 to format 2 upgrade |
| [**kVUpgradeShow()**](KVApi.md#kVUpgradeShow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/upgrade | Get the store format and the latest upgrade |
| [**kVUsageShow()**](KVApi.md#kVUsageShow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/usage | Get 30-day usage and a cost estimate |


## `kVArchivesList()`

```php
kVArchivesList($organization, $limit, $cursor): \QuantClient\Model\V2KvArchiveList
```

List retained ledger archives

Lists the deleted stores of the organisation that still hold archive objects, as the KV page envelope (data, next_cursor, has_more, page_end). The route is scoped to the organisation because a deleted store has no project link; the token also needs projects:read. Needs a token with the explicit kv:ledger:admin scope (full_access and tokens without a scope list cannot use it) and the ledger_admin permission. A token restricted to projects is refused (403 PERMISSION_DENIED): use a token without a project restriction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$limit = 50; // int | The maximum number of archives in the page (1-100, default 50).
$cursor = 'cursor_example'; // string | The next_cursor of the previous page.

try {
    $result = $apiInstance->kVArchivesList($organization, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVArchivesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **limit** | **int**| The maximum number of archives in the page (1-100, default 50). | [optional] [default to 50] |
| **cursor** | **string**| The next_cursor of the previous page. | [optional] |

### Return type

[**\QuantClient\Model\V2KvArchiveList**](../Model/V2KvArchiveList.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVArchivesPurge()`

```php
kVArchivesPurge($organization, $store_name, $v2_kv_archive_purge_request, $idempotency_key): \QuantClient\Model\V2KvArchivePurgeAnswer
```

Dry run or start a purge of a retained archive

Starts the purge of the retained ledger archive of a deleted store, or reports what it would delete. dryRun defaults to true: a dry run answers 200 with dryRun true and the counts, and deletes nothing. Send dryRun false to start: the answer is 202 with purgeId and state. Both answers use the schema V2KvArchivePurgeAnswer. confirm must equal the store name, also for a dry run. Quant sets requestedBy; a client value is refused (400 VALIDATION). A repeat with the same Idempotency-Key answers 202 with the existing purge. Nothing is deleted until every object is past its lock: a purge that finds a lock or the quiet period ends as RETAINED, and a new start within 1 hour of a RETAINED result is 429 RATE_LIMITED. System stores cannot be purged (403 FORBIDDEN; the check ignores case). Read the purge with KV_archives_purge_show, then the receipt and the manifest. The route is scoped to the organisation because a deleted store has no project link; the token also needs projects:read. This route needs both explicit scopes, kv:ledger:admin and kv:ledger:purge (full_access and tokens without a scope list cannot use it), the ledger_admin permission, and, in the dashboard, a step-up (authenticator code or password). A purge cannot be undone. Rate limit: 10 requests per minute per organisation. Audited (store and purge id only, never the reason). The receipt is the platform's signed statement, not a proof of absence. A token restricted to projects is refused (403 PERMISSION_DENIED): use a token without a project restriction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$store_name = orders; // string | The id of the deleted store, as KV_list showed it before the delete
$v2_kv_archive_purge_request = new \QuantClient\Model\V2KvArchivePurgeRequest(); // \QuantClient\Model\V2KvArchivePurgeRequest
$idempotency_key = 'idempotency_key_example'; // string | 1 to 128 characters of letters, digits and . _ : -. A repeat with the same key answers 202 with the existing purge.

try {
    $result = $apiInstance->kVArchivesPurge($organization, $store_name, $v2_kv_archive_purge_request, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVArchivesPurge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **store_name** | **string**| The id of the deleted store, as KV_list showed it before the delete | |
| **v2_kv_archive_purge_request** | [**\QuantClient\Model\V2KvArchivePurgeRequest**](../Model/V2KvArchivePurgeRequest.md)|  | |
| **idempotency_key** | **string**| 1 to 128 characters of letters, digits and . _ : -. A repeat with the same key answers 202 with the existing purge. | [optional] |

### Return type

[**\QuantClient\Model\V2KvArchivePurgeAnswer**](../Model/V2KvArchivePurgeAnswer.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVArchivesPurgeManifest()`

```php
kVArchivesPurgeManifest($organization, $store_name, $purge_id): \QuantClient\Model\V2KvArchiveManifest
```

Get the manifest of a purge

Returns the manifest pages of a purge. Each page lists the deleted object versions and has a signed download url, valid 3,600 seconds: read the manifest again for new urls. The route is scoped to the organisation because a deleted store has no project link; the token also needs projects:read. Needs a token with the explicit kv:ledger:admin scope (full_access and tokens without a scope list cannot use it) and the ledger_admin permission. System stores have no retained archive (403 FORBIDDEN). A token restricted to projects is refused (403 PERMISSION_DENIED): use a token without a project restriction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$store_name = orders; // string | The id of the deleted store, as KV_list showed it before the delete
$purge_id = 01JBX5Q8M7R2T4V6W8YZ0A1B2C; // string | The purge id (a 26-character ULID), as the purge start answered it

try {
    $result = $apiInstance->kVArchivesPurgeManifest($organization, $store_name, $purge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVArchivesPurgeManifest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **store_name** | **string**| The id of the deleted store, as KV_list showed it before the delete | |
| **purge_id** | **string**| The purge id (a 26-character ULID), as the purge start answered it | |

### Return type

[**\QuantClient\Model\V2KvArchiveManifest**](../Model/V2KvArchiveManifest.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVArchivesPurgeReceipt()`

```php
kVArchivesPurgeReceipt($organization, $store_name, $purge_id): \QuantClient\Model\V2KvArchivePurgeReceipt
```

Get the signed receipt of a purge

Returns the signed receipt of a COMPLETE purge (json, signature, keyId, algorithm ECDSA_SHA_256). Before COMPLETE the answer is 409 PURGE_NOT_COMPLETE. The receipt is the platform's signed statement that the purge ran. It is not a proof of absence. The route is scoped to the organisation because a deleted store has no project link; the token also needs projects:read. Needs a token with the explicit kv:ledger:admin scope (full_access and tokens without a scope list cannot use it) and the ledger_admin permission. System stores have no retained archive (403 FORBIDDEN). A token restricted to projects is refused (403 PERMISSION_DENIED): use a token without a project restriction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$store_name = orders; // string | The id of the deleted store, as KV_list showed it before the delete
$purge_id = 01JBX5Q8M7R2T4V6W8YZ0A1B2C; // string | The purge id (a 26-character ULID), as the purge start answered it

try {
    $result = $apiInstance->kVArchivesPurgeReceipt($organization, $store_name, $purge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVArchivesPurgeReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **store_name** | **string**| The id of the deleted store, as KV_list showed it before the delete | |
| **purge_id** | **string**| The purge id (a 26-character ULID), as the purge start answered it | |

### Return type

[**\QuantClient\Model\V2KvArchivePurgeReceipt**](../Model/V2KvArchivePurgeReceipt.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVArchivesPurgeShow()`

```php
kVArchivesPurgeShow($organization, $store_name, $purge_id): \QuantClient\Model\V2KvArchivePurge
```

Show one purge of an archive

Returns one purge: state, counts, requestedBy, reason and lastError. Poll it until the state is COMPLETE, RETAINED, BLOCKED or CANCELLED. Nothing is deleted until every object is past its lock. The route is scoped to the organisation because a deleted store has no project link; the token also needs projects:read. Needs a token with the explicit kv:ledger:admin scope (full_access and tokens without a scope list cannot use it) and the ledger_admin permission. System stores have no retained archive (403 FORBIDDEN). A token restricted to projects is refused (403 PERMISSION_DENIED): use a token without a project restriction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$store_name = orders; // string | The id of the deleted store, as KV_list showed it before the delete
$purge_id = 01JBX5Q8M7R2T4V6W8YZ0A1B2C; // string | The purge id (a 26-character ULID), as the purge start answered it

try {
    $result = $apiInstance->kVArchivesPurgeShow($organization, $store_name, $purge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVArchivesPurgeShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **store_name** | **string**| The id of the deleted store, as KV_list showed it before the delete | |
| **purge_id** | **string**| The purge id (a 26-character ULID), as the purge start answered it | |

### Return type

[**\QuantClient\Model\V2KvArchivePurge**](../Model/V2KvArchivePurge.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVArchivesShow()`

```php
kVArchivesShow($organization, $store_name): \QuantClient\Model\V2KvArchiveStatus
```

Show the archive of a deleted store

Returns the archive status of one deleted store: status, deletedAt, earliestPurgeAt (the name is not free before then), retainedUntil and the latest purge. 404 NOT_FOUND when no tombstone, purge record or archive object exists. KV_delete answers 204 and does not carry earliestPurgeAt: read it here. The route is scoped to the organisation because a deleted store has no project link; the token also needs projects:read. Needs a token with the explicit kv:ledger:admin scope (full_access and tokens without a scope list cannot use it) and the ledger_admin permission. System stores have no retained archive (403 FORBIDDEN). A token restricted to projects is refused (403 PERMISSION_DENIED): use a token without a project restriction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$store_name = orders; // string | The id of the deleted store, as KV_list showed it before the delete

try {
    $result = $apiInstance->kVArchivesShow($organization, $store_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVArchivesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **store_name** | **string**| The id of the deleted store, as KV_list showed it before the delete | |

### Return type

[**\QuantClient\Model\V2KvArchiveStatus**](../Model/V2KvArchiveStatus.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVCreate()`

```php
kVCreate($organization, $project, $v2_store_request): \QuantClient\Model\V2Store
```

Add a kv store

The new store's table takes about 5-30 seconds to become active. The request waits for the store until about 20 seconds after it started (the create call included). 200 with status ready: the store accepts data requests now. 200 without status: the store is created but the KV service gave no clear readiness answer; call KV_show. 202 with status provisioning (and Retry-After): the store exists but is not active yet; poll KV_show until status is ready. Until then every data request on the store is 503 UNAVAILABLE with retryable true and a Retry-After header; that answer is safe to retry with backoff (honour Retry-After).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$v2_store_request = new \QuantClient\Model\V2StoreRequest(); // \QuantClient\Model\V2StoreRequest

try {
    $result = $apiInstance->kVCreate($organization, $project, $v2_store_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **v2_store_request** | [**\QuantClient\Model\V2StoreRequest**](../Model/V2StoreRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2Store**](../Model/V2Store.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVDelete()`

```php
kVDelete($organization, $project, $store_id, $force)
```

Delete a kv store

Deletes the store and its data. A store that still holds keys answers 409 CONFLICT with a hint: purge its keys first, or pass force=true. A store with a ledger that is not dropped and drained answers 409 LEDGER_PRESENT; ledgers lists each blocking ledger (not_dropped: drop it after its retention ends; not_drained: its last entries are not archived yet). A store that is being upgraded answers 409 UPGRADE_CONFLICT. None of these 409 answers is retryable. A store that no longer exists upstream answers 404 STORE_NOT_FOUND and its stale project link is removed. A store with an owed ledger digest answers 409 DIGEST_OWED (retryable): try again later. The answer stays 204; read KV_archives_show for earliestPurgeAt (the ledger archive of the deleted store stays until then).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$force = false; // bool | Delete the store even if it still holds keys. Without it a non-empty store returns 409.

try {
    $apiInstance->kVDelete($organization, $project, $store_id, $force);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **force** | **bool**| Delete the store even if it still holds keys. Without it a non-empty store returns 409. | [optional] [default to false] |

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

## `kVEntriesDelete()`

```php
kVEntriesDelete($organization, $project, $store_id, $key, $if_version): \QuantClient\Model\V2KvEntryDeleteResponse
```

Delete a key, optionally only at a version

With if_version (format 2 stores), deletes only when the current version matches and the key has not expired; else 409 CONFLICT with reason and currentVersion. A ledger key is 400 LEDGER_IMMUTABLE. Not retried: a lost connection is 503 UNAVAILABLE with retryable false (read the key before you delete again).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$key = order:1001; // string | The key. It can contain '/'.
$if_version = 'if_version_example'; // string | Format 2 stores only. Delete only at this version.

try {
    $result = $apiInstance->kVEntriesDelete($organization, $project, $store_id, $key, $if_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVEntriesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **key** | **string**| The key. It can contain &#39;/&#39;. | |
| **if_version** | **string**| Format 2 stores only. Delete only at this version. | [optional] |

### Return type

[**\QuantClient\Model\V2KvEntryDeleteResponse**](../Model/V2KvEntryDeleteResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVEntriesPut()`

```php
kVEntriesPut($organization, $project, $store_id, $key, $v2_kv_entry_put_request): \QuantClient\Model\V2KvEntryPutResponse
```

Set a key, optionally only if absent or only at a version

value is any JSON value ({} stays an object). secret encrypts the value with KMS (lists show [ENCRYPTED]). ttl is 60 to 31,536,000 seconds; a write without ttl removes any expiry. Format 2 conditions: ifAbsent (201 on success) or ifVersion. A failed condition is 409 CONFLICT with reason and currentVersion. In a collection with a unique index, 409 UNIQUE_VIOLATION names index and existingKey. A ledger key is 400 LEDGER_IMMUTABLE. Not retried: a lost connection is 503 UNAVAILABLE with retryable false (the outcome is unknown; read the key before you write again).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$key = order:1001; // string | The key. It can contain '/'.
$v2_kv_entry_put_request = new \QuantClient\Model\V2KvEntryPutRequest(); // \QuantClient\Model\V2KvEntryPutRequest

try {
    $result = $apiInstance->kVEntriesPut($organization, $project, $store_id, $key, $v2_kv_entry_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVEntriesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **key** | **string**| The key. It can contain &#39;/&#39;. | |
| **v2_kv_entry_put_request** | [**\QuantClient\Model\V2KvEntryPutRequest**](../Model/V2KvEntryPutRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2KvEntryPutResponse**](../Model/V2KvEntryPutResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVEntriesShow()`

```php
kVEntriesShow($organization, $project, $store_id, $key, $consistent, $reveal): \QuantClient\Model\V2KvEntry
```

Get a key with its version and metadata

Returns the value, the version (format 2 stores), timestamps, expires_at and, for a ledger entry, the ledger block. Reads are strongly consistent unless consistent is false. Works on format 1 and format 2 stores. A ledger entry needs the ledger_read permission (and, for a token with a scope list, the kv:ledger:read scope; a legacy token without a scope list needs the permission only) (else 403 PERMISSION_DENIED); its personal fields read \"[PERSONAL]\" (names in personal) unless the role has ledger_reveal and reveal is true. Each reveal is logged (kv.ledger.reveal). Secret values are write-only through the API: a value stored as a secret (encrypted true) reads \"[ENCRYPTED]\"; read it in an edge function. A lost connection is 503 UNAVAILABLE with retryable true.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$key = order:1001; // string | The key. It can contain '/'.
$consistent = true; // bool | false for an eventually consistent read.
$reveal = false; // bool | Ledger rows only: return personal fields in clear. Needs the ledger_reveal permission; each reveal is logged. Without it, personal fields are redacted.

try {
    $result = $apiInstance->kVEntriesShow($organization, $project, $store_id, $key, $consistent, $reveal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVEntriesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **key** | **string**| The key. It can contain &#39;/&#39;. | |
| **consistent** | **bool**| false for an eventually consistent read. | [optional] [default to true] |
| **reveal** | **bool**| Ledger rows only: return personal fields in clear. Needs the ledger_reveal permission; each reveal is logged. Without it, personal fields are redacted. | [optional] [default to false] |

### Return type

[**\QuantClient\Model\V2KvEntry**](../Model/V2KvEntry.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVExportCreate()`

```php
kVExportCreate($organization, $project, $store_id, $body): \QuantClient\Model\V2KvExportResponse
```

Start an export of the whole store to gzip JSON Lines files

Runs in the background; poll KV_export_show. One export at a time per store (409 EXPORT_IN_PROGRESS). Stores over 1 GiB are 400 LIMIT_EXCEEDED. 503 STORE_MIGRATING during an upgrade. When the store has any ledger, in any state (also one that is being dropped), the role also needs ledger_read (403 PERMISSION_DENIED) and a token with a scope list also needs kv:ledger:read (403 SCOPE_REQUIRED), because the files contain the ledger entries; the portal checks the store's ledger list first and refuses when it cannot read it. A lost connection is 503 UNAVAILABLE with retryable false: read KV_export_show before you send it again. Rate limit: 10 requests per minute per project, shared by every kv-admin operation (index create, delete and resume; upgrade; export create and resume; ledger declare, raise and drop). Over the limit the answer is 429 RATE_LIMITED with a Retry-After header: clients (for example Terraform) must wait Retry-After seconds, then send the request again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->kVExportCreate($organization, $project, $store_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVExportCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **body** | **object**|  | [optional] |

### Return type

[**\QuantClient\Model\V2KvExportResponse**](../Model/V2KvExportResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVExportResume()`

```php
kVExportResume($organization, $project, $store_id): \QuantClient\Model\V2KvExportResponse
```

Queue a stalled export step again

Use it when KV_export_show shows no change of updatedAt for more than 960 seconds (a queued step was lost). A resumed export reuses the export already started. Safe to repeat: 409 CONFLICT when the export is in a final phase or its step is still running. A lost connection is 503 UNAVAILABLE with retryable true. When the store has a ledger, the role also needs ledger_read (403 PERMISSION_DENIED) and a token with a scope list also needs kv:ledger:read (403 SCOPE_REQUIRED). Rate limit: 10 requests per minute per project, shared by every kv-admin operation (index create, delete and resume; upgrade; export create and resume; ledger declare, raise and drop). Over the limit the answer is 429 RATE_LIMITED with a Retry-After header: clients (for example Terraform) must wait Retry-After seconds, then send the request again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list

try {
    $result = $apiInstance->kVExportResume($organization, $project, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVExportResume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |

### Return type

[**\QuantClient\Model\V2KvExportResponse**](../Model/V2KvExportResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVExportShow()`

```php
kVExportShow($organization, $project, $store_id): \QuantClient\Model\V2KvExportResponse
```

Get the latest export and, when done, its download links

In phase done the export has downloads: one presigned URL per part, valid for 1 hour and new on every call. After expiresAt the phase is expired and there are no downloads. 404 EXPORT_NOT_FOUND when the store was never exported (or the last export failed more than 7 days ago). When the store has a ledger, the role also needs ledger_read (403 PERMISSION_DENIED) and a token with a scope list also needs kv:ledger:read (403 SCOPE_REQUIRED), because the files contain the ledger entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list

try {
    $result = $apiInstance->kVExportShow($organization, $project, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVExportShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |

### Return type

[**\QuantClient\Model\V2KvExportResponse**](../Model/V2KvExportResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVIndexesCount()`

```php
kVIndexesCount($organization, $project, $store_id, $index_name, $equals): \QuantClient\Model\V2KvCount
```

Count the keys that hold a value of a count index

Count indexes only; the index must be ACTIVE (409 INDEX_NOT_READY while BUILDING). Strongly consistent. A value that no key holds counts 0. Omit equals (or send {}) for an index with no fields, which counts the whole collection. The answer has no rows, so no ledger data (count indexes are refused on ledger collections).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$index_name = byCustomer; // string
$equals = {"plan":"pro"}; // string | A JSON object that gives a JSON scalar for exactly the index fields.

try {
    $result = $apiInstance->kVIndexesCount($organization, $project, $store_id, $index_name, $equals);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVIndexesCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **index_name** | **string**|  | |
| **equals** | **string**| A JSON object that gives a JSON scalar for exactly the index fields. | [optional] |

### Return type

[**\QuantClient\Model\V2KvCount**](../Model/V2KvCount.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVIndexesCreate()`

```php
kVIndexesCreate($organization, $project, $store_id, $v2_kv_index_request): \QuantClient\Model\V2KvIndex
```

Declare an index

Format 2 stores only (400 REQUIRES_FORMAT_2). The index starts in state BUILDING. About 40 seconds after the declare, writes maintain it; about 75 seconds after it, a job backfills existing items and sets the state to ACTIVE, or FAILED with error and conflicts. The answer is 202 Accepted with the index (the backend status). Poll KV_indexes_show until state is ACTIVE (Terraform waits for ACTIVE). A unique index is not enforced in the first 40 seconds: a duplicate written then makes the build end FAILED. At most 20 indexes per store and 5 per collection (400 LIMIT_EXCEEDED). Definitions are immutable. Rate limit: 10 requests per minute per project, shared by every kv-admin operation (index create, delete and resume; upgrade; export create and resume; ledger declare, raise and drop). Over the limit the answer is 429 RATE_LIMITED with a Retry-After header: clients (for example Terraform) must wait Retry-After seconds, then send the request again. A lost connection is 503 UNAVAILABLE with retryable false: read KV_indexes_show before you send it again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$v2_kv_index_request = new \QuantClient\Model\V2KvIndexRequest(); // \QuantClient\Model\V2KvIndexRequest

try {
    $result = $apiInstance->kVIndexesCreate($organization, $project, $store_id, $v2_kv_index_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVIndexesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **v2_kv_index_request** | [**\QuantClient\Model\V2KvIndexRequest**](../Model/V2KvIndexRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2KvIndex**](../Model/V2KvIndex.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVIndexesDelete()`

```php
kVIndexesDelete($organization, $project, $store_id, $index_name): \QuantClient\Model\V2KvIndex
```

Drop an index

The index moves to state DROPPING and a background job removes its data, then the index. KV_indexes_show then answers 404 INDEX_NOT_FOUND. Dropping an index that is already DROPPING returns it unchanged. An index that is not in the store's index list is 404 INDEX_NOT_FOUND. A lost connection is 503 UNAVAILABLE with retryable false: read KV_indexes_show before you send it again. Rate limit: 10 requests per minute per project, shared by every kv-admin operation (index create, delete and resume; upgrade; export create and resume; ledger declare, raise and drop). Over the limit the answer is 429 RATE_LIMITED with a Retry-After header: clients (for example Terraform) must wait Retry-After seconds, then send the request again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$index_name = byCustomer; // string

try {
    $result = $apiInstance->kVIndexesDelete($organization, $project, $store_id, $index_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVIndexesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **index_name** | **string**|  | |

### Return type

[**\QuantClient\Model\V2KvIndex**](../Model/V2KvIndex.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVIndexesList()`

```php
kVIndexesList($organization, $project, $store_id, $limit): \QuantClient\Model\V2KvIndexList
```

List the declared indexes of a store

Every declared index with its state (BUILDING, ACTIVE, FAILED, DROPPING) and job phase. A store has at most 20 indexes, so the list has no cursor. limit (1-1000) only cuts the list in the portal. Empty for a store without indexes (also a format 1 store).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$limit = 56; // int | The maximum number of indexes to return (1-1000). Omit it for all indexes.

try {
    $result = $apiInstance->kVIndexesList($organization, $project, $store_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVIndexesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **limit** | **int**| The maximum number of indexes to return (1-1000). Omit it for all indexes. | [optional] |

### Return type

[**\QuantClient\Model\V2KvIndexList**](../Model/V2KvIndexList.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVIndexesLookup()`

```php
kVIndexesLookup($organization, $project, $store_id, $index_name, $equals, $reveal): \QuantClient\Model\V2KvIndexLookup
```

Get the key that holds a value of a unique index

Unique indexes only; the index must be ACTIVE (409 INDEX_NOT_READY while BUILDING). Strongly consistent. An expired owner, or an owner that no longer holds the value, is 404 KEY_NOT_FOUND. An owner that is an entry of a ledger in the retired subject format is 409 LEDGER_FORMAT_RETIRED (not retryable). A ledger entry needs the ledger_read permission (and, for a token with a scope list, the kv:ledger:read scope; a legacy token without a scope list needs the permission only) (403 PERMISSION_DENIED); its personal fields are [PERSONAL] unless the role has ledger_reveal and reveal=true (each reveal is logged as kv.ledger.reveal). reveal is a portal option and is not sent to the KV service. An empty object {} in a value stays {}, but a ledger entry whose whole value is {} reads [PERSONAL] (fail closed). Secret values are write-only through the API: a value stored as a secret (encrypted true) reads [ENCRYPTED]; read it in an edge function.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$index_name = byCustomer; // string
$equals = {"email":"ann@example.com"}; // string | A JSON object that gives a JSON scalar for exactly the index fields. Values are type-tagged (1 and \"1\" differ).
$reveal = false; // bool | Ledger rows only: return personal fields in clear. Needs the ledger_reveal permission; each reveal is logged. Without it, personal fields are redacted.

try {
    $result = $apiInstance->kVIndexesLookup($organization, $project, $store_id, $index_name, $equals, $reveal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVIndexesLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **index_name** | **string**|  | |
| **equals** | **string**| A JSON object that gives a JSON scalar for exactly the index fields. Values are type-tagged (1 and \&quot;1\&quot; differ). | |
| **reveal** | **bool**| Ledger rows only: return personal fields in clear. Needs the ledger_reveal permission; each reveal is logged. Without it, personal fields are redacted. | [optional] [default to false] |

### Return type

[**\QuantClient\Model\V2KvIndexLookup**](../Model/V2KvIndexLookup.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVIndexesResume()`

```php
kVIndexesResume($organization, $project, $store_id, $index_name): \QuantClient\Model\V2KvIndex
```

Queue a stalled index job step again

Use it when KV_indexes_show shows a job whose phase and scanned count have not changed for more than 960 seconds (a queued step was lost). It changes nothing else and is safe to repeat, so a lost connection is 503 UNAVAILABLE with retryable true. An index that is not in the store's index list is 404 INDEX_NOT_FOUND. Rate limit: 10 requests per minute per project, shared by every kv-admin operation (index create, delete and resume; upgrade; export create and resume; ledger declare, raise and drop). Over the limit the answer is 429 RATE_LIMITED with a Retry-After header: clients (for example Terraform) must wait Retry-After seconds, then send the request again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$index_name = byCustomer; // string

try {
    $result = $apiInstance->kVIndexesResume($organization, $project, $store_id, $index_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVIndexesResume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **index_name** | **string**|  | |

### Return type

[**\QuantClient\Model\V2KvIndex**](../Model/V2KvIndex.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVIndexesShow()`

```php
kVIndexesShow($organization, $project, $store_id, $index_name): \QuantClient\Model\V2KvIndex
```

Get one index with its state and job

The portal reads the index list and returns the named index. State BUILDING moves to ACTIVE or FAILED; poll this route until ACTIVE. A dropped index answers 404 INDEX_NOT_FOUND once the drop job has finished. A name that does not match the index name pattern is 400 VALIDATION.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$index_name = byCustomer; // string

try {
    $result = $apiInstance->kVIndexesShow($organization, $project, $store_id, $index_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVIndexesShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **index_name** | **string**|  | |

### Return type

[**\QuantClient\Model\V2KvIndex**](../Model/V2KvIndex.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsBatchGet()`

```php
kVItemsBatchGet($organization, $project, $store_id, $v2_kv_batch_get_request, $reveal): \QuantClient\Model\V2KvBatchGetResponse
```

Get up to 100 keys in one request

Reads 1 to 100 keys. Works on format 1 and format 2 stores. items has one entry per requested key in input order: the entry, or null for a missing or expired key. A response over 4 MiB is 400 LIMIT_EXCEEDED. A ledger entry needs the ledger_read permission (and, for a token with a scope list, the kv:ledger:read scope; a legacy token without a scope list needs the permission only) (else 403 PERMISSION_DENIED for the whole request); personal fields read \"[PERSONAL]\" unless the role has ledger_reveal and reveal is true (logged as kv.ledger.reveal). Secret values are write-only through the API: a value stored as a secret (encrypted true) reads \"[ENCRYPTED]\"; read it in an edge function. A read: a lost connection is 503 UNAVAILABLE with retryable true.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$v2_kv_batch_get_request = new \QuantClient\Model\V2KvBatchGetRequest(); // \QuantClient\Model\V2KvBatchGetRequest
$reveal = false; // bool | Ledger rows only: return personal fields in clear. Needs the ledger_reveal permission; each reveal is logged. Without it, personal fields are redacted.

try {
    $result = $apiInstance->kVItemsBatchGet($organization, $project, $store_id, $v2_kv_batch_get_request, $reveal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsBatchGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **v2_kv_batch_get_request** | [**\QuantClient\Model\V2KvBatchGetRequest**](../Model/V2KvBatchGetRequest.md)|  | |
| **reveal** | **bool**| Ledger rows only: return personal fields in clear. Needs the ledger_reveal permission; each reveal is logged. Without it, personal fields are redacted. | [optional] [default to false] |

### Return type

[**\QuantClient\Model\V2KvBatchGetResponse**](../Model/V2KvBatchGetResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsCreate()`

```php
kVItemsCreate($organization, $project, $store_id, $v2_store_item_request): \QuantClient\Model\KVItemsCreate200Response
```

Add an item to a kv store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$v2_store_item_request = new \QuantClient\Model\V2StoreItemRequest(); // \QuantClient\Model\V2StoreItemRequest

try {
    $result = $apiInstance->kVItemsCreate($organization, $project, $store_id, $v2_store_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **v2_store_item_request** | [**\QuantClient\Model\V2StoreItemRequest**](../Model/V2StoreItemRequest.md)|  | |

### Return type

[**\QuantClient\Model\KVItemsCreate200Response**](../Model/KVItemsCreate200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsDelete()`

```php
kVItemsDelete($organization, $project, $store_id, $key): \QuantClient\Model\KVItemsDelete200Response
```

Delete an item from a kv store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->kVItemsDelete($organization, $project, $store_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **key** | **string**|  | |

### Return type

[**\QuantClient\Model\KVItemsDelete200Response**](../Model/KVItemsDelete200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsIncrement()`

```php
kVItemsIncrement($organization, $project, $store_id, $key, $v2_kv_increment_request): \QuantClient\Model\V2KvIncrementResponse
```

Atomically add to a numeric value

Adds amount (a nonzero safe integer, default 1) to an unencrypted integer value. A missing or expired key starts at 0. ttl (60 to 31,536,000 seconds) applies only when the key is created or reset after expiry. Not available in a collection with any index (400 VALIDATION) or a ledger collection (400 LEDGER_IMMUTABLE). Not idempotent: a lost connection is 503 UNAVAILABLE with retryable false; do not retry automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$key = order:1001; // string | The key. It can contain '/'.
$v2_kv_increment_request = new \QuantClient\Model\V2KvIncrementRequest(); // \QuantClient\Model\V2KvIncrementRequest

try {
    $result = $apiInstance->kVItemsIncrement($organization, $project, $store_id, $key, $v2_kv_increment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsIncrement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **key** | **string**| The key. It can contain &#39;/&#39;. | |
| **v2_kv_increment_request** | [**\QuantClient\Model\V2KvIncrementRequest**](../Model/V2KvIncrementRequest.md)|  | [optional] |

### Return type

[**\QuantClient\Model\V2KvIncrementResponse**](../Model/V2KvIncrementResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsList()`

```php
kVItemsList($organization, $project, $store_id, $cursor, $limit, $search, $include_values): \QuantClient\Model\V2StoreItemsListResponse
```

List items in a kv store

Ledger collections are left out (hidden_ledger_collections and notice say how many) when the role lacks the ledger_read permission, or when a token with a scope list lacks the kv:ledger:read scope. A legacy token without a scope list needs the permission only.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$cursor = 'cursor_example'; // string | Cursor for pagination
$limit = 10; // int | Number of items to return (1 to 1000, default 10)
$search = 'search_example'; // string | Search filter for keys
$include_values = false; // bool | Include values in the response. Secret values will be redacted as '[ENCRYPTED]' for security.

try {
    $result = $apiInstance->kVItemsList($organization, $project, $store_id, $cursor, $limit, $search, $include_values);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **cursor** | **string**| Cursor for pagination | [optional] |
| **limit** | **int**| Number of items to return (1 to 1000, default 10) | [optional] [default to 10] |
| **search** | **string**| Search filter for keys | [optional] |
| **include_values** | **bool**| Include values in the response. Secret values will be redacted as &#39;[ENCRYPTED]&#39; for security. | [optional] [default to false] |

### Return type

[**\QuantClient\Model\V2StoreItemsListResponse**](../Model/V2StoreItemsListResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsPatch()`

```php
kVItemsPatch($organization, $project, $store_id, $key, $v2_store_item_update_request): \QuantClient\Model\KVItemsCreate200Response
```

Update an item in a kv store (PATCH alias of PUT)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$key = 'key_example'; // string
$v2_store_item_update_request = new \QuantClient\Model\V2StoreItemUpdateRequest(); // \QuantClient\Model\V2StoreItemUpdateRequest

try {
    $result = $apiInstance->kVItemsPatch($organization, $project, $store_id, $key, $v2_store_item_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **key** | **string**|  | |
| **v2_store_item_update_request** | [**\QuantClient\Model\V2StoreItemUpdateRequest**](../Model/V2StoreItemUpdateRequest.md)|  | |

### Return type

[**\QuantClient\Model\KVItemsCreate200Response**](../Model/KVItemsCreate200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsPurge()`

```php
kVItemsPurge($organization, $project, $store_id, $prefix, $older_than): \QuantClient\Model\KVItemsPurge200Response
```

Delete items in bulk by prefix and/or age

Deletes every item matching the filters. With no filters the whole store is cleared. A small purge finishes in the request and returns 200; a large one returns 202 with the counts so far and continues in the background. Idempotent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$prefix = oauth_state:; // string | Only delete keys that start with this string.
$older_than = 24h; // string | Only delete keys last updated before this instant. ISO 8601, or a duration with unit s, m, h or d.

try {
    $result = $apiInstance->kVItemsPurge($organization, $project, $store_id, $prefix, $older_than);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsPurge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **prefix** | **string**| Only delete keys that start with this string. | [optional] |
| **older_than** | **string**| Only delete keys last updated before this instant. ISO 8601, or a duration with unit s, m, h or d. | [optional] |

### Return type

[**\QuantClient\Model\KVItemsPurge200Response**](../Model/KVItemsPurge200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsShow()`

```php
kVItemsShow($organization, $project, $store_id, $key): \QuantClient\Model\KVItemsShow200Response
```

Get an item from a kv store

Retrieves an item from the KV store. **Security Note:** If the item was stored as a secret (secret=true), the value will be redacted and returned as '[ENCRYPTED]' for security. Secrets should be accessed directly via the Quant Cloud platform KVStore abstraction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->kVItemsShow($organization, $project, $store_id, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **key** | **string**|  | |

### Return type

[**\QuantClient\Model\KVItemsShow200Response**](../Model/KVItemsShow200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsTransact()`

```php
kVItemsTransact($organization, $project, $store_id, $v2_kv_transact_request): \QuantClient\Model\V2KvTransactResponse
```

Run 1 to 25 operations as one transaction

Format 2 stores only. Runs 1 to 25 operations on different keys as one transaction: all or none. check: version. set: value, secret, ttl (60 to 31,536,000 s), ifAbsent, ifVersion. delete: ifVersion. increment: amount. Any other field fails VALIDATION. A failed condition is 409 CONFLICT with operation (its index) and reason. With idempotencyKey, a repeat of the same operations within 24 hours returns the first result with replayed true. A lost connection is 503 UNAVAILABLE: retryable is true only when the request has idempotencyKey, and then retry only with the same idempotencyKey; without it the outcome is unknown (retryable false).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$v2_kv_transact_request = new \QuantClient\Model\V2KvTransactRequest(); // \QuantClient\Model\V2KvTransactRequest

try {
    $result = $apiInstance->kVItemsTransact($organization, $project, $store_id, $v2_kv_transact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsTransact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **v2_kv_transact_request** | [**\QuantClient\Model\V2KvTransactRequest**](../Model/V2KvTransactRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2KvTransactResponse**](../Model/V2KvTransactResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVItemsUpdate()`

```php
kVItemsUpdate($organization, $project, $store_id, $key, $v2_store_item_update_request): \QuantClient\Model\KVItemsCreate200Response
```

Update an item in a kv store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string
$key = 'key_example'; // string
$v2_store_item_update_request = new \QuantClient\Model\V2StoreItemUpdateRequest(); // \QuantClient\Model\V2StoreItemUpdateRequest

try {
    $result = $apiInstance->kVItemsUpdate($organization, $project, $store_id, $key, $v2_store_item_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVItemsUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |
| **key** | **string**|  | |
| **v2_store_item_update_request** | [**\QuantClient\Model\V2StoreItemUpdateRequest**](../Model/V2StoreItemUpdateRequest.md)|  | |

### Return type

[**\QuantClient\Model\KVItemsCreate200Response**](../Model/KVItemsCreate200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVKeysList()`

```php
kVKeysList($organization, $project, $store_id, $collection, $prefix, $pattern, $starts_with, $after, $before, $reverse, $since, $until, $index, $equals, $where, $type, $include_values, $subject_tag, $limit, $cursor, $reveal): \QuantClient\Model\V2KvKeysPage
```

List keys with a cursor: by collection, prefix, filter, index or ledger time window

Always cursor mode. limit is 1 to 1000 (default 25). A page can hold fewer than limit rows while has_more is true (4,000,000 byte page budget or the read budget; see page_end): follow next_cursor while has_more is true. Cursors are signed, valid 24 hours and bound to the store and the query. collection lists one collection (the key text before the last ':'); collection= (empty) is the root collection. index with equals lists the members of a declared index (format 2). A ledger collection with since (inclusive) and until (exclusive) lists ledger entries by server time. prefix, pattern and where are scans, not indexes. Ledger rows: without the ledger_read permission, or with a token that has a scope list without kv:ledger:read, they are left out and hidden_ledger_collections and notice say how many collections were hidden; with it, personal fields read \"[PERSONAL]\". reveal=true (the role needs ledger_reveal) opens personal fields only in a ledger collection list and an index list; rows of a scan (prefix, pattern, where) stay sealed by the KV service, and a reveal that opens nothing is not logged. Each reveal that shows a field in clear is logged as kv.ledger.reveal. A cursor of a ledger collection list with values is bound to the reveal setting: change it and the cursor is 400 CURSOR_INVALID. Secret values are write-only through the API: a value stored as a secret (encrypted true) reads \"[ENCRYPTED]\"; read it in an edge function. A read: a lost connection is 503 UNAVAILABLE with retryable true.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$collection = 'collection_example'; // string | One collection (the key text before the last ':'). Empty: the root collection. Not with prefix, pattern or index.
$prefix = 'prefix_example'; // string | Literal key prefix (a scan). Not with pattern or collection.
$pattern = 'pattern_example'; // string | Wildcard pattern such as user_*, *_temp or *session* (a scan).
$starts_with = 'starts_with_example'; // string | With collection: only ids that start with this text (no ':'). Not with after or before.
$after = 'after_example'; // string | Exclusive lower bound: an id with collection, a JSON scalar with index.
$before = 'before_example'; // string | Exclusive upper bound: an id with collection, a JSON scalar with index.
$reverse = false; // bool | With collection or index: descending order. Format 2 only (else 400 REQUIRES_FORMAT_2).
$since = 2026-10-16T00:00:00.000Z; // string | Ledger collection only. Epoch milliseconds or ISO 8601 with a zone. Inclusive.
$until = 1792195200000; // string | Ledger collection only. Epoch milliseconds or ISO 8601 with a zone. Exclusive; after since.
$index = 'index_example'; // string | List the members of this declared index (format 2). Not with collection, prefix, pattern or starts_with.
$equals = {"customerId":"customer-123"}; // string | With index: a JSON object with exactly the index fields. A filter that names the subjectField of a ledger of the store is refused (400 VALIDATION): use KV_ledgers_subject_entries.
$where = {"status":"ready"}; // string | A JSON object of 1 to 8 top-level equalities on plaintext object values (a filter, not an index). A filter that names the subjectField of a ledger of the store is refused (400 VALIDATION): use KV_ledgers_subject_entries.
$type = 'all'; // string | Filter by encryption.
$include_values = false; // bool | Return the values. Secret values read [ENCRYPTED] (write-only through the API).
$subject_tag = 'subject_tag_example'; // string | Ledger collections only: the entries of one subject token, as shown in personal=sealed reads.
$limit = 25; // int | The maximum number of items in the page (1-1000, default 25). A page can be shorter while has_more is true (byte or read budget; see page_end).
$cursor = 'cursor_example'; // string | The next_cursor of the previous page.
$reveal = false; // bool | Ledger rows only: return personal fields in clear. Needs the ledger_reveal permission; each reveal is logged. Without it, personal fields are redacted.

try {
    $result = $apiInstance->kVKeysList($organization, $project, $store_id, $collection, $prefix, $pattern, $starts_with, $after, $before, $reverse, $since, $until, $index, $equals, $where, $type, $include_values, $subject_tag, $limit, $cursor, $reveal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVKeysList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **collection** | **string**| One collection (the key text before the last &#39;:&#39;). Empty: the root collection. Not with prefix, pattern or index. | [optional] |
| **prefix** | **string**| Literal key prefix (a scan). Not with pattern or collection. | [optional] |
| **pattern** | **string**| Wildcard pattern such as user_*, *_temp or *session* (a scan). | [optional] |
| **starts_with** | **string**| With collection: only ids that start with this text (no &#39;:&#39;). Not with after or before. | [optional] |
| **after** | **string**| Exclusive lower bound: an id with collection, a JSON scalar with index. | [optional] |
| **before** | **string**| Exclusive upper bound: an id with collection, a JSON scalar with index. | [optional] |
| **reverse** | **bool**| With collection or index: descending order. Format 2 only (else 400 REQUIRES_FORMAT_2). | [optional] [default to false] |
| **since** | **string**| Ledger collection only. Epoch milliseconds or ISO 8601 with a zone. Inclusive. | [optional] |
| **until** | **string**| Ledger collection only. Epoch milliseconds or ISO 8601 with a zone. Exclusive; after since. | [optional] |
| **index** | **string**| List the members of this declared index (format 2). Not with collection, prefix, pattern or starts_with. | [optional] |
| **equals** | **string**| With index: a JSON object with exactly the index fields. A filter that names the subjectField of a ledger of the store is refused (400 VALIDATION): use KV_ledgers_subject_entries. | [optional] |
| **where** | **string**| A JSON object of 1 to 8 top-level equalities on plaintext object values (a filter, not an index). A filter that names the subjectField of a ledger of the store is refused (400 VALIDATION): use KV_ledgers_subject_entries. | [optional] |
| **type** | **string**| Filter by encryption. | [optional] [default to &#39;all&#39;] |
| **include_values** | **bool**| Return the values. Secret values read [ENCRYPTED] (write-only through the API). | [optional] [default to false] |
| **subject_tag** | **string**| Ledger collections only: the entries of one subject token, as shown in personal&#x3D;sealed reads. | [optional] |
| **limit** | **int**| The maximum number of items in the page (1-1000, default 25). A page can be shorter while has_more is true (byte or read budget; see page_end). | [optional] [default to 25] |
| **cursor** | **string**| The next_cursor of the previous page. | [optional] |
| **reveal** | **bool**| Ledger rows only: return personal fields in clear. Needs the ledger_reveal permission; each reveal is logged. Without it, personal fields are redacted. | [optional] [default to false] |

### Return type

[**\QuantClient\Model\V2KvKeysPage**](../Model/V2KvKeysPage.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersAppend()`

```php
kVLedgersAppend($organization, $project, $store_id, $v2_kv_ledger_append_request): \QuantClient\Model\V2KvLedgerReceipt
```

Append an entry to a ledger

Format 2 stores only. Appends one entry to the ledger declared for collection. The KV service picks the chain, assigns the id, time and sequence, hash-links the entry, seals the personal fields and records the source (type api, principal token:<token id>). The entry can never be changed or deleted (PUT, DELETE, increment and transact on a ledger collection answer 400 LEDGER_IMMUTABLE). Limits: value at most 350,000 bytes (400 LIMIT_EXCEEDED); collection at most 512 UTF-8 bytes. With idempotencyKey a retry within 24 hours returns the first receipt with replayed true. A lost connection (timeout 15 s) is 503 UNAVAILABLE: retryable true only when the request has idempotencyKey; without it the outcome is unknown, so list the collection (KV_keys_list with since) before you append again. A ledger whose writerPolicy excludes API writers (only listed Quant platform services can append) refuses the append with 500 INTERNAL (the KV service answers 403); such a ledger cannot be written through this API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$v2_kv_ledger_append_request = new \QuantClient\Model\V2KvLedgerAppendRequest(); // \QuantClient\Model\V2KvLedgerAppendRequest

try {
    $result = $apiInstance->kVLedgersAppend($organization, $project, $store_id, $v2_kv_ledger_append_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersAppend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **v2_kv_ledger_append_request** | [**\QuantClient\Model\V2KvLedgerAppendRequest**](../Model/V2KvLedgerAppendRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2KvLedgerReceipt**](../Model/V2KvLedgerReceipt.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersArchive()`

```php
kVLedgersArchive($organization, $project, $store_id, $ledger_name, $cursor, $digest_cursor): \QuantClient\Model\V2KvLedgerArchive
```

Get download links for the ledger archive, digests and anchor files

Presigned download URLs (each valid for up to 3600 seconds; call again for fresh URLs) for up to 100 archive objects per page. The first page also lists the store's digests with their .sig files and the anchor files (.tsr, .anchor.json). Pass next_cursor as cursor for more objects; when digestsTruncated is true (more than 2,000 digest files), pass next_digest_cursor as digest_cursor for more digests. Send cursor or digest_cursor, not both. Download every file under its key path, then run the offline verifier: node verify.mjs --dir ./archive --store <org>/<store> --public-key key.pem. Every key is under the store's prefixes ledgers/<org>/<store>/<ledger>/ and digests/<org>/<store>/; the portal drops any other link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$cursor = 'cursor_example'; // string | The next_cursor of the previous page of objects.
$digest_cursor = 'digest_cursor_example'; // string | The next_digest_cursor of the previous digest page.

try {
    $result = $apiInstance->kVLedgersArchive($organization, $project, $store_id, $ledger_name, $cursor, $digest_cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersArchive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **cursor** | **string**| The next_cursor of the previous page of objects. | [optional] |
| **digest_cursor** | **string**| The next_digest_cursor of the previous digest page. | [optional] |

### Return type

[**\QuantClient\Model\V2KvLedgerArchive**](../Model/V2KvLedgerArchive.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersCreate()`

```php
kVLedgersCreate($organization, $project, $store_id, $v2_kv_ledger_admin_declare_request): \QuantClient\Model\V2KvLedger
```

Declare a ledger

Declares an append-only, hash-chained ledger on a collection (or a pattern where * is one whole segment) of a format 2 store. The collection must be empty: no keys and no ledger entries. The ledger is PENDING for 75 seconds (appends answer 409 LEDGER_NOT_READY until activeAfter); then the emptiness check runs again and the ledger becomes ACTIVE, or FAILED when a key was written in that window. Declaring the name of a FAILED ledger replaces it. The answer is 202 with the ledger (state PENDING): the KV service accepts the declaration and finishes it after the wait. A store has at most 20 ledgers (400 LIMIT_EXCEEDED). LEDGER_SUBJECT_REQUIRED has a fixed message. name, collection, personalFields, subjectField, subjectMode, subjectCase, anchor and writerPolicy can never change; chains, retentionDays and lockMode can only go up (KV_ledgers_update). A ledger cannot be dropped before its archive retention ends.\\n\\nNeeds a token with the explicit kv:ledger:admin scope (full_access and tokens without a scope list cannot use it) and the ledger_admin permission. Rate limit: 10 requests per minute per project, shared by every kv-admin operation (index create, delete and resume; upgrade; export create and resume; ledger declare, raise and drop). Over the limit the answer is 429 RATE_LIMITED with a Retry-After header: clients (for example Terraform) must wait Retry-After seconds, then send the request again. Audited (the definition fields and definitionHash, never a value). A lost connection is 503 UNAVAILABLE with retryable false: read the ledger (KV_ledgers_show) before you send it again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$v2_kv_ledger_admin_declare_request = new \QuantClient\Model\V2KvLedgerAdminDeclareRequest(); // \QuantClient\Model\V2KvLedgerAdminDeclareRequest

try {
    $result = $apiInstance->kVLedgersCreate($organization, $project, $store_id, $v2_kv_ledger_admin_declare_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **v2_kv_ledger_admin_declare_request** | [**\QuantClient\Model\V2KvLedgerAdminDeclareRequest**](../Model/V2KvLedgerAdminDeclareRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2KvLedger**](../Model/V2KvLedger.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersDelete()`

```php
kVLedgersDelete($organization, $project, $store_id, $ledger_name): \QuantClient\Model\V2KvLedger
```

Drop a ledger

A PENDING or FAILED ledger is removed (the answer shows it as DROPPED). An ACTIVE ledger becomes DROPPED only when every shard is fully archived and the archive retention has ended; the definition is kept, so the entries stay readable and immutable. Otherwise the answer is 409 LEDGER_RETAINED with retainUntil (the retention has not ended), with reason unarchived plus collection and shard (entries are not archived yet), or with reason retention_unknown (the retention date is not recorded yet). Dropping a DROPPED ledger returns it unchanged. The drop is idempotent: after a lost connection (503 UNAVAILABLE, retryable true) or a gateway error, send it again until it answers 200.\\n\\nNeeds a token with the explicit kv:ledger:admin scope (full_access and tokens without a scope list cannot use it) and the ledger_admin permission. Rate limit: 10 requests per minute per project, shared by every kv-admin operation (index create, delete and resume; upgrade; export create and resume; ledger declare, raise and drop). Over the limit the answer is 429 RATE_LIMITED with a Retry-After header: clients (for example Terraform) must wait Retry-After seconds, then send the request again. Audited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string

try {
    $result = $apiInstance->kVLedgersDelete($organization, $project, $store_id, $ledger_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |

### Return type

[**\QuantClient\Model\V2KvLedger**](../Model/V2KvLedger.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersList()`

```php
kVLedgersList($organization, $project, $store_id): \QuantClient\Model\V2KvLedgerList
```

List the ledgers of a store

Every ledger (PENDING, ACTIVE, FAILED and DROPPED) with its definition and a summary (archive lag, broken shards, retention end, anchor failure, last verify). Empty for a format 1 store. A store has at most 20 ledgers, so there is no paging.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list

try {
    $result = $apiInstance->kVLedgersList($organization, $project, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |

### Return type

[**\QuantClient\Model\V2KvLedgerList**](../Model/V2KvLedgerList.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersProof()`

```php
kVLedgersProof($organization, $project, $store_id, $ledger_name, $key): \QuantClient\Model\V2KvLedgerProof
```

Get the inclusion proof of one ledger entry

status pending until the entry is archived and the digest that covers it is signed (about 10 minutes). status archived: the stored entry (personal fields stay sealed), its hash, the Merkle audit path to the archive object root, the signed digest and its signature. The body is the exact bytes of the KV service (application/json). When the live entry differs from its archived copy the answer is 503 UNAVAILABLE with retryable false: run KV_ledgers_verify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$key = ai-use:agency-1:01M5104A000000000000000000-00; // string | The key of a ledger entry (collection:id), as in the append receipt.

try {
    $result = $apiInstance->kVLedgersProof($organization, $project, $store_id, $ledger_name, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersProof: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **key** | **string**| The key of a ledger entry (collection:id), as in the append receipt. | |

### Return type

[**\QuantClient\Model\V2KvLedgerProof**](../Model/V2KvLedgerProof.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersPublicKey()`

```php
kVLedgersPublicKey($organization, $project, $store_id): \QuantClient\Model\V2KvLedgerPublicKey
```

Get the public key that verifies ledger signatures

The public half of the KMS key (ECDSA P-256, SHA-256) that signs the digests, verification reports and shred receipts. The response is application/json; publicKeyPem is the PEM text: save it as key.pem for the offline verifier (node verify.mjs --dir ./archive --store <org>/<store> --public-key key.pem).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list

try {
    $result = $apiInstance->kVLedgersPublicKey($organization, $project, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersPublicKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |

### Return type

[**\QuantClient\Model\V2KvLedgerPublicKey**](../Model/V2KvLedgerPublicKey.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersShow()`

```php
kVLedgersShow($organization, $project, $store_id, $ledger_name): \QuantClient\Model\V2KvLedgerDetail
```

Get a ledger definition with its retention end and last verify

The definition, plus retainUntil (an ACTIVE ledger can be dropped after it), lastDigestAt and lastVerify (the latest complete verify result, with the id of its signed report). The chain instances are on KV_ledgers_status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string

try {
    $result = $apiInstance->kVLedgersShow($organization, $project, $store_id, $ledger_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |

### Return type

[**\QuantClient\Model\V2KvLedgerDetail**](../Model/V2KvLedgerDetail.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersShred()`

```php
kVLedgersShred($organization, $project, $store_id, $ledger_name, $v2_kv_ledger_erasure_shred_request): \QuantClient\Model\V2KvLedgerErasureShredResult
```

Shred a data subject (cannot be undone)

Crypto-shreds the personal fields of one data subject: appends a shred entry to every collection of the ledger that holds the subject, then destroys the subject key. The entries stay on the chain; their personal fields can never be decrypted again. After fullyErasedAfter (shreddedAt + 35 days) no backup of the key remains. A 200 writes one erasure record (KV_ledgers_shreds_list) with a signed receipt (KV_ledgers_shreds_receipt); the answer has shredId, subjectRef and the receipt.\\n\\n202 in_progress: the time budget of this call ended before every collection had its shred entry. Send the same request again until it answers 200; no entry is written twice. The shred is safe to repeat: a repeat after a 200 answers 200 with alreadyShredded true, and a lost connection is 503 UNAVAILABLE with retryable true. 409 CONTENTION and 503 UNAVAILABLE are retryable: send the same request again.\\n\\nThe subject id is in the body, so it stays out of request paths and access logs; the portal audit keeps only the subjectRef of the answer (and the HMAC of requestedBy). subjectId: a string or a safe integer; the server canonicalises it (trim, NFC, the ledger's case rule) and refuses an invalid id with VALIDATION. A SUBJECT_NOT_FOUND error has a fixed message that never names the subject. reason, authority and requestedBy: 1-1000 characters each, not only spaces; they are stored in the shred entries and the receipt.\\n\\nNeeds a token with the explicit kv:ledger:erase scope (full_access and tokens without a scope list cannot use it) and the ledger_erase permission. Rate limit: 30 requests per minute per project (kv-erase). Timeout 60 seconds. Audited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$v2_kv_ledger_erasure_shred_request = new \QuantClient\Model\V2KvLedgerErasureShredRequest(); // \QuantClient\Model\V2KvLedgerErasureShredRequest

try {
    $result = $apiInstance->kVLedgersShred($organization, $project, $store_id, $ledger_name, $v2_kv_ledger_erasure_shred_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersShred: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **v2_kv_ledger_erasure_shred_request** | [**\QuantClient\Model\V2KvLedgerErasureShredRequest**](../Model/V2KvLedgerErasureShredRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2KvLedgerErasureShredResult**](../Model/V2KvLedgerErasureShredResult.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersShredsEntries()`

```php
kVLedgersShredsEntries($organization, $project, $store_id, $ledger_name, $shred_id, $cursor): \QuantClient\Model\V2KvLedgerErasureShredEntriesPage
```

List the shred entries of an erasure record

The shred entries of the erasure record, sorted by key, in pages: pass next_cursor back as cursor (the cursor is bound to the shred). The entries of all pages together, in order, hash to the receipt's entriesSha256 (SHA-256 of their JCS), so a receipt without the list can be checked: kv-ledger-verify verify-signed --entries <file>.\\n\\nNeeds kv:ledger:read and the ledger_read permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$shred_id = 01JB2Z6V8Q3M4N5P6R7S8T9V0W; // string | The shredId of a shred answer, or the id of an erasure record (KV_ledgers_shreds_list). A ULID.
$cursor = 'cursor_example'; // string | The next_cursor of the previous page.

try {
    $result = $apiInstance->kVLedgersShredsEntries($organization, $project, $store_id, $ledger_name, $shred_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersShredsEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **shred_id** | **string**| The shredId of a shred answer, or the id of an erasure record (KV_ledgers_shreds_list). A ULID. | |
| **cursor** | **string**| The next_cursor of the previous page. | [optional] |

### Return type

[**\QuantClient\Model\V2KvLedgerErasureShredEntriesPage**](../Model/V2KvLedgerErasureShredEntriesPage.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersShredsList()`

```php
kVLedgersShredsList($organization, $project, $store_id, $ledger_name, $cursor): \QuantClient\Model\V2KvLedgerErasureShredPage
```

List the erasure records of a ledger

The erasure records of the ledger, newest first (by shreddedAt), at most 50 per page: pass next_cursor back as cursor (the cursor is bound to this store and ledger). Each shred that answers 200 writes one record; a repeated shred adds none. A record names the data subject by subjectRef only, never by the subject id: a keyed hash under a per-store key that only Quant holds. Treat it as a pseudonym. reason, authority and requestedBy are the text of the shred request. entries is the number of shred entries (KV_ledgers_shreds_entries lists them). ledgerForked true: the shred was made on a forked store and no shred entry is recorded; the later re-shred is a new record whose supersedes names the forked record. A failed read is an error, never an empty list.\\n\\nNeeds kv:ledger:read and the ledger_read permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$cursor = 'cursor_example'; // string | The next_cursor of the previous page.

try {
    $result = $apiInstance->kVLedgersShredsList($organization, $project, $store_id, $ledger_name, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersShredsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **cursor** | **string**| The next_cursor of the previous page. | [optional] |

### Return type

[**\QuantClient\Model\V2KvLedgerErasureShredPage**](../Model/V2KvLedgerErasureShredPage.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersShredsReceipt()`

```php
kVLedgersShredsReceipt($organization, $project, $store_id, $ledger_name, $shred_id): \QuantClient\Model\V2KvLedgerErasureShredReceiptDocument
```

Get the signed receipt of a shred

The receipt of an erasure, signed with the ledger key (ECDSA P-256 over the SHA-256 of its JCS bytes). It is the same receipt as the shred answer's: signed once, stored, never signed again. It names the subject by subjectRef, never by the id. entryCount and entriesSha256 bind the shred entries; entries is left out when the receipt would pass 300 KB (then KV_ledgers_shreds_entries serves them). The body is returned byte for byte: save the whole answer and check it offline with kv-ledger-verify verify-signed and the public key (KV_ledgers_public_key), with --entries for a receipt without the list.\\n\\nNeeds kv:ledger:read and the ledger_read permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$shred_id = 01JB2Z6V8Q3M4N5P6R7S8T9V0W; // string | The shredId of a shred answer, or the id of an erasure record (KV_ledgers_shreds_list). A ULID.

try {
    $result = $apiInstance->kVLedgersShredsReceipt($organization, $project, $store_id, $ledger_name, $shred_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersShredsReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **shred_id** | **string**| The shredId of a shred answer, or the id of an erasure record (KV_ledgers_shreds_list). A ULID. | |

### Return type

[**\QuantClient\Model\V2KvLedgerErasureShredReceiptDocument**](../Model/V2KvLedgerErasureShredReceiptDocument.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersStatus()`

```php
kVLedgersStatus($organization, $project, $store_id, $ledger_name, $cursor): \QuantClient\Model\V2KvLedgerStatus
```

Get the chains, archive lag, digest, anchor and verify state of a ledger

The ledger, its chain instances (one per collection and shard that holds entries; 50 per page) with head and archived sequence and archive lag, the retention end, the last digest time, the anchor state, lastVerify, verifyProgress and forked. Pass next_cursor as cursor for the next page of instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$cursor = 'cursor_example'; // string | The next_cursor of the previous page.

try {
    $result = $apiInstance->kVLedgersStatus($organization, $project, $store_id, $ledger_name, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **cursor** | **string**| The next_cursor of the previous page. | [optional] |

### Return type

[**\QuantClient\Model\V2KvLedgerStatus**](../Model/V2KvLedgerStatus.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersSubjectEntries()`

```php
kVLedgersSubjectEntries($organization, $project, $store_id, $ledger_name, $v2_kv_ledger_subject_entries_request): \QuantClient\Model\V2KvLedgerSubjectEntries
```

List the ledger entries of one data subject

Lists the entries of one data subject across the ledger's collections, in pages: pass nextToken back in the body to read the next page. The subject id stays in the body, so it never reaches a URL or an access log; a GET with equals or where on the subject field is refused (use this call). subjectId: a string or a safe integer; the server canonicalises it (trim, NFC, the ledger's case rule) and refuses an invalid id with VALIDATION. collection narrows the read to one collection; since and until are date-time bounds on the entry time; limit is 1 to 1000 (default 100).\\n\\npersonal defaults to sealed: personal fields read \"[PERSONAL]\", and the subject field shows the subject token. personal decrypted shows the personal fields in clear; it needs the ledger_reveal permission and every such read is logged as kv.ledger.reveal. The answer never holds the subjectId, a subjectRef or a subject token outside the entries. subjectState is live, or shredded (then entries is empty, shreds lists the shred ids and earlierGenerationsShredded counts the earlier key generations that were shredded). A SUBJECT_NOT_FOUND error has a fixed message that never names the subject. The read is safe to repeat: a lost connection is 503 UNAVAILABLE with retryable true. Timeout 60 seconds.\\n\\nNeeds kv:ledger:read and the ledger_read permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$v2_kv_ledger_subject_entries_request = new \QuantClient\Model\V2KvLedgerSubjectEntriesRequest(); // \QuantClient\Model\V2KvLedgerSubjectEntriesRequest

try {
    $result = $apiInstance->kVLedgersSubjectEntries($organization, $project, $store_id, $ledger_name, $v2_kv_ledger_subject_entries_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersSubjectEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **v2_kv_ledger_subject_entries_request** | [**\QuantClient\Model\V2KvLedgerSubjectEntriesRequest**](../Model/V2KvLedgerSubjectEntriesRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2KvLedgerSubjectEntries**](../Model/V2KvLedgerSubjectEntries.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersSubjectPreview()`

```php
kVLedgersSubjectPreview($organization, $project, $store_id, $ledger_name, $v2_kv_ledger_erasure_subject_preview_request): \QuantClient\Model\V2KvLedgerErasureSubjectPreview
```

Preview a shred of a data subject

Shows what a shred of one data subject touches: the entry count per collection (each count means at least N, because reads are eventual; complete is false when the 20 second budget ended first) and the state of the subject key (live, or shredded with shreddedAt). Read-only: nothing is decrypted, returned or written. The subject id is in the body, so it stays out of request paths and access logs; the portal audit keeps only the subjectRef of the answer. subjectId: a string or a safe integer; the server canonicalises it (trim, NFC, the ledger's case rule) and refuses an invalid id with VALIDATION. refKeyVersion (optional, a positive integer) is sent to the server unchanged. A SUBJECT_NOT_FOUND error has a fixed message that never names the subject.\\n\\nNeeds a token with the explicit kv:ledger:erase scope (full_access and tokens without a scope list cannot use it) and the ledger_erase permission. Rate limit: 30 requests per minute per project (kv-erase, shared with KV_ledgers_shred). Timeout 60 seconds. Audited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$v2_kv_ledger_erasure_subject_preview_request = new \QuantClient\Model\V2KvLedgerErasureSubjectPreviewRequest(); // \QuantClient\Model\V2KvLedgerErasureSubjectPreviewRequest

try {
    $result = $apiInstance->kVLedgersSubjectPreview($organization, $project, $store_id, $ledger_name, $v2_kv_ledger_erasure_subject_preview_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersSubjectPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **v2_kv_ledger_erasure_subject_preview_request** | [**\QuantClient\Model\V2KvLedgerErasureSubjectPreviewRequest**](../Model/V2KvLedgerErasureSubjectPreviewRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2KvLedgerErasureSubjectPreview**](../Model/V2KvLedgerErasureSubjectPreview.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersUpdate()`

```php
kVLedgersUpdate($organization, $project, $store_id, $ledger_name, $v2_kv_ledger_admin_raise_request): \QuantClient\Model\V2KvLedger
```

Raise a ledger

Raises chains (up to 64), retentionDays (up to 36500) or lockMode (governance to compliance). Raise only: a value that would go down is 400 LEDGER_DIRECTION, and compliance never goes back to governance. The archive worker then extends the retention of the existing archive objects. Any other field (name, collection, personalFields, subjectField, subjectMode, subjectCase, anchor, writerPolicy) is refused with 400 VALIDATION before the KV service is called, and so is an empty body. A DROPPED or FAILED ledger cannot be raised.\\n\\nNeeds a token with the explicit kv:ledger:admin scope (full_access and tokens without a scope list cannot use it) and the ledger_admin permission. Rate limit: 10 requests per minute per project, shared by every kv-admin operation (index create, delete and resume; upgrade; export create and resume; ledger declare, raise and drop). Over the limit the answer is 429 RATE_LIMITED with a Retry-After header: clients (for example Terraform) must wait Retry-After seconds, then send the request again. Audited.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$v2_kv_ledger_admin_raise_request = new \QuantClient\Model\V2KvLedgerAdminRaiseRequest(); // \QuantClient\Model\V2KvLedgerAdminRaiseRequest

try {
    $result = $apiInstance->kVLedgersUpdate($organization, $project, $store_id, $ledger_name, $v2_kv_ledger_admin_raise_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **v2_kv_ledger_admin_raise_request** | [**\QuantClient\Model\V2KvLedgerAdminRaiseRequest**](../Model/V2KvLedgerAdminRaiseRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2KvLedger**](../Model/V2KvLedger.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersVerificationsReport()`

```php
kVLedgersVerificationsReport($organization, $project, $store_id, $ledger_name, $verification_id): \QuantClient\Model\V2KvLedgerVerificationReport
```

Get the signed report of one verification run

Every verify (API, dashboard or the daily scheduled run) is recorded and kept 400 days. This returns the record signed with the ledger key, as the exact bytes of the KV service (application/json): save it unchanged and check it offline with the public key (kv-ledger-verify verify-signed --doc report.json --public-key key.pem). A record with complete false never states that the ledger is intact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$verification_id = 01M52R6QW07CCAW8KHYZM9210J; // string | The verificationId of a verify answer, or lastVerify.id of the ledger.

try {
    $result = $apiInstance->kVLedgersVerificationsReport($organization, $project, $store_id, $ledger_name, $verification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersVerificationsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **verification_id** | **string**| The verificationId of a verify answer, or lastVerify.id of the ledger. | |

### Return type

[**\QuantClient\Model\V2KvLedgerVerificationReport**](../Model/V2KvLedgerVerificationReport.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLedgersVerify()`

```php
kVLedgersVerify($organization, $project, $store_id, $ledger_name, $v2_kv_ledger_verify_request): \QuantClient\Model\V2KvLedgerVerifyResult
```

Verify a ledger against its archive and signed digests

Recomputes the hash chain of each shard in the range, compares every archived entry with its archive object and checks each object against its signed digest. Read only, but costly: at most 10,000 entries (maxEntries) and 200 archive objects per call, and 6 calls per minute per project (429 RATE_LIMITED). When next_cursor is not null, send the same collection, since and until with cursor to continue; every page of a run has the same verificationId. A finished run has a signed report (KV_ledgers_verifications_report). Anchors are checked only by the offline verifier. The portal waits up to 60 s; a lost connection is 503 UNAVAILABLE (retryable: repeat with the same cursor).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$ledger_name = aiUse; // string
$v2_kv_ledger_verify_request = new \QuantClient\Model\V2KvLedgerVerifyRequest(); // \QuantClient\Model\V2KvLedgerVerifyRequest

try {
    $result = $apiInstance->kVLedgersVerify($organization, $project, $store_id, $ledger_name, $v2_kv_ledger_verify_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLedgersVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **ledger_name** | **string**|  | |
| **v2_kv_ledger_verify_request** | [**\QuantClient\Model\V2KvLedgerVerifyRequest**](../Model/V2KvLedgerVerifyRequest.md)|  | [optional] |

### Return type

[**\QuantClient\Model\V2KvLedgerVerifyResult**](../Model/V2KvLedgerVerifyResult.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVLinkToProject()`

```php
kVLinkToProject($organization, $project, $store_id, $kv_link_to_project_request): \QuantClient\Model\KVLinkToProject200Response
```

Link a KV store to another project

Share a KV store from the source project with a target project. The store will be accessible in the target project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Source project identifier
$store_id = store-123; // string | KV store identifier
$kv_link_to_project_request = new \QuantClient\Model\KVLinkToProjectRequest(); // \QuantClient\Model\KVLinkToProjectRequest

try {
    $result = $apiInstance->kVLinkToProject($organization, $project, $store_id, $kv_link_to_project_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVLinkToProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Source project identifier | |
| **store_id** | **string**| KV store identifier | |
| **kv_link_to_project_request** | [**\QuantClient\Model\KVLinkToProjectRequest**](../Model/KVLinkToProjectRequest.md)|  | |

### Return type

[**\QuantClient\Model\KVLinkToProject200Response**](../Model/KVLinkToProject200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVList()`

```php
kVList($organization, $project): \QuantClient\Model\V2Store[]
```

List key-value stores

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier

try {
    $result = $apiInstance->kVList($organization, $project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |

### Return type

[**\QuantClient\Model\V2Store[]**](../Model/V2Store.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVShow()`

```php
kVShow($organization, $project, $store_id): \QuantClient\Model\V2Store
```

Get a kv store

status is ready when the store answers data requests and provisioning while its table is still being created (then data requests are 503 UNAVAILABLE retryable). status is omitted when the KV service gives no clear answer. A ready status is cached for up to one hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = 0000; // string

try {
    $result = $apiInstance->kVShow($organization, $project, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**|  | |

### Return type

[**\QuantClient\Model\V2Store**](../Model/V2Store.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVUnlinkFromProject()`

```php
kVUnlinkFromProject($organization, $project, $store_id): \QuantClient\Model\KVLinkToProject200Response
```

Unlink a KV store from this project

Remove access to a linked KV store from this project. The store must be linked (not owned by this project).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = store-123; // string | KV store identifier

try {
    $result = $apiInstance->kVUnlinkFromProject($organization, $project, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVUnlinkFromProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store identifier | |

### Return type

[**\QuantClient\Model\KVLinkToProject200Response**](../Model/KVLinkToProject200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVUpgradeCreate()`

```php
kVUpgradeCreate($organization, $project, $store_id, $v2_kv_upgrade_request): \QuantClient\Model\V2KvUpgradeResponse
```

Start, roll back, finalize or resume a format 1 to format 2 upgrade

Runs in the background; poll KV_upgrade_show. start checks every key (preflight), copies the store to a format 2 table and switches; with dryRun true it stops at phase checked and changes nothing. While writes are frozen (about 40 seconds plus the copy time) writes answer 503 STORE_MIGRATING with Retry-After; reads continue. Stores over 100,000 items or 1 GiB cannot be upgraded. rollback is allowed after the switch (409 LEDGER_PRESENT while the store has a ledger; 409 EXPORT_IN_PROGRESS during an export). finalize is allowed after retainUntil (14 days after the switch) and deletes the format 1 table. resume queues the current step again when the phase has not changed for more than 960 seconds (otherwise 409 UPGRADE_CONFLICT). A lost connection is 503 UNAVAILABLE. For start, rollback and finalize, retryable is false: read KV_upgrade_show, then send resume if the phase does not change for 960 seconds. resume only queues the current step again, so for resume retryable is true. Every action is audited. Rate limit: 10 requests per minute per project, shared by every kv-admin operation (index create, delete and resume; upgrade; export create and resume; ledger declare, raise and drop). Over the limit the answer is 429 RATE_LIMITED with a Retry-After header: clients (for example Terraform) must wait Retry-After seconds, then send the request again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list
$v2_kv_upgrade_request = new \QuantClient\Model\V2KvUpgradeRequest(); // \QuantClient\Model\V2KvUpgradeRequest

try {
    $result = $apiInstance->kVUpgradeCreate($organization, $project, $store_id, $v2_kv_upgrade_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVUpgradeCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |
| **v2_kv_upgrade_request** | [**\QuantClient\Model\V2KvUpgradeRequest**](../Model/V2KvUpgradeRequest.md)|  | |

### Return type

[**\QuantClient\Model\V2KvUpgradeResponse**](../Model/V2KvUpgradeResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVUpgradeShow()`

```php
kVUpgradeShow($organization, $project, $store_id): \QuantClient\Model\V2KvUpgradeState
```

Get the store format and the latest upgrade

The store format (1 or 2), state (active, or migrating while writes are frozen), table and the latest upgrade (null if the store was never upgraded). Poll it after KV_upgrade_create.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list

try {
    $result = $apiInstance->kVUpgradeShow($organization, $project, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVUpgradeShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |

### Return type

[**\QuantClient\Model\V2KvUpgradeState**](../Model/V2KvUpgradeState.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `kVUsageShow()`

```php
kVUsageShow($organization, $project, $store_id): \QuantClient\Model\V2KvUsage
```

Get 30-day usage and a cost estimate

Read and write units per UTC day for the last 30 full days, the table size and a list-price estimate. Never returns item values. A CloudWatch or DynamoDB failure is 503 UNAVAILABLE, never zeros.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\KVApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = test-org; // string | Organization identifier
$project = test-project; // string | Project identifier
$store_id = test-org-test-project-orders; // string | KV store id, as returned by KV_list

try {
    $result = $apiInstance->kVUsageShow($organization, $project, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KVApi->kVUsageShow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization** | **string**| Organization identifier | |
| **project** | **string**| Project identifier | |
| **store_id** | **string**| KV store id, as returned by KV_list | |

### Return type

[**\QuantClient\Model\V2KvUsage**](../Model/V2KvUsage.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
