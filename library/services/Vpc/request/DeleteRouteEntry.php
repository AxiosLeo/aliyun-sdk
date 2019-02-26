<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRouteTableId($RouteTableId)
 * @method string getRouteTableId()
 * @method $this setDestinationCidrBlock($DestinationCidrBlock)
 * @method string getDestinationCidrBlock()
 * @method $this setNextHopId($NextHopId)
 * @method string getNextHopId()
 * @method $this setNextHopList($NextHopList)
 * @method array getNextHopList()
 */
final class DeleteRouteEntry extends VpcCommon
{
    public $action = 'DeleteRouteEntry';
}
