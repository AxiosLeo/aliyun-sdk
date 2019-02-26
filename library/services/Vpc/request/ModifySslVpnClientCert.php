<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSslVpnClientCertId($SslVpnClientCertId)
 * @method string getSslVpnClientCertId()
 * @method $this setName($Name)
 * @method string getName()
 */
final class ModifySslVpnClientCert extends VpcCommon
{
    public $action = 'ModifySslVpnClientCert';
}
