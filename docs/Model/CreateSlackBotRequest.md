# # CreateSlackBotRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Display name for the bot |
**setup_type** | **string** | Whether to use Quant-managed or customer-provided Slack app |
**system_prompt** | **string** | System prompt for the backing AI agent |
**model_id** | **string** | AI model identifier |
**temperature** | **float** | Sampling temperature | [optional]
**max_tokens** | **int** | Maximum response tokens | [optional]
**allowed_tools** | **string[]** | Tools the agent may use | [optional]
**assigned_skills** | **string[]** | Skills assigned to the agent | [optional]
**allowed_collections** | **string[]** | Vector DB collections the agent may query | [optional]
**allowed_sub_agents** | **string[]** | Sub-agents the agent may call | [optional]
**guardrail_preset** | **string** | Guardrail preset name | [optional]
**filter_policies** | **string[]** | Content filter policies | [optional]
**long_context** | **bool** | Enable long context mode | [optional]
**session_ttl_days** | **int** | Session TTL in days | [optional]
**allowed_channels** | **string[]** | Slack channel IDs the bot may respond in | [optional]
**allowed_users** | **string[]** | Slack user IDs allowed to interact with the bot | [optional]
**denied_users** | **string[]** | Slack user IDs denied from interacting with the bot | [optional]
**allow_guests** | **bool** | Whether guest users may interact with the bot | [optional]
**home_tab_content** | **string** | Content shown on the bot&#39;s Home tab in Slack | [optional]
**agent_access_control** | **object** | Agent-level access control settings | [optional]
**keywords_enabled** | **bool** | Whether keyword triggers are enabled | [optional]
**keywords** | **string[]** | Keywords that trigger the bot | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
