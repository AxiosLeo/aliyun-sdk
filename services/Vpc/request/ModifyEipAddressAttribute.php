<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setAllocationId($AllocationId)
 * @method string getAllocationId()
 * @method $this setBandwidth($Bandwidth)
 * @method string getBandwidth()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setDescription($Description)
 * @method string getDescription()
 */
final class ModifyEipAddressAttribute extends VpcCommon
{
    public $action = 'ModifyEipAddressAttribute';
}
