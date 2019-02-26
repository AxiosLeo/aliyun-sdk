<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setGroupName($GroupName)
 * @method string getGroupName()
 * @method $this setNewGroupName($NewGroupName)
 * @method string getNewGroupName()
 * @method $this setNewComments($NewComments)
 * @method string getNewComments()
 */
final class UpdateGroup extends RamCommon
{
    public $action = 'UpdateGroup';
}
