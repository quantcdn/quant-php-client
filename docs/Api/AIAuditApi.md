# QuantClient\AIAuditApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiAuditExport()**](AIAuditApi.md#aiAuditExport) | **GET** /api/v3/organizations/{organisation}/ai/audit/export | Export AI audit records as JSON Lines |
| [**aiAuditLedgerEntries()**](AIAuditApi.md#aiAuditLedgerEntries) | **GET** /api/v3/organizations/{organisation}/ai/audit/ledger/entries | List AI governance ledger entries |
| [**aiAuditLedgerProof()**](AIAuditApi.md#aiAuditLedgerProof) | **GET** /api/v3/organizations/{organisation}/ai/audit/ledger/proof | Get the inclusion proof of a governance ledger entry |
| [**aiAuditLedgerPublicKey()**](AIAuditApi.md#aiAuditLedgerPublicKey) | **GET** /api/v3/organizations/{organisation}/ai/audit/ledger/public-key | Get the governance ledger public key |
| [**aiAuditLedgerStatus()**](AIAuditApi.md#aiAuditLedgerStatus) | **GET** /api/v3/organizations/{organisation}/ai/audit/ledger | Get the AI governance ledger status |
| [**aiAuditRecordGet()**](AIAuditApi.md#aiAuditRecordGet) | **GET** /api/v3/organizations/{organisation}/ai/audit/record | Get one AI audit record |
| [**aiAuditRecordsList()**](AIAuditApi.md#aiAuditRecordsList) | **GET** /api/v3/organizations/{organisation}/ai/audit/records | List AI audit records |


## `aiAuditExport()`

```php
aiAuditExport($organisation, $start_date, $end_date, $user_id, $model_id, $record_type, $decision, $tool, $outcome): string
```

Export AI audit records as JSON Lines

Every record of the range that matches the filters (the filters of aiAuditRecordsList), one JSON object per line (the row: key, date, summary, record). At most 100 pages of 200 records; a longer export ends with an error line. A failed page ends the file with an error line. Each page read is recorded in the audit log (action export). Needs view_ai_audit and, for a scoped token, ai:audit:read. Limit: 10 requests per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$user_id = 'user_id_example'; // string
$model_id = 'model_id_example'; // string
$record_type = 'record_type_example'; // string
$decision = 'decision_example'; // string
$tool = 'tool_example'; // string
$outcome = 'outcome_example'; // string

try {
    $result = $apiInstance->aiAuditExport($organisation, $start_date, $end_date, $user_id, $model_id, $record_type, $decision, $tool, $outcome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAuditApi->aiAuditExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **start_date** | **\DateTime**|  | |
| **end_date** | **\DateTime**|  | |
| **user_id** | **string**|  | [optional] |
| **model_id** | **string**|  | [optional] |
| **record_type** | **string**|  | [optional] |
| **decision** | **string**|  | [optional] |
| **tool** | **string**|  | [optional] |
| **outcome** | **string**|  | [optional] |

### Return type

**string**

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/x-ndjson`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAuditLedgerEntries()`

```php
aiAuditLedgerEntries($organisation, $since, $until, $limit, $cursor): \QuantClient\Model\V2KvKeysPage
```

List AI governance ledger entries

The entries of the collection events:governance, with values, in pages: follow next_cursor while has_more is true. Each entry has its ledger block (seq, hash, prevHash, shard) for verification; open a proof with aiAuditLedgerProof and check entries offline with kv-ledger-verify and aiAuditLedgerPublicKey. Events are hash-only (no prompt or response). The read is recorded in the audit log first (503 UNAVAILABLE when it cannot be). Needs view_ai_audit and, for a scoped token, ai:audit:read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$since = 'since_example'; // string | Epoch milliseconds or ISO 8601 with a zone. Inclusive.
$until = 'until_example'; // string | Epoch milliseconds or ISO 8601 with a zone. Exclusive.
$limit = 100; // int
$cursor = 'cursor_example'; // string | The next_cursor of the previous page.

try {
    $result = $apiInstance->aiAuditLedgerEntries($organisation, $since, $until, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAuditApi->aiAuditLedgerEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **since** | **string**| Epoch milliseconds or ISO 8601 with a zone. Inclusive. | [optional] |
| **until** | **string**| Epoch milliseconds or ISO 8601 with a zone. Exclusive. | [optional] |
| **limit** | **int**|  | [optional] [default to 100] |
| **cursor** | **string**| The next_cursor of the previous page. | [optional] |

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

## `aiAuditLedgerProof()`

```php
aiAuditLedgerProof($organisation, $key): \QuantClient\Model\V2KvLedgerProof
```

Get the inclusion proof of a governance ledger entry

The Merkle inclusion proof of one entry (key events:governance:...): entry, hash, period, merkleRoot, auditPath, the signed digest and keyId, or status pending until the entry is archived. Returned byte for byte, as KV_ledgers_proof. The read is recorded in the audit log first (503 UNAVAILABLE when it cannot be). Needs view_ai_audit and, for a scoped token, ai:audit:read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$key = events:governance:01JB0000000000000000000000; // string

try {
    $result = $apiInstance->aiAuditLedgerProof($organisation, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAuditApi->aiAuditLedgerProof: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **key** | **string**|  | |

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

## `aiAuditLedgerPublicKey()`

```php
aiAuditLedgerPublicKey($organisation): \QuantClient\Model\V2KvLedgerPublicKey
```

Get the governance ledger public key

The public key that verifies the ledger digests and receipts offline (kv-ledger-verify). The same answer as KV_ledgers_public_key. Needs view_ai_audit and, for a scoped token, ai:audit:read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name

try {
    $result = $apiInstance->aiAuditLedgerPublicKey($organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAuditApi->aiAuditLedgerPublicKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |

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

## `aiAuditLedgerStatus()`

```php
aiAuditLedgerStatus($organisation, $cursor): \QuantClient\Model\V2KvLedgerStatus
```

Get the AI governance ledger status

The organisation's AI governance ledger (store int-ai-governance, ledger governance): definition, retention, instances and shards with head sequence, archive lag, last digest and last verify. The same answer as KV_ledgers_status. 404 STORE_NOT_FOUND or LEDGER_NOT_FOUND when the organisation has no governance ledger. The read is recorded in the audit log first (503 UNAVAILABLE when it cannot be). Needs view_ai_audit and, for a scoped token, ai:audit:read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$cursor = 'cursor_example'; // string | The next_cursor of the previous page.

try {
    $result = $apiInstance->aiAuditLedgerStatus($organisation, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAuditApi->aiAuditLedgerStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
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

## `aiAuditRecordGet()`

```php
aiAuditRecordGet($organisation, $key): \QuantClient\Model\AiAuditRecordGet200Response
```

Get one AI audit record

One record by key (a key from aiAuditRecordsList). A key of another organisation is 400. prompt and response are returned only when the record stores them. The read is recorded in the audit log first (503 when it cannot be). Needs view_ai_audit and, for a scoped token, ai:audit:read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$key = 'key_example'; // string

try {
    $result = $apiInstance->aiAuditRecordGet($organisation, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAuditApi->aiAuditRecordGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **key** | **string**|  | |

### Return type

[**\QuantClient\Model\AiAuditRecordGet200Response**](../Model/AiAuditRecordGet200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aiAuditRecordsList()`

```php
aiAuditRecordsList($organisation, $start_date, $end_date, $since, $until, $user_id, $token_id, $model_id, $record_type, $decision, $tool, $outcome, $interface, $limit, $cursor): \QuantClient\Model\AiAuditRecordsPage
```

List AI audit records

One page of the organisation's AI audit records (inference, tool approvals and denials, Slack bot API calls, audit log reads). Filters match exactly. A page stops at limit rows, at 1,000 scanned records or at 20 seconds, so it can hold fewer rows than limit while hasMore is true: pass nextCursor back as cursor until hasMore is false. Order: by day, then by key. prompt and response are returned only when the record stores them. Records older than 365 days are archived (skippedArchived). Each call is recorded in the audit log (recordType audit_access) before it reads; when that record cannot be written the answer is 503 and nothing is read. Needs the view_ai_audit permission and, for a scoped token, ai:audit:read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIAuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation machine name
$start_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | First UTC day (inclusive). At most 31 days, not in the future, not older than 365 days.
$end_date = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Last UTC day (inclusive).
$since = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Record time from (inclusive).
$until = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Record time to (exclusive).
$user_id = 'user_id_example'; // string | Portal user id (also matches the requester, approver and reader of tool and access records).
$token_id = 'token_id_example'; // string
$model_id = 'model_id_example'; // string
$record_type = inference; // string
$decision = approved; // string | approved, rejected, expired, or denied (tool_denied).
$tool = 'tool_example'; // string
$outcome = failed; // string | outcome or status: succeeded, failed, blocked, ok, refused, error.
$interface = api-gateway; // string
$limit = 50; // int
$cursor = 'cursor_example'; // string | nextCursor of the previous page (same organisation and range).

try {
    $result = $apiInstance->aiAuditRecordsList($organisation, $start_date, $end_date, $since, $until, $user_id, $token_id, $model_id, $record_type, $decision, $tool, $outcome, $interface, $limit, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AIAuditApi->aiAuditRecordsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation machine name | |
| **start_date** | **\DateTime**| First UTC day (inclusive). At most 31 days, not in the future, not older than 365 days. | |
| **end_date** | **\DateTime**| Last UTC day (inclusive). | |
| **since** | **\DateTime**| Record time from (inclusive). | [optional] |
| **until** | **\DateTime**| Record time to (exclusive). | [optional] |
| **user_id** | **string**| Portal user id (also matches the requester, approver and reader of tool and access records). | [optional] |
| **token_id** | **string**|  | [optional] |
| **model_id** | **string**|  | [optional] |
| **record_type** | **string**|  | [optional] |
| **decision** | **string**| approved, rejected, expired, or denied (tool_denied). | [optional] |
| **tool** | **string**|  | [optional] |
| **outcome** | **string**| outcome or status: succeeded, failed, blocked, ok, refused, error. | [optional] |
| **interface** | **string**|  | [optional] |
| **limit** | **int**|  | [optional] [default to 50] |
| **cursor** | **string**| nextCursor of the previous page (same organisation and range). | [optional] |

### Return type

[**\QuantClient\Model\AiAuditRecordsPage**](../Model/AiAuditRecordsPage.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
