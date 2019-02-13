<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 14:43
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetForceRedirectConfig.
 *
 * @method $this setDomainName($domain_name)
 * @method $this setRedirectType($redirect_type)
 */
class SetForceRedirectConfig extends CdnCommon
{
    use Request;
}
