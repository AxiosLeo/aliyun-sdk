<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setNewUserName($NewUserName)
 * @method string getNewUserName()
 * @method $this setNewDisplayName($NewDisplayName)
 * @method string getNewDisplayName()
 * @method $this setNewMobilePhone($NewMobilePhone)
 * @method string getNewMobilePhone()
 * @method $this setNewEmail($NewEmail)
 * @method string getNewEmail()
 * @method $this setNewComments($NewComments)
 * @method string getNewComments()
 */
final class UpdateUser extends RamCommon
{
    public $action = 'UpdateUser';
}
