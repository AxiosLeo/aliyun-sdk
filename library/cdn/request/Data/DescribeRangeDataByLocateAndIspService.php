<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 9:42
 */

namespace aliyun\sdk\cdn\request\data;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeRangeDataByLocateAndIspService
 * @package aliyun\sdk\cdn\request\data
 * @method $this setDomainName($DomainName)
 * @method $this setStartTime($StartTime)
 * @method $this setEndTime($EndTime)
 * @method $this setLocationNames($location_names)
 * @method $this setIspNames($isp_names)
 */
class DescribeRangeDataByLocateAndIspService extends CdnCommon
{
    use Request;
}