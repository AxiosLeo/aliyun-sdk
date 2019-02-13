<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/14 11:28
 */

namespace aliyun\sdk\api\request\Domain;

use aliyun\sdk\api\request\APICommon;
use aliyun\sdk\core\traits\param\CertificateBodyParamTrait;
use aliyun\sdk\core\traits\param\CertificateNameParamTrait;
use aliyun\sdk\core\traits\param\CertificatePrivateKeyParamTrait;
use aliyun\sdk\core\traits\param\DomainNameParamTrait;
use aliyun\sdk\core\traits\param\GroupIdParamTrait;
use aliyun\sdk\core\traits\Request;

/**
 * Class SetDomainCertificate.
 */
class SetDomainCertificate extends APICommon
{
    use Request;
    use GroupIdParamTrait;
    use DomainNameParamTrait;
    use CertificateNameParamTrait;
    use CertificateBodyParamTrait;
    use CertificatePrivateKeyParamTrait;
}
