<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class DescribeInstanceVncUrl extends EcsCommon
{
    public $action = 'DescribeInstanceVncUrl';
}
