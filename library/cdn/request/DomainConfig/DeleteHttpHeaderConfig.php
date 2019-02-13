<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 15:33
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DeleteHttpHeaderConfig.
 *
 * @method $this setDomainName($domain_name)
 * @method $this setConfigID($config_id)
 */
class DeleteHttpHeaderConfig extends CdnCommon
{
    use Request;
}
