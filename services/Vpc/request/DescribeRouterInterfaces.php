<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIncludeReservationData($IncludeReservationData)
 * @method boolean getIncludeReservationData()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setFilter($Filter)
 * @method array getFilter()
 */
final class DescribeRouterInterfaces extends VpcCommon
{
    public $action = 'DescribeRouterInterfaces';
}
