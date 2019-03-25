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
 * @method $this setRealNameVerificationAction($RealNameVerificationAction)
 * @method string getRealNameVerificationAction()
 */
final class QueryFailReasonForDomainRealNameVerification extends DomainIntlCommon
{
    public $action = 'QueryFailReasonForDomainRealNameVerification';
}
