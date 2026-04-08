# # V2RuleAuthRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string[]** | Domain patterns (default: any) |
**name** | **string** | Rule name | [optional]
**uuid** | **string** | Rule UUID | [optional]
**weight** | **int** | Rule weight | [optional] [default to 0]
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
**asn** | **string** | ASN filter type (asn_is, asn_is_not, any) | [optional]
**asn_is** | **string[]** | Allowed AS numbers | [optional]
**asn_is_not** | **string[]** | Excluded AS numbers | [optional]
**auth_user** | **string** | Authentication username |
**auth_pass** | **string** | Authentication password |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
