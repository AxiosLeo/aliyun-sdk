<?php
namespace aliyun\sdk\services\Ecs\request;

use aliyun\sdk\services\Ecs\EcsCommon;

/**
 * @method $this setInstanceIds($InstanceIds)
 * @method string getInstanceIds()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setPeriod($Period)
 * @method integer getPeriod()
 * @method $this setPeriodUnit($PeriodUnit)
 * @method string getPeriodUnit()
 * @method $this setIncludeDataDisks($IncludeDataDisks)
 * @method boolean getIncludeDataDisks()
 * @method $this setDryRun($DryRun)
 * @method boolean getDryRun()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setInstanceChargeType($InstanceChargeType)
 * @method string getInstanceChargeType()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 */
final class ModifyInstanceChargeType extends EcsCommon
{
    public $action = 'ModifyInstanceChargeType';
}
