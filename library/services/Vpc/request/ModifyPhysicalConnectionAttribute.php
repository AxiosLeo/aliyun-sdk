<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPhysicalConnectionId($PhysicalConnectionId)
 * @method string getPhysicalConnectionId()
 * @method $this setLineOperator($LineOperator)
 * @method string getLineOperator()
 * @method $this setbandwidth($bandwidth)
 * @method integer getbandwidth()
 * @method $this setPeerLocation($PeerLocation)
 * @method string getPeerLocation()
 * @method $this setPortType($PortType)
 * @method string getPortType()
 * @method $this setRedundantPhysicalConnectionId($RedundantPhysicalConnectionId)
 * @method string getRedundantPhysicalConnectionId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setCircuitCode($CircuitCode)
 * @method string getCircuitCode()
 */
final class ModifyPhysicalConnectionAttribute extends VpcCommon
{
    public $action = 'ModifyPhysicalConnectionAttribute';
}
