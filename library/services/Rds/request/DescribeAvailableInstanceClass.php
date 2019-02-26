<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setEngine($Engine)
 * @method string getEngine()
 * @method $this setEngineVersion($EngineVersion)
 * @method string getEngineVersion()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setOrderType($OrderType)
 * @method string getOrderType()
 */
final class DescribeAvailableInstanceClass extends RdsCommon
{
    public $action = 'DescribeAvailableInstanceClass';
}
