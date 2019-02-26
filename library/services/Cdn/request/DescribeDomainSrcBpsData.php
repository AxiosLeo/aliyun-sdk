<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setTimeMerge($TimeMerge)
 * @method string getTimeMerge()
 * @method $this setInterval($Interval)
 * @method string getInterval()
 * @method $this setFixTimeGap($FixTimeGap)
 * @method string getFixTimeGap()
 */
final class DescribeDomainSrcBpsData extends CdnCommon
{
    public $action = 'DescribeDomainSrcBpsData';
}
