<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 9:47
 */

namespace aliyun\sdk\cdn\request\data;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeCdnDomainLogs.
 *
 * @method $this setDomainName($domain_name)
 * @method $this setLogDay($LogDay)
 * @method $this setStartTime($StartTime)
 * @method $this setEndTime($EndTime)
 * @method $this setPageSize($PageSize)
 * @method $this setPageNumber($PageNumber)
 */
class DescribeCdnDomainLogs extends CdnCommon
{
    use Request;
}
