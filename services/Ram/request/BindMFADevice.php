<?php
namespace aliyun\sdk\services\Ram\request;

use aliyun\sdk\services\Ram\RamCommon;

/**
 * @method $this setSerialNumber($SerialNumber)
 * @method string getSerialNumber()
 * @method $this setUserName($UserName)
 * @method string getUserName()
 * @method $this setAuthenticationCode1($AuthenticationCode1)
 * @method string getAuthenticationCode1()
 * @method $this setAuthenticationCode2($AuthenticationCode2)
 * @method string getAuthenticationCode2()
 */
final class BindMFADevice extends RamCommon
{
    public $action = 'BindMFADevice';
}
