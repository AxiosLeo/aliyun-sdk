<?php

namespace aliyun\sdk\services\Dbs20190306;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20190306
 *
 * @package aliyun\sdk\services\Dbs20190306
 * @method DescribeIncrementBackupList DescribeIncrementBackupList()
 * @method DescribeBackupGatewayList DescribeBackupGatewayList()
 * @method CreateBackupPlan CreateBackupPlan()
 * @method StopBackupPlan StopBackupPlan()
 * @method StartBackupPlan StartBackupPlan()
 * @method DescribeFullBackupList DescribeFullBackupList()
 * @method DescribeBackupPlanList DescribeBackupPlanList()
 * @method ConfigureBackupPlan ConfigureBackupPlan()
 */
class V20190306
{
}

/**
 * @method $this setBackupPlanId($backupPlanId)
 * @method string getBackupPlanId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class DescribeIncrementBackupList extends Request
{
}/**
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class DescribeBackupGatewayList extends Request
{
}/**
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setInstanceClass($instanceClass)
 * @method string getInstanceClass()
 * @method $this setDatabaseType($databaseType)
 * @method string getDatabaseType()
 * @method $this setBackupMethod($backupMethod)
 * @method string getBackupMethod()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setUsedTime($usedTime)
 * @method int getUsedTime()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class CreateBackupPlan extends Request
{
}/**
 * @method $this setBackupPlanId($backupPlanId)
 * @method string getBackupPlanId()
 * @method $this setStopMethod($stopMethod)
 * @method string getStopMethod()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class StopBackupPlan extends Request
{
}/**
 * @method $this setBackupPlanId($backupPlanId)
 * @method string getBackupPlanId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class StartBackupPlan extends Request
{
}/**
 * @method $this setBackupPlanId($backupPlanId)
 * @method string getBackupPlanId()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class DescribeFullBackupList extends Request
{
}/**
 * @method $this setBackupPlanId($backupPlanId)
 * @method string getBackupPlanId()
 * @method $this setRegion($region)
 * @method string getRegion()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNum($pageNum)
 * @method int getPageNum()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class DescribeBackupPlanList extends Request
{
}/**
 * @method $this setBackupPlanId($backupPlanId)
 * @method string getBackupPlanId()
 * @method $this setSourceEndpointInstanceType($sourceEndpointInstanceType)
 * @method string getSourceEndpointInstanceType()
 * @method $this setSourceEndpointRegion($sourceEndpointRegion)
 * @method string getSourceEndpointRegion()
 * @method $this setSourceEndpointInstanceID($sourceEndpointInstanceID)
 * @method string getSourceEndpointInstanceID()
 * @method $this setSourceEndpointIP($sourceEndpointIP)
 * @method string getSourceEndpointIP()
 * @method $this setSourceEndpointPort($sourceEndpointPort)
 * @method int getSourceEndpointPort()
 * @method $this setSourceEndpointDatabaseName($sourceEndpointDatabaseName)
 * @method string getSourceEndpointDatabaseName()
 * @method $this setSourceEndpointUserName($sourceEndpointUserName)
 * @method string getSourceEndpointUserName()
 * @method $this setSourceEndpointPassword($sourceEndpointPassword)
 * @method string getSourceEndpointPassword()
 * @method $this setBackupGatewayId($backupGatewayId)
 * @method int getBackupGatewayId()
 * @method $this setOSSBucketName($oSSBucketName)
 * @method string getOSSBucketName()
 * @method $this setBackupObjects($backupObjects)
 * @method string getBackupObjects()
 * @method $this setBackupPeriod($backupPeriod)
 * @method string getBackupPeriod()
 * @method $this setBackupStartTime($backupStartTime)
 * @method string getBackupStartTime()
 * @method $this setEnableBackupLog($enableBackupLog)
 * @method bool getEnableBackupLog()
 * @method $this setBackupRetentionPeriod($backupRetentionPeriod)
 * @method int getBackupRetentionPeriod()
 * @method $this setDuplicationInfrequentAccessPeriod($duplicationInfrequentAccessPeriod)
 * @method int getDuplicationInfrequentAccessPeriod()
 * @method $this setDuplicationArchivePeriod($duplicationArchivePeriod)
 * @method int getDuplicationArchivePeriod()
 * @method $this setBackupPlanName($backupPlanName)
 * @method string getBackupPlanName()
 * @method $this setSourceEndpointOracleSID($sourceEndpointOracleSID)
 * @method string getSourceEndpointOracleSID()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setOwnerId($ownerId)
 * @method string getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class ConfigureBackupPlan extends Request
{
}
