<?php
namespace aliyun\sdk\services\Slb\request;

use aliyun\sdk\services\Slb\SlbCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setRegionId($RegionId)
 * @method string getRegionId()
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setTags($Tags)
 * @method string getTags()
 * @method $this setLoadBalancerId($LoadBalancerId)
 * @method string getLoadBalancerId()
 * @method $this setMasterSlaveVServerGroupName($MasterSlaveVServerGroupName)
 * @method string getMasterSlaveVServerGroupName()
 * @method $this setMasterSlaveBackendServers($MasterSlaveBackendServers)
 * @method string getMasterSlaveBackendServers()
 */
final class CreateMasterSlaveVServerGroup extends SlbCommon
{
    public $action = 'CreateMasterSlaveVServerGroup';
}
