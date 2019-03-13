<?php
namespace aliyun\sdk\services\Vpc\request;

use aliyun\sdk\services\Vpc\VpcCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setClientToken($ClientToken)
 * @method string getClientToken()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setSpec($Spec)
 * @method string getSpec()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setPricingCycle($PricingCycle)
 * @method string getPricingCycle()
 * @method $this setDuration($Duration)
 * @method integer getDuration()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 * @method $this setBandwidth($Bandwidth)
 * @method integer getBandwidth()
 */
final class CreateIPv6Translator extends VpcCommon
{
    public $action = 'CreateIPv6Translator';
}
