<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

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
 * @method $this setRouteTableName($RouteTableName)
 * @method string getRouteTableName()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeRouteTables extends EcsCommon
{
    public $action = 'DescribeRouteTables';
}
