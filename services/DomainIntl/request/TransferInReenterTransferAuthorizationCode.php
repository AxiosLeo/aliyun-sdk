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
 * @method $this setTransferAuthorizationCode($TransferAuthorizationCode)
 * @method string getTransferAuthorizationCode()
 */
final class TransferInReenterTransferAuthorizationCode extends DomainIntlCommon
{
    public $action = 'TransferInReenterTransferAuthorizationCode';
}
