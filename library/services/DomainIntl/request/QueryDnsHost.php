<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 */
final class QueryDnsHost extends DomainIntlCommon
{
    public $action = 'QueryDnsHost';
}
