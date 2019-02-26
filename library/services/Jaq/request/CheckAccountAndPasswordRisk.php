<?php
namespace aliyun\sdk\services\Jaq\request;

use aliyun\sdk\services\Jaq\JaqCommon;

/**
 * @method $this setCallerName($CallerName)
 * @method string getCallerName()
 * @method $this setAccountName($AccountName)
 * @method string getAccountName()
 * @method $this setPasswordHash($PasswordHash)
 * @method string getPasswordHash()
 */
final class CheckAccountAndPasswordRisk extends JaqCommon
{
    public $action = 'CheckAccountAndPasswordRisk';
}
