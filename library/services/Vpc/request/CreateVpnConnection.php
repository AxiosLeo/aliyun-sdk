<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setCustomerGatewayId($CustomerGatewayId)
 * @method string getCustomerGatewayId()
 * @method $this setVpnGatewayId($VpnGatewayId)
 * @method string getVpnGatewayId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setLocalSubnet($LocalSubnet)
 * @method string getLocalSubnet()
 * @method $this setRemoteSubnet($RemoteSubnet)
 * @method string getRemoteSubnet()
 * @method $this setEffectImmediately($EffectImmediately)
 * @method boolean getEffectImmediately()
 * @method $this setIkeConfig($IkeConfig)
 * @method string getIkeConfig()
 * @method $this setIpsecConfig($IpsecConfig)
 * @method string getIpsecConfig()
 */
final class CreateVpnConnection extends VpcCommon
{
    public $action = 'CreateVpnConnection';
}
