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
 * @method $this setPrivateIpAddress($PrivateIpAddress)
 * @method string getPrivateIpAddress()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setRouteEntryName($RouteEntryName)
 * @method string getRouteEntryName()
 * @method $this setNextHopType($NextHopType)
 * @method string getNextHopType()
 * @method $this setNextHopList($NextHopList)
 * @method array getNextHopList()
 */
final class CreateRouteEntry extends VpcCommon
{
    public $action = 'CreateRouteEntry';
}
