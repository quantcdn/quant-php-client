# # V2RuleProxyAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Target URL to proxy to |
**host** | **string** | Host header override | [optional]
**auth_user** | **string** | Basic auth username | [optional]
**auth_pass** | **string** | Basic auth password | [optional]
**disable_ssl_verify** | **bool** | Disable SSL verification | [optional] [default to false]
**cache_lifetime** | **string** | Cache lifetime | [optional]
**only_proxy_404** | **bool** | Only proxy 404 responses | [optional] [default to false]
**inject_headers** | **array<string,string>** | Headers to inject | [optional]
**proxy_strip_headers** | **string[]** | Headers to strip from response | [optional]
**proxy_strip_request_headers** | **string[]** | Headers to strip from request | [optional]
**origin_timeout** | **string** | Origin timeout | [optional]
**failover_mode** | **bool** | Enable failover mode | [optional] [default to false]
**failover_origin_ttfb** | **string** | Failover TTFB threshold | [optional] [default to '2000']
**failover_origin_status_codes** | **string[]** | Status codes for failover (default: 200,404,301,302,304) | [optional]
**failover_lifetime** | **string** | Failover cache lifetime | [optional] [default to '300']
**notify** | **string** | Notification type (none, slack) | [optional] [default to 'none']
**notify_config** | [**\QuantClient\Model\V2RuleProxyActionNotifyConfig**](V2RuleProxyActionNotifyConfig.md) |  | [optional]
**waf_enabled** | **bool** | WAF enabled | [optional] [default to false]
**waf_config** | [**\QuantClient\Model\V2RuleProxyActionWafConfig**](V2RuleProxyActionWafConfig.md) |  | [optional]
**proxy_alert_enabled** | **bool** | Proxy alert enabled | [optional]
**proxy_inline_fn_enabled** | **bool** | Proxy inline function enabled | [optional] [default to false]
**application_proxy** | **bool** | Enable Quant Cloud application proxy mode | [optional] [default to false]
**application_name** | **string** | Quant Cloud application name (required when application_proxy is true) | [optional]
**application_environment** | **string** | Quant Cloud application environment (required when application_proxy is true) | [optional]
**application_container** | **string** | Quant Cloud application container (required when application_proxy is true) | [optional]
**application_port** | **int** | Quant Cloud application port (required when application_proxy is true) | [optional]
**quant_cloud_selection** | [**\QuantClient\Model\V2RuleProxyActionQuantCloudSelection**](V2RuleProxyActionQuantCloudSelection.md) |  | [optional]
**static_error_page** | **string** | Static error page content (HTML) to serve on origin errors | [optional]
**static_error_page_status_codes** | **string[]** | Origin status codes that trigger static error page | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
