<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setLogDay($LogDay)
 * @method string getLogDay()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setPageSize($PageSize)
 * @method integer getPageSize()
 * @method $this setPageNo($PageNo)
 * @method integer getPageNo()
 */
final class DescribeCdnDomainLogs extends VodCommon
{
    public $action = 'DescribeCdnDomainLogs';
}
