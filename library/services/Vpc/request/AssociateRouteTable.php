<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRouteTableId($RouteTableId)
 * @method string getRouteTableId()
 * @method $this setVSwitchId($VSwitchId)
 * @method string getVSwitchId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class AssociateRouteTable extends VpcCommon
{
    public $action = 'AssociateRouteTable';
}
