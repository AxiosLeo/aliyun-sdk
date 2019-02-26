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
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setInstanceVersion($InstanceVersion)
 * @method string getInstanceVersion()
 * @method $this setMonth($Month)
 * @method integer getMonth()
 * @method $this setToken($Token)
 * @method string getToken()
 */
final class CreateInstance extends AlidnsCommon
{
    public $action = 'CreateInstance';
}
