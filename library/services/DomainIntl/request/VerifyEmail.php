<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setToken($Token)
 * @method string getToken()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 */
final class VerifyEmail extends DomainIntlCommon
{
    public $action = 'VerifyEmail';
}
