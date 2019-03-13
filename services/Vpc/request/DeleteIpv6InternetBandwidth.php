<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6AddressId($Ipv6AddressId)
 * @method string getIpv6AddressId()
 * @method $this setIpv6InternetBandwidthId($Ipv6InternetBandwidthId)
 * @method string getIpv6InternetBandwidthId()
 */
final class DeleteIpv6InternetBandwidth extends VpcCommon
{
    public $action = 'DeleteIpv6InternetBandwidth';
}
