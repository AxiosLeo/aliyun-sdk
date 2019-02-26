<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setIpv6GatewayId($Ipv6GatewayId)
 * @method string getIpv6GatewayId()
 * @method $this setSpec($Spec)
 * @method string getSpec()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ModifyIpv6GatewaySpec extends VpcCommon
{
    public $action = 'ModifyIpv6GatewaySpec';
}
