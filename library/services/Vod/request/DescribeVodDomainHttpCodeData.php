<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setInterval($Interval)
 * @method string getInterval()
 */
final class DescribeVodDomainHttpCodeData extends VodCommon
{
    public $action = 'DescribeVodDomainHttpCodeData';
}
