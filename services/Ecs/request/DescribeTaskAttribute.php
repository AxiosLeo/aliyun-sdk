<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setTaskId($TaskId)
 * @method string getTaskId()
 */
final class DescribeTaskAttribute extends EcsCommon
{
    public $action = 'DescribeTaskAttribute';
}
