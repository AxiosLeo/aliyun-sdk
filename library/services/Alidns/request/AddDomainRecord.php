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
 * @method $this setRR($RR)
 * @method string getRR()
 * @method $this setType($Type)
 * @method string getType()
 * @method $this setValue($Value)
 * @method string getValue()
 * @method $this setTTL($TTL)
 * @method integer getTTL()
 * @method $this setPriority($Priority)
 * @method integer getPriority()
 * @method $this setLine($Line)
 * @method string getLine()
 */
final class AddDomainRecord extends AlidnsCommon
{
    public $action = 'AddDomainRecord';
}
