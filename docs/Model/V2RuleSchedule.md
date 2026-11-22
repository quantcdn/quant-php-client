# # V2RuleSchedule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timezone** | **string** | IANA time zone name, or UTC. Invalid values return 422. |
**mode** | **string** | active_during: the rule applies only inside the windows. inactive_during: the rule applies only outside them. |
**weekly** | [**\QuantClient\Model\V2RuleScheduleWeeklyInner[]**](V2RuleScheduleWeeklyInner.md) | Weekly windows. Stored as an empty list when omitted. | [optional]
**once** | [**\QuantClient\Model\V2RuleScheduleOnceInner[]**](V2RuleScheduleOnceInner.md) | One-off ranges. Stored as an empty list when omitted. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
