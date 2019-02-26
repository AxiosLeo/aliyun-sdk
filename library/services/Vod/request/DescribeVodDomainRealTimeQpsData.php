<?php
namespace aliyun\sdk\services\Vod\request;

use aliyun\sdk\services\Vod\VodCommon;

/**
 * @method $this setDomainName($DomainName)
 * @method string getDomainName()
 * @method $this setIspNameEn($IspNameEn)
 * @method string getIspNameEn()
 * @method $this setLocationNameEn($LocationNameEn)
 * @method string getLocationNameEn()
 * @method $this setStartTime($StartTime)
 * @method string getStartTime()
 * @method $this setEndTime($EndTime)
 * @method string getEndTime()
 */
final class DescribeVodDomainRealTimeQpsData extends VodCommon
{
    public $action = 'DescribeVodDomainRealTimeQpsData';
}
