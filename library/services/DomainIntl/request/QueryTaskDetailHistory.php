<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setTaskNo($TaskNo)
 * @method string getTaskNo()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setDomainNameCursor($DomainNameCursor)
 * @method string getDomainNameCursor()
 * @method $this setTaskStatus($TaskStatus)
 * @method integer getTaskStatus()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setTaskDetailNoCursor($TaskDetailNoCursor)
 * @method string getTaskDetailNoCursor()
 */
final class QueryTaskDetailHistory extends DomainIntlCommon
{
    public $action = 'QueryTaskDetailHistory';
}
