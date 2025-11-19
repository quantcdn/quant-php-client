# # ContainerHealthCheck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**command** | **string[]** | The command to run to determine if the container is healthy | [optional]
**interval** | **int** | Time period (seconds) between health checks | [optional] [default to 30]
**timeout** | **int** | Time period (seconds) to wait for a health check to return | [optional] [default to 5]
**retries** | **int** | Number of times to retry a failed health check | [optional] [default to 3]
**start_period** | **int** | Grace period (seconds) to ignore unhealthy checks after container starts | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
