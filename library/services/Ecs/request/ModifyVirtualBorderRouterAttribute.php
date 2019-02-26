<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVbrId($VbrId)
 * @method string getVbrId()
 * @method $this setVlanId($VlanId)
 * @method integer getVlanId()
 * @method $this setCircuitCode($CircuitCode)
 * @method string getCircuitCode()
 * @method $this setLocalGatewayIp($LocalGatewayIp)
 * @method string getLocalGatewayIp()
 * @method $this setPeerGatewayIp($PeerGatewayIp)
 * @method string getPeerGatewayIp()
 * @method $this setPeeringSubnetMask($PeeringSubnetMask)
 * @method string getPeeringSubnetMask()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setUserCidr($UserCidr)
 * @method string getUserCidr()
 */
final class ModifyVirtualBorderRouterAttribute extends EcsCommon
{
    public $action = 'ModifyVirtualBorderRouterAttribute';
}
