<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 15:28
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetHttpHeaderConfig
 * @package aliyun\sdk\cdn\request\DomainConfig
 * @method $this setDomainName($domain_name)
 * @method $this setHeaderKey($header_key)
 * @method $this setHeaderValue($header_value)
 */
class SetHttpHeaderConfig extends CdnCommon
{
    use Request;
}