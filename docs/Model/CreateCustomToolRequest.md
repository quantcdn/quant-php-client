# # CreateCustomToolRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Unique tool name (alphanumeric and underscores only) |
**description** | **string** | Human-readable description of what the tool does |
**edge_function_code** | **string** | JavaScript source code for the edge function |
**input_schema** | **string** | JSON Schema defining the tool&#39;s input parameters. The API accepts a JSON object here and rejects a JSON-encoded string with a 422; the declared type string is a known inaccuracy kept to avoid changing generated clients. |
**is_async** | **bool** | Whether this tool runs asynchronously (&gt;5 seconds) | [optional] [default to false]
**timeout_seconds** | **int** | Tool execution timeout | [optional] [default to 30]
**output_schema** | **string** | JSON Schema defining the tool&#39;s output structure. The API accepts a JSON object here and rejects a JSON-encoded string with a 422; the declared type string is a known inaccuracy kept to avoid changing generated clients. | [optional]
**output_schema_description** | **string** | Human-readable description of the tool&#39;s output | [optional]
**category** | **string** | Category to group related tools | [optional]
**response_mode** | **string** | How the tool response is handled: llm (passed back to model) or direct (returned to user) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
