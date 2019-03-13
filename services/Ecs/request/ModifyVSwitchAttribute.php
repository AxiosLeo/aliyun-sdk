<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setVSwitchName($VSwitchName)
 * @method string getVSwitchName()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyVSwitchAttribute extends EcsCommon
{
    public $action = 'ModifyVSwitchAttribute';
}
