<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAllocationId($AllocationId)
 * @method string getAllocationId()
 */
final class ReleaseEipAddress extends VpcCommon
{
    public $action = 'ReleaseEipAddress';
}
