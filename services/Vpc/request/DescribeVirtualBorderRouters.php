<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setFilter($Filter)
 * @method array getFilter()
 */
final class DescribeVirtualBorderRouters extends VpcCommon
{
    public $action = 'DescribeVirtualBorderRouters';
}
