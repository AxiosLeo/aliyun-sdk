<?php
namespace aliyun\sdk\services\Ots\request;

use aliyun\sdk\services\Ots\OtsCommon;

/**
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setVpcId($VpcId)
 * @method string getVpcId()
 * @method $this setVirtualSwitchId($VirtualSwitchId)
 * @method string getVirtualSwitchId()
 * @method $this setInstanceName($InstanceName)
 * @method string getInstanceName()
 * @method $this setInstanceVpcName($InstanceVpcName)
 * @method string getInstanceVpcName()
 * @method $this setRegionNo($RegionNo)
 * @method string getRegionNo()
 * @method $this setNetwork($Network)
 * @method string getNetwork()
 */
final class BindInstance2Vpc extends OtsCommon
{
    public $action = 'BindInstance2Vpc';
}
