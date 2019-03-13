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
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class DescribePhysicalConnections extends VpcCommon
{
    public $action = 'DescribePhysicalConnections';
}
