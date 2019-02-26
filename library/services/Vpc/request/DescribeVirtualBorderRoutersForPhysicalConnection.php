<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setFilter($Filter)
 * @method array getFilter()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($PhysicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeVirtualBorderRoutersForPhysicalConnection extends VpcCommon
{
    public $action = 'DescribeVirtualBorderRoutersForPhysicalConnection';
}
