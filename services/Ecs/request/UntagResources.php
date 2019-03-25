<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResourceId($ResourceId)
 * @method array getResourceId()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setTagKey($TagKey)
 * @method array getTagKey()
 * @method $this setAll($All)
 * @method boolean getAll()
 */
final class UntagResources extends EcsCommon
{
    public $action = 'UntagResources';
}
