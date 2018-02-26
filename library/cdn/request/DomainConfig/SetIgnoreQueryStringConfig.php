<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 14:20
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetIgnoreQueryStringConfig
 * @package aliyun\sdk\cdn\request\DomainConfig
 * @method $this setDomainName($DomainName)
 * @method $this setEnable($enable)
 * @method $this setHashKeyArgs($hash_key_args)
 */
class SetIgnoreQueryStringConfig extends CdnCommon
{
    use Request;
}