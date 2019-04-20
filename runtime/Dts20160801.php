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
 * @method $this setSourceEndpointInstanceType($sourceEndpointInstanceType)
 * @method string getSourceEndpointInstanceType()
 * @method $this setDestinationEndpointInstanceType($destinationEndpointInstanceType)
 * @method string getDestinationEndpointInstanceType()
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
 * @method $this setMigrationModeStructureInitialization($migrationModeStructureInitialization)
 * @method bool getMigrationModeStructureInitialization()
 * @method $this setMigrationModeDataInitialization($migrationModeDataInitialization)
 * @method bool getMigrationModeDataInitialization()
 * @method $this setMigrationModeDataSynchronization($migrationModeDataSynchronization)
 * @method bool getMigrationModeDataSynchronization()
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
 * @method $this setSourceEndpointInstanceId($sourceEndpointInstanceId)
 * @method string getSourceEndpointInstanceId()
 * @method $this setSourceEndpointInstanceType($sourceEndpointInstanceType)
 * @method string getSourceEndpointInstanceType()
 * @method $this setSourceEndpointIP($sourceEndpointIP)
 * @method string getSourceEndpointIP()
 * @method $this setSourceEndpointPort($sourceEndpointPort)
 * @method string getSourceEndpointPort()
 * @method $this setSourceEndpointUserName($sourceEndpointUserName)
 * @method string getSourceEndpointUserName()
 * @method $this setSourceEndpointPassword($sourceEndpointPassword)
 * @method string getSourceEndpointPassword()
 * @method $this setDestinationEndpointInstanceId($destinationEndpointInstanceId)
 * @method string getDestinationEndpointInstanceId()
 * @method $this setDestinationEndpointInstanceType($destinationEndpointInstanceType)
 * @method string getDestinationEndpointInstanceType()
 * @method $this setDestinationEndpointIP($destinationEndpointIP)
 * @method string getDestinationEndpointIP()
 * @method $this setDestinationEndpointPort($destinationEndpointPort)
 * @method string getDestinationEndpointPort()
 * @method $this setDestinationEndpointUserName($destinationEndpointUserName)
 * @method string getDestinationEndpointUserName()
 * @method $this setDestinationEndpointPassword($destinationEndpointPassword)
 * @method string getDestinationEndpointPassword()
 * @method $this setStructureInitialization($structureInitialization)
 * @method bool getStructureInitialization()
 * @method $this setDataInitialization($dataInitialization)
 * @method bool getDataInitialization()
 * @method $this setSynchronizationObjects($synchronizationObjects)
 * @method string getSynchronizationObjects()
 * @method $this setSourceEndpointOwnerID($sourceEndpointOwnerID)
 * @method string getSourceEndpointOwnerID()
 * @method $this setSourceEndpointRole($sourceEndpointRole)
 * @method string getSourceEndpointRole()
 * @method $this setPartitionKeyModifyTime_Year($partitionKeyModifyTime_Year)
 * @method bool getPartitionKeyModifyTime_Year()
 * @method $this setPartitionKeyModifyTime_Month($partitionKeyModifyTime_Month)
 * @method bool getPartitionKeyModifyTime_Month()
 * @method $this setPartitionKeyModifyTime_Day($partitionKeyModifyTime_Day)
 * @method bool getPartitionKeyModifyTime_Day()
 * @method $this setPartitionKeyModifyTime_Hour($partitionKeyModifyTime_Hour)
 * @method bool getPartitionKeyModifyTime_Hour()
 * @method $this setPartitionKeyModifyTime_Minute($partitionKeyModifyTime_Minute)
 * @method bool getPartitionKeyModifyTime_Minute()
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
 * @method $this setSourceEndpointInstanceType($sourceEndpointInstanceType)
 * @method string getSourceEndpointInstanceType()
 * @method $this setSourceEndpointInstanceID($sourceEndpointInstanceID)
 * @method string getSourceEndpointInstanceID()
 * @method $this setSubscriptionDataTypeDDL($subscriptionDataTypeDDL)
 * @method bool getSubscriptionDataTypeDDL()
 * @method $this setSubscriptionDataTypeDML($subscriptionDataTypeDML)
 * @method bool getSubscriptionDataTypeDML()
 * @method $this setSubscriptionObject($subscriptionObject)
 * @method string getSubscriptionObject()
 * @method $this setSourceEndpointOwnerID($sourceEndpointOwnerID)
 * @method string getSourceEndpointOwnerID()
 * @method $this setSourceEndpointRole($sourceEndpointRole)
 * @method string getSourceEndpointRole()
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
 * @method $this setSourceEndpointInstanceType($sourceEndpointInstanceType)
 * @method string getSourceEndpointInstanceType()
 * @method $this setSourceEndpointInstanceID($sourceEndpointInstanceID)
 * @method string getSourceEndpointInstanceID()
 * @method $this setDestinationEndpointInstanceType($destinationEndpointInstanceType)
 * @method string getDestinationEndpointInstanceType()
 * @method $this setDestinationEndpointInstanceID($destinationEndpointInstanceID)
 * @method string getDestinationEndpointInstanceID()
 * @method $this setInitializationStructureLoad($initializationStructureLoad)
 * @method bool getInitializationStructureLoad()
 * @method $this setInitializationDataLoad($initializationDataLoad)
 * @method bool getInitializationDataLoad()
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