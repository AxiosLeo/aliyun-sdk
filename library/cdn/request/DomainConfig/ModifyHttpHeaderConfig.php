<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 15:31
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class ModifyHttpHeaderConfig.
 *
 * @method $this setDomainName($domain_name)
 * @method $this setHeaderKey($header_key)
 * @method $this setHeaderValue($header_value)
 * @method $this setConfigID($config_id)
 */
class ModifyHttpHeaderConfig extends CdnCommon
{
    use Request;
}
