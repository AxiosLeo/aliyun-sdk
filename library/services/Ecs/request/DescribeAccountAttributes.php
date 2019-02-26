<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setAttributeName($AttributeName)
 * @method array getAttributeName()
 */
final class DescribeAccountAttributes extends EcsCommon
{
    public $action = 'DescribeAccountAttributes';
}
