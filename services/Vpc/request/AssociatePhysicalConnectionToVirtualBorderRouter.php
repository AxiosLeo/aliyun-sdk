<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setVbrId($VbrId)
 * @method string getVbrId()
 * @method $this setPhysicalConnectionId($PhysicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setVlanId($VlanId)
 * @method string getVlanId()
 * @method $this setCircuitCode($CircuitCode)
 * @method string getCircuitCode()
 * @method $this setLocalGatewayIp($LocalGatewayIp)
 * @method string getLocalGatewayIp()
 * @method $this setPeerGatewayIp($PeerGatewayIp)
 * @method string getPeerGatewayIp()
 * @method $this setPeeringSubnetMask($PeeringSubnetMask)
 * @method string getPeeringSubnetMask()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class AssociatePhysicalConnectionToVirtualBorderRouter extends VpcCommon
{
    public $action = 'AssociatePhysicalConnectionToVirtualBorderRouter';
}
