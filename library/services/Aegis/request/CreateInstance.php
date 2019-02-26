<?php
namespace aliyun\sdk\services\Aegis\request;

use aliyun\sdk\services\Aegis\AegisCommon;

/**
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setDuration($Duration)
 * @method integer getDuration()
 * @method $this setPricingCycle($PricingCycle)
 * @method string getPricingCycle()
 * @method $this setVersionCode($VersionCode)
 * @method integer getVersionCode()
 * @method $this setVmNumber($VmNumber)
 * @method integer getVmNumber()
 * @method $this setIsAutoRenew($IsAutoRenew)
 * @method boolean getIsAutoRenew()
 * @method $this setAutoRenewDuration($AutoRenewDuration)
 * @method integer getAutoRenewDuration()
 */
final class CreateInstance extends AegisCommon
{
    public $action = 'CreateInstance';
}
