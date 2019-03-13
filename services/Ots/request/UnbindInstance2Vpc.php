<?php
namespace aliyun\sdk\services\Ots\request;

use aliyun\sdk\services\Ots\OtsCommon;

/**
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setInstanceName($InstanceName)
 * @method string getInstanceName()
 * @method $this setInstanceVpcName($InstanceVpcName)
 * @method string getInstanceVpcName()
 * @method $this setRegionNo($RegionNo)
 * @method string getRegionNo()
 */
final class UnbindInstance2Vpc extends OtsCommon
{
    public $action = 'UnbindInstance2Vpc';
}
