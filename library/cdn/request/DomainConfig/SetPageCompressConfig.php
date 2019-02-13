<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 09:47
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetPageCompressConfig.
 *
 * @method $this setDomainName($domain_name)
 * @method $this setEnable($enable)
 */
class SetPageCompressConfig extends CdnCommon
{
    use Request;
}
