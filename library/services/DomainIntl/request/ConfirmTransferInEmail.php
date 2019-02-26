<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setEmail($Email)
 * @method string getEmail()
 * @method $this setDomainName($DomainName)
 * @method array getDomainName()
 */
final class ConfirmTransferInEmail extends DomainIntlCommon
{
    public $action = 'ConfirmTransferInEmail';
}
