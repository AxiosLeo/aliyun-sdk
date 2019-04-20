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
 * @method $this setMigrationModeStructureInitialization($migrationModeStructureInitialization)
 * @method bool getMigrationModeStructureInitialization()
 * @method $this setMigrationModeDataInitialization($migrationModeDataInitialization)
 * @method bool getMigrationModeDataInitialization()
 * @method $this setMigrationModeDataSynchronization($migrationModeDataSynchronization)
 * @method bool getMigrationModeDataSynchronization()
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
 * @method $this setSourceEndpointInstanceType($sourceEndpointInstanceType)
 * @method string getSourceEndpointInstanceType()
 * @method $this setSourceEndpointInstanceID($sourceEndpointInstanceID)
 * @method string getSourceEndpointInstanceID()
 * @method $this setSourceEndpointEngineName($sourceEndpointEngineName)
 * @method string getSourceEndpointEngineName()
 * @method $this setSourceEndpointRegion($sourceEndpointRegion)
 * @method string getSourceEndpointRegion()
 * @method $this setSourceEndpointIP($sourceEndpointIP)
 * @method string getSourceEndpointIP()
 * @method $this setSourceEndpointPort($sourceEndpointPort)
 * @method string getSourceEndpointPort()
 * @method $this setSourceEndpointOracleSID($sourceEndpointOracleSID)
 * @method string getSourceEndpointOracleSID()
 * @method $this setSourceEndpointDatabaseName($sourceEndpointDatabaseName)
 * @method string getSourceEndpointDatabaseName()
 * @method $this setSourceEndpointUserName($sourceEndpointUserName)
 * @method string getSourceEndpointUserName()
 * @method $this setSourceEndpointPassword($sourceEndpointPassword)
 * @method string getSourceEndpointPassword()
 * @method $this setSourceEndpointOwnerID($sourceEndpointOwnerID)
 * @method string getSourceEndpointOwnerID()
 * @method $this setSourceEndpointRole($sourceEndpointRole)
 * @method string getSourceEndpointRole()
 * @method $this setDestinationEndpointInstanceType($destinationEndpointInstanceType)
 * @method string getDestinationEndpointInstanceType()
 * @method $this setDestinationEndpointInstanceID($destinationEndpointInstanceID)
 * @method string getDestinationEndpointInstanceID()
 * @method $this setDestinationEndpointEngineName($destinationEndpointEngineName)
 * @method string getDestinationEndpointEngineName()
 * @method $this setDestinationEndpointRegion($destinationEndpointRegion)
 * @method string getDestinationEndpointRegion()
 * @method $this setDestinationEndpointIP($destinationEndpointIP)
 * @method string getDestinationEndpointIP()
 * @method $this setDestinationEndpointPort($destinationEndpointPort)
 * @method string getDestinationEndpointPort()
 * @method $this setDestinationEndpointDataBaseName($destinationEndpointDataBaseName)
 * @method string getDestinationEndpointDataBaseName()
 * @method $this setDestinationEndpointUserName($destinationEndpointUserName)
 * @method string getDestinationEndpointUserName()
 * @method $this setDestinationEndpointPassword($destinationEndpointPassword)
 * @method string getDestinationEndpointPassword()
 * @method $this setMigrationModeStructureIntialization($migrationModeStructureIntialization)
 * @method bool getMigrationModeStructureIntialization()
 * @method $this setMigrationModeDataIntialization($migrationModeDataIntialization)
 * @method bool getMigrationModeDataIntialization()
 * @method $this setMigrationModeDataSynchronization($migrationModeDataSynchronization)
 * @method bool getMigrationModeDataSynchronization()
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