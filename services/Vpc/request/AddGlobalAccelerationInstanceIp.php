<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($GlobalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setIpInstanceId($IpInstanceId)
 * @method string getIpInstanceId()
 */
final class AddGlobalAccelerationInstanceIp extends VpcCommon
{
    public $action = 'AddGlobalAccelerationInstanceIp';
}
