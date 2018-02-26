<?php
/**
 * @author: Axios
 *
 * @email: axioscros@aliyun.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/2/26 15:38
 */

namespace aliyun\sdk\cdn\request\DomainConfig;

use aliyun\sdk\cdn\request\CdnCommon;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetDomainServerCertificate
 * @package aliyun\sdk\cdn\request\DomainConfig
 * @method $this setDomainName($domain_name)
 * @method $this setCertName($cert_name)
 * @method $this setServerCertificateStatus($server_certificate_status)
 */
class SetDomainServerCertificate extends CdnCommon
{
    use Request;
}