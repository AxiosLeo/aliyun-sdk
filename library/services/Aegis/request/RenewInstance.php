<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setVmNumber($VmNumber)
 * @method string getVmNumber()
 * @method $this setDuration($Duration)
 * @method integer getDuration()
 * @method $this setPricingCycle($PricingCycle)
 * @method string getPricingCycle()
 */
final class RenewInstance extends AegisCommon
{
    public $action = 'RenewInstance';
}
