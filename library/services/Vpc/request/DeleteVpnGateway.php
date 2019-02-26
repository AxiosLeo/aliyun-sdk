<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setVpnGatewayId($VpnGatewayId)
 * @method string getVpnGatewayId()
 */
final class DeleteVpnGateway extends VpcCommon
{
    public $action = 'DeleteVpnGateway';
}
