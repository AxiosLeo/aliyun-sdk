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
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setCreateTimeCursor($CreateTimeCursor)
 * @method integer getCreateTimeCursor()
 * @method $this setTaskNoCursor($TaskNoCursor)
 * @method string getTaskNoCursor()
 */
final class QueryTaskInfoHistory extends DomainIntlCommon
{
    public $action = 'QueryTaskInfoHistory';
}
