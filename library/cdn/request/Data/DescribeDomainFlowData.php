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
 * Class DescribeDomainFlowData.
 *
 * @method $this setDomainName($DomainName)
 * @method $this setStartTime($StartTime)
 * @method $this setEndTime($EndTime)
 * @method $this setTimeMerge($TimeMerge)
 * @method $this setInterval($Interval)
 * @method $this setLocationNameEn($LocationNameEn)
 * @method $this setIspNameEn($IspNameEn)
 * @method $this setDomainType($DomainType)
 */
class DescribeDomainFlowData extends CdnCommon
{
    use Request;
}
