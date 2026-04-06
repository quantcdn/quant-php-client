# # V2RuleProxyRequest

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
**to** | **string** | Target URL to proxy to |
**host** | **string** | Host header override | [optional]
**auth_user** | **string** | Basic auth username | [optional] [default to '']
**auth_pass** | **string** | Basic auth password | [optional] [default to '']
**disable_ssl_verify** | **bool** | Disable SSL verification | [optional] [default to false]
**cache_lifetime** | **string** | Cache lifetime | [optional]
**only_proxy_404** | **bool** | Only proxy 404 responses | [optional] [default to false]
**inject_headers** | **array<string,string>** | Headers to inject | [optional]
**proxy_strip_headers** | **string[]** | Headers to strip from response | [optional]
**proxy_strip_request_headers** | **string[]** | Headers to strip from request | [optional]
**origin_timeout** | **string** | Origin timeout | [optional]
**failover_mode** | **bool** | Enable failover mode | [optional] [default to false]
**failover_origin_ttfb** | **string** | Failover TTFB threshold in milliseconds | [optional] [default to '2000']
**failover_origin_status_codes** | **string[]** | Origin status codes that trigger failover | [optional]
**failover_lifetime** | **string** | Failover cache lifetime in seconds | [optional] [default to '300']
**proxy_alert_enabled** | **bool** | Proxy alert enabled | [optional] [default to false]
**waf_enabled** | **bool** | WAF enabled | [optional] [default to false]
**waf_config** | [**\QuantClient\Model\WafConfig**](WafConfig.md) |  | [optional]
**application_proxy** | **bool** | Enable Quant Cloud application proxy mode | [optional] [default to false]
**application_name** | **string** | Quant Cloud application name (required when application_proxy is true) | [optional]
**application_environment** | **string** | Quant Cloud application environment (required when application_proxy is true) | [optional]
**application_container** | **string** | Quant Cloud application container (required when application_proxy is true) | [optional]
**application_port** | **int** | Quant Cloud application port (required when application_proxy is true) | [optional]
**static_error_page** | **string** | Static error page content (HTML) to serve on origin errors | [optional]
**static_error_page_status_codes** | **string[]** | Origin status codes that trigger static error page | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
