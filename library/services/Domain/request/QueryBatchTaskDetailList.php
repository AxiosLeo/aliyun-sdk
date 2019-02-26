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
 * @method $this setTaskNo($TaskNo)
 * @method string getTaskNo()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setSaleId($SaleId)
 * @method string getSaleId()
 * @method $this setTaskStatus($TaskStatus)
 * @method integer getTaskStatus()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryBatchTaskDetailList extends DomainCommon
{
    public $action = 'QueryBatchTaskDetailList';
}
