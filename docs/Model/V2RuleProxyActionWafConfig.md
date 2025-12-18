# # V2RuleProxyActionWafConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mode** | **string** | WAF operation mode | [optional] [default to 'report']
**paranoia_level** | **int** | OWASP paranoia level | [optional] [default to 1]
**allow_rules** | **string[]** | WAF rule IDs to allow/whitelist | [optional]
**allow_ip** | **string[]** | IP addresses to allow | [optional]
**block_ip** | **string[]** | IP addresses to block | [optional]
**block_asn** | **string[]** | ASN numbers to block | [optional]
**block_ua** | **string[]** | User agent patterns to block | [optional]
**block_referer** | **string[]** | Referer patterns to block | [optional]
**notify_slack** | **string** | Slack webhook URL for notifications | [optional]
**notify_slack_hits_rpm** | **int** | Minimum hits per minute to trigger Slack notification | [optional]
**notify_email** | **string[]** | Email addresses for notifications | [optional]
**httpbl** | [**\QuantClient\Model\WafConfigHttpbl**](WafConfigHttpbl.md) |  | [optional]
**block_lists** | [**\QuantClient\Model\WafConfigBlockLists**](WafConfigBlockLists.md) |  | [optional]
**thresholds** | [**\QuantClient\Model\WafConfigThresholdsInner[]**](WafConfigThresholdsInner.md) | Rate limiting thresholds | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
