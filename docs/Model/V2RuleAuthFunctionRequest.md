# # V2RuleAuthFunctionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string[]** | Exact hostnames the rule matches, or &#39;any&#39; (the default). Wildcards such as *.example.com are not supported. |
**name** | **string** | Rule name | [optional]
**uuid** | **string** | Rule UUID | [optional]
**weight** | **int** | Rule order. Must be 0 or greater; lower weights are processed first. If omitted on create, the rule is placed last. | [optional]
**disabled** | **bool** | Whether rule is disabled | [optional] [default to false]
**url** | **string[]** | URL patterns |
**country** | **string** | Country filter type (country_is, country_is_not, any) | [optional]
**country_is** | **string[]** | Allowed countries | [optional]
**country_is_not** | **string[]** | Excluded countries | [optional]
**method** | **string** | Method filter type (method_is, method_is_not, any) | [optional]
**method_is** | **string[]** | Allowed HTTP methods | [optional]
**method_is_not** | **string[]** | Excluded HTTP methods | [optional]
**ip** | **string** | IP filter type (ip_is, ip_is_not, any) | [optional]
**ip_is** | **string[]** | Allowed IP addresses | [optional]
**ip_is_not** | **string[]** | Excluded IP addresses | [optional]
**asn** | **string** | ASN filter type (asn_is, asn_is_not, any). A PATCH that omits it keeps the current value. Invalid values return 422. | [optional]
**asn_is** | **string[]** | Allowed AS numbers. Positive integers up to 4294967295, stored as strings. A PATCH replaces the list. | [optional]
**asn_is_not** | **string[]** | Excluded AS numbers. Positive integers up to 4294967295, stored as strings. A PATCH replaces the list. | [optional]
**ua** | **string** | User agent filter type (ua_is, ua_is_not, any). Invalid values return 422. | [optional]
**ua_is** | **string[]** | User agent strings to match. Each item has at most 255 characters. A PATCH replaces the list. | [optional]
**ua_is_not** | **string[]** | User agent strings to exclude. Each item has at most 255 characters. A PATCH replaces the list. | [optional]
**traffic_source** | **string** | Traffic source filter type (traffic_source_is, traffic_source_is_not, any). Invalid values return 422. | [optional]
**traffic_source_is** | **string[]** | Traffic sources to match. A PATCH replaces the list. | [optional]
**traffic_source_is_not** | **string[]** | Traffic sources to exclude. A PATCH replaces the list. | [optional]
**cookie_name** | **string** | Write name of only_with_cookie: the rule applies only when this cookie is present. Empty string clears it. | [optional]
**fn_uuid** | **string** | UUID of a published function of type edge_auth in this project. A create, or a change of fn_uuid, that names any other function returns 422. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
