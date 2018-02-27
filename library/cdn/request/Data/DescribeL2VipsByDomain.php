<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 9:45
 */

namespace aliyun\sdk\cdn\request\data;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeL2VipsByDomain
 * @package aliyun\sdk\cdn\request\data
 * @method $this setDomainName($DomainName)
 */
class DescribeL2VipsByDomain extends CdnCommon
{
    use Request;
}