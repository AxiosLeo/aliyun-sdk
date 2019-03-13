<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setDomainName($DomainName)
 * @method array getDomainName()
 * @method $this setAliyunDns($AliyunDns)
 * @method boolean getAliyunDns()
 * @method $this setDomainNameServer($DomainNameServer)
 * @method array getDomainNameServer()
 */
final class SaveBatchTaskForModifyingDomainDns extends DomainIntlCommon
{
    public $action = 'SaveBatchTaskForModifyingDomainDns';
}
