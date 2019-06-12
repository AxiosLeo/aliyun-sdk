<?php

namespace aliyun\sdk\services\Dts20160801;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160801
 *
 * @package aliyun\sdk\services\Dts20160801
 * @method ModifySubscriptionObject ModifySubscriptionObject()
 * @method DescribeSynchronizationObjectModifyStatus DescribeSynchronizationObjectModifyStatus()
 * @method DeleteMigrationJob DeleteMigrationJob()
 * @method CreateMigrationJob CreateMigrationJob()
 * @method StopMigrationJob StopMigrationJob()
 * @method SuspendMigrationJob SuspendMigrationJob()
 * @method DescribeSynchronizationJobStatus DescribeSynchronizationJobStatus()
 * @method DescribeSubscriptionInstances DescribeSubscriptionInstances()
 * @method DescirbeMigrationJobs DescirbeMigrationJobs()
 * @method DeleteSubscriptionInstance DeleteSubscriptionInstance()
 * @method DescribeSubscriptionObjectModifyStatus DescribeSubscriptionObjectModifyStatus()
 * @method DescribeSubscriptionInstanceStatus DescribeSubscriptionInstanceStatus()
 * @method CreateSynchronizationJob CreateSynchronizationJob()
 * @method ModifySynchronizationObject ModifySynchronizationObject()
 * @method SuspendSynchronizationJob SuspendSynchronizationJob()
 * @method StartSubscriptionInstance StartSubscriptionInstance()
 * @method DescribeSynchronizationJobs DescribeSynchronizationJobs()
 * @method DeleteSynchronizationJob DeleteSynchronizationJob()
 * @method DescribeMigrationJobs DescribeMigrationJobs()
 * @method CreateSubscriptionInstance CreateSubscriptionInstance()
 * @method DescribeMigrationJobDetail DescribeMigrationJobDetail()
 * @method ModifyConsumptionTimestamp ModifyConsumptionTimestamp()
 * @method StartMigrationJob StartMigrationJob()
 * @method ConfigureSynchronizationJob ConfigureSynchronizationJob()
 * @method DescribeMigrationJobStatus DescribeMigrationJobStatus()
 * @method ConfigureSubscriptionInstance ConfigureSubscriptionInstance()
 * @method StartSynchronizationJob StartSynchronizationJob()
 * @method ConfigurationSynchronizationJob ConfigurationSynchronizationJob()
 * @method ConfigureMigrationJob ConfigureMigrationJob()
 * @method DescribeInitializationStatus DescribeInitializationStatus()
 * @method ModifyMigrationObject ModifyMigrationObject()
 */
class V20160801
{
}

/**
 * @method $this setSubscriptionInstanceId($subscriptionInstanceId)
 * @method string getSubscriptionInstanceId()
 * @method $this setSubscriptionObject($subscriptionObject)
 * @method string getSubscriptionObject()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class ModifySubscriptionObject extends Request
{

}/**
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DescribeSynchronizationObjectModifyStatus extends Request
{

}/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
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
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class StopMigrationJob extends Request
{

}/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class SuspendMigrationJob extends Request
{

}/**
 * @method $this setSynchronizationJobId($synchronizationJobId)
 * @method string getSynchronizationJobId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DescribeSynchronizationJobStatus extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setSubscriptionInstanceName($subscriptionInstanceName)
 * @method string getSubscriptionInstanceName()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DescribeSubscriptionInstances extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setMigrationJobName($migrationJobName)
 * @method string getMigrationJobName()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DescirbeMigrationJobs extends Request
{

}/**
 * @method $this setSubscriptionInstanceId($subscriptionInstanceId)
 * @method string getSubscriptionInstanceId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DeleteSubscriptionInstance extends Request
{

}/**
 * @method $this setSubscriptionInstanceId($subscriptionInstanceId)
 * @method string getSubscriptionInstanceId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DescribeSubscriptionObjectModifyStatus extends Request
{

}/**
 * @method $this setSubscriptionInstanceId($subscriptionInstanceId)
 * @method string getSubscriptionInstanceId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DescribeSubscriptionInstanceStatus extends Request
{

}/**
 * @method $this setSourceRegion($sourceRegion)
 * @method string getSourceRegion()
 * @method $this setDestRegion($destRegion)
 * @method string getDestRegion()
 * @method $this setSynchronizationJobClass($synchronizationJobClass)
 * @method string getSynchronizationJobClass()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setUsedTime($usedTime)
 * @method int getUsedTime()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setSourceEndpoint_InstanceType($sourceEndpoint_InstanceType)
 * @method string getSourceEndpoint_InstanceType()
 * @method $this setDestinationEndpoint_InstanceType($destinationEndpoint_InstanceType)
 * @method string getDestinationEndpoint_InstanceType()
 * @method $this setnetworkType($networkType)
 * @method string getnetworkType()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class CreateSynchronizationJob extends Request
{

}/**
 * @method $this setSynchronizationJobId($synchronizationJobId)
 * @method string getSynchronizationJobId()
 * @method $this setSynchronizationObjects($synchronizationObjects)
 * @method string getSynchronizationObjects()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class ModifySynchronizationObject extends Request
{

}/**
 * @method $this setSynchronizationJobId($synchronizationJobId)
 * @method string getSynchronizationJobId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class SuspendSynchronizationJob extends Request
{

}/**
 * @method $this setSubscriptionInstanceId($subscriptionInstanceId)
 * @method string getSubscriptionInstanceId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class StartSubscriptionInstance extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setSynchronizationJobName($synchronizationJobName)
 * @method string getSynchronizationJobName()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DescribeSynchronizationJobs extends Request
{

}/**
 * @method $this setSynchronizationJobId($synchronizationJobId)
 * @method string getSynchronizationJobId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DeleteSynchronizationJob extends Request
{

}/**
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setMigrationJobName($migrationJobName)
 * @method string getMigrationJobName()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DescribeMigrationJobs extends Request
{

}/**
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setUsedTime($usedTime)
 * @method int getUsedTime()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class CreateSubscriptionInstance extends Request
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
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DescribeMigrationJobDetail extends Request
{

}/**
 * @method $this setSubscriptionInstanceId($subscriptionInstanceId)
 * @method string getSubscriptionInstanceId()
 * @method $this setConsumptionTimestamp($consumptionTimestamp)
 * @method string getConsumptionTimestamp()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class ModifyConsumptionTimestamp extends Request
{

}/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class StartMigrationJob extends Request
{

}/**
 * @method $this setSynchronizationJobName($synchronizationJobName)
 * @method string getSynchronizationJobName()
 * @method $this setSynchronizationJobId($synchronizationJobId)
 * @method string getSynchronizationJobId()
 * @method $this setSourceEndpoint_InstanceId($sourceEndpoint_InstanceId)
 * @method string getSourceEndpoint_InstanceId()
 * @method $this setSourceEndpoint_InstanceType($sourceEndpoint_InstanceType)
 * @method string getSourceEndpoint_InstanceType()
 * @method $this setSourceEndpoint_IP($sourceEndpoint_IP)
 * @method string getSourceEndpoint_IP()
 * @method $this setSourceEndpoint_Port($sourceEndpoint_Port)
 * @method string getSourceEndpoint_Port()
 * @method $this setSourceEndpoint_UserName($sourceEndpoint_UserName)
 * @method string getSourceEndpoint_UserName()
 * @method $this setSourceEndpoint_Password($sourceEndpoint_Password)
 * @method string getSourceEndpoint_Password()
 * @method $this setDestinationEndpoint_InstanceId($destinationEndpoint_InstanceId)
 * @method string getDestinationEndpoint_InstanceId()
 * @method $this setDestinationEndpoint_InstanceType($destinationEndpoint_InstanceType)
 * @method string getDestinationEndpoint_InstanceType()
 * @method $this setDestinationEndpoint_IP($destinationEndpoint_IP)
 * @method string getDestinationEndpoint_IP()
 * @method $this setDestinationEndpoint_Port($destinationEndpoint_Port)
 * @method string getDestinationEndpoint_Port()
 * @method $this setDestinationEndpoint_UserName($destinationEndpoint_UserName)
 * @method string getDestinationEndpoint_UserName()
 * @method $this setDestinationEndpoint_Password($destinationEndpoint_Password)
 * @method string getDestinationEndpoint_Password()
 * @method $this setStructureInitialization($structureInitialization)
 * @method bool getStructureInitialization()
 * @method $this setDataInitialization($dataInitialization)
 * @method bool getDataInitialization()
 * @method $this setSynchronizationObjects($synchronizationObjects)
 * @method string getSynchronizationObjects()
 * @method $this setSourceEndpoint_OwnerID($sourceEndpoint_OwnerID)
 * @method string getSourceEndpoint_OwnerID()
 * @method $this setSourceEndpoint_Role($sourceEndpoint_Role)
 * @method string getSourceEndpoint_Role()
 * @method $this setPartitionKey_ModifyTime_Year($partitionKey_ModifyTime_Year)
 * @method bool getPartitionKey_ModifyTime_Year()
 * @method $this setPartitionKey_ModifyTime_Month($partitionKey_ModifyTime_Month)
 * @method bool getPartitionKey_ModifyTime_Month()
 * @method $this setPartitionKey_ModifyTime_Day($partitionKey_ModifyTime_Day)
 * @method bool getPartitionKey_ModifyTime_Day()
 * @method $this setPartitionKey_ModifyTime_Hour($partitionKey_ModifyTime_Hour)
 * @method bool getPartitionKey_ModifyTime_Hour()
 * @method $this setPartitionKey_ModifyTime_Minute($partitionKey_ModifyTime_Minute)
 * @method bool getPartitionKey_ModifyTime_Minute()
 * @method $this setMigrationReserved($migrationReserved)
 * @method string getMigrationReserved()
 * @method $this setCheckpoint($checkpoint)
 * @method string getCheckpoint()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class ConfigureSynchronizationJob extends Request
{

}/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DescribeMigrationJobStatus extends Request
{

}/**
 * @method $this setSubscriptionInstanceId($subscriptionInstanceId)
 * @method string getSubscriptionInstanceId()
 * @method $this setSubscriptionInstanceName($subscriptionInstanceName)
 * @method string getSubscriptionInstanceName()
 * @method $this setSourceEndpoint_InstanceType($sourceEndpoint_InstanceType)
 * @method string getSourceEndpoint_InstanceType()
 * @method $this setSourceEndpoint_InstanceID($sourceEndpoint_InstanceID)
 * @method string getSourceEndpoint_InstanceID()
 * @method $this setSubscriptionDataType_DDL($subscriptionDataType_DDL)
 * @method bool getSubscriptionDataType_DDL()
 * @method $this setSubscriptionDataType_DML($subscriptionDataType_DML)
 * @method bool getSubscriptionDataType_DML()
 * @method $this setSubscriptionObject($subscriptionObject)
 * @method string getSubscriptionObject()
 * @method $this setSourceEndpoint_OwnerID($sourceEndpoint_OwnerID)
 * @method string getSourceEndpoint_OwnerID()
 * @method $this setSourceEndpoint_Role($sourceEndpoint_Role)
 * @method string getSourceEndpoint_Role()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class ConfigureSubscriptionInstance extends Request
{

}/**
 * @method $this setSynchronizationJobId($synchronizationJobId)
 * @method string getSynchronizationJobId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class StartSynchronizationJob extends Request
{

}/**
 * @method $this setSynchronizationJobName($synchronizationJobName)
 * @method string getSynchronizationJobName()
 * @method $this setSynchronizationJobId($synchronizationJobId)
 * @method string getSynchronizationJobId()
 * @method $this setSourceEndpoint_InstanceType($sourceEndpoint_InstanceType)
 * @method string getSourceEndpoint_InstanceType()
 * @method $this setSourceEndpoint_InstanceID($sourceEndpoint_InstanceID)
 * @method string getSourceEndpoint_InstanceID()
 * @method $this setDestinationEndpoint_InstanceType($destinationEndpoint_InstanceType)
 * @method string getDestinationEndpoint_InstanceType()
 * @method $this setDestinationEndpoint_InstanceID($destinationEndpoint_InstanceID)
 * @method string getDestinationEndpoint_InstanceID()
 * @method $this setInitialization_StructureLoad($initialization_StructureLoad)
 * @method bool getInitialization_StructureLoad()
 * @method $this setInitialization_DataLoad($initialization_DataLoad)
 * @method bool getInitialization_DataLoad()
 * @method $this setSynchronizationObject($synchronizationObject)
 * @method string getSynchronizationObject()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class ConfigurationSynchronizationJob extends Request
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
 * @method $this setCheckpoint($checkpoint)
 * @method string getCheckpoint()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class ConfigureMigrationJob extends Request
{

}/**
 * @method $this setSynchronizationJobId($synchronizationJobId)
 * @method string getSynchronizationJobId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class DescribeInitializationStatus extends Request
{

}/**
 * @method $this setMigrationJobId($migrationJobId)
 * @method string getMigrationJobId()
 * @method $this setMigrationObject($migrationObject)
 * @method string getMigrationObject()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 */
class ModifyMigrationObject extends Request
{

}