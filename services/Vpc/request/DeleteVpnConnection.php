<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setVpnConnectionId($VpnConnectionId)
 * @method string getVpnConnectionId()
 */
final class DeleteVpnConnection extends VpcCommon
{
    public $action = 'DeleteVpnConnection';
}
