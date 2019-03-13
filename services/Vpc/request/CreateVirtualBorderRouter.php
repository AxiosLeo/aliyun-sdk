<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($PhysicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setVbrOwnerId($VbrOwnerId)
 * @method integer getVbrOwnerId()
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
 */
final class CreateVirtualBorderRouter extends VpcCommon
{
    public $action = 'CreateVirtualBorderRouter';
}
