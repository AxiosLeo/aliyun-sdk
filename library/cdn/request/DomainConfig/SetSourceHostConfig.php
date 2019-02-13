<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 14:33
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetSourceHostConfig.
 *
 * @method $this setDomainName($domain_name)
 * @method $this setBackSrcDomain($back_src_domain)
 */
class SetSourceHostConfig extends CdnCommon
{
    use Request;
}
