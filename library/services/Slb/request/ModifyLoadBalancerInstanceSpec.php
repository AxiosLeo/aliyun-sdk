<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setLoadBalancerId($LoadBalancerId)
 * @method string getLoadBalancerId()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setLoadBalancerSpec($LoadBalancerSpec)
 * @method string getLoadBalancerSpec()
 * @method $this setAutoPay($AutoPay)
 * @method boolean getAutoPay()
 */
final class ModifyLoadBalancerInstanceSpec extends SlbCommon
{
    public $action = 'ModifyLoadBalancerInstanceSpec';
}
