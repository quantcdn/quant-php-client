# # CreateCustomToolRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Unique tool name (alphanumeric and underscores only) |
**description** | **string** | Human-readable description of what the tool does |
**edge_function_url** | **string** | HTTPS URL of the edge function |
**input_schema** | **object** | JSON Schema defining the tool&#39;s input parameters |
**is_async** | **bool** | Whether this tool runs asynchronously (&gt;5 seconds) | [optional] [default to false]
**timeout_seconds** | **int** | Tool execution timeout | [optional] [default to 30]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
