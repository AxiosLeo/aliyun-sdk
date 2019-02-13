<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 14:57
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetRefererConfig.
 *
 * @method $this setDomainName($domain_name)
 * @method $this setReferType($refer_type)
 * @method $this setReferList($refer_list)
 * @method $this setAllowEmpty($allow_empty)
 */
class SetRefererConfig extends CdnCommon
{
    use Request;
}
