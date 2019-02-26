<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVRouterId($VRouterId)
 * @method string getVRouterId()
 * @method $this setVRouterName($VRouterName)
 * @method string getVRouterName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyVRouterAttribute extends EcsCommon
{
    public $action = 'ModifyVRouterAttribute';
}
