<?php
namespace aliyun\sdk\services\Cdn\request;

use aliyun\sdk\services\Cdn\CdnCommon;

/**
 * @method $this setSecurityToken($SecurityToken)
 * @method string getSecurityToken()
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
 * @method $this setDomainType($DomainType)
 * @method string getDomainType()
 * @method $this setFixTimeGap($FixTimeGap)
 * @method string getFixTimeGap()
 */
final class DescribeDomainBpsData extends CdnCommon
{
    public $action = 'DescribeDomainBpsData';
}
