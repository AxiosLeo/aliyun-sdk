<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDedicatedHostType($DedicatedHostType)
 * @method string getDedicatedHostType()
 * @method $this setSupportedInstanceTypeFamily($SupportedInstanceTypeFamily)
 * @method string getSupportedInstanceTypeFamily()
 */
final class DescribeDedicatedHostTypes extends EcsCommon
{
    public $action = 'DescribeDedicatedHostTypes';
}
