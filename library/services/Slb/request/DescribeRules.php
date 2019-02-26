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
 * @method $this setProtocol($Protocol)
 * @method string getProtocol()
 * @method $this setListenerPort($ListenerPort)
 * @method integer getListenerPort()
 */
final class DescribeRules extends SlbCommon
{
    public $action = 'DescribeRules';
}
