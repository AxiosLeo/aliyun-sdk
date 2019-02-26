<?php
namespace aliyun\sdk\services\Domain\request;

use aliyun\sdk\services\Domain\DomainCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setSaleId($SaleId)
 * @method string getSaleId()
 * @method $this setAliyunDns($AliyunDns)
 * @method boolean getAliyunDns()
 * @method $this setDnsList($DnsList)
 * @method array getDnsList()
 */
final class SaveTaskForModifyingDomainDns extends DomainCommon
{
    public $action = 'SaveTaskForModifyingDomainDns';
}
