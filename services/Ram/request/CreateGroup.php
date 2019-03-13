<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setComments($Comments)
 * @method string getComments()
 */
final class CreateGroup extends RamCommon
{
    public $action = 'CreateGroup';
}
