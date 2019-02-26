<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setSslVpnServerId($SslVpnServerId)
 * @method string getSslVpnServerId()
 * @method $this setSslVpnClientCertId($SslVpnClientCertId)
 * @method string getSslVpnClientCertId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setPageNumber($PageNumber)
 * @method integer getPageNumber()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class DescribeSslVpnClientCerts extends VpcCommon
{
    public $action = 'DescribeSslVpnClientCerts';
}
