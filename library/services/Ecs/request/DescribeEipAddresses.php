<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setEipAddress($EipAddress)
 * @method string getEipAddress()
 * @method $this setAllocationId($AllocationId)
 * @method string getAllocationId()
 * @method $this setISP($ISP)
 * @method string getISP()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setFilter_1_Key($Filter_1_Key)
 * @method string getFilter_1_Key()
 * @method $this setFilter_2_Key($Filter_2_Key)
 * @method string getFilter_2_Key()
 * @method $this setFilter_1_Value($Filter_1_Value)
 * @method string getFilter_1_Value()
 * @method $this setFilter_2_Value($Filter_2_Value)
 * @method string getFilter_2_Value()
 * @method $this setLockReason($LockReason)
 * @method string getLockReason()
 * @method $this setAssociatedInstanceType($AssociatedInstanceType)
 * @method string getAssociatedInstanceType()
 * @method $this setAssociatedInstanceId($AssociatedInstanceId)
 * @method string getAssociatedInstanceId()
 * @method $this setChargeType($ChargeType)
 * @method string getChargeType()
 */
final class DescribeEipAddresses extends EcsCommon
{
    public $action = 'DescribeEipAddresses';
}
