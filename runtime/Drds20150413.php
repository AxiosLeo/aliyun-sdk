<?php

namespace aliyun\sdk\services\Drds20150413;

use aliyun\sdk\core\lib\Request;

/**
 * Class V20150413
 *
 * @package aliyun\sdk\services\Drds20150413
 * @method ModifyDrdsIpWhiteList ModifyDrdsIpWhiteList()
 * @method ModifyDrdsDBPasswd ModifyDrdsDBPasswd()
 * @method QueryInstanceInfoByConn QueryInstanceInfoByConn()
 * @method DropTables DropTables()
 * @method ModifyDrdsInstanceDescription ModifyDrdsInstanceDescription()
 * @method CreateIndex CreateIndex()
 * @method DescribeDrdsInstances DescribeDrdsInstances()
 * @method DescribeDrdsDBs DescribeDrdsDBs()
 * @method DescribeCreateDrdsInstanceStatus DescribeCreateDrdsInstanceStatus()
 * @method RemoveDrdsInstance RemoveDrdsInstance()
 * @method RemoveReadOnlyAccount RemoveReadOnlyAccount()
 * @method DescribeDrdsInstance DescribeDrdsInstance()
 * @method DeleteDrdsDB DeleteDrdsDB()
 * @method DescribeDDLTask DescribeDDLTask()
 * @method DescribeDrdsDB DescribeDrdsDB()
 * @method CreateDrdsInstance CreateDrdsInstance()
 * @method DescribeShardDbConnectionInfo DescribeShardDbConnectionInfo()
 * @method CancleDDLTask CancleDDLTask()
 * @method ModifyRdsReadWeight ModifyRdsReadWeight()
 * @method DropIndexes DropIndexes()
 * @method DescribeRegions DescribeRegions()
 * @method DrdsApiValidateOrder DrdsApiValidateOrder()
 * @method CreateReadOnlyAccount CreateReadOnlyAccount()
 * @method DescribeDrdsDBIpWhiteList DescribeDrdsDBIpWhiteList()
 * @method CreateDrdsDB CreateDrdsDB()
 * @method ModifyFullTableScan ModifyFullTableScan()
 * @method ModifyReadOnlyAccountPassword ModifyReadOnlyAccountPassword()
 * @method DescribeDrdsInstanceNetInfoForInner DescribeDrdsInstanceNetInfoForInner()
 * @method DescribeRdsList DescribeRdsList()
 * @method DescribeShardDBs DescribeShardDBs()
 * @method CreateTable CreateTable()
 * @method AlterTable AlterTable()
 * @method CancelDDLTask CancelDDLTask()
 * @method ProductInfoComplement ProductInfoComplement()
 * @method ListUnCompleteTasks ListUnCompleteTasks()
 * @method DescribeReadOnlyAccount DescribeReadOnlyAccount()
 * @method DeleteFailedDrdsDB DeleteFailedDrdsDB()
 */
class V20150413
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
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTables($tables)
 * @method string getTables()
 */
class DropTables extends Request
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
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setDdlSql($ddlSql)
 * @method string getDdlSql()
 */
class CreateIndex extends Request
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
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class DescribeDDLTask extends Request
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
 * @method $this setSpecification($specification)
 * @method string getSpecification()
 * @method $this setPayType($payType)
 * @method string getPayType()
 * @method $this setVpcId($vpcId)
 * @method string getVpcId()
 * @method $this setVswitchId($vswitchId)
 * @method string getVswitchId()
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
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class CancleDDLTask extends Request
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
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTable($table)
 * @method string getTable()
 * @method $this setIndexes($indexes)
 * @method string getIndexes()
 */
class DropIndexes extends Request
{
}/**
 */
class DescribeRegions extends Request
{
}/**
 * @method $this setdata($data)
 * @method string getdata()
 */
class DrdsApiValidateOrder extends Request
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
 * @method $this setDdlSql($ddlSql)
 * @method string getDdlSql()
 * @method $this setShardType($shardType)
 * @method string getShardType()
 * @method $this setShardKey($shardKey)
 * @method string getShardKey()
 * @method $this setAllowFullTableScan($allowFullTableScan)
 * @method string getAllowFullTableScan()
 */
class CreateTable extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setDdlSql($ddlSql)
 * @method string getDdlSql()
 */
class AlterTable extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 * @method $this setTaskId($taskId)
 * @method string getTaskId()
 */
class CancelDDLTask extends Request
{
}/**
 * @method $this setname($name)
 * @method string getname()
 * @method $this setgender($gender)
 * @method string getgender()
 */
class ProductInfoComplement extends Request
{
}/**
 * @method $this setDrdsInstanceId($drdsInstanceId)
 * @method string getDrdsInstanceId()
 * @method $this setDbName($dbName)
 * @method string getDbName()
 */
class ListUnCompleteTasks extends Request
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
