<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setImageName($ImageName)
 * @method string getImageName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyImageAttribute extends EcsCommon
{
    public $action = 'ModifyImageAttribute';
}
