<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setDedicatedHostIds($DedicatedHostIds)
 * @method string getDedicatedHostIds()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setPeriodUnit($PeriodUnit)
 * @method string getPeriodUnit()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class RenewDedicatedHosts extends EcsCommon
{
    public $action = 'RenewDedicatedHosts';
}
