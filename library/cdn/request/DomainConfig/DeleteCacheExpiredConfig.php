<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 15:20
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DeleteCacheExpiredConfig.
 *
 * @method $this setDomainName($domain_name)
 * @method $this setCacheType($cache_type)
 * @method $this setConfigID($config_id)
 */
class DeleteCacheExpiredConfig extends CdnCommon
{
    use Request;
}
