<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setClaimKey($ClaimKey)
 * @method string getClaimKey()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 */
final class LookupTmchNotice extends DomainIntlCommon
{
    public $action = 'LookupTmchNotice';
}
