<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

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
final class ModifyVRouterAttribute extends VpcCommon
{
    public $action = 'ModifyVRouterAttribute';
}
