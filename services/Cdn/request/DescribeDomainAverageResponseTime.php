<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setTimeMerge($TimeMerge)
 * @method string getTimeMerge()
 * @method $this setOutString($OutString)
 * @method string getOutString()
 * @method $this setDomainType($DomainType)
 * @method string getDomainType()
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 * @method $this setInterval($Interval)
 * @method string getInterval()
 * @method $this setIspNameEn($IspNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($LocationNameEn)
 * @method string getLocationNameEn()
 */
final class DescribeDomainAverageResponseTime extends CdnCommon
{
    public $action = 'DescribeDomainAverageResponseTime';
}
