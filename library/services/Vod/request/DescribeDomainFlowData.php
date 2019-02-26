<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setAccessKeyId($AccessKeyId)
 * @method string getAccessKeyId()
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
 * @method $this setLocationNameEn($LocationNameEn)
 * @method string getLocationNameEn()
 * @method $this setIspNameEn($IspNameEn)
 * @method string getIspNameEn()
 */
final class DescribeDomainFlowData extends VodCommon
{
    public $action = 'DescribeDomainFlowData';
}
