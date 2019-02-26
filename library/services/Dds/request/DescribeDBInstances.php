<?php
namespace aliyun\sdk\services\Dds\request;

use aliyun\sdk\services\Dds\DdsCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setReplicationFactor($ReplicationFactor)
 * @method string getReplicationFactor()
 * @method $this setDBInstanceDescription($DBInstanceDescription)
 * @method string getDBInstanceDescription()
 * @method $this setExpireTime($ExpireTime)
 * @method string getExpireTime()
 * @method $this setDBInstanceStatus($DBInstanceStatus)
 * @method string getDBInstanceStatus()
 * @method $this setDBInstanceType($DBInstanceType)
 * @method string getDBInstanceType()
 * @method $this setDBInstanceClass($DBInstanceClass)
 * @method string getDBInstanceClass()
 * @method $this setEngine($Engine)
 * @method string getEngine()
 * @method $this setEngineVersion($EngineVersion)
 * @method string getEngineVersion()
 * @method $this setNetworkType($NetworkType)
 * @method string getNetworkType()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setChargeType($ChargeType)
 * @method string getChargeType()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setExpired($Expired)
 * @method string getExpired()
 */
final class DescribeDBInstances extends DdsCommon
{
    public $action = 'DescribeDBInstances';
}
