# # V2RuleProxyRequest

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
**to** | **string** | Target URL to proxy to |
**host** | **string** | Host header override | [optional]
**auth_user** | **string** | Basic auth username | [optional] [default to '']
**auth_pass** | **string** | Basic auth password | [optional] [default to '']
**disable_ssl_verify** | **bool** | Disable SSL verification | [optional] [default to false]
**cache_lifetime** | **string** | Cache lifetime | [optional]
**only_proxy_404** | **bool** | Only proxy 404 responses | [optional] [default to false]
**inject_headers** | **array<string,string>** | Headers added to (or replacing headers on) the request sent to the origin. They are not added to the response sent to the visitor. | [optional]
**proxy_strip_headers** | **string[]** | Headers to strip from response | [optional]
**proxy_strip_request_headers** | **string[]** | Headers to strip from request | [optional]
**origin_timeout** | **string** | Origin timeout in milliseconds. Defaults to 30000 when omitted on create. | [optional]
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
**static_error_page** | **string** | On/off switch, not page content. Send a string: any non-empty string (for example the text true) turns it on; an empty string or null turns it off. Write the text true to enable and an empty string to disable; do not send the text false, because any non-empty string counts as on. A JSON boolean is rejected on write. A boolean stored by the dashboard reads back as the string true, or an empty string when off. When on, an origin response whose status is in static_error_page_status_codes is replaced by the project&#39;s published /_quant&lt;status&gt; page (for example /_quant503). | [optional]
**static_error_page_status_codes** | **string[]** | Origin status codes that serve the published /_quant&lt;status&gt; page when static_error_page is on | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
