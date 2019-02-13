<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 15:08
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetFileCacheExpiredConfig.
 *
 * @method $this setDomainName($domain_name)
 * @method $this setCacheContent($cache_content)
 * @method $this setTTL($ttl)
 * @method $this setWeight($weight)
 */
class SetFileCacheExpiredConfig extends CdnCommon
{
    use Request;
}
