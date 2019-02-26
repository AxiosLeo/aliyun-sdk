<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setNextHopList($NextHopList)
 * @method array getNextHopList()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRouteTableId($RouteTableId)
 * @method string getRouteTableId()
 * @method $this setDestinationCidrBlock($DestinationCidrBlock)
 * @method string getDestinationCidrBlock()
 * @method $this setNextHopId($NextHopId)
 * @method string getNextHopId()
 */
final class DeleteRouteEntry extends EcsCommon
{
    public $action = 'DeleteRouteEntry';
}
