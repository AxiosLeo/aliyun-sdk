<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setTag($Tag)
 * @method array getTag()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setZoneId($ZoneId)
 * @method string getZoneId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVSwitchName($VSwitchName)
 * @method string getVSwitchName()
 * @method $this setIsDefault($IsDefault)
 * @method boolean getIsDefault()
 * @method $this setRouteTableId($RouteTableId)
 * @method string getRouteTableId()
 * @method $this setResourceGroupId($ResourceGroupId)
 * @method string getResourceGroupId()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeVSwitches extends VpcCommon
{
    public $action = 'DescribeVSwitches';
}
