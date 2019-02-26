<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setEmail($Email)
 * @method string getEmail()
 */
final class EmailVerified extends DomainIntlCommon
{
    public $action = 'EmailVerified';
}
