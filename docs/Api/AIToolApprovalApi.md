# QuantClient\AIToolApprovalApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**decideToolProposal()**](AIToolApprovalApi.md#decideToolProposal) | **POST** /api/v3/organizations/{organisation}/ai/tool-proposals/{proposalId}/decision | Decide a tool approval proposal |
| [**getToolProposal()**](AIToolApprovalApi.md#getToolProposal) | **GET** /api/v3/organizations/{organisation}/ai/tool-proposals/{proposalId} | Get a tool approval proposal |


## `decideToolProposal()`

```php
decideToolProposal($organisation, $proposal_id, $decide_tool_proposal_request, $x_quant_approval_nonce)
```

Decide a tool approval proposal

Approves or rejects a tool approval proposal. QuantGov AI-governance organisations only; any other organisation gets 404. Only the QuantCode PKCE token with the `ai:approve` scope may call this. Any other token gets 403 with `This token cannot decide tool approvals.` The upstream status and body are returned unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIToolApprovalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$proposal_id = 'proposal_id_example'; // string | The proposal ID
$decide_tool_proposal_request = new \QuantClient\Model\DecideToolProposalRequest(); // \QuantClient\Model\DecideToolProposalRequest
$x_quant_approval_nonce = 'x_quant_approval_nonce_example'; // string | One-time approval nonce from the approval prompt. It is forwarded to the platform and never logged.

try {
    $apiInstance->decideToolProposal($organisation, $proposal_id, $decide_tool_proposal_request, $x_quant_approval_nonce);
} catch (Exception $e) {
    echo 'Exception when calling AIToolApprovalApi->decideToolProposal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **proposal_id** | **string**| The proposal ID | |
| **decide_tool_proposal_request** | [**\QuantClient\Model\DecideToolProposalRequest**](../Model/DecideToolProposalRequest.md)|  | |
| **x_quant_approval_nonce** | **string**| One-time approval nonce from the approval prompt. It is forwarded to the platform and never logged. | [optional] |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getToolProposal()`

```php
getToolProposal($organisation, $proposal_id)
```

Get a tool approval proposal

Returns one of the caller's own tool approval proposals. QuantGov AI-governance organisations only; any other organisation gets 404. Only the QuantCode PKCE token with the `ai:approve` scope may call this. Any other token gets 403 with `This token cannot decide tool approvals.` A proposal that belongs to another user is answered as 404.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIToolApprovalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$proposal_id = 'proposal_id_example'; // string | The proposal ID

try {
    $apiInstance->getToolProposal($organisation, $proposal_id);
} catch (Exception $e) {
    echo 'Exception when calling AIToolApprovalApi->getToolProposal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **proposal_id** | **string**| The proposal ID | |

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
