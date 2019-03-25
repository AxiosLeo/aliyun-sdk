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
 * @method $this setFetchImage($FetchImage)
 * @method boolean getFetchImage()
 */
final class QueryDomainRealNameVerificationInfo extends DomainIntlCommon
{
    public $action = 'QueryDomainRealNameVerificationInfo';
}
