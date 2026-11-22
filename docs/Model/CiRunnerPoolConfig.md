# # CiRunnerPoolConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tier** | **string** | Hard cap on concurrent jobs: small 2, medium 4, large 8. When the pool is full, jobs wait. |
**architectures** | **string[]** |  | [optional]
**network_mode** | **string** |  | [optional] [default to 'public']
**egress_allowlist** | **string[]** | Domains allowed when networkMode is restricted. Wildcard only as a leading *. label. | [optional]
**idle_timeout_minutes** | **int** |  | [optional] [default to 15]
**business_hours_warm** | [**\QuantClient\Model\CiRunnerPoolConfigBusinessHoursWarm**](CiRunnerPoolConfigBusinessHoursWarm.md) |  | [optional]
**connection** | [**\QuantClient\Model\CiRunnerPoolConfigConnection**](CiRunnerPoolConfigConnection.md) |  | [optional]
**cache_residency** | **string** | Where the pool&#39;s GitHub Actions build cache may live. au-only keeps cache data in Australia; if the pool&#39;s cache is unavailable, jobs run without a cache. allow-github lets jobs use GitHub&#39;s cache when the pool&#39;s cache is unavailable. When not set, a pool that accepts public repositories uses allow-github and every other pool uses au-only. A change applies to the next job each runner machine starts. | [optional]
**alerts** | [**\QuantClient\Model\CiRunnerPoolConfigAlertsInner[]**](CiRunnerPoolConfigAlertsInner.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
