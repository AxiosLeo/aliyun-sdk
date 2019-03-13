<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
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
 * @method $this setTaskResultStatus($TaskResultStatus)
 * @method integer getTaskResultStatus()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class PollTaskResult extends DomainIntlCommon
{
    public $action = 'PollTaskResult';
}
