<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setActionType($ActionType)
 * @method string getActionType()
 */
final class CancelDomainVerification extends DomainIntlCommon
{
    public $action = 'CancelDomainVerification';
}
