<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRouterInterfaceId($RouterInterfaceId)
 * @method string getRouterInterfaceId()
 */
final class ActivateRouterInterface extends EcsCommon
{
    public $action = 'ActivateRouterInterface';
}
