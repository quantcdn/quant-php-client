# # V2RuleServeStatic

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Rule name | [optional]
**uuid** | **string** | Rule UUID |
**rule_id** | **string** | Rule ID | [optional]
**weight** | **int** | Rule order. Must be 0 or greater; lower weights are processed first. If omitted on create, the rule is placed last. | [optional]
**url** | **string[]** | URL patterns | [optional]
**domain** | **string[]** | Exact hostnames the rule matches, or &#39;any&#39;. Wildcards are not supported. | [optional]
**disabled** | **bool** | Whether rule is disabled | [default to false]
**only_with_cookie** | **string** | Only apply with cookie | [optional]
**method** | **string** | HTTP method | [optional]
**method_is** | **string[]** | Allowed HTTP methods | [optional]
**method_is_not** | **string[]** | Excluded HTTP methods | [optional]
**ip** | **string** | IP address | [optional]
**ip_is** | **string[]** | Allowed IP addresses | [optional]
**ip_is_not** | **string[]** | Excluded IP addresses | [optional]
**asn** | **string** | ASN condition type (asn_is, asn_is_not, any) | [optional]
**asn_is** | **string[]** | Allowed AS numbers | [optional]
**asn_is_not** | **string[]** | Excluded AS numbers | [optional]
**ua** | **string** | User agent condition type (ua_is, ua_is_not, any) | [optional]
**ua_is** | **string[]** | User agent strings to match | [optional]
**ua_is_not** | **string[]** | User agent strings to exclude | [optional]
**traffic_source** | **string** | Traffic source condition type (traffic_source_is, traffic_source_is_not, any) | [optional]
**traffic_source_is** | **string[]** | Traffic sources to match (cloud, vpn, tor-exit, abuser, crawler) | [optional]
**traffic_source_is_not** | **string[]** | Traffic sources to exclude (cloud, vpn, tor-exit, abuser, crawler) | [optional]
**country** | **string** | Country code | [optional]
**country_is** | **string[]** | Allowed countries | [optional]
**country_is_not** | **string[]** | Excluded countries | [optional]
**action** | **string** | Rule action |
**action_config** | [**\QuantClient\Model\V2RuleServeStaticAction**](V2RuleServeStaticAction.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
