# # V2RuleFunction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Rule name | [optional]
**uuid** | **string** | Rule UUID |
**rule_id** | **string** | Rule ID | [optional]
**weight** | **int** | Rule weight | [optional] [default to 0]
**url** | **string[]** | URL patterns | [optional]
**domain** | **string[]** | Domain patterns | [optional]
**disabled** | **bool** | Whether rule is disabled | [default to false]
**only_with_cookie** | **string** | Only apply with cookie | [optional]
**method** | **string** | HTTP method | [optional]
**method_is** | **string[]** | Allowed HTTP methods | [optional]
**method_is_not** | **string[]** | Excluded HTTP methods | [optional]
**ip** | **string** | IP address | [optional]
**ip_is** | **string[]** | Allowed IP addresses | [optional]
**ip_is_not** | **string[]** | Excluded IP addresses | [optional]
**country** | **string** | Country code | [optional]
**country_is** | **string[]** | Allowed countries | [optional]
**country_is_not** | **string[]** | Excluded countries | [optional]
**action** | **string** | Rule action |
**action_config** | [**\QuantClient\Model\V2RuleFunctionAction**](V2RuleFunctionAction.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
