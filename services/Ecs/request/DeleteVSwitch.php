<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DeleteVSwitch extends EcsCommon
{
    public $action = 'DeleteVSwitch';
}
