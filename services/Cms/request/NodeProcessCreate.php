<?php
namespace aliyun\sdk\services\Cms\request;

use aliyun\sdk\services\Cms\CmsCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setName($Name)
 * @method string getName()
 * @method $this setProcessName($ProcessName)
 * @method string getProcessName()
 * @method $this setProcessUser($ProcessUser)
 * @method string getProcessUser()
 * @method $this setCommand($Command)
 * @method string getCommand()
 */
final class NodeProcessCreate extends CmsCommon
{
    public $action = 'NodeProcessCreate';
}
