<?php

namespace aliyun\sdk\services\Drds20171016;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20171016
 *
 * @package aliyun\sdk\services\Drds20171016
 * @method ModifyDrdsIpWhiteList ModifyDrdsIpWhiteList()
 * @method ModifyDrdsDBPasswd ModifyDrdsDBPasswd()
 * @method QueryInstanceInfoByConn QueryInstanceInfoByConn()
 * @method ModifyDrdsInstanceDescription ModifyDrdsInstanceDescription()
 * @method DescribeDrdsInstances DescribeDrdsInstances()
 * @method DescribeDrdsDBs DescribeDrdsDBs()
 * @method DescribeCreateDrdsInstanceStatus DescribeCreateDrdsInstanceStatus()
 * @method RemoveDrdsInstance RemoveDrdsInstance()
 * @method RemoveReadOnlyAccount RemoveReadOnlyAccount()
 * @method DescribeDrdsInstanceMonitor DescribeDrdsInstanceMonitor()
 * @method DescribeDrdsInstance DescribeDrdsInstance()
 * @method DeleteDrdsDB DeleteDrdsDB()
 * @method DescribeDrdsInstanceDbMonitor DescribeDrdsInstanceDbMonitor()
 * @method DescribeDrdsDB DescribeDrdsDB()
 * @method CreateDrdsInstance CreateDrdsInstance()
 * @method DescribeShardDbConnectionInfo DescribeShardDbConnectionInfo()
 * @method ModifyRdsReadWeight ModifyRdsReadWeight()
 * @method DescribeRegions DescribeRegions()
 * @method CreateReadOnlyAccount CreateReadOnlyAccount()
 * @method CreateDrdsAccount CreateDrdsAccount()
 * @method DescribeDrdsDBIpWhiteList DescribeDrdsDBIpWhiteList()
 * @method CreateDrdsDB CreateDrdsDB()
 * @method ModifyFullTableScan ModifyFullTableScan()
 * @method ModifyReadOnlyAccountPassword ModifyReadOnlyAccountPassword()
 * @method DescribeDrdsInstanceNetInfoForInner DescribeDrdsInstanceNetInfoForInner()
 * @method DescribeRdsList DescribeRdsList()
 * @method DescribeShardDBs DescribeShardDBs()
 * @method DescribeReadOnlyAccount DescribeReadOnlyAccount()
 * @method DeleteFailedDrdsDB DeleteFailedDrdsDB()
 */
class V20171016
{
}

/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setIpWhiteList($ipWhiteList)
 * @method string getIpWhiteList()
 * @method $this setMode($mode)
 * @method bool getMode()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 * @method $this setGroupAttribute($groupAttribute)
 * @method string getGroupAttribute()
 */
class ModifyDrdsIpWhiteList extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setNewPasswd($newPasswd)
 * @method string getNewPasswd()
 */
class ModifyDrdsDBPasswd extends Request
{
}/**
 * @method $this setHost($host)
 * @method string getHost()
 * @method $this setPort($port)
 * @method int getPort()
 * @method $this setUserName($userName)
 * @method string getUserName()
 */
class QueryInstanceInfoByConn extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDescription($description)
 * @method string getDescription()
 */
class ModifyDrdsInstanceDescription extends Request
{
}/**
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setType($type)
 * @method string getType()
 */
class DescribeDrdsInstances extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeDrdsDBs extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeCreateDrdsInstanceStatus extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class RemoveDrdsInstance extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 */
class RemoveReadOnlyAccount extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 * @method $this setPeriodMultiple($periodMultiple)
 * @method int getPeriodMultiple()
 */
class DescribeDrdsInstanceMonitor extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeDrdsInstance extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DeleteDrdsDB extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setKey($key)
 * @method string getKey()
 * @method $this setStartTime($startTime)
 * @method int getStartTime()
 * @method $this setEndTime($endTime)
 * @method int getEndTime()
 */
class DescribeDrdsInstanceDbMonitor extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeDrdsDB extends Request
{
}/**
 * @method $this setDescription($description)
 * @method string getDescription()
 * @method $this setRegionId($regionId)
 * @method string getRegionId()
 * @method $this setZoneId($zoneId)
 * @method string getZoneId()
 * @method $this setType($type)
 * @method string getType()
 * @method $this setQuantity($quantity)
 * @method int getQuantity()
 * @method $this setInstanceSeries($instanceSeries)
 * @method string getInstanceSeries()
 * @method $this setSpecification($specification)
 * @method string getSpecification()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVswitchId($vswitchId)
 * @method string getVswitchId()
 * @method $this setIsHa($isHa)
 * @method bool getIsHa()
 * @method $this setPricingCycle($pricingCycle)
 * @method string getPricingCycle()
 * @method $this setDuration($duration)
 * @method int getDuration()
 * @method $this setIsAutoRenew($isAutoRenew)
 * @method bool getIsAutoRenew()
 * @method $this setClientToken($clientToken)
 * @method string getClientToken()
 */
class CreateDrdsInstance extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setSubDbName($subDbName)
 * @method string getSubDbName()
 */
class DescribeShardDbConnectionInfo extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setInstanceNames($instanceNames)
 * @method string getInstanceNames()
 * @method $this setWeights($weights)
 * @method string getWeights()
 */
class ModifyRdsReadWeight extends Request
{
}/**
 */
class DescribeRegions extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setpassword($password)
 * @method string getpassword()
 */
class CreateReadOnlyAccount extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setUserName($userName)
 * @method string getUserName()
 * @method $this setPassword($password)
 * @method string getPassword()
 */
class CreateDrdsAccount extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setGroupName($groupName)
 * @method string getGroupName()
 */
class DescribeDrdsDBIpWhiteList extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setEncode($encode)
 * @method string getEncode()
 * @method $this setPassword($password)
 * @method string getPassword()
 * @method $this setRdsInstances($rdsInstances)
 * @method string getRdsInstances()
 */
class CreateDrdsDB extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTableNames($tableNames)
 * @method string getTableNames()
 * @method $this setFullTableScan($fullTableScan)
 * @method bool getFullTableScan()
 */
class ModifyFullTableScan extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setAccountName($accountName)
 * @method string getAccountName()
 * @method $this setOriginPassword($originPassword)
 * @method string getOriginPassword()
 * @method $this setNewPasswd($newPasswd)
 * @method string getNewPasswd()
 */
class ModifyReadOnlyAccountPassword extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 */
class DescribeDrdsInstanceNetInfoForInner extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeRdsList extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeShardDBs extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DescribeReadOnlyAccount extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class DeleteFailedDrdsDB extends Request
{
}
