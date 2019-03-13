<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRouterInterfaceId($RouterInterfaceId)
 * @method string getRouterInterfaceId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setOppositeInterfaceId($OppositeInterfaceId)
 * @method string getOppositeInterfaceId()
 * @method $this setOppositeRouterId($OppositeRouterId)
 * @method string getOppositeRouterId()
 * @method $this setOppositeRouterType($OppositeRouterType)
 * @method string getOppositeRouterType()
 * @method $this setOppositeInterfaceOwnerId($OppositeInterfaceOwnerId)
 * @method integer getOppositeInterfaceOwnerId()
 * @method $this setHealthCheckSourceIp($HealthCheckSourceIp)
 * @method string getHealthCheckSourceIp()
 * @method $this setHealthCheckTargetIp($HealthCheckTargetIp)
 * @method string getHealthCheckTargetIp()
 */
final class ModifyRouterInterfaceAttribute extends EcsCommon
{
    public $action = 'ModifyRouterInterfaceAttribute';
}
