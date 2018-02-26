<?php
/**
 * Created by PhpStorm.
 * User: ydtec-hx
 * Date: 2018/2/26
 * Time: 16:09
 */

namespace aliyun\sdk\cdn\request\data;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeDomainBpsData
 * @package aliyun\sdk\cdn\request\ObjectCache
 * @method $this setDomainName($domain_name)
 * @method $this setStartTime($start_time)
 * @method $this setEndTime($end_time)
 * @method $this setTimeMerge($time_merge)
 * @method $this setInterval($interval)
 * @method $this setLocationNameEn($location_name_en)
 * @method $this setIspNameEn($isp_name_en)
 * @method $this setDomainType($domain_type)
 */
class DescribeDomainBpsData extends CdnCommon
{
    use Request;
}