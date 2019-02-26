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
final class BatchFuzzyMatchDomainSensitiveWord extends DomainIntlCommon
{
    public $action = 'BatchFuzzyMatchDomainSensitiveWord';
}
