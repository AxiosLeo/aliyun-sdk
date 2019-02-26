<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setPassword($Password)
 * @method string getPassword()
 * @method $this setPasswordResetRequired($PasswordResetRequired)
 * @method boolean getPasswordResetRequired()
 * @method $this setMFABindRequired($MFABindRequired)
 * @method boolean getMFABindRequired()
 */
final class CreateLoginProfile extends RamCommon
{
    public $action = 'CreateLoginProfile';
}
