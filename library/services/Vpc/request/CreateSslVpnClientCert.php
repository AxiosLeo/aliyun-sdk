<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSslVpnServerId($SslVpnServerId)
 * @method string getSslVpnServerId()
 * @method $this setName($Name)
 * @method string getName()
 */
final class CreateSslVpnClientCert extends VpcCommon
{
    public $action = 'CreateSslVpnClientCert';
}
