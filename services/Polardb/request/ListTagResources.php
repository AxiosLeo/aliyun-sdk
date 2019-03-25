<?php
namespace aliyun\sdk\services\Polardb\request;

use aliyun\sdk\services\Polardb\PolardbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setResourceType($ResourceType)
 * @method string getResourceType()
 * @method $this setResourceId($ResourceId)
 * @method array getResourceId()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setNextToken($NextToken)
 * @method string getNextToken()
 */
final class ListTagResources extends PolardbCommon
{
    public $action = 'ListTagResources';
}
