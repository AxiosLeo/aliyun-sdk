<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 15:24
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetReqAuthConfig
 * @package aliyun\sdk\cdn\request\DomainConfig
 * @method $this setDomainName($domain_name)
 * @method $this setAuthType($auth_type)
 * @method $this setKey1($key1)
 * @method $this setKey2($key2)
 * @method $this setTimeOut($timeout)
 * @method $this setAuthRemoteDesc($auth_remote_desc)
 */
class SetReqAuthConfig extends CdnCommon
{
    use Request;
}