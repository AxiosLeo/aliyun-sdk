<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setEmail($Email)
 * @method string getEmail()
 * @method $this setSendIfExist($SendIfExist)
 * @method boolean getSendIfExist()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 */
final class SubmitEmailVerification extends DomainIntlCommon
{
    public $action = 'SubmitEmailVerification';
}
