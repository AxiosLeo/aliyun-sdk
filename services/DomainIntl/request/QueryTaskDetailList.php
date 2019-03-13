<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setTaskStatus($TaskStatus)
 * @method integer getTaskStatus()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setTaskNo($TaskNo)
 * @method string getTaskNo()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setInstanceId($InstanceId)
 * @method string getInstanceId()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryTaskDetailList extends DomainIntlCommon
{
    public $action = 'QueryTaskDetailList';
}
