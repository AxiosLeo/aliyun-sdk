<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setFilter($Filter)
 * @method array getFilter()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeAccessPoints extends EcsCommon
{
    public $action = 'DescribeAccessPoints';
}
