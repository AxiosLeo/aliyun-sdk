<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($GlobalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 */
final class UnassociateGlobalAccelerationInstance extends VpcCommon
{
    public $action = 'UnassociateGlobalAccelerationInstance';
}
