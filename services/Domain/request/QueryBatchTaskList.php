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
 * @method $this setBeginCreateTime($BeginCreateTime)
 * @method string getBeginCreateTime()
 * @method $this setEndCreateTime($EndCreateTime)
 * @method string getEndCreateTime()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryBatchTaskList extends DomainCommon
{
    public $action = 'QueryBatchTaskList';
}
