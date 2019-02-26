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
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class AssociateHaVip extends EcsCommon
{
    public $action = 'AssociateHaVip';
}
