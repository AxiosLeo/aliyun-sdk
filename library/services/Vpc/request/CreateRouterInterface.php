<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setRole($Role)
 * @method string getRole()
 * @method $this setOppositeRegionId($OppositeRegionId)
 * @method string getOppositeRegionId()
 * @method $this setSpec($Spec)
 * @method string getSpec()
 * @method $this setRouterType($RouterType)
 * @method string getRouterType()
 * @method $this setRouterId($RouterId)
 * @method string getRouterId()
 * @method $this setOppositeInterfaceId($OppositeInterfaceId)
 * @method string getOppositeInterfaceId()
 * @method $this setOppositeRouterId($OppositeRouterId)
 * @method string getOppositeRouterId()
 * @method $this setOppositeRouterType($OppositeRouterType)
 * @method string getOppositeRouterType()
 * @method $this setOppositeInterfaceOwnerId($OppositeInterfaceOwnerId)
 * @method string getOppositeInterfaceOwnerId()
 * @method $this setHealthCheckSourceIp($HealthCheckSourceIp)
 * @method string getHealthCheckSourceIp()
 * @method $this setHealthCheckTargetIp($HealthCheckTargetIp)
 * @method string getHealthCheckTargetIp()
 * @method $this setAccessPointId($AccessPointId)
 * @method string getAccessPointId()
 * @method $this setOppositeAccessPointId($OppositeAccessPointId)
 * @method string getOppositeAccessPointId()
 * @method $this setDescription($Description)
 * @method string getDescription()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setPricingCycle($PricingCycle)
 * @method string getPricingCycle()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class CreateRouterInterface extends VpcCommon
{
    public $action = 'CreateRouterInterface';
}
