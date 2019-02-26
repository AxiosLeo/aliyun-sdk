<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setCommodityCode($CommodityCode)
 * @method string getCommodityCode()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setEngine($Engine)
 * @method string getEngine()
 * @method $this setEngineVersion($EngineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceClass($DBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setDBInstanceStorage($DBInstanceStorage)
 * @method integer getDBInstanceStorage()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setUsedTime($UsedTime)
 * @method string getUsedTime()
 * @method $this setTimeType($TimeType)
 * @method string getTimeType()
 * @method $this setQuantity($Quantity)
 * @method integer getQuantity()
 * @method $this setInstanceUsedType($InstanceUsedType)
 * @method integer getInstanceUsedType()
 * @method $this setOrderType($OrderType)
 * @method string getOrderType()
 */
final class DescribePrice extends RdsCommon
{
    public $action = 'DescribePrice';
}
