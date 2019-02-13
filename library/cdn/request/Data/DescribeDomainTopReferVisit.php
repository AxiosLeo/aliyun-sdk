<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 9:37
 */

namespace aliyun\sdk\cdn\request\data;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeDomainTopReferVisit.
 *
 * @method $this setDomainName($DomainName)
 * @method $this setStartTime($StartTime)
 */
class DescribeDomainTopReferVisit extends CdnCommon
{
    use Request;
}
