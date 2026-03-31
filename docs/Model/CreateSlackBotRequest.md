# # CreateSlackBotRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agent_id** | **string** | The AI agent that powers this bot |
**setup_type** | **string** | Whether to use Quant-managed or customer-provided Slack app |
**session_ttl_days** | **int** | Session TTL in days | [optional]
**allowed_channels** | **string[]** | Slack channel IDs the bot may respond in | [optional]
**keywords_enabled** | **bool** | Whether keyword triggers are enabled | [optional]
**keywords** | **string[]** | Keywords that trigger the bot | [optional]
**slash_commands** | **string[]** | Slash commands the bot responds to | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
