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
 * @method $this setBandwidth($Bandwidth)
 * @method integer getBandwidth()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ModifyIpv6InternetBandwidth extends VpcCommon
{
    public $action = 'ModifyIpv6InternetBandwidth';
}
