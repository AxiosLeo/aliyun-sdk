<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setFilter($Filter)
 * @method array getFilter()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setHostOperator($HostOperator)
 * @method string getHostOperator()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeAccessPoints extends VpcCommon
{
    public $action = 'DescribeAccessPoints';
}
