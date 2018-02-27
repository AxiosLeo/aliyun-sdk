<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 9:38
 */

namespace aliyun\sdk\cdn\request\data;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeDomainBpsDataByTimeStamp
 * @package aliyun\sdk\cdn\request\data
 * @method $this setDomainName($DomainName)
 * @method $this setLocationNames($location_names)
 * @method $this setIspNames($isp_names)
 * @method $this setTimePoint($time_point)
 */
class DescribeDomainBpsDataByTimeStamp extends CdnCommon
{
    use Request;
}