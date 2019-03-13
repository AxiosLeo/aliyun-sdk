<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setOldPassword($OldPassword)
 * @method string getOldPassword()
 * @method $this setNewPassword($NewPassword)
 * @method string getNewPassword()
 */
final class ChangePassword extends RamCommon
{
    public $action = 'ChangePassword';
}
