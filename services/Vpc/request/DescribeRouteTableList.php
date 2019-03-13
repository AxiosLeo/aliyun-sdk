<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRouterType($RouterType)
 * @method string getRouterType()
 * @method $this setRouterId($RouterId)
 * @method string getRouterId()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setRouteTableId($RouteTableId)
 * @method string getRouteTableId()
 * @method $this setRouteTableName($RouteTableName)
 * @method string getRouteTableName()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 */
final class DescribeRouteTableList extends VpcCommon
{
    public $action = 'DescribeRouteTableList';
}
