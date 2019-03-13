<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setDedicatedHostIds($DedicatedHostIds)
 * @method string getDedicatedHostIds()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDuration($Duration)
 * @method integer getDuration()
 * @method $this setPeriodUnit($PeriodUnit)
 * @method string getPeriodUnit()
 * @method $this setAutoRenew($AutoRenew)
 * @method boolean getAutoRenew()
 * @method $this setRenewalStatus($RenewalStatus)
 * @method string getRenewalStatus()
 */
final class ModifyDedicatedHostAutoRenewAttribute extends EcsCommon
{
    public $action = 'ModifyDedicatedHostAutoRenewAttribute';
}
