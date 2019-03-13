<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setAddress($Address)
 * @method string getAddress()
 */
final class SaveSingleTaskForAssociatingEns extends DomainIntlCommon
{
    public $action = 'SaveSingleTaskForAssociatingEns';
}
