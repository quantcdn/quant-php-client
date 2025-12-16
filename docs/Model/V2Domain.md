# # V2Domain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Domain ID |
**domain** | **string** | Domain name |
**dns_engaged** | **int** | DNS engagement status. 1 indicates DNS is properly configured and engaged, 0 indicates DNS configuration is pending or incomplete. |
**dns_validation_records** | [**\QuantClient\Model\V2DomainDnsValidationRecordsInner[]**](V2DomainDnsValidationRecordsInner.md) | DNS validation records required for SSL certificate validation. Present for domains pending certificate validation. Each record contains the CNAME information needed to validate domain ownership. | [optional]
**dns_go_live_records** | [**\QuantClient\Model\V2DomainDnsGoLiveRecordsInner[]**](V2DomainDnsGoLiveRecordsInner.md) | DNS records required to route traffic to the CDN. These records differ based on domain type (apex vs subdomain). Present when the CDN is configured and ready to receive traffic. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
