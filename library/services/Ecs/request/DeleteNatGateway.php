<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setNatGatewayId($NatGatewayId)
 * @method string getNatGatewayId()
 */
final class DeleteNatGateway extends EcsCommon
{
    public $action = 'DeleteNatGateway';
}
