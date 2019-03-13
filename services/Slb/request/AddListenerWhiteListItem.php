<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setLoadBalancerId($LoadBalancerId)
 * @method string getLoadBalancerId()
 * @method $this setListenerPort($ListenerPort)
 * @method integer getListenerPort()
 * @method $this setSourceItems($SourceItems)
 * @method string getSourceItems()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setProtocol($Protocol)
 * @method string getProtocol()
 * @method $this setTags($Tags)
 * @method string getTags()
 */
final class AddListenerWhiteListItem extends SlbCommon
{
    public $action = 'AddListenerWhiteListItem';
}
