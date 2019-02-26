<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

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
final class DescribeVirtualBorderRouters extends EcsCommon
{
    public $action = 'DescribeVirtualBorderRouters';
}
