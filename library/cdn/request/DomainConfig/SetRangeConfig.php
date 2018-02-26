<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 14:28
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetRangeConfig
 * @package aliyun\sdk\cdn\request\DomainConfig
 * @method $this setDomainName($DomainName)
 * @method $this setEnable($enable)
 */
class SetRangeConfig extends CdnCommon
{
    use Request;
}