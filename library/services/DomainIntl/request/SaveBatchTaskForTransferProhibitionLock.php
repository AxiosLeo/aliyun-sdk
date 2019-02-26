<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setDomainName($DomainName)
 * @method array getDomainName()
 * @method $this setStatus($Status)
 * @method boolean getStatus()
 */
final class SaveBatchTaskForTransferProhibitionLock extends DomainIntlCommon
{
    public $action = 'SaveBatchTaskForTransferProhibitionLock';
}
