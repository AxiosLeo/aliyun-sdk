<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 */
final class RemoveUserFromGroup extends RamCommon
{
    public $action = 'RemoveUserFromGroup';
}
