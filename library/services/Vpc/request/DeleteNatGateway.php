<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNatGatewayId($NatGatewayId)
 * @method string getNatGatewayId()
 * @method $this setForce($Force)
 * @method boolean getForce()
 */
final class DeleteNatGateway extends VpcCommon
{
    public $action = 'DeleteNatGateway';
}
