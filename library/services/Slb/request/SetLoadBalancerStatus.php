<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setLoadBalancerId($LoadBalancerId)
 * @method string getLoadBalancerId()
 * @method $this setLoadBalancerStatus($LoadBalancerStatus)
 * @method string getLoadBalancerStatus()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 */
final class SetLoadBalancerStatus extends SlbCommon
{
    public $action = 'SetLoadBalancerStatus';
}
