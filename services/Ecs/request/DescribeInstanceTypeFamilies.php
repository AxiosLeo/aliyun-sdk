<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setGeneration($Generation)
 * @method string getGeneration()
 */
final class DescribeInstanceTypeFamilies extends EcsCommon
{
    public $action = 'DescribeInstanceTypeFamilies';
}
