<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 14:40
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetErrorPageConfig.
 *
 * @method $this setDomainName($DomainName)
 * @method $this setPageType($page_type)
 * @method $this setCustomPageUrl($custom_page_url)
 */
class SetErrorPageConfig extends CdnCommon
{
    use Request;
}
