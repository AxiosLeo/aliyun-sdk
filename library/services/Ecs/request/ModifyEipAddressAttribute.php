<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAllocationId($AllocationId)
 * @method string getAllocationId()
 * @method $this setBandwidth($Bandwidth)
 * @method string getBandwidth()
 */
final class ModifyEipAddressAttribute extends EcsCommon
{
    public $action = 'ModifyEipAddressAttribute';
}
