<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($GlobalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 */
final class DeleteGlobalAccelerationInstance extends VpcCommon
{
    public $action = 'DeleteGlobalAccelerationInstance';
}
