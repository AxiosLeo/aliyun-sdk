<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setVRouterId($VRouterId)
 * @method string getVRouterId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeVRouters extends VpcCommon
{
    public $action = 'DescribeVRouters';
}
