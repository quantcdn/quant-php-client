# # V2KvUpgradeState

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**format** | **int** |  |
**state** | **string** | migrating while writes are frozen (an upgrade copy or a rollback). |
**table** | **string** | The table that serves the store. |
**upgrade** | [**\QuantClient\Model\V2KvUpgradeStatus**](V2KvUpgradeStatus.md) | Null when the store was never upgraded. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
