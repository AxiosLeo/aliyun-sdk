<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setDedicatedHostIds($DedicatedHostIds)
 * @method string getDedicatedHostIds()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeDedicatedHostAutoRenew extends EcsCommon
{
    public $action = 'DescribeDedicatedHostAutoRenew';
}
