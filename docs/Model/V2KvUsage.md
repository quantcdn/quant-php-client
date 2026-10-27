# # V2KvUsage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_name** | **string** |  |
**format** | **int** |  |
**state** | **string** |  |
**table** | [**\QuantClient\Model\V2KvUsageTable**](V2KvUsageTable.md) |  |
**retained_table** | [**\QuantClient\Model\V2KvUsageRetainedTable**](V2KvUsageRetainedTable.md) |  | [optional]
**period** | [**\QuantClient\Model\V2KvUsagePeriod**](V2KvUsagePeriod.md) |  |
**daily** | [**\QuantClient\Model\V2KvUsageDailyInner[]**](V2KvUsageDailyInner.md) | Exactly period.days rows, oldest first. Units are rounded to 1 decimal. |
**totals** | [**\QuantClient\Model\V2KvUsageTotals**](V2KvUsageTotals.md) |  |
**estimate** | [**\QuantClient\Model\V2KvUsageEstimate**](V2KvUsageEstimate.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
