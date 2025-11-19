# # CreateApplicationRequestDatabase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**engine** | **string** | Database engine type (MySQL 8.4, Postgres) | [optional] [default to 'mysql']
**instance_class** | **string** | RDS instance class | [optional] [default to 'db.t4g.micro']
**storage_gb** | **int** | Allocated storage in GiB | [optional] [default to 20]
**multi_az** | **bool** | Enable Multi-AZ deployment (higher availability and cost) | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
