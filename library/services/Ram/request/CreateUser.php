<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setDisplayName($DisplayName)
 * @method string getDisplayName()
 * @method $this setMobilePhone($MobilePhone)
 * @method string getMobilePhone()
 * @method $this setEmail($Email)
 * @method string getEmail()
 * @method $this setComments($Comments)
 * @method string getComments()
 */
final class CreateUser extends RamCommon
{
    public $action = 'CreateUser';
}
