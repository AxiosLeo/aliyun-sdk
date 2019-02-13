<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 15:17
 */

namespace aliyun\sdk\cdn\request\data;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeDomainReqHitRateData.
 *
 * @method $this setDomainName($DomainName)
 * @method $this setStartTime($StartTime)
 * @method $this setEndTime($EndTime)
 * @method $this setTimeMerge($TimeMerge)
 * @method $this setInterval($Interval)
 */
class DescribeDomainReqHitRateData extends CdnCommon
{
    use Request;
}
