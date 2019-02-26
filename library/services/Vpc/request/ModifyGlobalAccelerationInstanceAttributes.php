<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setGlobalAccelerationInstanceId($GlobalAccelerationInstanceId)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyGlobalAccelerationInstanceAttributes extends VpcCommon
{
    public $action = 'ModifyGlobalAccelerationInstanceAttributes';
}
