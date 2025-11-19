# # V2Crawler

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Crawler ID |
**name** | **string** | Crawler name | [optional]
**project_id** | **int** | Project ID |
**uuid** | **string** | Crawler UUID |
**config** | **string** | Crawler configuration (YAML) |
**domain** | **string** | Crawler domain |
**domain_verified** | **int** | Domain verification status | [optional] [default to 0]
**urls_list** | **string** | URLs list (YAML) | [optional]
**webhook_url** | **string** | Webhook URL for notifications | [optional]
**webhook_auth_header** | **string** | Authorization header for webhook | [optional]
**webhook_extra_vars** | **string** | Extra variables for webhook | [optional]
**browser_mode** | **bool** | Browser mode enabled | [optional]
**workers** | **int** | Number of concurrent workers | [optional]
**delay** | **float** | Delay between requests in seconds | [optional]
**depth** | **int** | Maximum crawl depth | [optional]
**max_hits** | **int** | Maximum total requests | [optional]
**max_html** | **int** | Maximum HTML pages | [optional]
**status_ok** | **int[]** | HTTP status codes for content capture | [optional]
**user_agent** | **string** | Custom user agent | [optional]
**max_errors** | **int** | Maximum errors before stopping | [optional]
**start_urls** | **string[]** | Starting URLs | [optional]
**urls** | **string[]** | URLs list | [optional]
**headers** | **array<string,string>** | Custom headers | [optional]
**exclude** | **string[]** | URL patterns to exclude | [optional]
**include** | **string[]** | URL patterns to include | [optional]
**sitemap** | [**\QuantClient\Model\V2CrawlerSitemapInner[]**](V2CrawlerSitemapInner.md) | Sitemap configuration | [optional]
**allowed_domains** | **string[]** | Allowed domains | [optional]
**assets** | [**\QuantClient\Model\V2CrawlerAssets**](V2CrawlerAssets.md) |  | [optional]
**created_at** | **\DateTime** | Creation timestamp | [optional]
**updated_at** | **\DateTime** | Last update timestamp | [optional]
**deleted_at** | **\DateTime** | Deletion timestamp | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
