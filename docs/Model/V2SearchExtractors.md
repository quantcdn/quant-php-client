# # V2SearchExtractors

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | XPath for the record title | [optional] [default to '//h1[1]']
**content** | **string** | XPath for the record body | [optional] [default to '//meta[@name='description'][1]/@content']
**summary** | **string** | XPath for the record summary | [optional] [default to '//meta[@name='description'][1]/@content']
**image** | **string** | XPath for the record image | [optional] [default to '//meta[@property='og:image'][1]/@content']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
