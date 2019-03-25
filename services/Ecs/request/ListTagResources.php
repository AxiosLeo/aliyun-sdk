<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResourceId($ResourceId)
 * @method array getResourceId()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setNextToken($NextToken)
 * @method string getNextToken()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 */
final class ListTagResources extends EcsCommon
{
    public $action = 'ListTagResources';
}
