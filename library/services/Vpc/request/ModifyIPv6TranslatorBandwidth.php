<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setIpv6TranslatorId($Ipv6TranslatorId)
 * @method string getIpv6TranslatorId()
 * @method $this setBandwidth($Bandwidth)
 * @method integer getBandwidth()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 */
final class ModifyIPv6TranslatorBandwidth extends VpcCommon
{
    public $action = 'ModifyIPv6TranslatorBandwidth';
}
