<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDedicatedHostId($DedicatedHostId)
 * @method string getDedicatedHostId()
 */
final class ReleaseDedicatedHost extends EcsCommon
{
    public $action = 'ReleaseDedicatedHost';
}
