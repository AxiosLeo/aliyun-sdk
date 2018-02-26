<?php
/**
 * Created by PhpStorm.
 * User: ydtec-hx
 * Date: 2018/2/26
 * Time: 16:42
 */

namespace aliyun\sdk\cdn\request\data;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeDomainSrcBpsData
 * @package aliyun\sdk\cdn\request\data
 * @method $this setDomainName($DomainName)
 * @method $this setStartTime($StartTime)
 * @method $this setEndTime($EndTime)
 * @method $this setTimeMerge($TimeMerge)
 * @method $this setInterval($Interval)
 */
class DescribeDomainSrcBpsData extends CdnCommon
{
    use Request;
}