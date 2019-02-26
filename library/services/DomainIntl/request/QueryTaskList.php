<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setBeginCreateTime($BeginCreateTime)
 * @method integer getBeginCreateTime()
 * @method $this setEndCreateTime($EndCreateTime)
 * @method integer getEndCreateTime()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryTaskList extends DomainIntlCommon
{
    public $action = 'QueryTaskList';
}
