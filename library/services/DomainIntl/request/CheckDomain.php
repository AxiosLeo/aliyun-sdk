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
 * @method $this setFeeCommand($FeeCommand)
 * @method string getFeeCommand()
 * @method $this setFeeCurrency($FeeCurrency)
 * @method string getFeeCurrency()
 * @method $this setFeePeriod($FeePeriod)
 * @method integer getFeePeriod()
 */
final class CheckDomain extends DomainIntlCommon
{
    public $action = 'CheckDomain';
}
