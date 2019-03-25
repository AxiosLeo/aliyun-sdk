<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 */
final class DescribeInstanceTopology extends EcsCommon
{
    public $action = 'DescribeInstanceTopology';
}
