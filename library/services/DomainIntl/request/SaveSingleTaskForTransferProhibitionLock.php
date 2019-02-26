<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setStatus($Status)
 * @method boolean getStatus()
 */
final class SaveSingleTaskForTransferProhibitionLock extends DomainIntlCommon
{
    public $action = 'SaveSingleTaskForTransferProhibitionLock';
}
