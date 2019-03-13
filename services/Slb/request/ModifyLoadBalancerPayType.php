<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setLoadBalancerId($LoadBalancerId)
 * @method string getLoadBalancerId()
 * @method $this setPayType($PayType)
 * @method string getPayType()
 * @method $this setPricingCycle($PricingCycle)
 * @method string getPricingCycle()
 * @method $this setDuration($Duration)
 * @method integer getDuration()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 */
final class ModifyLoadBalancerPayType extends SlbCommon
{
    public $action = 'ModifyLoadBalancerPayType';
}
