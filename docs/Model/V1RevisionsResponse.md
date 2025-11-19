# # V1RevisionsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**revisions** | **object** | Revision objects, mapped by revision number | [optional]
**url** | **string** | The url of the asset | [optional]
**published** | **bool** | Published state of the asset | [optional]
**published_revision** | **int** | Published revision number of the asset | [optional]
**transitions** | [**\QuantClient\Model\V1Transition[]**](V1Transition.md) |  | [optional]
**highest_revision_number** | **int** | Last revision number | [optional]
**transition_revision** | **int** | The transition number, if set | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
