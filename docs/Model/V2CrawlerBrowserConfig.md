# # V2CrawlerBrowserConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**capture_api_responses** | **bool** | Store XHR/fetch responses as files, so a static copy can serve a site whose navigation or content is rendered client-side from a JSON endpoint | [optional]
**wait_for_network_idle** | **int** | Wait for the network to settle before capture, in milliseconds. Useful for API-driven sites | [optional]
**use_rendered_html** | **bool** | Store the JavaScript-modified DOM instead of the original HTML response | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
