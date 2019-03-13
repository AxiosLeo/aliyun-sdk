<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setHaVipId($HaVipId)
 * @method string getHaVipId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyHaVipAttribute extends EcsCommon
{
    public $action = 'ModifyHaVipAttribute';
}
