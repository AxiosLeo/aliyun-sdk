<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSslVpnClientCertId($SslVpnClientCertId)
 * @method string getSslVpnClientCertId()
 */
final class DescribeSslVpnClientCert extends VpcCommon
{
    public $action = 'DescribeSslVpnClientCert';
}
