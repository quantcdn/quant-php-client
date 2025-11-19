# # ImageGenerationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model_id** | **string** | Model to use for image generation | [optional] [default to 'amazon.nova-canvas-v1:0']
**task_type** | **string** | Type of image generation task |
**text_to_image_params** | [**\QuantClient\Model\ImageGenerationRequestTextToImageParams**](ImageGenerationRequestTextToImageParams.md) |  | [optional]
**color_guided_generation_params** | [**\QuantClient\Model\ImageGenerationRequestColorGuidedGenerationParams**](ImageGenerationRequestColorGuidedGenerationParams.md) |  | [optional]
**image_variation_params** | [**\QuantClient\Model\ImageGenerationRequestImageVariationParams**](ImageGenerationRequestImageVariationParams.md) |  | [optional]
**in_painting_params** | [**\QuantClient\Model\ImageGenerationRequestInPaintingParams**](ImageGenerationRequestInPaintingParams.md) |  | [optional]
**out_painting_params** | [**\QuantClient\Model\ImageGenerationRequestOutPaintingParams**](ImageGenerationRequestOutPaintingParams.md) |  | [optional]
**background_removal_params** | [**\QuantClient\Model\ImageGenerationRequestBackgroundRemovalParams**](ImageGenerationRequestBackgroundRemovalParams.md) |  | [optional]
**virtual_try_on_params** | **object** | Parameters for VIRTUAL_TRY_ON task | [optional]
**image_generation_config** | [**\QuantClient\Model\ImageGenerationRequestImageGenerationConfig**](ImageGenerationRequestImageGenerationConfig.md) |  | [optional]
**region** | **string** | AWS region for Nova Canvas | [optional] [default to 'us-east-1']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
