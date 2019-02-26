<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setKeyword($Keyword)
 * @method string getKeyword()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 */
final class FuzzyMatchDomainSensitiveWord extends DomainIntlCommon
{
    public $action = 'FuzzyMatchDomainSensitiveWord';
}
