<?php

namespace aliyun\sdk\services\Dts20170601;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20170601
 *
 * @package aliyun\sdk\services\Dts20170601
 * @method DeleteMigrationJob DeleteMigrationJob()
 * @method CreateMigrationJob CreateMigrationJob()
 * @method StopMigrationJob StopMigrationJob()
 * @method SuspendMigrationJob SuspendMigrationJob()
 * @method DescirbeMigrationJobs DescirbeMigrationJobs()
 * @method DescribeMigrationJobDetail DescribeMigrationJobDetail()
 * @method StartMigrationJob StartMigrationJob()
 * @method DescribeMigrationJobStatus DescribeMigrationJobStatus()
 * @method ConfigureMigrationJob ConfigureMigrationJob()
 * @method ModifyMigrationObject ModifyMigrationObject()
 */
class V20170601
{
}

/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 */
class DeleteMigrationJob extends Request
{
}/**
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setMigrationJobClass($migrationJobClass)
 * @method string getMigrationJobClass()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class CreateMigrationJob extends Request
{
}/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class StopMigrationJob extends Request
{
}/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class SuspendMigrationJob extends Request
{
}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setMigrationJobName($migrationJobName)
 * @method string getMigrationJobName()
 */
class DescirbeMigrationJobs extends Request
{
}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 * @method $this setMigrationMode_StructureInitialization($migrationMode_StructureInitialization)
 * @method bool getMigrationMode_StructureInitialization()
 * @method $this setMigrationMode_DataInitialization($migrationMode_DataInitialization)
 * @method bool getMigrationMode_DataInitialization()
 * @method $this setMigrationMode_DataSynchronization($migrationMode_DataSynchronization)
 * @method bool getMigrationMode_DataSynchronization()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class DescribeMigrationJobDetail extends Request
{
}/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 */
class StartMigrationJob extends Request
{
}/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class DescribeMigrationJobStatus extends Request
{
}/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 * @method $this setMigrationJobName($migrationJobName)
 * @method string getMigrationJobName()
 * @method $this setSourceEndpoint_InstanceType($sourceEndpoint_InstanceType)
 * @method string getSourceEndpoint_InstanceType()
 * @method $this setSourceEndpoint_InstanceID($sourceEndpoint_InstanceID)
 * @method string getSourceEndpoint_InstanceID()
 * @method $this setSourceEndpoint_EngineName($sourceEndpoint_EngineName)
 * @method string getSourceEndpoint_EngineName()
 * @method $this setSourceEndpoint_Region($sourceEndpoint_Region)
 * @method string getSourceEndpoint_Region()
 * @method $this setSourceEndpoint_IP($sourceEndpoint_IP)
 * @method string getSourceEndpoint_IP()
 * @method $this setSourceEndpoint_Port($sourceEndpoint_Port)
 * @method string getSourceEndpoint_Port()
 * @method $this setSourceEndpoint_OracleSID($sourceEndpoint_OracleSID)
 * @method string getSourceEndpoint_OracleSID()
 * @method $this setSourceEndpoint_DatabaseName($sourceEndpoint_DatabaseName)
 * @method string getSourceEndpoint_DatabaseName()
 * @method $this setSourceEndpoint_UserName($sourceEndpoint_UserName)
 * @method string getSourceEndpoint_UserName()
 * @method $this setSourceEndpoint_Password($sourceEndpoint_Password)
 * @method string getSourceEndpoint_Password()
 * @method $this setSourceEndpoint_OwnerID($sourceEndpoint_OwnerID)
 * @method string getSourceEndpoint_OwnerID()
 * @method $this setSourceEndpoint_Role($sourceEndpoint_Role)
 * @method string getSourceEndpoint_Role()
 * @method $this setDestinationEndpoint_InstanceType($destinationEndpoint_InstanceType)
 * @method string getDestinationEndpoint_InstanceType()
 * @method $this setDestinationEndpoint_InstanceID($destinationEndpoint_InstanceID)
 * @method string getDestinationEndpoint_InstanceID()
 * @method $this setDestinationEndpoint_EngineName($destinationEndpoint_EngineName)
 * @method string getDestinationEndpoint_EngineName()
 * @method $this setDestinationEndpoint_Region($destinationEndpoint_Region)
 * @method string getDestinationEndpoint_Region()
 * @method $this setDestinationEndpoint_IP($destinationEndpoint_IP)
 * @method string getDestinationEndpoint_IP()
 * @method $this setDestinationEndpoint_Port($destinationEndpoint_Port)
 * @method string getDestinationEndpoint_Port()
 * @method $this setDestinationEndpoint_DataBaseName($destinationEndpoint_DataBaseName)
 * @method string getDestinationEndpoint_DataBaseName()
 * @method $this setDestinationEndpoint_UserName($destinationEndpoint_UserName)
 * @method string getDestinationEndpoint_UserName()
 * @method $this setDestinationEndpoint_Password($destinationEndpoint_Password)
 * @method string getDestinationEndpoint_Password()
 * @method $this setMigrationMode_StructureIntialization($migrationMode_StructureIntialization)
 * @method bool getMigrationMode_StructureIntialization()
 * @method $this setMigrationMode_DataIntialization($migrationMode_DataIntialization)
 * @method bool getMigrationMode_DataIntialization()
 * @method $this setMigrationMode_DataSynchronization($migrationMode_DataSynchronization)
 * @method bool getMigrationMode_DataSynchronization()
 * @method $this setMigrationObject($migrationObject)
 * @method string getMigrationObject()
 * @method $this setMigrationReserved($migrationReserved)
 * @method string getMigrationReserved()
 */
class ConfigureMigrationJob extends Request
{
}/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 * @method $this setMigrationObject($migrationObject)
 * @method string getMigrationObject()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class ModifyMigrationObject extends Request
{
}
