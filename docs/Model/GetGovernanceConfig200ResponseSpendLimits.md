# # GetGovernanceConfig200ResponseSpendLimits

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**monthly_budget_cents** | **int** |  | [optional]
**daily_budget_cents** | **int** |  | [optional]
**per_user_monthly_budget_cents** | **int** |  | [optional]
**per_user_daily_budget_cents** | **int** |  | [optional]
**warning_threshold_percent** | **int** |  | [optional]
**interface_limits** | [**array<string,\QuantClient\Model\GetGovernanceConfig200ResponseSpendLimitsInterfaceLimitsValue>**](GetGovernanceConfig200ResponseSpendLimitsInterfaceLimitsValue.md) | Aggregate spend caps per interface label (slack, autonomous, api-gateway, streaming, websocket). Keys are interface labels. | [optional]
**user_overrides** | [**array<string,\QuantClient\Model\GetGovernanceConfig200ResponseSpendLimitsUserOverridesValue>**](GetGovernanceConfig200ResponseSpendLimitsUserOverridesValue.md) | Per-user budget overrides keyed by userId (numeric portal id, slack-&lt;id&gt;, or system:code-agent). Replaces the flat per-user budget for that user; unlimited&#x3D;true exempts them. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
