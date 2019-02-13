<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 9:32
 */

namespace aliyun\sdk\cdn\request\data;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeDomainPvData.
 *
 * @method $this setDomainName($DomainName)
 * @method $this setStartTime($StartTime)
 * @method $this setEndTime($EndTime)
 */
class DescribeDomainPvData extends CdnCommon
{
    use Request;
}
