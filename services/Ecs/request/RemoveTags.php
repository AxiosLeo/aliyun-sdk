<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setResourceId($ResourceId)
 * @method string getResourceId()
 * @method $this setTag($Tag)
 * @method array getTag()
 */
final class RemoveTags extends EcsCommon
{
    public $action = 'RemoveTags';
}
