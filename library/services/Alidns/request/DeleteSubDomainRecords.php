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
 */
final class DeleteSubDomainRecords extends AlidnsCommon
{
    public $action = 'DeleteSubDomainRecords';
}
