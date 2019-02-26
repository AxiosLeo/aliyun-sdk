<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVRouterId($VRouterId)
 * @method string getVRouterId()
 * @method $this setRouteTableId($RouteTableId)
 * @method string getRouteTableId()
 * @method $this setRouterType($RouterType)
 * @method string getRouterType()
 * @method $this setRouterId($RouterId)
 * @method string getRouterId()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setRouteTableName($RouteTableName)
 * @method string getRouteTableName()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeRouteTables extends VpcCommon
{
    public $action = 'DescribeRouteTables';
}
