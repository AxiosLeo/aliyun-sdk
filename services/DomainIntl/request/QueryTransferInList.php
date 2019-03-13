<?php
namespace aliyun\sdk\services\DomainIntl\request;

use aliyun\sdk\services\DomainIntl\DomainIntlCommon;

/**
 * @method $this setUserClientIp($UserClientIp)
 * @method string getUserClientIp()
 * @method $this setLang($Lang)
 * @method string getLang()
 * @method $this setSubmissionStartDate($SubmissionStartDate)
 * @method integer getSubmissionStartDate()
 * @method $this setSubmissionEndDate($SubmissionEndDate)
 * @method integer getSubmissionEndDate()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setSimpleTransferInStatus($SimpleTransferInStatus)
 * @method string getSimpleTransferInStatus()
 * @method $this setPageNum($PageNum)
 * @method integer getPageNum()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 */
final class QueryTransferInList extends DomainIntlCommon
{
    public $action = 'QueryTransferInList';
}
