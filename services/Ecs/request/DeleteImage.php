<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setImageId($ImageId)
 * @method string getImageId()
 * @method $this setForce($Force)
 * @method boolean getForce()
 */
final class DeleteImage extends EcsCommon
{
    public $action = 'DeleteImage';
}
