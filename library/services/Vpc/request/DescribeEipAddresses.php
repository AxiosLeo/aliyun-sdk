<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIncludeReservationData($IncludeReservationData)
 * @method boolean getIncludeReservationData()
 * @method $this setStatus($Status)
 * @method string getStatus()
 * @method $this setEipAddress($EipAddress)
 * @method string getEipAddress()
 * @method $this setAllocationId($AllocationId)
 * @method string getAllocationId()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setISP($ISP)
 * @method string getISP()
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
final class DescribeEipAddresses extends VpcCommon
{
    public $action = 'DescribeEipAddresses';
}
