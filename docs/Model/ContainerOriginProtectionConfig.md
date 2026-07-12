# # ContainerOriginProtectionConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | **bool** | Whether origin protection is enabled. Defaults to true if this config object is provided. | [optional] [default to true]
**ip_allow** | **string[]** | List of IP addresses or CIDR ranges that can bypass origin protection for direct access (e.g., VPN IPs) | [optional]
**redirect_host** | **string** | Optional bare host (e.g. www.example.com). When set, requests denied by origin protection are 302-redirected to https://&lt;redirectHost&gt; with path and query preserved, instead of receiving a 403. Allowed IPs and valid-header (CDN) traffic are unaffected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
