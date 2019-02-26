<?php
namespace aliyun\sdk\services\Ots\request;

use aliyun\sdk\services\Ots\OtsCommon;

/**
 * @method $this setaccess_key_id($access_key_id)
 * @method string getaccess_key_id()
 * @method $this setInstanceName($InstanceName)
 * @method string getInstanceName()
 * @method $this setNetwork($Network)
 * @method string getNetwork()
 */
final class UpdateInstance extends OtsCommon
{
    public $action = 'UpdateInstance';
}
