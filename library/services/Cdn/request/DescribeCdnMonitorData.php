<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setInterval($Interval)
 * @method string getInterval()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 */
final class DescribeCdnMonitorData extends CdnCommon
{
    public $action = 'DescribeCdnMonitorData';
}
