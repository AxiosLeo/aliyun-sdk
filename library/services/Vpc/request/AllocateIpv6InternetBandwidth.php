<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($Ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setIpv6AddressId($Ipv6AddressId)
 * @method string getIpv6AddressId()
 * @method $this setInternetChargeType($InternetChargeType)
 * @method string getInternetChargeType()
 * @method $this setBandwidth($Bandwidth)
 * @method integer getBandwidth()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class AllocateIpv6InternetBandwidth extends VpcCommon
{
    public $action = 'AllocateIpv6InternetBandwidth';
}
