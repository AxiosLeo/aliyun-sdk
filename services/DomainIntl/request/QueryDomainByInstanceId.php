<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 */
final class QueryDomainByInstanceId extends DomainIntlCommon
{
    public $action = 'QueryDomainByInstanceId';
}
