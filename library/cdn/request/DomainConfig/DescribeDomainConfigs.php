<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/24 15:56
 */

namespace aliyun\sdk\cdn\request\DomainConfig;


use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class DescribeDomainConfigs
 * @package aliyun\sdk\cdn\request\DomainConfig
 * @method $this setDomainName($DomainName)
 * @method $this setConfigList($ConfigList)
 */
class DescribeDomainConfigs extends CdnCommon
{
    use Request;
}