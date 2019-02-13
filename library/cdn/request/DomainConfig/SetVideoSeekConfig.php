<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 14:31
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetVideoSeekConfig.
 *
 * @method $this setDomainName($DomainName)
 * @method $this setEnable($enable)
 */
class SetVideoSeekConfig extends CdnCommon
{
    use Request;
}
