# # Container

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the container |
**image_reference** | [**\QuantClient\Model\ContainerImageReference**](ContainerImageReference.md) |  |
**cpu** | **int** | Container-level CPU units | [optional]
**memory** | **int** | Container-level memory hard limit (MiB) | [optional]
**memory_reservation** | **int** | Container-level memory soft limit (MiB) | [optional]
**exposed_ports** | **int[]** | List of container ports to expose | [optional]
**mount_points** | [**\QuantClient\Model\ContainerMountPointsInner[]**](ContainerMountPointsInner.md) |  | [optional]
**environment** | [**\QuantClient\Model\ContainerEnvironmentInner[]**](ContainerEnvironmentInner.md) | Environment variables specific to this container | [optional]
**secrets** | [**\QuantClient\Model\ContainerSecretsInner[]**](ContainerSecretsInner.md) | Secrets mapped to environment variables | [optional]
**health_check** | [**\QuantClient\Model\ContainerHealthCheck**](ContainerHealthCheck.md) |  | [optional]
**depends_on** | [**\QuantClient\Model\ContainerDependsOnInner[]**](ContainerDependsOnInner.md) | Container startup dependencies | [optional]
**command** | **string[]** |  | [optional]
**entry_point** | **string[]** |  | [optional]
**working_directory** | **string** |  | [optional]
**essential** | **bool** |  | [optional] [default to true]
**readonly_root_filesystem** | **bool** |  | [optional] [default to false]
**user** | **string** |  | [optional]
**origin_protection** | **bool** | Enable origin protection for all exposed ports on this container. Use originProtectionConfig for advanced options like IP allow lists. | [optional] [default to false]
**origin_protection_config** | [**\QuantClient\Model\ContainerOriginProtectionConfig**](ContainerOriginProtectionConfig.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
