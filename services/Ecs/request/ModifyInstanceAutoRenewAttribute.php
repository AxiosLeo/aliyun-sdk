<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setSourceRegionId($SourceRegionId)
 * @method string getSourceRegionId()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setDuration($Duration)
 * @method integer getDuration()
 * @method $this setAutoRenew($AutoRenew)
 * @method boolean getAutoRenew()
 * @method $this setRenewalStatus($RenewalStatus)
 * @method string getRenewalStatus()
 * @method $this setPeriodUnit($PeriodUnit)
 * @method string getPeriodUnit()
 */
final class ModifyInstanceAutoRenewAttribute extends EcsCommon
{
    public $action = 'ModifyInstanceAutoRenewAttribute';
}
