<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setSslVpnServerId($SslVpnServerId)
 * @method string getSslVpnServerId()
 */
final class DeleteSslVpnServer extends VpcCommon
{
    public $action = 'DeleteSslVpnServer';
}
