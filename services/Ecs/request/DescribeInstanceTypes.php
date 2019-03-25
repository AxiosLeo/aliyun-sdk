<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setInstanceTypeFamily($InstanceTypeFamily)
 * @method string getInstanceTypeFamily()
 */
final class DescribeInstanceTypes extends EcsCommon
{
    public $action = 'DescribeInstanceTypes';
}
