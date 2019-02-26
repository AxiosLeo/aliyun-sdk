<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setAllocationId($AllocationId)
 * @method string getAllocationId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setInstanceType($InstanceType)
 * @method string getInstanceType()
 */
final class AssociateEipAddress extends EcsCommon
{
    public $action = 'AssociateEipAddress';
}
