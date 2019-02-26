<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 */
final class AddUserToGroup extends RamCommon
{
    public $action = 'AddUserToGroup';
}
