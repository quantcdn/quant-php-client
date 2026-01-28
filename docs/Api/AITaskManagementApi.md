# QuantClient\AITaskManagementApi

All URIs are relative to https://dashboard.quantcdn.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTask()**](AITaskManagementApi.md#createTask) | **POST** /api/v3/organizations/{organisation}/ai/tasks | Create a new task |
| [**deleteTask()**](AITaskManagementApi.md#deleteTask) | **DELETE** /api/v3/organizations/{organisation}/ai/tasks/{taskId} | Delete a task |
| [**getDependencyGraph()**](AITaskManagementApi.md#getDependencyGraph) | **GET** /api/v3/organizations/{organisation}/ai/tasks/{taskListId}/dependency-graph | Get dependency graph for a task list |
| [**getTask()**](AITaskManagementApi.md#getTask) | **GET** /api/v3/organizations/{organisation}/ai/tasks/{taskId} | Get task details |
| [**listTasks()**](AITaskManagementApi.md#listTasks) | **GET** /api/v3/organizations/{organisation}/ai/tasks | List tasks with optional filtering |
| [**updateTask()**](AITaskManagementApi.md#updateTask) | **PUT** /api/v3/organizations/{organisation}/ai/tasks/{taskId} | Update a task |


## `createTask()`

```php
createTask($organisation, $create_task_request): \QuantClient\Model\CreateTask201Response
```

Create a new task

Creates a new task for multi-agent coordination and workflow orchestration.      *      * **Key Features:**      * - **Persistent State**: Tasks survive across conversations and sessions      * - **Agent Assignment**: Pre-assign tasks to specific agents      * - **Task Lists**: Group related tasks using taskListId (implicit - no need to create lists first)      * - **Dependencies**: Define task dependencies for workflow orchestration      * - **Metadata**: Store flexible JSON metadata for task-specific data      * - **Progress Tracking**: Track progress from 0.0 to 1.0      *      * **Use Cases:**      * - Break down complex requests into manageable steps      * - Assign work to specialized agents      * - Track long-running operations      * - Coordinate multi-agent workflows

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AITaskManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$create_task_request = new \QuantClient\Model\CreateTaskRequest(); // \QuantClient\Model\CreateTaskRequest

try {
    $result = $apiInstance->createTask($organisation, $create_task_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AITaskManagementApi->createTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **create_task_request** | [**\QuantClient\Model\CreateTaskRequest**](../Model/CreateTaskRequest.md)|  | |

### Return type

[**\QuantClient\Model\CreateTask201Response**](../Model/CreateTask201Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTask()`

```php
deleteTask($organisation, $task_id, $cascade): \QuantClient\Model\DeleteTask200Response
```

Delete a task

Permanently deletes a task. This action cannot be undone.      *      * **Dependency Protection:**      * By default, deletion is blocked if other tasks depend on this task (TASK_HAS_DEPENDENTS error).      * This prevents breaking workflows.      *      * **Cascade Delete:**      * Use `?cascade=true` to delete the task AND all tasks that depend on it recursively.      * Useful for cleaning up entire dependency chains.      *      * **Examples:**      * - DELETE /tasks/{id} - Deletes task if no dependents, otherwise returns 409 error      * - DELETE /tasks/{id}?cascade=true - Deletes task and all dependent tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AITaskManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$task_id = 'task_id_example'; // string | The task UUID
$cascade = false; // bool | If true, delete task and all dependent tasks recursively

try {
    $result = $apiInstance->deleteTask($organisation, $task_id, $cascade);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AITaskManagementApi->deleteTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **task_id** | **string**| The task UUID | |
| **cascade** | **bool**| If true, delete task and all dependent tasks recursively | [optional] [default to false] |

### Return type

[**\QuantClient\Model\DeleteTask200Response**](../Model/DeleteTask200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDependencyGraph()`

```php
getDependencyGraph($organisation, $task_list_id): \QuantClient\Model\GetDependencyGraph200Response
```

Get dependency graph for a task list

Returns the full dependency graph for all tasks in a task list.      *      * **Use Cases:**      * - Visualize task dependencies in a UI (DAG diagram)      * - Analyze workflow structure and critical paths      * - Find starting tasks (roots) and terminal tasks (leaves)      * - Plan parallel execution by identifying independent task groups      *      * **Response Structure:**      * - `taskCount`: Total number of tasks in the list      * - `roots`: Task IDs with no dependencies (starting points)      * - `leaves`: Task IDs with no dependents (terminal tasks)      * - `graph`: Adjacency list with each task's dependencies and dependents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AITaskManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$task_list_id = world-1; // string | The task list ID to get the dependency graph for

try {
    $result = $apiInstance->getDependencyGraph($organisation, $task_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AITaskManagementApi->getDependencyGraph: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **task_list_id** | **string**| The task list ID to get the dependency graph for | |

### Return type

[**\QuantClient\Model\GetDependencyGraph200Response**](../Model/GetDependencyGraph200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTask()`

```php
getTask($organisation, $task_id): \QuantClient\Model\GetTask200Response
```

Get task details

Retrieves detailed information about a specific task including status, progress, dependencies, and results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AITaskManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$task_id = 'task_id_example'; // string | The task UUID

try {
    $result = $apiInstance->getTask($organisation, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AITaskManagementApi->getTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **task_id** | **string**| The task UUID | |

### Return type

[**\QuantClient\Model\GetTask200Response**](../Model/GetTask200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTasks()`

```php
listTasks($organisation, $task_list_id, $status, $assigned_agent_id, $limit, $depends_on, $include_details): \QuantClient\Model\ListTasks200Response
```

List tasks with optional filtering

Lists tasks for an organization with optional filtering. Filters can be combined for powerful queries.      *      * **Filter Examples:**      * - All tasks in a list: ?taskListId=world-1      * - Pending tasks in a list: ?taskListId=world-1&status=pending      * - Tasks assigned to an agent: ?assignedAgentId=agent-code-reviewer      * - Combined: ?taskListId=world-1&status=in_progress&assignedAgentId=agent-1      *      * **Reverse Dependency Lookup:**      * Use `dependsOn` to find tasks that depend on a specific task (waiting for it to complete):      * - ?dependsOn=task-123 - Returns task IDs only (lightweight)      * - ?dependsOn=task-123&includeDetails=true - Returns full task objects      * - ?dependsOn=task-123&status=pending - Pending tasks waiting for task-123      *      * **Ordering:**      * Tasks are returned in reverse chronological order (most recent first).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AITaskManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$task_list_id = world-1; // string | Filter tasks by task list ID. Task lists are implicit groupings - any string can be used.
$status = pending; // string | Filter tasks by status
$assigned_agent_id = agent-code-reviewer; // string | Filter tasks by assigned agent ID
$limit = 50; // int | Maximum number of tasks to return (default 50, max 100)
$depends_on = 550e8400-e29b-41d4-a716-446655440000; // string | Reverse lookup: find tasks that depend on this task ID. Returns tasks waiting for the specified task to complete.
$include_details = false; // bool | When using dependsOn, return full task objects in addition to IDs. Default false (IDs only for lightweight responses).

try {
    $result = $apiInstance->listTasks($organisation, $task_list_id, $status, $assigned_agent_id, $limit, $depends_on, $include_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AITaskManagementApi->listTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **task_list_id** | **string**| Filter tasks by task list ID. Task lists are implicit groupings - any string can be used. | [optional] |
| **status** | **string**| Filter tasks by status | [optional] |
| **assigned_agent_id** | **string**| Filter tasks by assigned agent ID | [optional] |
| **limit** | **int**| Maximum number of tasks to return (default 50, max 100) | [optional] [default to 50] |
| **depends_on** | **string**| Reverse lookup: find tasks that depend on this task ID. Returns tasks waiting for the specified task to complete. | [optional] |
| **include_details** | **bool**| When using dependsOn, return full task objects in addition to IDs. Default false (IDs only for lightweight responses). | [optional] [default to false] |

### Return type

[**\QuantClient\Model\ListTasks200Response**](../Model/ListTasks200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTask()`

```php
updateTask($organisation, $task_id, $update_task_request): \QuantClient\Model\UpdateTask200Response
```

Update a task

Updates an existing task. All fields are optional - only provided fields will be updated.      *      * **Status Transitions:**      * - Changing from **pending** to **in_progress** automatically sets startedAt timestamp      * - Changing to **completed**, **failed**, or **cancelled** automatically sets completedAt timestamp      * - Changing to **blocked** automatically sets blockedAt timestamp      * - Changing from **blocked** to **in_progress** or **pending** clears blocked fields      * - Completed tasks get a 30-day TTL for automatic cleanup      *      * **Progress Updates:**      * - Update progress (0.0 to 1.0) to track completion percentage      * - Update progressMessage for human-readable status updates      * - Set result object when task completes successfully      * - Set error string when task fails      * - Set blockedReason and blockedByTaskIds when blocking a task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: BearerAuth
$config = QuantClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new QuantClient\Api\AITaskManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organisation = 'organisation_example'; // string | The organisation ID
$task_id = 550e8400-e29b-41d4-a716-446655440000; // string | The task UUID
$update_task_request = new \QuantClient\Model\UpdateTaskRequest(); // \QuantClient\Model\UpdateTaskRequest

try {
    $result = $apiInstance->updateTask($organisation, $task_id, $update_task_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AITaskManagementApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organisation** | **string**| The organisation ID | |
| **task_id** | **string**| The task UUID | |
| **update_task_request** | [**\QuantClient\Model\UpdateTaskRequest**](../Model/UpdateTaskRequest.md)|  | |

### Return type

[**\QuantClient\Model\UpdateTask200Response**](../Model/UpdateTask200Response.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
