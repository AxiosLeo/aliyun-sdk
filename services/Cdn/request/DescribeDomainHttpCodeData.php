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
 * @method $this setInterval($Interval)
 * @method string getInterval()
 * @method $this setIspNameEn($IspNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($LocationNameEn)
 * @method string getLocationNameEn()
 * @method $this setTimeMerge($TimeMerge)
 * @method string getTimeMerge()
 */
final class DescribeDomainHttpCodeData extends CdnCommon
{
    public $action = 'DescribeDomainHttpCodeData';
}
