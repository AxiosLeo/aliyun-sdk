<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRouteTableId($RouteTableId)
 * @method string getRouteTableId()
 * @method $this setDestinationCidrBlock($DestinationCidrBlock)
 * @method string getDestinationCidrBlock()
 * @method $this setNextHopId($NextHopId)
 * @method string getNextHopId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setNextHopType($NextHopType)
 * @method string getNextHopType()
 * @method $this setNextHopList($NextHopList)
 * @method array getNextHopList()
 */
final class CreateRouteEntry extends EcsCommon
{
    public $action = 'CreateRouteEntry';
}
