# # V2CrawlerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Crawler name | [optional]
**domain** | **string** | Domain to crawl |
**browser_mode** | **bool** | Enable browser mode | [optional] [default to false]
**urls** | **string[]** | URLs to crawl | [optional]
**start_urls** | **string[]** | Starting URLs for crawl | [optional]
**headers** | **array<string,string>** | Custom headers | [optional]
**exclude** | **string[]** | URL patterns to exclude (regex) | [optional]
**include** | **string[]** | URL patterns to include (regex) | [optional]
**webhook_url** | **string** | Webhook URL for notifications | [optional]
**webhook_auth_header** | **string** | Authorization header for webhook | [optional]
**webhook_extra_vars** | **string** | Extra variables for webhook | [optional]
**workers** | **int** | Number of concurrent workers (default: 2, non-default requires verification) | [optional]
**delay** | **float** | Delay between requests in seconds (default: 4, non-default requires verification) | [optional]
**depth** | **int** | Maximum crawl depth, -1 for unlimited | [optional]
**max_hits** | **int** | Maximum total requests, 0 for unlimited (default: 0, non-default requires verification) | [optional]
**max_html** | **int** | Maximum HTML pages, 0 for unlimited (default: org limit, non-default requires verification) | [optional]
**status_ok** | **int[]** | HTTP status codes that will result in content being captured and pushed to Quant | [optional]
**sitemap** | [**\QuantClient\Model\V2CrawlerSitemapInner[]**](V2CrawlerSitemapInner.md) | Sitemap configuration | [optional]
**allowed_domains** | **string[]** | Allowed domains for multi-domain crawling, automatically enables merge_domains | [optional]
**user_agent** | **string** | Custom user agent, only when browser_mode is false | [optional]
**assets** | [**\QuantClient\Model\V2CrawlerAssets**](V2CrawlerAssets.md) |  | [optional]
**max_errors** | **int** | Maximum errors before stopping crawl | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
