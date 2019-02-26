<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setResourceId($ResourceId)
 * @method string getResourceId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTag($Tag)
 * @method array getTag()
 */
final class DescribeTags extends EcsCommon
{
    public $action = 'DescribeTags';
}
