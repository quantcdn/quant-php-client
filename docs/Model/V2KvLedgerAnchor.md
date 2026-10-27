# # V2KvLedgerAnchor

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**bucket_arn** | **string** | customer-bucket only (required on declare). | [optional]
**prefix** | **string** | customer-bucket only, optional. Anchor keys are &lt;prefix&gt;&lt;org&gt;/&lt;store&gt;/…. | [optional] [default to '']
**account_id** | **string** | customer-bucket only (required on declare): the AWS account that owns the bucket. Every anchor write sends it as ExpectedBucketOwner. | [optional]
**tsa_url** | **string** | rfc3161 only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
