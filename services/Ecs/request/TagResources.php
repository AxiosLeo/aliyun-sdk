<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setResourceId($ResourceId)
 * @method array getResourceId()
 * @method $this setTag($Tag)
 * @method array getTag()
 */
final class TagResources extends EcsCommon
{
    public $action = 'TagResources';
}
