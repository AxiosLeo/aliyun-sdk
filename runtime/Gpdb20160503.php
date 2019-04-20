<?php

namespace aliyun\sdk\services\Gpdb20160503;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20160503
 *
 * @package aliyun\sdk\services\Gpdb20160503
 * @method RestartDBInstance RestartDBInstance()
 * @method ModifyDBInstanceConnectionString ModifyDBInstanceConnectionString()
 * @method DescribeResourceUsage DescribeResourceUsage()
 * @method UntagResources UntagResources()
 * @method DescribeDBInstances DescribeDBInstances()
 * @method DescribeAccounts DescribeAccounts()
 * @method ModifyDBInstanceDescription ModifyDBInstanceDescription()
 * @method DeleteDatabase DeleteDatabase()
 * @method AddBuDBInstanceRelation AddBuDBInstanceRelation()
 * @method ReleaseInstancePublicConnection ReleaseInstancePublicConnection()
 * @method ResetAccountPassword ResetAccountPassword()
 * @method ModifyDBInstanceNetworkType ModifyDBInstanceNetworkType()
 * @method DescribeSQLCollectorPolicy DescribeSQLCollectorPolicy()
 * @method CreateAccount CreateAccount()
 * @method DescribeRdsVpcs DescribeRdsVpcs()
 * @method ModifySecurityIps ModifySecurityIps()
 * @method DescribeSQLLogRecords DescribeSQLLogRecords()
 * @method DescribeRdsVSwitchs DescribeRdsVSwitchs()
 * @method DescribeDBInstanceNetInfo DescribeDBInstanceNetInfo()
 * @method DescribeDBInstanceAttribute DescribeDBInstanceAttribute()
 * @method DescribeRegions DescribeRegions()
 * @method DescribeSlowLogRecords DescribeSlowLogRecords()
 * @method DeleteDBInstance DeleteDBInstance()
 * @method ModifyAccountDescription ModifyAccountDescription()
 * @method TagResources TagResources()
 * @method DescribeDBInstancePerformance DescribeDBInstancePerformance()
 * @method ModifyDBInstanceConnectionMode ModifyDBInstanceConnectionMode()
 * @method SwitchDBInstanceNetType SwitchDBInstanceNetType()
 * @method ModifyDBInstanceMaintainTime ModifyDBInstanceMaintainTime()
 * @method AllocateInstancePublicConnection AllocateInstancePublicConnection()
 * @method DescribeDBInstanceIPArrayList DescribeDBInstanceIPArrayList()
 * @method CreateDBInstance CreateDBInstance()
 * @method ListTagResources ListTagResources()
 * @method DescribeSQLLogFiles DescribeSQLLogFiles()
 * @method ModifySQLCollectorPolicy ModifySQLCollectorPolicy()
 */
class V20160503
{
}

/**
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class RestartDBInstance extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 * @method $this setCurrentConnectionString($currentConnectionString)
 * @method string getCurrentConnectionString()
 */
class ModifyDBInstanceConnectionString extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeResourceUsage extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTagKey($tagKey)
 * @method array getTagKey()
 * @method $this setAll($all)
 * @method bool getAll()
 */
class UntagResources extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setDBInstanceIds($dBInstanceIds)
 * @method string getDBInstanceIds()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeDBInstances extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 */
class DescribeAccounts extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 */
class ModifyDBInstanceDescription extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 */
class DeleteDatabase extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setBusinessUnit($businessUnit)
 * @method string getBusinessUnit()
 */
class AddBuDBInstanceRelation extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setCurrentConnectionString($currentConnectionString)
 * @method string getCurrentConnectionString()
 */
class ReleaseInstancePublicConnection extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 */
class ResetAccountPassword extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 */
class ModifyDBInstanceNetworkType extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeSQLCollectorPolicy extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setDatabaseName($databaseName)
 * @method string getDatabaseName()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountPassword($accountPassword)
 * @method string getAccountPassword()
 * @method $this setAccountDescription($accountDescription)
 * @method string getAccountDescription()
 */
class CreateAccount extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 */
class DescribeRdsVpcs extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setDBInstanceIPArrayName($dBInstanceIPArrayName)
 * @method string getDBInstanceIPArrayName()
 * @method $this setDBInstanceIPArrayAttribute($dBInstanceIPArrayAttribute)
 * @method string getDBInstanceIPArrayAttribute()
 */
class ModifySecurityIps extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setQueryKeywords($queryKeywords)
 * @method string getQueryKeywords()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setDatabase($database)
 * @method string getDatabase()
 * @method $this setUser($user)
 * @method string getUser()
 * @method $this setForm($form)
 * @method string getForm()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeSQLLogRecords extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 */
class DescribeRdsVSwitchs extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeDBInstanceNetInfo extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeDBInstanceAttribute extends Request
{

}/**
 */
class DescribeRegions extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSQLId($sQLId)
 * @method int getSQLId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 * @method $this setDBName($dBName)
 * @method string getDBName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeSlowLogRecords extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DeleteDBInstance extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setAccountDescription($accountDescription)
 * @method string getAccountDescription()
 */
class ModifyAccountDescription extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTag($tag)
 * @method array getTag()
 */
class TagResources extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class DescribeDBInstancePerformance extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionMode($connectionMode)
 * @method string getConnectionMode()
 */
class ModifyDBInstanceConnectionMode extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 */
class SwitchDBInstanceNetType extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setStartTime($startTime)
 * @method string getStartTime()
 * @method $this setEndTime($endTime)
 * @method string getEndTime()
 */
class ModifyDBInstanceMaintainTime extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setConnectionStringPrefix($connectionStringPrefix)
 * @method string getConnectionStringPrefix()
 * @method $this setPort($port)
 * @method string getPort()
 */
class AllocateInstancePublicConnection extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 */
class DescribeDBInstanceIPArrayList extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setEngineVersion($engineVersion)
 * @method string getEngineVersion()
 * @method $this setEngine($engine)
 * @method string getEngine()
 * @method $this setDBInstanceClass($dBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceGroupCount($dBInstanceGroupCount)
 * @method string getDBInstanceGroupCount()
 * @method $this setDBInstanceDescription($dBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setSecurityIPList($securityIPList)
 * @method string getSecurityIPList()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setPeriod($period)
 * @method string getPeriod()
 * @method $this setUsedTime($usedTime)
 * @method string getUsedTime()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 * @method $this setInstanceNetworkType($instanceNetworkType)
 * @method string getInstanceNetworkType()
 * @method $this setVPCId($vPCId)
 * @method string getVPCId()
 * @method $this setVSwitchId($vSwitchId)
 * @method string getVSwitchId()
 * @method $this setPrivateIpAddress($privateIpAddress)
 * @method string getPrivateIpAddress()
 */
class CreateDBInstance extends Request
{

}/**
 * @method $this setOwnerId($ownerId)
 * @method int getOwnerId()
 * @method $this setResourceOwnerAccount($resourceOwnerAccount)
 * @method string getResourceOwnerAccount()
 * @method $this setResourceOwnerId($resourceOwnerId)
 * @method int getResourceOwnerId()
 * @method $this setOwnerAccount($ownerAccount)
 * @method string getOwnerAccount()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setResourceType($resourceType)
 * @method string getResourceType()
 * @method $this setResourceId($resourceId)
 * @method array getResourceId()
 * @method $this setTag($tag)
 * @method array getTag()
 * @method $this setNextToken($nextToken)
 * @method string getNextToken()
 */
class ListTagResources extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setFileName($fileName)
 * @method string getFileName()
 * @method $this setPageSize($pageSize)
 * @method int getPageSize()
 * @method $this setPageNumber($pageNumber)
 * @method int getPageNumber()
 */
class DescribeSQLLogFiles extends Request
{

}/**
 * @method $this setDBInstanceId($dBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setSQLCollectorStatus($sQLCollectorStatus)
 * @method string getSQLCollectorStatus()
 */
class ModifySQLCollectorPolicy extends Request
{

}