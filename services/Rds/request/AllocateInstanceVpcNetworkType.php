<?php
namespace aliyun\sdk\services\Rds\request;

use aliyun\sdk\services\Rds\RdsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDBInstanceId($DBInstanceId)
 * @method string getDBInstanceId()
 * @method $this setTargetRegionId($TargetRegionId)
 * @method string getTargetRegionId()
 * @method $this setTargetZoneId($TargetZoneId)
 * @method string getTargetZoneId()
 * @method $this setTargetVpcId($TargetVpcId)
 * @method string getTargetVpcId()
 * @method $this setTargetVSwitchId($TargetVSwitchId)
 * @method string getTargetVSwitchId()
 */
final class AllocateInstanceVpcNetworkType extends RdsCommon
{
    public $action = 'AllocateInstanceVpcNetworkType';
}
