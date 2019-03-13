<?php
namespace aliyun\sdk\services\Alidns\request;

use aliyun\sdk\services\Alidns\AlidnsCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setNewDomain($NewDomain)
 * @method string getNewDomain()
 * @method $this setForce($Force)
 * @method boolean getForce()
 */
final class ChangeDomainOfDnsProduct extends AlidnsCommon
{
    public $action = 'ChangeDomainOfDnsProduct';
}
