# quant-client

Unified API for QuantCDN Admin and QuantCloud Platform services


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/quantcdn/quant-php-client.git"
    }
  ],
  "require": {
    "quantcdn/quant-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/quant-client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string
$month = 'month_example'; // string | YYYY-MM, defaults to current month
$group_by = 'model'; // string
$include = 'include_example'; // string | Set to 'daily' to append a 30-day series
$user_id = 'user_id_example'; // string | Scope the daily series to a user
$token_id = 'token_id_example'; // string | Scope the daily series to a token

try {
    $apiInstance->getAIUsageStats($organisation, $month, $group_by, $include, $user_id, $token_id);
} catch (Exception $e) {
    echo 'Exception when calling AIApi->getAIUsageStats: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://dashboard.quantcdn.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AIApi* | [**getAIUsageStats**](docs/Api/AIApi.md#getaiusagestats) | **GET** /api/v3/organizations/{organisation}/ai/usage | Organisation AI usage breakdown (subscription page parity)
*AIAgentsApi* | [**chatWithAIAgent**](docs/Api/AIAgentsApi.md#chatwithaiagent) | **POST** /api/v3/organizations/{organisation}/ai/agents/{agentId}/chat | Chat with AI Agent
*AIAgentsApi* | [**createAIAgent**](docs/Api/AIAgentsApi.md#createaiagent) | **POST** /api/v3/organizations/{organisation}/ai/agents | Create AI Agent
*AIAgentsApi* | [**deleteAIAgent**](docs/Api/AIAgentsApi.md#deleteaiagent) | **DELETE** /api/v3/organizations/{organisation}/ai/agents/{agentId} | Delete Agent
*AIAgentsApi* | [**deleteAgentOverlay**](docs/Api/AIAgentsApi.md#deleteagentoverlay) | **DELETE** /api/v3/organizations/{organisation}/ai/agents/{agentId}/overlay | Delete Agent Overlay
*AIAgentsApi* | [**getAIAgent**](docs/Api/AIAgentsApi.md#getaiagent) | **GET** /api/v3/organizations/{organisation}/ai/agents/{agentId} | Get Agent Details
*AIAgentsApi* | [**getAgentOverlay**](docs/Api/AIAgentsApi.md#getagentoverlay) | **GET** /api/v3/organizations/{organisation}/ai/agents/{agentId}/overlay | Get Agent Overlay
*AIAgentsApi* | [**listAIAgents**](docs/Api/AIAgentsApi.md#listaiagents) | **GET** /api/v3/organizations/{organisation}/ai/agents | List AI Agents
*AIAgentsApi* | [**updateAIAgent**](docs/Api/AIAgentsApi.md#updateaiagent) | **PUT** /api/v3/organizations/{organisation}/ai/agents/{agentId} | Update Agent
*AIAgentsApi* | [**upsertAgentOverlay**](docs/Api/AIAgentsApi.md#upsertagentoverlay) | **PUT** /api/v3/organizations/{organisation}/ai/agents/{agentId}/overlay | Upsert Agent Overlay
*AICustomToolsApi* | [**createCustomTool**](docs/Api/AICustomToolsApi.md#createcustomtool) | **POST** /api/v3/organizations/{organisation}/ai/custom-tools | Register Custom Edge Function Tool
*AICustomToolsApi* | [**deleteCustomTool**](docs/Api/AICustomToolsApi.md#deletecustomtool) | **DELETE** /api/v3/organizations/{organisation}/ai/custom-tools/{toolName} | Delete Custom Tool
*AICustomToolsApi* | [**getCustomTool**](docs/Api/AICustomToolsApi.md#getcustomtool) | **GET** /api/v3/organizations/{organisation}/ai/custom-tools/{toolName} | Get Custom Tool
*AICustomToolsApi* | [**listCustomTools**](docs/Api/AICustomToolsApi.md#listcustomtools) | **GET** /api/v3/organizations/{organisation}/ai/custom-tools | List Custom Tools
*AIFileStorageApi* | [**deleteFile**](docs/Api/AIFileStorageApi.md#deletefile) | **DELETE** /api/v3/organizations/{organisation}/ai/files/{fileId} | Delete File
*AIFileStorageApi* | [**getFile**](docs/Api/AIFileStorageApi.md#getfile) | **GET** /api/v3/organizations/{organisation}/ai/files/{fileId} | Get File
*AIFileStorageApi* | [**listFiles**](docs/Api/AIFileStorageApi.md#listfiles) | **GET** /api/v3/organizations/{organisation}/ai/files | List Files
*AIFileStorageApi* | [**uploadFile**](docs/Api/AIFileStorageApi.md#uploadfile) | **POST** /api/v3/organizations/{organisation}/ai/files | Upload File to S3
*AIFilterPoliciesApi* | [**createFilterPolicy**](docs/Api/AIFilterPoliciesApi.md#createfilterpolicy) | **POST** /api/v3/organizations/{organisation}/ai/filter-policies | Create an AI filter policy for an organisation
*AIFilterPoliciesApi* | [**deleteFilterPolicy**](docs/Api/AIFilterPoliciesApi.md#deletefilterpolicy) | **DELETE** /api/v3/organizations/{organisation}/ai/filter-policies/{policyId} | Delete a specific AI filter policy
*AIFilterPoliciesApi* | [**disableFilterPolicy**](docs/Api/AIFilterPoliciesApi.md#disablefilterpolicy) | **PUT** /api/v3/organizations/{organisation}/ai/filter-policies/{policyId}/disable | Disable a specific AI filter policy
*AIFilterPoliciesApi* | [**enableFilterPolicy**](docs/Api/AIFilterPoliciesApi.md#enablefilterpolicy) | **PUT** /api/v3/organizations/{organisation}/ai/filter-policies/{policyId}/enable | Enable a specific AI filter policy
*AIFilterPoliciesApi* | [**getFilterPolicy**](docs/Api/AIFilterPoliciesApi.md#getfilterpolicy) | **GET** /api/v3/organizations/{organisation}/ai/filter-policies/{policyId} | Get a specific AI filter policy
*AIFilterPoliciesApi* | [**listFilterPolicies**](docs/Api/AIFilterPoliciesApi.md#listfilterpolicies) | **GET** /api/v3/organizations/{organisation}/ai/filter-policies | List AI filter policies for an organisation
*AIFilterPoliciesApi* | [**updateFilterPolicy**](docs/Api/AIFilterPoliciesApi.md#updatefilterpolicy) | **PUT** /api/v3/organizations/{organisation}/ai/filter-policies/{policyId} | Update a specific AI filter policy
*AIGovernanceApi* | [**getGovernanceConfig**](docs/Api/AIGovernanceApi.md#getgovernanceconfig) | **GET** /api/v3/organizations/{organisation}/ai/governance | Get AI governance configuration for an organisation
*AIGovernanceApi* | [**getGovernanceSpend**](docs/Api/AIGovernanceApi.md#getgovernancespend) | **GET** /api/v3/organizations/{organisation}/ai/governance/spend | Get AI spend summary for an organisation
*AIGovernanceApi* | [**updateGovernanceConfig**](docs/Api/AIGovernanceApi.md#updategovernanceconfig) | **PUT** /api/v3/organizations/{organisation}/ai/governance | Update AI governance configuration for an organisation
*AIInferenceApi* | [**chatInference**](docs/Api/AIInferenceApi.md#chatinference) | **POST** /api/v3/organizations/{organisation}/ai/chat | Chat inference via API Gateway (buffered responses) with multimodal support
*AIInferenceApi* | [**chatInferenceStream**](docs/Api/AIInferenceApi.md#chatinferencestream) | **POST** /api/v3/organizations/{organisation}/ai/chat/stream | Chat inference via streaming endpoint (true HTTP streaming) with multimodal support
*AIInferenceApi* | [**embeddings**](docs/Api/AIInferenceApi.md#embeddings) | **POST** /api/v3/organizations/{organisation}/ai/embeddings | Generate text embeddings for semantic search and RAG applications
*AIInferenceApi* | [**getDurableExecutionStatus**](docs/Api/AIInferenceApi.md#getdurableexecutionstatus) | **GET** /api/v3/organizations/{organisation}/ai/chat/executions/{identifier} | Get Durable Execution Status
*AIInferenceApi* | [**imageGeneration**](docs/Api/AIInferenceApi.md#imagegeneration) | **POST** /api/v3/organizations/{organisation}/ai/image-generation | Generate images with Amazon Nova Canvas
*AIInferenceApi* | [**submitToolCallback**](docs/Api/AIInferenceApi.md#submittoolcallback) | **POST** /api/v3/organizations/{organisation}/ai/chat/callback | Submit Client Tool Results (Callback)
*AIModelsApi* | [**getAIModel**](docs/Api/AIModelsApi.md#getaimodel) | **GET** /api/v3/organizations/{organisation}/ai/models/{modelId} | Get AI Model Details
*AIModelsApi* | [**listAIModels**](docs/Api/AIModelsApi.md#listaimodels) | **GET** /api/v3/organizations/{organisation}/ai/models | List available AI models for an organization
*AIOrchestrationsApi* | [**cancelOrchestration**](docs/Api/AIOrchestrationsApi.md#cancelorchestration) | **POST** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId}/cancel | Cancel Durable Orchestration
*AIOrchestrationsApi* | [**createOrchestration**](docs/Api/AIOrchestrationsApi.md#createorchestration) | **POST** /api/v3/organizations/{organisation}/ai/orchestrations | Create Durable Orchestration
*AIOrchestrationsApi* | [**deleteOrchestration**](docs/Api/AIOrchestrationsApi.md#deleteorchestration) | **DELETE** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId} | Delete Durable Orchestration
*AIOrchestrationsApi* | [**getOrchestration**](docs/Api/AIOrchestrationsApi.md#getorchestration) | **GET** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId} | Get Durable Orchestration
*AIOrchestrationsApi* | [**listOrchestrationBatches**](docs/Api/AIOrchestrationsApi.md#listorchestrationbatches) | **GET** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId}/batches | List Orchestration Batches
*AIOrchestrationsApi* | [**listOrchestrations**](docs/Api/AIOrchestrationsApi.md#listorchestrations) | **GET** /api/v3/organizations/{organisation}/ai/orchestrations | List Durable Orchestrations
*AIOrchestrationsApi* | [**pauseOrchestration**](docs/Api/AIOrchestrationsApi.md#pauseorchestration) | **POST** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId}/pause | Pause Durable Orchestration
*AIOrchestrationsApi* | [**resumeOrchestration**](docs/Api/AIOrchestrationsApi.md#resumeorchestration) | **POST** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId}/resume | Resume Durable Orchestration
*AIOrchestrationsApi* | [**startOrchestration**](docs/Api/AIOrchestrationsApi.md#startorchestration) | **POST** /api/v3/organizations/{organisation}/ai/orchestrations/{orchestrationId}/start | Start Durable Orchestration
*AISearchApi* | [**aiSearchChat**](docs/Api/AISearchApi.md#aisearchchat) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/chat | RAG chat with AI Search content
*AISearchApi* | [**aiSearchDeletePages**](docs/Api/AISearchApi.md#aisearchdeletepages) | **DELETE** /api/v3/organisations/{organisation}/projects/{project}/ai-search/pages | Delete pages by URLs or patterns
*AISearchApi* | [**aiSearchDisable**](docs/Api/AISearchApi.md#aisearchdisable) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/disable | Disable AI Search for a project
*AISearchApi* | [**aiSearchEnable**](docs/Api/AISearchApi.md#aisearchenable) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/enable | Enable AI Search for a project
*AISearchApi* | [**aiSearchGetCrawl**](docs/Api/AISearchApi.md#aisearchgetcrawl) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/crawls/{jobId} | Get AI Search ingest job status
*AISearchApi* | [**aiSearchGetCrawlPages**](docs/Api/AISearchApi.md#aisearchgetcrawlpages) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/crawls/{jobId}/pages | Get per-page ingest results for a crawl job
*AISearchApi* | [**aiSearchGetSettings**](docs/Api/AISearchApi.md#aisearchgetsettings) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/settings | Get AI Search public access and rate limit settings
*AISearchApi* | [**aiSearchIngestPages**](docs/Api/AISearchApi.md#aisearchingestpages) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/pages | Ingest pages into the AI Search index
*AISearchApi* | [**aiSearchListCrawls**](docs/Api/AISearchApi.md#aisearchlistcrawls) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/crawls | List AI Search ingest jobs
*AISearchApi* | [**aiSearchListPages**](docs/Api/AISearchApi.md#aisearchlistpages) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/pages | List indexed pages with cursor pagination
*AISearchApi* | [**aiSearchPurgeIndex**](docs/Api/AISearchApi.md#aisearchpurgeindex) | **DELETE** /api/v3/organisations/{organisation}/projects/{project}/ai-search/index | Purge the entire AI Search index
*AISearchApi* | [**aiSearchSearch**](docs/Api/AISearchApi.md#aisearchsearch) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/search | Semantic search across the AI Search index
*AISearchApi* | [**aiSearchStatus**](docs/Api/AISearchApi.md#aisearchstatus) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search | Get AI Search status for a project
*AISearchApi* | [**aiSearchTopQueries**](docs/Api/AISearchApi.md#aisearchtopqueries) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/top-queries | Get the most popular AI Search queries
*AISearchApi* | [**aiSearchTriggerCrawl**](docs/Api/AISearchApi.md#aisearchtriggercrawl) | **POST** /api/v3/organisations/{organisation}/projects/{project}/ai-search/crawls | Trigger a crawler run that ingests into AI Search
*AISearchApi* | [**aiSearchUpdateSettings**](docs/Api/AISearchApi.md#aisearchupdatesettings) | **PUT** /api/v3/organisations/{organisation}/projects/{project}/ai-search/settings | Update AI Search public access and rate limit settings
*AISearchApi* | [**aiSearchUsage**](docs/Api/AISearchApi.md#aisearchusage) | **GET** /api/v3/organisations/{organisation}/projects/{project}/ai-search/usage | Get usage statistics for the AI Search site
*AISessionsApi* | [**createAISession**](docs/Api/AISessionsApi.md#createaisession) | **POST** /api/v3/organizations/{organisation}/ai/sessions | Create a new chat session with multi-tenant isolation
*AISessionsApi* | [**deleteAISession**](docs/Api/AISessionsApi.md#deleteaisession) | **DELETE** /api/v3/organizations/{organisation}/ai/sessions/{sessionId} | Delete a chat session
*AISessionsApi* | [**extendAISession**](docs/Api/AISessionsApi.md#extendaisession) | **PUT** /api/v3/organizations/{organisation}/ai/sessions/{sessionId}/extend | Extend Session Expiration
*AISessionsApi* | [**getAISession**](docs/Api/AISessionsApi.md#getaisession) | **GET** /api/v3/organizations/{organisation}/ai/sessions/{sessionId} | Get a specific chat session
*AISessionsApi* | [**listAISessions**](docs/Api/AISessionsApi.md#listaisessions) | **GET** /api/v3/organizations/{organisation}/ai/sessions | List chat sessions with multi-tenant filtering
*AISessionsApi* | [**updateAISession**](docs/Api/AISessionsApi.md#updateaisession) | **PUT** /api/v3/organizations/{organisation}/ai/sessions/{sessionId} | Update Session
*AISkillsApi* | [**createSkill**](docs/Api/AISkillsApi.md#createskill) | **POST** /api/v3/organizations/{organisation}/ai/skills | Create Inline Skill
*AISkillsApi* | [**deleteSkill**](docs/Api/AISkillsApi.md#deleteskill) | **DELETE** /api/v3/organizations/{organisation}/ai/skills/{skillId} | Delete Skill
*AISkillsApi* | [**deleteSkillCollection**](docs/Api/AISkillsApi.md#deleteskillcollection) | **DELETE** /api/v3/organizations/{organisation}/ai/skills/collections/{namespace} | Delete Skill Collection
*AISkillsApi* | [**getSkill**](docs/Api/AISkillsApi.md#getskill) | **GET** /api/v3/organizations/{organisation}/ai/skills/{skillId} | Get Skill Details
*AISkillsApi* | [**importSkill**](docs/Api/AISkillsApi.md#importskill) | **POST** /api/v3/organizations/{organisation}/ai/skills/import | Import Skill from External Source
*AISkillsApi* | [**importSkillCollection**](docs/Api/AISkillsApi.md#importskillcollection) | **POST** /api/v3/organizations/{organisation}/ai/skills/import-collection | Import Skill Collection from GitHub
*AISkillsApi* | [**listSkillCollections**](docs/Api/AISkillsApi.md#listskillcollections) | **GET** /api/v3/organizations/{organisation}/ai/skills/collections | List Skill Collections
*AISkillsApi* | [**listSkills**](docs/Api/AISkillsApi.md#listskills) | **GET** /api/v3/organizations/{organisation}/ai/skills | List Organization&#39;s Skills
*AISkillsApi* | [**syncSkill**](docs/Api/AISkillsApi.md#syncskill) | **POST** /api/v3/organizations/{organisation}/ai/skills/{skillId}/sync | Sync Skill from Source
*AISkillsApi* | [**syncSkillCollection**](docs/Api/AISkillsApi.md#syncskillcollection) | **POST** /api/v3/organizations/{organisation}/ai/skills/collections/{namespace}/sync | Sync Skill Collection
*AISkillsApi* | [**updateSkill**](docs/Api/AISkillsApi.md#updateskill) | **PUT** /api/v3/organizations/{organisation}/ai/skills/{skillId} | Update Skill
*AISlackBotsApi* | [**createSlackBot**](docs/Api/AISlackBotsApi.md#createslackbot) | **POST** /api/v3/organizations/{organisation}/ai/slack-bots | Create Slack Bot
*AISlackBotsApi* | [**deleteSlackBot**](docs/Api/AISlackBotsApi.md#deleteslackbot) | **DELETE** /api/v3/organizations/{organisation}/ai/slack-bots/{botId} | Delete Slack Bot
*AISlackBotsApi* | [**getSlackBot**](docs/Api/AISlackBotsApi.md#getslackbot) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/{botId} | Get Slack Bot
*AISlackBotsApi* | [**listSlackBots**](docs/Api/AISlackBotsApi.md#listslackbots) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots | List Slack Bots
*AISlackBotsApi* | [**searchSlackWorkspaceChannels**](docs/Api/AISlackBotsApi.md#searchslackworkspacechannels) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/{botId}/workspace/channels | Search Slack Workspace Channels
*AISlackBotsApi* | [**searchSlackWorkspaceUsers**](docs/Api/AISlackBotsApi.md#searchslackworkspaceusers) | **GET** /api/v3/organizations/{organisation}/ai/slack-bots/{botId}/workspace/users | Search Slack Workspace Users
*AISlackBotsApi* | [**updateSlackBot**](docs/Api/AISlackBotsApi.md#updateslackbot) | **PUT** /api/v3/organizations/{organisation}/ai/slack-bots/{botId} | Update Slack Bot
*AITaskManagementApi* | [**createTask**](docs/Api/AITaskManagementApi.md#createtask) | **POST** /api/v3/organizations/{organisation}/ai/tasks | Create a new task
*AITaskManagementApi* | [**deleteTask**](docs/Api/AITaskManagementApi.md#deletetask) | **DELETE** /api/v3/organizations/{organisation}/ai/tasks/{taskId} | Delete a task
*AITaskManagementApi* | [**getDependencyGraph**](docs/Api/AITaskManagementApi.md#getdependencygraph) | **GET** /api/v3/organizations/{organisation}/ai/tasks/{taskListId}/dependency-graph | Get dependency graph for a task list
*AITaskManagementApi* | [**getTask**](docs/Api/AITaskManagementApi.md#gettask) | **GET** /api/v3/organizations/{organisation}/ai/tasks/{taskId} | Get task details
*AITaskManagementApi* | [**listTasks**](docs/Api/AITaskManagementApi.md#listtasks) | **GET** /api/v3/organizations/{organisation}/ai/tasks | List tasks with optional filtering
*AITaskManagementApi* | [**updateTask**](docs/Api/AITaskManagementApi.md#updatetask) | **PUT** /api/v3/organizations/{organisation}/ai/tasks/{taskId} | Update a task
*AIToolsApi* | [**getAIOrchestrationStatus**](docs/Api/AIToolsApi.md#getaiorchestrationstatus) | **GET** /api/v3/organizations/{organisation}/ai/tools/orchestrations/{orchestrationId} | Get Tool Orchestration Status (Async Tool Polling)
*AIToolsApi* | [**getAIToolExecutionStatus**](docs/Api/AIToolsApi.md#getaitoolexecutionstatus) | **GET** /api/v3/organizations/{organisation}/ai/tools/executions/{executionId} | Get async tool execution status and result
*AIToolsApi* | [**listAIToolExecutions**](docs/Api/AIToolsApi.md#listaitoolexecutions) | **GET** /api/v3/organizations/{organisation}/ai/tools/executions | List tool executions for monitoring and debugging
*AIToolsApi* | [**listAIToolNames**](docs/Api/AIToolsApi.md#listaitoolnames) | **GET** /api/v3/organizations/{organisation}/ai/tools/names | List tool names only (lightweight response)
*AIToolsApi* | [**listAITools**](docs/Api/AIToolsApi.md#listaitools) | **GET** /api/v3/organizations/{organisation}/ai/tools | List available built-in tools for function calling
*AIUsageApi* | [**getMyUsage**](docs/Api/AIUsageApi.md#getmyusage) | **GET** /api/v3/organizations/{organisation}/ai/usage/me | Get AI usage summary for the authenticated user
*AIVectorDatabaseApi* | [**createVectorCollection**](docs/Api/AIVectorDatabaseApi.md#createvectorcollection) | **POST** /api/v3/organizations/{organisation}/ai/vector-db/collections | Create Vector Database Collection
*AIVectorDatabaseApi* | [**deleteVectorCollection**](docs/Api/AIVectorDatabaseApi.md#deletevectorcollection) | **DELETE** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId} | Delete Collection
*AIVectorDatabaseApi* | [**deleteVectorDocuments**](docs/Api/AIVectorDatabaseApi.md#deletevectordocuments) | **DELETE** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId}/documents | Delete Documents from Collection
*AIVectorDatabaseApi* | [**getVectorCollection**](docs/Api/AIVectorDatabaseApi.md#getvectorcollection) | **GET** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId} | Get Collection Details
*AIVectorDatabaseApi* | [**listVectorCollections**](docs/Api/AIVectorDatabaseApi.md#listvectorcollections) | **GET** /api/v3/organizations/{organisation}/ai/vector-db/collections | List Vector Database Collections
*AIVectorDatabaseApi* | [**listVectorDocuments**](docs/Api/AIVectorDatabaseApi.md#listvectordocuments) | **GET** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId}/documents | List Documents in Collection
*AIVectorDatabaseApi* | [**queryVectorCollection**](docs/Api/AIVectorDatabaseApi.md#queryvectorcollection) | **POST** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId}/query | Semantic Search Query
*AIVectorDatabaseApi* | [**uploadVectorDocuments**](docs/Api/AIVectorDatabaseApi.md#uploadvectordocuments) | **POST** /api/v3/organizations/{organisation}/ai/vector-db/collections/{collectionId}/documents | Upload Documents to Collection
*ApplicationsApi* | [**createApplication**](docs/Api/ApplicationsApi.md#createapplication) | **POST** /api/v3/organizations/{organisation}/applications | Create a new application
*ApplicationsApi* | [**deleteApplication**](docs/Api/ApplicationsApi.md#deleteapplication) | **DELETE** /api/v3/organizations/{organisation}/applications/{application} | Delete an application
*ApplicationsApi* | [**getApplication**](docs/Api/ApplicationsApi.md#getapplication) | **GET** /api/v3/organizations/{organisation}/applications/{application} | Get a single application
*ApplicationsApi* | [**getEcrLoginCredentials**](docs/Api/ApplicationsApi.md#getecrlogincredentials) | **GET** /api/v3/organizations/{organisation}/applications/ecr-login | Get ECR login credentials
*ApplicationsApi* | [**listApplications**](docs/Api/ApplicationsApi.md#listapplications) | **GET** /api/v3/organizations/{organisation}/applications | Get all applications for an organisation
*BackupManagementApi* | [**createBackup**](docs/Api/BackupManagementApi.md#createbackup) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{type} | Create a backup for an environment
*BackupManagementApi* | [**deleteBackup**](docs/Api/BackupManagementApi.md#deletebackup) | **DELETE** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{type}/{backupId} | Delete a backup
*BackupManagementApi* | [**downloadBackup**](docs/Api/BackupManagementApi.md#downloadbackup) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{type}/{backupId}/download | Generate a download URL for a backup
*BackupManagementApi* | [**listBackups**](docs/Api/BackupManagementApi.md#listbackups) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{type} | List backups for an environment
*CDNMetricsApi* | [**getDailyMetrics**](docs/Api/CDNMetricsApi.md#getdailymetrics) | **GET** /v2/organizations/{organization}/projects/{project}/metrics/daily | Get daily metrics
*CDNMetricsApi* | [**getHourlyMetrics**](docs/Api/CDNMetricsApi.md#gethourlymetrics) | **GET** /v2/organizations/{organization}/projects/{project}/metrics/hourly | Get hourly metrics
*CDNMetricsApi* | [**getMonthlyMetrics**](docs/Api/CDNMetricsApi.md#getmonthlymetrics) | **GET** /v2/organizations/{organization}/projects/{project}/metrics/monthly | Get monthly metrics
*CommandsApi* | [**createCommand**](docs/Api/CommandsApi.md#createcommand) | **POST** /api/v3/organizations/{organisation}/environments/{environment}/commands | Create a command for an environment
*CommandsApi* | [**getCommand**](docs/Api/CommandsApi.md#getcommand) | **GET** /api/v3/organizations/{organisation}/environments/{environment}/commands/{command} | Get a command
*CommandsApi* | [**listCommands**](docs/Api/CommandsApi.md#listcommands) | **GET** /api/v3/organizations/{organisation}/environments/{environment}/commands | Get all commands for an environment
*ComposeApi* | [**getEnvironmentCompose**](docs/Api/ComposeApi.md#getenvironmentcompose) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/compose | Get the compose file for an environment
*ComposeApi* | [**patchEnvironmentCompose**](docs/Api/ComposeApi.md#patchenvironmentcompose) | **PATCH** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/compose | Partially Update Environment Compose Definition
*ComposeApi* | [**validateCompose**](docs/Api/ComposeApi.md#validatecompose) | **POST** /api/v3/organizations/{organisation}/compose/validate | Validate a compose file
*ContainersApi* | [**listContainers**](docs/Api/ContainersApi.md#listcontainers) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/containers | Get the containers in an environment
*ContainersApi* | [**updateContainer**](docs/Api/ContainersApi.md#updatecontainer) | **PUT** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/containers/{container} | Update a container in an environment
*CrawlerSchedulesApi* | [**crawlerSchedulesAdd**](docs/Api/CrawlerSchedulesApi.md#crawlerschedulesadd) | **POST** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/schedules | Add a new schedule
*CrawlerSchedulesApi* | [**crawlerSchedulesDelete**](docs/Api/CrawlerSchedulesApi.md#crawlerschedulesdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/schedules/{crawler_schedule} | Delete a schedule
*CrawlerSchedulesApi* | [**crawlerSchedulesEdit**](docs/Api/CrawlerSchedulesApi.md#crawlerschedulesedit) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/schedules/{crawler_schedule} | Edit a schedule
*CrawlerSchedulesApi* | [**crawlerSchedulesList**](docs/Api/CrawlerSchedulesApi.md#crawlerscheduleslist) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/schedules | List schedules for a crawler
*CrawlerSchedulesApi* | [**crawlerSchedulesShow**](docs/Api/CrawlerSchedulesApi.md#crawlerschedulesshow) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/schedules/{crawler_schedule} | Show a specific schedule
*CrawlersApi* | [**crawlersCreate**](docs/Api/CrawlersApi.md#crawlerscreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/crawlers | Create a new crawler
*CrawlersApi* | [**crawlersDelete**](docs/Api/CrawlersApi.md#crawlersdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler} | Delete a crawler
*CrawlersApi* | [**crawlersGetRunById**](docs/Api/CrawlersApi.md#crawlersgetrunbyid) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/runs/{run_id} | Get a run by ID
*CrawlersApi* | [**crawlersGetRuns**](docs/Api/CrawlersApi.md#crawlersgetruns) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/runs | Get all runs for a crawler
*CrawlersApi* | [**crawlersList**](docs/Api/CrawlersApi.md#crawlerslist) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers | List crawlers for the project
*CrawlersApi* | [**crawlersRead**](docs/Api/CrawlersApi.md#crawlersread) | **GET** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler} | Get details of a single crawler
*CrawlersApi* | [**crawlersRun**](docs/Api/CrawlersApi.md#crawlersrun) | **POST** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler}/run | Run a crawler
*CrawlersApi* | [**crawlersUpdate**](docs/Api/CrawlersApi.md#crawlersupdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/crawlers/{crawler} | Update a crawler
*CronApi* | [**createCronJob**](docs/Api/CronApi.md#createcronjob) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron | Create a new cron job
*CronApi* | [**deleteCronJob**](docs/Api/CronApi.md#deletecronjob) | **DELETE** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron/{cron} | Delete a cron job
*CronApi* | [**getCronJob**](docs/Api/CronApi.md#getcronjob) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron/{cron} | Get a cron job
*CronApi* | [**getCronRun**](docs/Api/CronApi.md#getcronrun) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron/{cron}/runs/{run} | Get a cron run
*CronApi* | [**listCronJobRuns**](docs/Api/CronApi.md#listcronjobruns) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron/{cron}/runs | Get all runs for a cron job
*CronApi* | [**listCronJobs**](docs/Api/CronApi.md#listcronjobs) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron | Get all cron jobs for an environment
*CronApi* | [**updateCronJob**](docs/Api/CronApi.md#updatecronjob) | **PATCH** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/cron/{cron} | Update a cron job
*DomainsApi* | [**domainsCreate**](docs/Api/DomainsApi.md#domainscreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/domains | Add a new domain
*DomainsApi* | [**domainsDelete**](docs/Api/DomainsApi.md#domainsdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/domains/{domain} | Delete a domain
*DomainsApi* | [**domainsList**](docs/Api/DomainsApi.md#domainslist) | **GET** /api/v2/organizations/{organization}/projects/{project}/domains | List all domains for a project
*DomainsApi* | [**domainsRead**](docs/Api/DomainsApi.md#domainsread) | **GET** /api/v2/organizations/{organization}/projects/{project}/domains/{domain} | Get details of a single domain
*DomainsApi* | [**domainsRenew**](docs/Api/DomainsApi.md#domainsrenew) | **POST** /api/v2/organizations/{organization}/projects/{project}/domains/{domain}/renew | Renew the SSL certificate for a domain
*EnvironmentsApi* | [**createEnvironment**](docs/Api/EnvironmentsApi.md#createenvironment) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments | Create a new environment
*EnvironmentsApi* | [**deleteEnvironment**](docs/Api/EnvironmentsApi.md#deleteenvironment) | **DELETE** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment} | Delete an environment
*EnvironmentsApi* | [**getEnvironment**](docs/Api/EnvironmentsApi.md#getenvironment) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment} | Get a single environment
*EnvironmentsApi* | [**getEnvironmentLogs**](docs/Api/EnvironmentsApi.md#getenvironmentlogs) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/logs | Get the logs for an environment
*EnvironmentsApi* | [**getEnvironmentMetrics**](docs/Api/EnvironmentsApi.md#getenvironmentmetrics) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/metrics | Get the metrics for an environment
*EnvironmentsApi* | [**listEnvironments**](docs/Api/EnvironmentsApi.md#listenvironments) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments | Get all environments for an application
*EnvironmentsApi* | [**listSyncOperations**](docs/Api/EnvironmentsApi.md#listsyncoperations) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/sync/{type} | List the sync operations for an environment
*EnvironmentsApi* | [**syncToEnvironment**](docs/Api/EnvironmentsApi.md#synctoenvironment) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/sync/{type} | Perform a sync operation from a source environment to the current environment
*EnvironmentsApi* | [**updateEnvironment**](docs/Api/EnvironmentsApi.md#updateenvironment) | **PUT** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment} | Update Environment Compose Definition
*EnvironmentsApi* | [**updateEnvironmentState**](docs/Api/EnvironmentsApi.md#updateenvironmentstate) | **PUT** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/state | Update the state of an environment
*HeadersApi* | [**headersCreate**](docs/Api/HeadersApi.md#headerscreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/custom-headers | Create or update custom headers
*HeadersApi* | [**headersDelete**](docs/Api/HeadersApi.md#headersdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/custom-headers | Delete custom headers
*HeadersApi* | [**headersList**](docs/Api/HeadersApi.md#headerslist) | **GET** /api/v2/organizations/{organization}/projects/{project}/custom-headers | List custom headers for a project
*KVApi* | [**kVCreate**](docs/Api/KVApi.md#kvcreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv | Add a kv store
*KVApi* | [**kVDelete**](docs/Api/KVApi.md#kvdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id} | Delete a kv store
*KVApi* | [**kVItemsCreate**](docs/Api/KVApi.md#kvitemscreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items | Add an item to a kv store
*KVApi* | [**kVItemsDelete**](docs/Api/KVApi.md#kvitemsdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key} | Delete an item from a kv store
*KVApi* | [**kVItemsList**](docs/Api/KVApi.md#kvitemslist) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items | List items in a kv store
*KVApi* | [**kVItemsShow**](docs/Api/KVApi.md#kvitemsshow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key} | Get an item from a kv store
*KVApi* | [**kVItemsUpdate**](docs/Api/KVApi.md#kvitemsupdate) | **PUT** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/items/{key} | Update an item in a kv store
*KVApi* | [**kVLinkToProject**](docs/Api/KVApi.md#kvlinktoproject) | **POST** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/link | Link a KV store to another project
*KVApi* | [**kVList**](docs/Api/KVApi.md#kvlist) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv | List key-value stores
*KVApi* | [**kVShow**](docs/Api/KVApi.md#kvshow) | **GET** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id} | Get a kv store
*KVApi* | [**kVUnlinkFromProject**](docs/Api/KVApi.md#kvunlinkfromproject) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/kv/{store_id}/link | Unlink a KV store from this project
*OpenAICompatibilityApi* | [**oaiChatCompletions**](docs/Api/OpenAICompatibilityApi.md#oaichatcompletions) | **POST** /oai/v1/chat/completions | Create a chat completion (OpenAI-compatible)
*OpenAICompatibilityApi* | [**oaiEmbeddings**](docs/Api/OpenAICompatibilityApi.md#oaiembeddings) | **POST** /oai/v1/embeddings | Create embeddings (OpenAI-compatible)
*OpenAICompatibilityApi* | [**oaiGetModel**](docs/Api/OpenAICompatibilityApi.md#oaigetmodel) | **GET** /oai/v1/models/{model} | Retrieve a model (OpenAI-compatible)
*OpenAICompatibilityApi* | [**oaiListModels**](docs/Api/OpenAICompatibilityApi.md#oailistmodels) | **GET** /oai/v1/models | List available models (OpenAI-compatible)
*OrganizationsApi* | [**organizationsList**](docs/Api/OrganizationsApi.md#organizationslist) | **GET** /api/v2/organizations | Retrieve all organizations
*OrganizationsApi* | [**organizationsRead**](docs/Api/OrganizationsApi.md#organizationsread) | **GET** /api/v2/organizations/{organization} | Get details of a single organization
*ProjectsApi* | [**projectsCreate**](docs/Api/ProjectsApi.md#projectscreate) | **POST** /api/v2/organizations/{organization}/projects | Create a new project
*ProjectsApi* | [**projectsDelete**](docs/Api/ProjectsApi.md#projectsdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project} | Delete a project
*ProjectsApi* | [**projectsList**](docs/Api/ProjectsApi.md#projectslist) | **GET** /api/v2/organizations/{organization}/projects | Retrieve all projects for an organization
*ProjectsApi* | [**projectsRead**](docs/Api/ProjectsApi.md#projectsread) | **GET** /api/v2/organizations/{organization}/projects/{project} | Get details of a single project
*ProjectsApi* | [**projectsUpdate**](docs/Api/ProjectsApi.md#projectsupdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project} | Update a project
*PurgeApi* | [**purgeCreate**](docs/Api/PurgeApi.md#purgecreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/purge | Purge cache via URL or cache keys
*RestoreManagementApi* | [**getRestoreStatus**](docs/Api/RestoreManagementApi.md#getrestorestatus) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/restores/{restoreId} | Get the status of a restore operation
*RestoreManagementApi* | [**restoreDatabase**](docs/Api/RestoreManagementApi.md#restoredatabase) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{backupId}/restore-database | Restore a database backup to a target environment
*RestoreManagementApi* | [**restoreFilesystem**](docs/Api/RestoreManagementApi.md#restorefilesystem) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/backups/{backupId}/restore-filesystem | Restore a filesystem backup to a target environment
*RulesApi* | [**rulesAuthCreate**](docs/Api/RulesApi.md#rulesauthcreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/auth | Create an authentication rule
*RulesApi* | [**rulesAuthDelete**](docs/Api/RulesApi.md#rulesauthdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/auth/{rule} | Delete an authentication rule
*RulesApi* | [**rulesAuthList**](docs/Api/RulesApi.md#rulesauthlist) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/auth | List authentication rules
*RulesApi* | [**rulesAuthRead**](docs/Api/RulesApi.md#rulesauthread) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/auth/{rule} | Get details of an authentication rule
*RulesApi* | [**rulesAuthUpdate**](docs/Api/RulesApi.md#rulesauthupdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/auth/{rule} | Update an authentication rule
*RulesApi* | [**rulesBotChallengeCreate**](docs/Api/RulesApi.md#rulesbotchallengecreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/bot-challenge | Create a bot challenge rule
*RulesApi* | [**rulesBotChallengeDelete**](docs/Api/RulesApi.md#rulesbotchallengedelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/bot-challenge/{rule} | Delete a bot challenge rule
*RulesApi* | [**rulesBotChallengeList**](docs/Api/RulesApi.md#rulesbotchallengelist) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/bot-challenge | List bot challenge rules
*RulesApi* | [**rulesBotChallengeRead**](docs/Api/RulesApi.md#rulesbotchallengeread) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/bot-challenge/{rule} | Get details of a bot challenge rule
*RulesApi* | [**rulesBotChallengeUpdate**](docs/Api/RulesApi.md#rulesbotchallengeupdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/bot-challenge/{rule} | Update a bot challenge rule
*RulesApi* | [**rulesContentFilterCreate**](docs/Api/RulesApi.md#rulescontentfiltercreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/content-filter | Create a content filter rule
*RulesApi* | [**rulesContentFilterDelete**](docs/Api/RulesApi.md#rulescontentfilterdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/content-filter/{rule} | Delete a content filter rule
*RulesApi* | [**rulesContentFilterList**](docs/Api/RulesApi.md#rulescontentfilterlist) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/content-filter | List content filter rules
*RulesApi* | [**rulesContentFilterRead**](docs/Api/RulesApi.md#rulescontentfilterread) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/content-filter/{rule} | Get details of a content filter rule
*RulesApi* | [**rulesContentFilterUpdate**](docs/Api/RulesApi.md#rulescontentfilterupdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/content-filter/{rule} | Update a content filter rule
*RulesApi* | [**rulesCustomResponseCreate**](docs/Api/RulesApi.md#rulescustomresponsecreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/custom-response | Create a custom response rule
*RulesApi* | [**rulesCustomResponseDelete**](docs/Api/RulesApi.md#rulescustomresponsedelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/custom-response/{rule} | Delete a custom response rule
*RulesApi* | [**rulesCustomResponseList**](docs/Api/RulesApi.md#rulescustomresponselist) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/custom-response | List custom response rules
*RulesApi* | [**rulesCustomResponseRead**](docs/Api/RulesApi.md#rulescustomresponseread) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/custom-response/{rule} | Get details of a custom response rule
*RulesApi* | [**rulesCustomResponseUpdate**](docs/Api/RulesApi.md#rulescustomresponseupdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/custom-response/{rule} | Update a custom response rule
*RulesApi* | [**rulesFunctionCreate**](docs/Api/RulesApi.md#rulesfunctioncreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/function | Create an edge function rule
*RulesApi* | [**rulesFunctionDelete**](docs/Api/RulesApi.md#rulesfunctiondelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/function/{rule} | Delete an edge function rule
*RulesApi* | [**rulesFunctionList**](docs/Api/RulesApi.md#rulesfunctionlist) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/function | List edge function rules
*RulesApi* | [**rulesFunctionRead**](docs/Api/RulesApi.md#rulesfunctionread) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/function/{rule} | Get details of an edge function rule
*RulesApi* | [**rulesFunctionUpdate**](docs/Api/RulesApi.md#rulesfunctionupdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/function/{rule} | Update an edge function rule
*RulesApi* | [**rulesHeadersCreate**](docs/Api/RulesApi.md#rulesheaderscreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/headers | Create a header rule
*RulesApi* | [**rulesHeadersDelete**](docs/Api/RulesApi.md#rulesheadersdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/headers/{rule} | Delete a header rule
*RulesApi* | [**rulesHeadersList**](docs/Api/RulesApi.md#rulesheaderslist) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/headers | List header rules
*RulesApi* | [**rulesHeadersRead**](docs/Api/RulesApi.md#rulesheadersread) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/headers/{rule} | Get details of a header rule
*RulesApi* | [**rulesHeadersUpdate**](docs/Api/RulesApi.md#rulesheadersupdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/headers/{rule} | Update a header rule
*RulesApi* | [**rulesProxyCreate**](docs/Api/RulesApi.md#rulesproxycreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/proxy | Create a proxy rule
*RulesApi* | [**rulesProxyDelete**](docs/Api/RulesApi.md#rulesproxydelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/proxy/{rule} | Delete a proxy rule
*RulesApi* | [**rulesProxyList**](docs/Api/RulesApi.md#rulesproxylist) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/proxy | List proxy rules
*RulesApi* | [**rulesProxyRead**](docs/Api/RulesApi.md#rulesproxyread) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/proxy/{rule} | Get details of a proxy rule
*RulesApi* | [**rulesProxyUpdate**](docs/Api/RulesApi.md#rulesproxyupdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/proxy/{rule} | Update a proxy rule
*RulesApi* | [**rulesRedirectCreate**](docs/Api/RulesApi.md#rulesredirectcreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/redirect | Create a redirect rule
*RulesApi* | [**rulesRedirectDelete**](docs/Api/RulesApi.md#rulesredirectdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/redirect/{rule} | Delete a redirect rule
*RulesApi* | [**rulesRedirectList**](docs/Api/RulesApi.md#rulesredirectlist) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/redirect | List redirect rules
*RulesApi* | [**rulesRedirectRead**](docs/Api/RulesApi.md#rulesredirectread) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/redirect/{rule} | Get details of a redirect rule
*RulesApi* | [**rulesRedirectUpdate**](docs/Api/RulesApi.md#rulesredirectupdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/redirect/{rule} | Update a redirect rule
*RulesApi* | [**rulesServeStaticCreate**](docs/Api/RulesApi.md#rulesservestaticcreate) | **POST** /api/v2/organizations/{organization}/projects/{project}/rules/serve-static | Create a serve static rule
*RulesApi* | [**rulesServeStaticDelete**](docs/Api/RulesApi.md#rulesservestaticdelete) | **DELETE** /api/v2/organizations/{organization}/projects/{project}/rules/serve-static/{rule} | Delete a serve static rule
*RulesApi* | [**rulesServeStaticList**](docs/Api/RulesApi.md#rulesservestaticlist) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/serve-static | List serve static rules
*RulesApi* | [**rulesServeStaticRead**](docs/Api/RulesApi.md#rulesservestaticread) | **GET** /api/v2/organizations/{organization}/projects/{project}/rules/serve-static/{rule} | Get details of a serve static rule
*RulesApi* | [**rulesServeStaticUpdate**](docs/Api/RulesApi.md#rulesservestaticupdate) | **PATCH** /api/v2/organizations/{organization}/projects/{project}/rules/serve-static/{rule} | Update a serve static rule
*SSHAccessApi* | [**getSshAccessCredentials**](docs/Api/SSHAccessApi.md#getsshaccesscredentials) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/ssh-access | Get SSH access credentials for an environment
*ScalingPolicyApi* | [**deleteScalingPolicy**](docs/Api/ScalingPolicyApi.md#deletescalingpolicy) | **DELETE** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/scaling-policies | Delete Scaling Policy
*ScalingPolicyApi* | [**listScalingPolicies**](docs/Api/ScalingPolicyApi.md#listscalingpolicies) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/scaling-policies | List Scaling Policies
*ScalingPolicyApi* | [**upsertScalingPolicy**](docs/Api/ScalingPolicyApi.md#upsertscalingpolicy) | **PUT** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/scaling-policies | Upsert Scaling Policy
*SubscriptionApi* | [**getSubscriptionCloudUsage**](docs/Api/SubscriptionApi.md#getsubscriptioncloudusage) | **GET** /api/v3/organizations/{organisation}/subscription/cloud-usage | Cloud-app cost breakdown for the subscription page
*TokensApi* | [**tokensCreate**](docs/Api/TokensApi.md#tokenscreate) | **POST** /api/v2/organizations/{organization}/tokens | Create a new API token scoped to this organization
*TokensApi* | [**tokensDelete**](docs/Api/TokensApi.md#tokensdelete) | **DELETE** /api/v2/organizations/{organization}/tokens/{token_id} | Revoke an API token
*TokensApi* | [**tokensList**](docs/Api/TokensApi.md#tokenslist) | **GET** /api/v2/organizations/{organization}/tokens | List API tokens scoped to this organization
*VariablesApi* | [**bulkSetEnvironmentVariables**](docs/Api/VariablesApi.md#bulksetenvironmentvariables) | **PUT** /api/v3/organizations/{api_organisation}/applications/{api_application}/environments/{api_environment}/variables | Bulk set/replace environment variables
*VariablesApi* | [**deleteEnvironmentVariable**](docs/Api/VariablesApi.md#deleteenvironmentvariable) | **DELETE** /api/v3/organizations/{api_organisation}/applications/{api_application}/environments/{api_environment}/variables/{api_variable} | Delete a variable
*VariablesApi* | [**listEnvironmentVariables**](docs/Api/VariablesApi.md#listenvironmentvariables) | **GET** /api/v3/organizations/{api_organisation}/applications/{api_application}/environments/{api_environment}/variables | Get all variables for an environment
*VariablesApi* | [**updateEnvironmentVariable**](docs/Api/VariablesApi.md#updateenvironmentvariable) | **PUT** /api/v3/organizations/{api_organisation}/applications/{api_application}/environments/{api_environment}/variables/{api_variable} | Update a variable
*VolumesApi* | [**createVolume**](docs/Api/VolumesApi.md#createvolume) | **POST** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/volumes | Create a new volume
*VolumesApi* | [**deleteVolume**](docs/Api/VolumesApi.md#deletevolume) | **DELETE** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/volumes/{volume} | Delete a volume
*VolumesApi* | [**getVolume**](docs/Api/VolumesApi.md#getvolume) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/volumes/{volume} | Get a volume
*VolumesApi* | [**listVolumes**](docs/Api/VolumesApi.md#listvolumes) | **GET** /api/v3/organizations/{organisation}/applications/{application}/environments/{environment}/volumes | Get all volumes for an environment

## Models

- [AiSearchChatRequest](docs/Model/AiSearchChatRequest.md)
- [AiSearchDeletePagesRequest](docs/Model/AiSearchDeletePagesRequest.md)
- [AiSearchEnableRequest](docs/Model/AiSearchEnableRequest.md)
- [AiSearchIngestPagesRequest](docs/Model/AiSearchIngestPagesRequest.md)
- [AiSearchIngestPagesRequestPagesInner](docs/Model/AiSearchIngestPagesRequestPagesInner.md)
- [AiSearchSearchRequest](docs/Model/AiSearchSearchRequest.md)
- [AiSearchTriggerCrawlRequest](docs/Model/AiSearchTriggerCrawlRequest.md)
- [AiSearchUpdateSettingsRequest](docs/Model/AiSearchUpdateSettingsRequest.md)
- [Application](docs/Model/Application.md)
- [ApplicationCache](docs/Model/ApplicationCache.md)
- [ApplicationDatabase](docs/Model/ApplicationDatabase.md)
- [ApplicationDeploymentInformationInner](docs/Model/ApplicationDeploymentInformationInner.md)
- [ApplicationFilesystem](docs/Model/ApplicationFilesystem.md)
- [ApplicationImageReference](docs/Model/ApplicationImageReference.md)
- [BulkSetEnvironmentVariablesRequest](docs/Model/BulkSetEnvironmentVariablesRequest.md)
- [BulkSetEnvironmentVariablesRequestEnvironmentInner](docs/Model/BulkSetEnvironmentVariablesRequestEnvironmentInner.md)
- [ChatInference200Response](docs/Model/ChatInference200Response.md)
- [ChatInference200ResponseResponse](docs/Model/ChatInference200ResponseResponse.md)
- [ChatInference200ResponseResponseToolUse](docs/Model/ChatInference200ResponseResponseToolUse.md)
- [ChatInference200ResponseResponseToolUseOneOf](docs/Model/ChatInference200ResponseResponseToolUseOneOf.md)
- [ChatInference200ResponseResponseToolUseOneOf1Inner](docs/Model/ChatInference200ResponseResponseToolUseOneOf1Inner.md)
- [ChatInference200ResponseResponseToolUseOneOfResult](docs/Model/ChatInference200ResponseResponseToolUseOneOfResult.md)
- [ChatInference200ResponseUsage](docs/Model/ChatInference200ResponseUsage.md)
- [ChatInference202Response](docs/Model/ChatInference202Response.md)
- [ChatInferenceRequest](docs/Model/ChatInferenceRequest.md)
- [ChatInferenceRequestGuardrails](docs/Model/ChatInferenceRequestGuardrails.md)
- [ChatInferenceRequestMessagesInner](docs/Model/ChatInferenceRequestMessagesInner.md)
- [ChatInferenceRequestMessagesInnerContent](docs/Model/ChatInferenceRequestMessagesInnerContent.md)
- [ChatInferenceRequestMessagesInnerContentOneOfInner](docs/Model/ChatInferenceRequestMessagesInnerContentOneOfInner.md)
- [ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf](docs/Model/ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf.md)
- [ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf1](docs/Model/ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf1.md)
- [ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf1Image](docs/Model/ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf1Image.md)
- [ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf1ImageSource](docs/Model/ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf1ImageSource.md)
- [ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf2](docs/Model/ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf2.md)
- [ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf2Video](docs/Model/ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf2Video.md)
- [ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf2VideoSource](docs/Model/ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf2VideoSource.md)
- [ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf3](docs/Model/ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf3.md)
- [ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf3Document](docs/Model/ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf3Document.md)
- [ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf3DocumentSource](docs/Model/ChatInferenceRequestMessagesInnerContentOneOfInnerOneOf3DocumentSource.md)
- [ChatInferenceRequestResponseFormat](docs/Model/ChatInferenceRequestResponseFormat.md)
- [ChatInferenceRequestToolConfig](docs/Model/ChatInferenceRequestToolConfig.md)
- [ChatInferenceRequestToolConfigToolsInner](docs/Model/ChatInferenceRequestToolConfigToolsInner.md)
- [ChatInferenceRequestToolConfigToolsInnerToolSpec](docs/Model/ChatInferenceRequestToolConfigToolsInnerToolSpec.md)
- [ChatInferenceRequestToolConfigToolsInnerToolSpecInputSchema](docs/Model/ChatInferenceRequestToolConfigToolsInnerToolSpecInputSchema.md)
- [ChatInferenceStreamRequest](docs/Model/ChatInferenceStreamRequest.md)
- [ChatInferenceStreamRequestMessagesInner](docs/Model/ChatInferenceStreamRequestMessagesInner.md)
- [ChatInferenceStreamRequestMessagesInnerContent](docs/Model/ChatInferenceStreamRequestMessagesInnerContent.md)
- [ChatWithAIAgent200Response](docs/Model/ChatWithAIAgent200Response.md)
- [ChatWithAIAgent200ResponseResponse](docs/Model/ChatWithAIAgent200ResponseResponse.md)
- [ChatWithAIAgent200ResponseResponseUsage](docs/Model/ChatWithAIAgent200ResponseResponseUsage.md)
- [ChatWithAIAgent202Response](docs/Model/ChatWithAIAgent202Response.md)
- [ChatWithAIAgentRequest](docs/Model/ChatWithAIAgentRequest.md)
- [Command](docs/Model/Command.md)
- [Compose](docs/Model/Compose.md)
- [Container](docs/Model/Container.md)
- [ContainerDependsOnInner](docs/Model/ContainerDependsOnInner.md)
- [ContainerEnvironmentInner](docs/Model/ContainerEnvironmentInner.md)
- [ContainerHealthCheck](docs/Model/ContainerHealthCheck.md)
- [ContainerImageReference](docs/Model/ContainerImageReference.md)
- [ContainerMountPointsInner](docs/Model/ContainerMountPointsInner.md)
- [ContainerOriginProtectionConfig](docs/Model/ContainerOriginProtectionConfig.md)
- [ContainerSecretsInner](docs/Model/ContainerSecretsInner.md)
- [CrawlersRun200Response](docs/Model/CrawlersRun200Response.md)
- [CrawlersRunRequest](docs/Model/CrawlersRunRequest.md)
- [CreateAIAgent201Response](docs/Model/CreateAIAgent201Response.md)
- [CreateAIAgentRequest](docs/Model/CreateAIAgentRequest.md)
- [CreateAISession201Response](docs/Model/CreateAISession201Response.md)
- [CreateAISessionRequest](docs/Model/CreateAISessionRequest.md)
- [CreateAISessionRequestInitialMessagesInner](docs/Model/CreateAISessionRequestInitialMessagesInner.md)
- [CreateApplication403Response](docs/Model/CreateApplication403Response.md)
- [CreateApplicationRequest](docs/Model/CreateApplicationRequest.md)
- [CreateApplicationRequestDatabase](docs/Model/CreateApplicationRequestDatabase.md)
- [CreateApplicationRequestEnvironmentInner](docs/Model/CreateApplicationRequestEnvironmentInner.md)
- [CreateApplicationRequestFilesystem](docs/Model/CreateApplicationRequestFilesystem.md)
- [CreateBackup202Response](docs/Model/CreateBackup202Response.md)
- [CreateBackupRequest](docs/Model/CreateBackupRequest.md)
- [CreateCommandRequest](docs/Model/CreateCommandRequest.md)
- [CreateCronJobRequest](docs/Model/CreateCronJobRequest.md)
- [CreateCustomTool201Response](docs/Model/CreateCustomTool201Response.md)
- [CreateCustomToolRequest](docs/Model/CreateCustomToolRequest.md)
- [CreateEnvironment403Response](docs/Model/CreateEnvironment403Response.md)
- [CreateEnvironmentRequest](docs/Model/CreateEnvironmentRequest.md)
- [CreateEnvironmentRequestEnvironmentInner](docs/Model/CreateEnvironmentRequestEnvironmentInner.md)
- [CreateFilterPolicyRequest](docs/Model/CreateFilterPolicyRequest.md)
- [CreateFilterPolicyRequestRulesInner](docs/Model/CreateFilterPolicyRequestRulesInner.md)
- [CreateFilterPolicyRequestRulesInnerMatch](docs/Model/CreateFilterPolicyRequestRulesInnerMatch.md)
- [CreateOrchestrationRequest](docs/Model/CreateOrchestrationRequest.md)
- [CreateOrchestrationRequestInputSource](docs/Model/CreateOrchestrationRequestInputSource.md)
- [CreateOrchestrationRequestStopCondition](docs/Model/CreateOrchestrationRequestStopCondition.md)
- [CreateSkill201Response](docs/Model/CreateSkill201Response.md)
- [CreateSkillRequest](docs/Model/CreateSkillRequest.md)
- [CreateSlackBot201Response](docs/Model/CreateSlackBot201Response.md)
- [CreateSlackBotRequest](docs/Model/CreateSlackBotRequest.md)
- [CreateTask201Response](docs/Model/CreateTask201Response.md)
- [CreateTaskRequest](docs/Model/CreateTaskRequest.md)
- [CreateVectorCollection201Response](docs/Model/CreateVectorCollection201Response.md)
- [CreateVectorCollection201ResponseCollection](docs/Model/CreateVectorCollection201ResponseCollection.md)
- [CreateVectorCollectionRequest](docs/Model/CreateVectorCollectionRequest.md)
- [CreateVolumeRequest](docs/Model/CreateVolumeRequest.md)
- [Cron](docs/Model/Cron.md)
- [CronRun](docs/Model/CronRun.md)
- [DeleteAIAgent200Response](docs/Model/DeleteAIAgent200Response.md)
- [DeleteAISession200Response](docs/Model/DeleteAISession200Response.md)
- [DeleteAgentOverlay200Response](docs/Model/DeleteAgentOverlay200Response.md)
- [DeleteBackup200Response](docs/Model/DeleteBackup200Response.md)
- [DeleteCustomTool200Response](docs/Model/DeleteCustomTool200Response.md)
- [DeleteFile200Response](docs/Model/DeleteFile200Response.md)
- [DeleteSkill200Response](docs/Model/DeleteSkill200Response.md)
- [DeleteSkillCollection200Response](docs/Model/DeleteSkillCollection200Response.md)
- [DeleteSlackBot200Response](docs/Model/DeleteSlackBot200Response.md)
- [DeleteTask200Response](docs/Model/DeleteTask200Response.md)
- [DeleteTask409Response](docs/Model/DeleteTask409Response.md)
- [DeleteVectorDocuments200Response](docs/Model/DeleteVectorDocuments200Response.md)
- [DeleteVectorDocumentsRequest](docs/Model/DeleteVectorDocumentsRequest.md)
- [DeleteVectorDocumentsRequestMetadata](docs/Model/DeleteVectorDocumentsRequestMetadata.md)
- [DownloadBackup200Response](docs/Model/DownloadBackup200Response.md)
- [Embeddings200Response](docs/Model/Embeddings200Response.md)
- [Embeddings200ResponseEmbeddings](docs/Model/Embeddings200ResponseEmbeddings.md)
- [Embeddings200ResponseUsage](docs/Model/Embeddings200ResponseUsage.md)
- [EmbeddingsRequest](docs/Model/EmbeddingsRequest.md)
- [EmbeddingsRequestInput](docs/Model/EmbeddingsRequestInput.md)
- [Environment](docs/Model/Environment.md)
- [EnvironmentResponse](docs/Model/EnvironmentResponse.md)
- [EnvironmentSummary](docs/Model/EnvironmentSummary.md)
- [ExtendAISession200Response](docs/Model/ExtendAISession200Response.md)
- [ExtendAISessionRequest](docs/Model/ExtendAISessionRequest.md)
- [GetAIAgent200Response](docs/Model/GetAIAgent200Response.md)
- [GetAIAgent200ResponseAgent](docs/Model/GetAIAgent200ResponseAgent.md)
- [GetAIModel200Response](docs/Model/GetAIModel200Response.md)
- [GetAIModel200ResponseCapabilities](docs/Model/GetAIModel200ResponseCapabilities.md)
- [GetAIModel200ResponsePricing](docs/Model/GetAIModel200ResponsePricing.md)
- [GetAIModel404Response](docs/Model/GetAIModel404Response.md)
- [GetAIOrchestrationStatus200Response](docs/Model/GetAIOrchestrationStatus200Response.md)
- [GetAIOrchestrationStatus200ResponseToolsInner](docs/Model/GetAIOrchestrationStatus200ResponseToolsInner.md)
- [GetAIOrchestrationStatus404Response](docs/Model/GetAIOrchestrationStatus404Response.md)
- [GetAISession200Response](docs/Model/GetAISession200Response.md)
- [GetAIToolExecutionStatus200Response](docs/Model/GetAIToolExecutionStatus200Response.md)
- [GetAIToolExecutionStatus200ResponseResult](docs/Model/GetAIToolExecutionStatus200ResponseResult.md)
- [GetAIToolExecutionStatus404Response](docs/Model/GetAIToolExecutionStatus404Response.md)
- [GetAgentOverlay200Response](docs/Model/GetAgentOverlay200Response.md)
- [GetAgentOverlay200ResponseBase](docs/Model/GetAgentOverlay200ResponseBase.md)
- [GetAgentOverlay200ResponseOverlay](docs/Model/GetAgentOverlay200ResponseOverlay.md)
- [GetCustomTool200Response](docs/Model/GetCustomTool200Response.md)
- [GetCustomTool200ResponseTool](docs/Model/GetCustomTool200ResponseTool.md)
- [GetDependencyGraph200Response](docs/Model/GetDependencyGraph200Response.md)
- [GetDurableExecutionStatus200Response](docs/Model/GetDurableExecutionStatus200Response.md)
- [GetDurableExecutionStatus200ResponseError](docs/Model/GetDurableExecutionStatus200ResponseError.md)
- [GetDurableExecutionStatus200ResponsePendingToolsInner](docs/Model/GetDurableExecutionStatus200ResponsePendingToolsInner.md)
- [GetDurableExecutionStatus200ResponseResult](docs/Model/GetDurableExecutionStatus200ResponseResult.md)
- [GetDurableExecutionStatus200ResponseResultResponse](docs/Model/GetDurableExecutionStatus200ResponseResultResponse.md)
- [GetDurableExecutionStatus200ResponseResultUsage](docs/Model/GetDurableExecutionStatus200ResponseResultUsage.md)
- [GetEcrLoginCredentials200Response](docs/Model/GetEcrLoginCredentials200Response.md)
- [GetEnvironmentLogs200Response](docs/Model/GetEnvironmentLogs200Response.md)
- [GetEnvironmentLogs200ResponseLogEventsInner](docs/Model/GetEnvironmentLogs200ResponseLogEventsInner.md)
- [GetFile200Response](docs/Model/GetFile200Response.md)
- [GetGovernanceConfig200Response](docs/Model/GetGovernanceConfig200Response.md)
- [GetGovernanceConfig200ResponseSpendLimits](docs/Model/GetGovernanceConfig200ResponseSpendLimits.md)
- [GetGovernanceConfig200ResponseSpendLimitsInterfaceLimitsValue](docs/Model/GetGovernanceConfig200ResponseSpendLimitsInterfaceLimitsValue.md)
- [GetGovernanceConfig200ResponseSpendLimitsUserOverridesValue](docs/Model/GetGovernanceConfig200ResponseSpendLimitsUserOverridesValue.md)
- [GetGovernanceSpend200Response](docs/Model/GetGovernanceSpend200Response.md)
- [GetGovernanceSpend200ResponseBudget](docs/Model/GetGovernanceSpend200ResponseBudget.md)
- [GetGovernanceSpend200ResponseDailyBudget](docs/Model/GetGovernanceSpend200ResponseDailyBudget.md)
- [GetGovernanceSpend200ResponseOrgTotal](docs/Model/GetGovernanceSpend200ResponseOrgTotal.md)
- [GetGovernanceSpend200ResponseTodayTotal](docs/Model/GetGovernanceSpend200ResponseTodayTotal.md)
- [GetGovernanceSpend200ResponseUserTotal](docs/Model/GetGovernanceSpend200ResponseUserTotal.md)
- [GetMyUsage200Response](docs/Model/GetMyUsage200Response.md)
- [GetMyUsage200ResponseDaily](docs/Model/GetMyUsage200ResponseDaily.md)
- [GetMyUsage200ResponseMonthly](docs/Model/GetMyUsage200ResponseMonthly.md)
- [GetMyUsage200ResponseQuota](docs/Model/GetMyUsage200ResponseQuota.md)
- [GetMyUsage200ResponseQuotaDailyLimit](docs/Model/GetMyUsage200ResponseQuotaDailyLimit.md)
- [GetMyUsage200ResponseQuotaMonthlyLimit](docs/Model/GetMyUsage200ResponseQuotaMonthlyLimit.md)
- [GetRestoreStatus200Response](docs/Model/GetRestoreStatus200Response.md)
- [GetScalingPolicyResponse](docs/Model/GetScalingPolicyResponse.md)
- [GetSkill200Response](docs/Model/GetSkill200Response.md)
- [GetSkill200ResponseSkill](docs/Model/GetSkill200ResponseSkill.md)
- [GetSlackBot200Response](docs/Model/GetSlackBot200Response.md)
- [GetSlackBot200ResponseBot](docs/Model/GetSlackBot200ResponseBot.md)
- [GetSshAccessCredentials200Response](docs/Model/GetSshAccessCredentials200Response.md)
- [GetSshAccessCredentials200ResponseCredentials](docs/Model/GetSshAccessCredentials200ResponseCredentials.md)
- [GetTask200Response](docs/Model/GetTask200Response.md)
- [GetVectorCollection200Response](docs/Model/GetVectorCollection200Response.md)
- [GetVectorCollection200ResponseCollection](docs/Model/GetVectorCollection200ResponseCollection.md)
- [ImageGeneration200Response](docs/Model/ImageGeneration200Response.md)
- [ImageGenerationRequest](docs/Model/ImageGenerationRequest.md)
- [ImageGenerationRequestBackgroundRemovalParams](docs/Model/ImageGenerationRequestBackgroundRemovalParams.md)
- [ImageGenerationRequestColorGuidedGenerationParams](docs/Model/ImageGenerationRequestColorGuidedGenerationParams.md)
- [ImageGenerationRequestImageGenerationConfig](docs/Model/ImageGenerationRequestImageGenerationConfig.md)
- [ImageGenerationRequestImageVariationParams](docs/Model/ImageGenerationRequestImageVariationParams.md)
- [ImageGenerationRequestInPaintingParams](docs/Model/ImageGenerationRequestInPaintingParams.md)
- [ImageGenerationRequestOutPaintingParams](docs/Model/ImageGenerationRequestOutPaintingParams.md)
- [ImageGenerationRequestTextToImageParams](docs/Model/ImageGenerationRequestTextToImageParams.md)
- [ImportSkill201Response](docs/Model/ImportSkill201Response.md)
- [ImportSkillCollection201Response](docs/Model/ImportSkillCollection201Response.md)
- [ImportSkillCollectionRequest](docs/Model/ImportSkillCollectionRequest.md)
- [ImportSkillCollectionRequestSource](docs/Model/ImportSkillCollectionRequestSource.md)
- [ImportSkillRequest](docs/Model/ImportSkillRequest.md)
- [ImportSkillRequestSource](docs/Model/ImportSkillRequestSource.md)
- [KVItemsCreate200Response](docs/Model/KVItemsCreate200Response.md)
- [KVItemsDelete200Response](docs/Model/KVItemsDelete200Response.md)
- [KVItemsShow200Response](docs/Model/KVItemsShow200Response.md)
- [KVItemsShow200ResponseValue](docs/Model/KVItemsShow200ResponseValue.md)
- [KVLinkToProject200Response](docs/Model/KVLinkToProject200Response.md)
- [KVLinkToProjectRequest](docs/Model/KVLinkToProjectRequest.md)
- [ListAIAgents200Response](docs/Model/ListAIAgents200Response.md)
- [ListAIAgents200ResponseAgentsInner](docs/Model/ListAIAgents200ResponseAgentsInner.md)
- [ListAIModels200Response](docs/Model/ListAIModels200Response.md)
- [ListAIModels200ResponseModelsInner](docs/Model/ListAIModels200ResponseModelsInner.md)
- [ListAIModels200ResponseModelsInnerCapabilities](docs/Model/ListAIModels200ResponseModelsInnerCapabilities.md)
- [ListAISessions200ResponseInner](docs/Model/ListAISessions200ResponseInner.md)
- [ListAIToolExecutions200Response](docs/Model/ListAIToolExecutions200Response.md)
- [ListAIToolExecutions200ResponseExecutionsInner](docs/Model/ListAIToolExecutions200ResponseExecutionsInner.md)
- [ListAIToolNames200Response](docs/Model/ListAIToolNames200Response.md)
- [ListAITools200Response](docs/Model/ListAITools200Response.md)
- [ListAITools200ResponseToolsInner](docs/Model/ListAITools200ResponseToolsInner.md)
- [ListAITools200ResponseToolsInnerToolSpec](docs/Model/ListAITools200ResponseToolsInnerToolSpec.md)
- [ListAITools200ResponseToolsInnerToolSpecInputSchema](docs/Model/ListAITools200ResponseToolsInnerToolSpecInputSchema.md)
- [ListBackups200Response](docs/Model/ListBackups200Response.md)
- [ListBackups200ResponseBackupsInner](docs/Model/ListBackups200ResponseBackupsInner.md)
- [ListBackups422Response](docs/Model/ListBackups422Response.md)
- [ListCustomTools200Response](docs/Model/ListCustomTools200Response.md)
- [ListCustomTools200ResponseToolsInner](docs/Model/ListCustomTools200ResponseToolsInner.md)
- [ListFiles200Response](docs/Model/ListFiles200Response.md)
- [ListFiles200ResponseFilesInner](docs/Model/ListFiles200ResponseFilesInner.md)
- [ListOrchestrationBatches200Response](docs/Model/ListOrchestrationBatches200Response.md)
- [ListOrchestrationBatches200ResponseBatchesInner](docs/Model/ListOrchestrationBatches200ResponseBatchesInner.md)
- [ListOrchestrations200Response](docs/Model/ListOrchestrations200Response.md)
- [ListSkillCollections200Response](docs/Model/ListSkillCollections200Response.md)
- [ListSkillCollections200ResponseCollectionsInner](docs/Model/ListSkillCollections200ResponseCollectionsInner.md)
- [ListSkills200Response](docs/Model/ListSkills200Response.md)
- [ListSkills200ResponseSkillsInner](docs/Model/ListSkills200ResponseSkillsInner.md)
- [ListSlackBots200Response](docs/Model/ListSlackBots200Response.md)
- [ListSlackBots200ResponseBotsInner](docs/Model/ListSlackBots200ResponseBotsInner.md)
- [ListTasks200Response](docs/Model/ListTasks200Response.md)
- [ListTasks200ResponseTasksInner](docs/Model/ListTasks200ResponseTasksInner.md)
- [ListVectorCollections200Response](docs/Model/ListVectorCollections200Response.md)
- [ListVectorCollections200ResponseCollectionsInner](docs/Model/ListVectorCollections200ResponseCollectionsInner.md)
- [OaiChatCompletions200Response](docs/Model/OaiChatCompletions200Response.md)
- [OaiChatCompletions200ResponseChoicesInner](docs/Model/OaiChatCompletions200ResponseChoicesInner.md)
- [OaiChatCompletions200ResponseChoicesInnerMessage](docs/Model/OaiChatCompletions200ResponseChoicesInnerMessage.md)
- [OaiChatCompletions200ResponseUsage](docs/Model/OaiChatCompletions200ResponseUsage.md)
- [OaiChatCompletionsRequest](docs/Model/OaiChatCompletionsRequest.md)
- [OaiChatCompletionsRequestMessagesInner](docs/Model/OaiChatCompletionsRequestMessagesInner.md)
- [OaiEmbeddings200Response](docs/Model/OaiEmbeddings200Response.md)
- [OaiEmbeddings200ResponseDataInner](docs/Model/OaiEmbeddings200ResponseDataInner.md)
- [OaiEmbeddings200ResponseUsage](docs/Model/OaiEmbeddings200ResponseUsage.md)
- [OaiEmbeddingsRequest](docs/Model/OaiEmbeddingsRequest.md)
- [OaiGetModel200Response](docs/Model/OaiGetModel200Response.md)
- [OaiListModels200Response](docs/Model/OaiListModels200Response.md)
- [OaiListModels200ResponseDataInner](docs/Model/OaiListModels200ResponseDataInner.md)
- [OrganizationsList200ResponseInner](docs/Model/OrganizationsList200ResponseInner.md)
- [PatchEnvironmentCompose202Response](docs/Model/PatchEnvironmentCompose202Response.md)
- [PatchEnvironmentCompose202ResponseSpotConfiguration](docs/Model/PatchEnvironmentCompose202ResponseSpotConfiguration.md)
- [PatchEnvironmentCompose400Response](docs/Model/PatchEnvironmentCompose400Response.md)
- [PatchEnvironmentComposeRequest](docs/Model/PatchEnvironmentComposeRequest.md)
- [PatchEnvironmentComposeRequestSpotConfiguration](docs/Model/PatchEnvironmentComposeRequestSpotConfiguration.md)
- [PurgeCreateRequest](docs/Model/PurgeCreateRequest.md)
- [QueryVectorCollection200Response](docs/Model/QueryVectorCollection200Response.md)
- [QueryVectorCollection200ResponsePagination](docs/Model/QueryVectorCollection200ResponsePagination.md)
- [QueryVectorCollection200ResponseResultsInner](docs/Model/QueryVectorCollection200ResponseResultsInner.md)
- [QueryVectorCollectionRequest](docs/Model/QueryVectorCollectionRequest.md)
- [QueryVectorCollectionRequestFilter](docs/Model/QueryVectorCollectionRequestFilter.md)
- [RestoreDatabase202Response](docs/Model/RestoreDatabase202Response.md)
- [RestoreDatabaseRequest](docs/Model/RestoreDatabaseRequest.md)
- [RestoreFilesystem202Response](docs/Model/RestoreFilesystem202Response.md)
- [RestoreFilesystemRequest](docs/Model/RestoreFilesystemRequest.md)
- [ScalingPolicyListResponse](docs/Model/ScalingPolicyListResponse.md)
- [SearchSlackWorkspaceChannels200Response](docs/Model/SearchSlackWorkspaceChannels200Response.md)
- [SearchSlackWorkspaceChannels200ResponseResultsInner](docs/Model/SearchSlackWorkspaceChannels200ResponseResultsInner.md)
- [SearchSlackWorkspaceUsers200Response](docs/Model/SearchSlackWorkspaceUsers200Response.md)
- [SearchSlackWorkspaceUsers200ResponseResultsInner](docs/Model/SearchSlackWorkspaceUsers200ResponseResultsInner.md)
- [SetScalingPolicyRequest](docs/Model/SetScalingPolicyRequest.md)
- [SpotConfiguration](docs/Model/SpotConfiguration.md)
- [SubmitToolCallback200Response](docs/Model/SubmitToolCallback200Response.md)
- [SubmitToolCallbackRequest](docs/Model/SubmitToolCallbackRequest.md)
- [SubmitToolCallbackRequestToolResultsInner](docs/Model/SubmitToolCallbackRequestToolResultsInner.md)
- [SyncOperation](docs/Model/SyncOperation.md)
- [SyncSkillCollection200Response](docs/Model/SyncSkillCollection200Response.md)
- [SyncToEnvironmentRequest](docs/Model/SyncToEnvironmentRequest.md)
- [TokensCreate201Response](docs/Model/TokensCreate201Response.md)
- [TokensCreateRequest](docs/Model/TokensCreateRequest.md)
- [TokensDelete200Response](docs/Model/TokensDelete200Response.md)
- [TokensList200ResponseInner](docs/Model/TokensList200ResponseInner.md)
- [UpdateAIAgent200Response](docs/Model/UpdateAIAgent200Response.md)
- [UpdateAIAgentRequest](docs/Model/UpdateAIAgentRequest.md)
- [UpdateAISession200Response](docs/Model/UpdateAISession200Response.md)
- [UpdateAISessionRequest](docs/Model/UpdateAISessionRequest.md)
- [UpdateAISessionRequestNewMessagesInner](docs/Model/UpdateAISessionRequestNewMessagesInner.md)
- [UpdateCronJobRequest](docs/Model/UpdateCronJobRequest.md)
- [UpdateEnvironmentRequest](docs/Model/UpdateEnvironmentRequest.md)
- [UpdateEnvironmentStateRequest](docs/Model/UpdateEnvironmentStateRequest.md)
- [UpdateEnvironmentVariableRequest](docs/Model/UpdateEnvironmentVariableRequest.md)
- [UpdateFilterPolicyRequest](docs/Model/UpdateFilterPolicyRequest.md)
- [UpdateGovernanceConfig200Response](docs/Model/UpdateGovernanceConfig200Response.md)
- [UpdateGovernanceConfigRequest](docs/Model/UpdateGovernanceConfigRequest.md)
- [UpdateSkill200Response](docs/Model/UpdateSkill200Response.md)
- [UpdateSkillRequest](docs/Model/UpdateSkillRequest.md)
- [UpdateSlackBotRequest](docs/Model/UpdateSlackBotRequest.md)
- [UpdateTask200Response](docs/Model/UpdateTask200Response.md)
- [UpdateTaskRequest](docs/Model/UpdateTaskRequest.md)
- [UploadFile201Response](docs/Model/UploadFile201Response.md)
- [UploadFileRequest](docs/Model/UploadFileRequest.md)
- [UploadVectorDocuments200Response](docs/Model/UploadVectorDocuments200Response.md)
- [UploadVectorDocumentsRequest](docs/Model/UploadVectorDocumentsRequest.md)
- [UploadVectorDocumentsRequestDocumentsInner](docs/Model/UploadVectorDocumentsRequestDocumentsInner.md)
- [UploadVectorDocumentsRequestDocumentsInnerMetadata](docs/Model/UploadVectorDocumentsRequestDocumentsInnerMetadata.md)
- [UpsertAgentOverlay200Response](docs/Model/UpsertAgentOverlay200Response.md)
- [UpsertAgentOverlayRequest](docs/Model/UpsertAgentOverlayRequest.md)
- [V1ContentItem](docs/Model/V1ContentItem.md)
- [V1ContentListResponse](docs/Model/V1ContentListResponse.md)
- [V1ContentRequest](docs/Model/V1ContentRequest.md)
- [V1DeleteResponse](docs/Model/V1DeleteResponse.md)
- [V1Error](docs/Model/V1Error.md)
- [V1FormSubmissionItem](docs/Model/V1FormSubmissionItem.md)
- [V1FormSubmissionListResponse](docs/Model/V1FormSubmissionListResponse.md)
- [V1GetMetricSeriesResponse](docs/Model/V1GetMetricSeriesResponse.md)
- [V1GetMetricSeriesResponseData](docs/Model/V1GetMetricSeriesResponseData.md)
- [V1GetMetricsResponse](docs/Model/V1GetMetricsResponse.md)
- [V1GetMetricsResponseData](docs/Model/V1GetMetricsResponseData.md)
- [V1GlobalMetaResponse](docs/Model/V1GlobalMetaResponse.md)
- [V1GlobalMetaResponseGlobalMeta](docs/Model/V1GlobalMetaResponseGlobalMeta.md)
- [V1Info](docs/Model/V1Info.md)
- [V1Meta](docs/Model/V1Meta.md)
- [V1MetricDayStats](docs/Model/V1MetricDayStats.md)
- [V1MetricMinuteStats](docs/Model/V1MetricMinuteStats.md)
- [V1MetricMonthStats](docs/Model/V1MetricMonthStats.md)
- [V1PingResponse](docs/Model/V1PingResponse.md)
- [V1ProxyItem](docs/Model/V1ProxyItem.md)
- [V1ProxyListResponse](docs/Model/V1ProxyListResponse.md)
- [V1RedirectItem](docs/Model/V1RedirectItem.md)
- [V1RedirectListResponse](docs/Model/V1RedirectListResponse.md)
- [V1RedirectRequest](docs/Model/V1RedirectRequest.md)
- [V1RedirectResponse](docs/Model/V1RedirectResponse.md)
- [V1Revision](docs/Model/V1Revision.md)
- [V1RevisionsResponse](docs/Model/V1RevisionsResponse.md)
- [V1SearchHit](docs/Model/V1SearchHit.md)
- [V1SearchItemsResponse](docs/Model/V1SearchItemsResponse.md)
- [V1SearchMutationResponse](docs/Model/V1SearchMutationResponse.md)
- [V1SearchRecord](docs/Model/V1SearchRecord.md)
- [V1SearchResponse](docs/Model/V1SearchResponse.md)
- [V1SeriesPointDay](docs/Model/V1SeriesPointDay.md)
- [V1SeriesPointMonth](docs/Model/V1SeriesPointMonth.md)
- [V1Transition](docs/Model/V1Transition.md)
- [V1UploadResponse](docs/Model/V1UploadResponse.md)
- [V1UrlMetaRequest](docs/Model/V1UrlMetaRequest.md)
- [V1UrlMetaResponse](docs/Model/V1UrlMetaResponse.md)
- [V1WafLogItem](docs/Model/V1WafLogItem.md)
- [V1WafLogListResponse](docs/Model/V1WafLogListResponse.md)
- [V2Crawler](docs/Model/V2Crawler.md)
- [V2CrawlerAssets](docs/Model/V2CrawlerAssets.md)
- [V2CrawlerAssetsNetworkIntercept](docs/Model/V2CrawlerAssetsNetworkIntercept.md)
- [V2CrawlerAssetsParser](docs/Model/V2CrawlerAssetsParser.md)
- [V2CrawlerRequest](docs/Model/V2CrawlerRequest.md)
- [V2CrawlerRun](docs/Model/V2CrawlerRun.md)
- [V2CrawlerSchedule](docs/Model/V2CrawlerSchedule.md)
- [V2CrawlerScheduleRequest](docs/Model/V2CrawlerScheduleRequest.md)
- [V2CrawlerSitemapInner](docs/Model/V2CrawlerSitemapInner.md)
- [V2CustomHeaderRequest](docs/Model/V2CustomHeaderRequest.md)
- [V2Domain](docs/Model/V2Domain.md)
- [V2DomainDnsGoLiveRecordsInner](docs/Model/V2DomainDnsGoLiveRecordsInner.md)
- [V2DomainDnsValidationRecordsInner](docs/Model/V2DomainDnsValidationRecordsInner.md)
- [V2DomainRequest](docs/Model/V2DomainRequest.md)
- [V2Error](docs/Model/V2Error.md)
- [V2MetricData](docs/Model/V2MetricData.md)
- [V2MetricDataPoint](docs/Model/V2MetricDataPoint.md)
- [V2MetricDataPointTimestamp](docs/Model/V2MetricDataPointTimestamp.md)
- [V2MetricsMeta](docs/Model/V2MetricsMeta.md)
- [V2MetricsResponse](docs/Model/V2MetricsResponse.md)
- [V2Organization](docs/Model/V2Organization.md)
- [V2OrganizationRequest](docs/Model/V2OrganizationRequest.md)
- [V2Project](docs/Model/V2Project.md)
- [V2ProjectRequest](docs/Model/V2ProjectRequest.md)
- [V2Rule](docs/Model/V2Rule.md)
- [V2RuleAuth](docs/Model/V2RuleAuth.md)
- [V2RuleAuthAction](docs/Model/V2RuleAuthAction.md)
- [V2RuleAuthRequest](docs/Model/V2RuleAuthRequest.md)
- [V2RuleBotChallenge](docs/Model/V2RuleBotChallenge.md)
- [V2RuleBotChallengeAction](docs/Model/V2RuleBotChallengeAction.md)
- [V2RuleBotChallengeRequest](docs/Model/V2RuleBotChallengeRequest.md)
- [V2RuleContentFilter](docs/Model/V2RuleContentFilter.md)
- [V2RuleContentFilterAction](docs/Model/V2RuleContentFilterAction.md)
- [V2RuleContentFilterRequest](docs/Model/V2RuleContentFilterRequest.md)
- [V2RuleCustomResponse](docs/Model/V2RuleCustomResponse.md)
- [V2RuleCustomResponseAction](docs/Model/V2RuleCustomResponseAction.md)
- [V2RuleCustomResponseRequest](docs/Model/V2RuleCustomResponseRequest.md)
- [V2RuleFunction](docs/Model/V2RuleFunction.md)
- [V2RuleFunctionAction](docs/Model/V2RuleFunctionAction.md)
- [V2RuleFunctionRequest](docs/Model/V2RuleFunctionRequest.md)
- [V2RuleHeader](docs/Model/V2RuleHeader.md)
- [V2RuleHeaderAction](docs/Model/V2RuleHeaderAction.md)
- [V2RuleHeaderRequest](docs/Model/V2RuleHeaderRequest.md)
- [V2RuleProxy](docs/Model/V2RuleProxy.md)
- [V2RuleProxyAction](docs/Model/V2RuleProxyAction.md)
- [V2RuleProxyActionNotifyConfig](docs/Model/V2RuleProxyActionNotifyConfig.md)
- [V2RuleProxyActionQuantCloudSelection](docs/Model/V2RuleProxyActionQuantCloudSelection.md)
- [V2RuleProxyRequest](docs/Model/V2RuleProxyRequest.md)
- [V2RuleRedirect](docs/Model/V2RuleRedirect.md)
- [V2RuleRedirectAction](docs/Model/V2RuleRedirectAction.md)
- [V2RuleRedirectRequest](docs/Model/V2RuleRedirectRequest.md)
- [V2RuleRequest](docs/Model/V2RuleRequest.md)
- [V2RuleServeStatic](docs/Model/V2RuleServeStatic.md)
- [V2RuleServeStaticAction](docs/Model/V2RuleServeStaticAction.md)
- [V2RuleServeStaticRequest](docs/Model/V2RuleServeStaticRequest.md)
- [V2SecretStore](docs/Model/V2SecretStore.md)
- [V2SecretStoreRequest](docs/Model/V2SecretStoreRequest.md)
- [V2Store](docs/Model/V2Store.md)
- [V2StoreItem](docs/Model/V2StoreItem.md)
- [V2StoreItemRequest](docs/Model/V2StoreItemRequest.md)
- [V2StoreItemUpdateRequest](docs/Model/V2StoreItemUpdateRequest.md)
- [V2StoreItemsListResponse](docs/Model/V2StoreItemsListResponse.md)
- [V2StoreRequest](docs/Model/V2StoreRequest.md)
- [ValidateCompose200Response](docs/Model/ValidateCompose200Response.md)
- [ValidateCompose422Response](docs/Model/ValidateCompose422Response.md)
- [ValidateComposeRequest](docs/Model/ValidateComposeRequest.md)
- [Variable](docs/Model/Variable.md)
- [Volume](docs/Model/Volume.md)
- [WafConfig](docs/Model/WafConfig.md)
- [WafConfigBlockLists](docs/Model/WafConfigBlockLists.md)
- [WafConfigHttpbl](docs/Model/WafConfigHttpbl.md)
- [WafConfigThresholdsInner](docs/Model/WafConfigThresholdsInner.md)

## Authorization

Authentication schemes defined for the API:
### BearerAuth

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `4.20.0`
    - Package version: `4.20.0`
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
