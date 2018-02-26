<?php
/**
 * Created by PhpStorm.
 * User: ydtec-hx
 * Date: 2018/2/26
 * Time: 16:43
 */

namespace aliyun\sdk\cdn\request\data;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeDomainHitRateData
 * @package aliyun\sdk\cdn\request\data
 * @method $this setDomainName($DomainName)
 * @method $this setStartTime($StartTime)
 * @method $this setEndTime($EndTime)
 * @method $this setTimeMerge($TimeMerge)
 * @method $this setInterval($Interval)
 * @method $this setLocationNameEn($LocationNameEn)
 * @method $this setIspNameEn($IspNameEn)
 */
class DescribeDomainHitRateData extends CdnCommon
{
    use Request;
}