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
 * @method $this setMasterSlaveServerGroupName($MasterSlaveServerGroupName)
 * @method string getMasterSlaveServerGroupName()
 * @method $this setMasterSlaveBackendServers($MasterSlaveBackendServers)
 * @method string getMasterSlaveBackendServers()
 */
final class CreateMasterSlaveServerGroup extends SlbCommon
{
    public $action = 'CreateMasterSlaveServerGroup';
}
