<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setSslVpnClientCertId($SslVpnClientCertId)
 * @method string getSslVpnClientCertId()
 */
final class DeleteSslVpnClientCert extends VpcCommon
{
    public $action = 'DeleteSslVpnClientCert';
}
